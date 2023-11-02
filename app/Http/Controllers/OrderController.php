<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\FieldType;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\OrderDetail;
use App\Models\Time;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = OrderDetail::all();
        return view('dashboard.orders', [
            'orders'=> $orders
        ]);
    }

    public function order() {
        $times = Time::all();
        $types = FieldType::all();
        $fields = Field::all();
        return view('customers.orders', [
            'times' => $times,
            'types' => $types,
            'fields' => $fields
        ]);
    }

    public function history() {
        if (Session::exists('customers')) {
//            dd(Session::get('customers')['id']);
            $customers = Session::get('customers')['id'];
            $details = OrderDetail::where('order_id', '=', 1) -> get();
        }
//        Session::put(['customers' => $customers]);
        return view('customers.history', [
            'details' => $details
        ]);
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
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
        $array = [];
        $array = Arr::add($array, 'order_note', $request -> order_note);
        $array = Arr::add($array, 'admin_id', $request -> admin_id);
        $array = Arr::add($array, 'customer_id', $request -> customer_id);
        $array = Arr::add($array, 'status', $request -> status);
        $array = Arr::add($array, 'date', $request -> date);
        $order->update($array);
        return Redirect::route('dashboard.orders', [
            'orders' => $order
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function getFields(\Illuminate\Http\Request $request) {
        $id  = $request -> id;
        $fields = Field::where('type_id', $id)->get();
        return response()->json($fields);
    }
    public function getTimes() {
        $order =
        $times = Time::all();
        return response()->json($times);
    }


}
