<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;

class OrderController extends Controller
{

    public function index()
    {
        $compras = Order::all();
        return response()->json($compras);
    }

    public function store(StoreOrderRequest $request)
    {
        $compra = Order::create($request->all());
        return response()->json($compra, 201);
    }

    public function show($id)
    {
        $order = Order::with('user', 'detailOrder.product')->findOrFail($id);
        return response()->json($order);
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->update($request->all());
        return response()->json($order);
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return response()->json(null, 204);
    }
}
