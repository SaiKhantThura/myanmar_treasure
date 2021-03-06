<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use App\Firebase\SendNotification;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('orders.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validatedData();
        $order = new Order;
        $order->name = $request->name;
        $order->address = $request->address;
        $order->address = $request->address;
        $order->phone = $request->phone;
        $order->subtotal = $request->subtotal;
        $order->total = $request->total;
        if (auth()->user()){
            $order->user_id = auth()->user()->id;
        }
        $order->save();
        $order->orderProducts()->createMany($request->cart);
        $noti = new SendNotification();
        $message = "Your got a new Order From ".$order->name;
        $noti->SentNotiToAdmin($message);

        return response()->json($order)->setStatusCode(201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function validatedData()
    {
        return request()->validate([
            'name'=>'required',
            'address'=>'required',
            'phone'=>'required',
        ]); 
    }

    public function accepted(Order $order){
        $order->status = 'accepted';
        $order->save();
        $noti = new SendNotification();
        $message = "Your order had been accpted !";
        if($order->user_id){
            $noti->SentNotiToCustomer($order->user,$message);
        }
        return redirect()->back();
    }
}
