<?php

namespace App\Http\Controllers;

use App\Mail\OrderCreated;
use App\Order;
use Illuminate\Support\Facades\Mail;


class OrderController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function store()
    {
        $order = new Order;
        $order->fill([
            'full_name' => request('full_name'),
            'number' => request('number'),
            'email' => request('email'),
        ]);
        $order->save();

        //Mail::to($order['email'])->send(new OrderCreated($order)); commented out, because waiting for mailgun domain verification

        return redirect('/');
    }
}
