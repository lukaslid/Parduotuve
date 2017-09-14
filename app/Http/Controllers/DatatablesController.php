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
}
