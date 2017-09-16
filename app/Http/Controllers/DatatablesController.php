<?php

namespace App\Http\Controllers;

use Yajra\Datatables\Datatables;
use App\Order;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderCompleted;

class DatatablesController extends Controller
{
    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        return view('datatables.index');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getOrders()
    {
        return datatables()->collection(Order::all())->toJson();
    }
    public function makeComplete(Order $order)
    {
        $order->Complete();
        Mail::to($order['email'])->send(new OrderCompleted($order));
        return back();
    }
    public function unComplete(Order $order)
    {
        $order->UnComplete();
        return back();

    }
}
