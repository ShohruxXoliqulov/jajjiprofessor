<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    
    public function index()
    {
        $orders = Order::orderBy('id', 'DESC')->paginate(6);

        return view('admin.orders.index', compact('orders'));
    }

    
    public function create()
    {
        return view('admin.orders.create');
    }

    
    public function store(Request $request)
    {
        $requestData = $request->all();

        Order::create($requestData);
        return redirect()->route('admin.orders.index');
    }

    
    public function show(Order $order)
    {
        return view('admin.orders.show', compact('order'));
    }

    
    public function edit(Order $order)
    {
        return view('admin.orders.edit', compact('order'));
    }

    
    public function update(Request $request, Order $order)
    {
        $requestData = $request->all();
        $order->update($requestData);
        return redirect()->route('admin.orders.index');
    }

    
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('admin.orders.index');
    }
}
