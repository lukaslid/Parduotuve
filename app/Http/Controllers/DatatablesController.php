<?php

namespace App\Http\Controllers;

use Yajra\Datatables\Datatables;
use App\Order;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class DatatablesController extends Controller
{
    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        $orders = DB::table('orders')->select('*');
        dd($orders);
        return view('datatables.index');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getOrders()
    {
        $orders = DB::table('orders')->select('*');
        dd($orders);
        return Datatables::of($orders)
            ->make(true);
    }
}
