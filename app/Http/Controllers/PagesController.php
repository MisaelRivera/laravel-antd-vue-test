<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Order;

class PagesController extends Controller
{
    //
    public function index ()
    {
        $totalOrders = Order::count();
        $page = request()->query('page') ? (int) request()->query('page'):1;
        $pageSize = request()->query('pageSize') ? (int) request()->query('pageSize'):40;
        $orders = Order::offset($page)
        ->limit($pageSize)
        ->get();
        $orders = $orders->map(function ($order) {
            return [
                'key' => $order->id,
                'folio' => $order->folio,
                'numero_muestras' => $order->numero_muestras
            ];
        });

        return Inertia::render('Index', [
            'title' => 'Hello, this is working!',
            'ordersProp' => $orders,
            'pageProp' => $page,
            'totalOrdersProp' => $totalOrders
        ]);
    }

    public function ordersPaginated ()
    {
        $page = request()->query('page');
        $pageSize = request()->query('pageSize');
        $orders = Order::offset($page)
            ->limit($pageSize)
            ->get();
        return response()->json($orders);
    }
}
