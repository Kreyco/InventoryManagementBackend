<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \App\Models\Order[]|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index()
    {
        return Order::with('products')->get();
    }

    public function searchByDeliveryDate(Request $request)
    {
        $orders = Order::with('products')->where('delivery_date', 'like', "{$request->delivery_date}%")->get();

        return $orders;
    }

    public function searchById (Request $request)
    {
        $order = Order::with('products')->find($request->id);
        foreach ($order['products'] as &$product)
        {
            $quantity = $product['quantity'];
            $orderQuantity = $product['pivot']['quantity'];
            if ($quantity < $orderQuantity)
            {
                $product['missing_quantity'] = ($quantity - $orderQuantity) * -1;
            }
        }

        return $order;
    }
}
