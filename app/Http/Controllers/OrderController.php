<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Address;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        /*$out = new \Symfony\Component\Console\Output\ConsoleOutput();
        $out->writeln("Vyvolana funkcia  create order");
        $out->writeln("1 Meno: " . $request->name);
        $out->writeln("2 Priezvisko: " . $request->surname);
        $out->writeln("3 Ulica: " . $request->street);
        $out->writeln("4 Mesto: " . $request->city);
        $out->writeln("5 PSC: " . $request->postcode);
        $out->writeln("6 Email: " . $request->email);
        $out->writeln("7 Tel: " . $request->tel);*/

        $cart = session()->get('cart');
        $delivery_payment = session()->get('delivery_payment');


        //create address if not exist
        $address = Address::where('street', '=', $request->street)
                        ->where('city', '=', $request->city)
                        ->where('postal_code', '=', $request->postcode)
                        ->first();

        if ($address === null) {
            $address = Address::create(['street' => $request->street,'city' => $request->city,
                                        'postal_code' => $request->postcode]);
        }


        //create order
        $total = 0;
        foreach ($cart as $record) {
            $total = $total + $record["overall_price"];
        }
        $total = $total + $delivery_payment['additional_price'];

        $timestamp = now();
        $order = Order::create(['total' => $total,'created' => $timestamp,'address_id' => $address->id,
                                'name' => $request->name,'surname' => $request->surname,'delivery' => $delivery_payment['delivery'],
                                'payment' => $delivery_payment['payment']]);


        //create associative array for query to database for create rows
        $products_array = [];
        foreach ($cart as $id => $record) {
            $products_array[$id] = ['count' => $record['quantity']];     
        }


        //add rows to orders_products
        $order->products()->sync($products_array);                      

        //delete data from session used for cart
        session()->forget('cart');
        session()->forget('delivery_payment');

        return view('baskets.order_completion')->with('order_num', $order->id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
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
}
