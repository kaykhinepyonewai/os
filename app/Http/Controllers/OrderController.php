<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Item;
use Illuminate\Support\Facades\Auth;;

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
        // $orders = Order::where('status',1)->get();
        // $orders->where('status','=',0)->get();
        return view('backend.orders.index',compact('orders'));
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
       // dd($request->notes);
        $cartArr = json_decode($request->item_data);
        $total =0;

        foreach ($cartArr as  $row) {
           $total+=($row->price * $row->qty);
        }
        $order = new Order;
        $order->voucherno = uniqid();   //uniiqid data 
        $order->orderdate = date('Y-m-d');
        $order->user_id = Auth::id();
        $order->note = $request->notes;
        $order->total = $total;
        $order->save();      //only saved into order table


        //save into  order detail
        foreach ($cartArr as $row) {
            
            $order->items()->attach($row->id,['qty'=>$row->qty]);

        }

        return 'Successful';

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = Item::all();;
        // dd($items);
        // $order = Order::all();
        return view('backend.orders.show',compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $order = Order::find($id);
          $order->status= $request->status;
            $order->save();

        return redirect()->route('orders.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
