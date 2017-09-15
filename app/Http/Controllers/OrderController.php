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
        $this->validate(request(),[
            'full_name' => 'required|min:6',
            'number' => 'required|max:15',
            'email' => 'required|email',
        ]);



        $order = new Order;
        $order->fill([
            'full_name' => request('full_name'),
            'number' => request('number'),
            'email' => request('email'),
        ]);
        $order->save();

        return redirect('/');
    }
}
