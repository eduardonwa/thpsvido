<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AssignRolesController extends Controller
{
    public function assignRole(Request $request, User $user)
    {
        $user->roles()->attach($request->role);

        return redirect('admin/roles');
    }

    public function unassignRole(Request $request, User $user)
    {
        $user->roles()->detach($request->role);

        return redirect('admin/roles');
    }
}
