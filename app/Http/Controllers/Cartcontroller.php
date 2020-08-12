<?php

namespace App\Http\Controllers;
use App\Cart;

use Illuminate\Http\Request;

class Cartcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cart.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)  {
        /*
        $cart = new Cart();

       $cart->name = request('name');
       $cart->email = request('email');
       $cart->subject = request('subject');
       $cart->message = request('message');

       $cart->save();
       */
       Cart::create($this->validateCart());

       return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        $cart = Cart::find($id);
        return view('cart.edit', compact('cart'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Cart $cart)
    {
        //
        /*
          $cart = Cart::find($id);

       $cart->name = request('name');
       $cart->email = request('email');
       $cart->subject = request('subject');
       $cart->message = request('message');

       $cart->save();
       */
       /*
       Cart::create(update()->validate([
            'name' => 'required',
            'email' => 'required',
            'subject'=> 'required'
            'message' => 'required'

        ]));
        */
        $cart->update($this->validateCart());


       return redirect('/');
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

    /**
     * @return array
     */
    protected function validateCart(): array
    {
        return request()->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'

        ]);
    }
}
