<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index(User $user)
    {   
        $user = auth()->user();
        
        return view ('dashboard', compact('user'));
    }

    public function markNotification(Request $request)
    {
        auth()->user()
            ->unreadNotifications
            ->when($request->input('id'), function ($query) use ($request) {
                return $query->where('id', $request->input('id'));
            })
            ->markAsRead();

        return response()->noContent();
    }
}