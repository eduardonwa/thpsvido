<?php

namespace App\Http\Controllers;

use App\Notifications\PaymentReceived;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Notification;

class PaymentsController extends Controller
{
    public function create()
    {
        return view('payments.create');
    }

    public function store()
    {
       request()->user()->notify(new PaymentReceived(900));

       return Redirect::to('payments/create')->withSuccess('The payment was sent successfully');
    }

}
