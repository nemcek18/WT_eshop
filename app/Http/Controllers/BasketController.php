<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('baskets.basket');
    }


    /**
     * Display a delivery_payment form.
     *
     * @return \Illuminate\Http\Response
     */
    public function delivery_payment()
    {
        return view('baskets.delivery_payment');
    }


    /**
     * Display a delivery data form.
     *
     * @return \Illuminate\Http\Response
     */
    public function delivery_data()
    {
        return view('baskets.delivery_data');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function show(Basket $basket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function edit(Basket $basket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Basket $basket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Basket $basket)
    {
        //
    }
}
