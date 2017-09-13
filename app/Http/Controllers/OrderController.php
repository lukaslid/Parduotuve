<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

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
            'amount' => request('amount')
        ]);
        $order->save();


        return redirect('/');
    }
}
