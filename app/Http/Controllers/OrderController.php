<?php

namespace App\Http\Controllers;

use App\Models\Order;
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

        //kontrola vypisanim
        foreach ($cart as $value) {
            foreach ($value as $val) {
            echo $val . " ";
            }
        }

        foreach ($delivery_payment as $value) {
            echo $value. " ";
        }

        
        /*$out = new \Symfony\Component\Console\Output\ConsoleOutput();
        $out->print_r("Cart: " . $cart_string);
        $out->writeln("Del and pay: " . $delivery_payment_string);*/


        //delete data from session used for cart
        session()->forget('cart');
        session()->forget('delivery_payment');

        $order_num = 123456;
        return view('baskets.order_completion')->with('order_num', $order_num);
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
