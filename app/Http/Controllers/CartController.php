<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function index(User $user) {
        return view('carts', [
            'carts' => Cart::where('user_id', '=', $user->id)->get(),
            'validate_id' => $user->id
        ]);
    }

    public function add(Request $request) {
        $validation = $request->validate([
            'qty' => 'required|gte:1',
            'user_id' => 'required',
            'item_id' => 'required'
        ]);

        Cart::create($validation);

        return redirect('/carts/'. $request->user_id)->with('success', 'Item has been added to cart');
    }

    public function delete(Cart $cart) {
        Cart::destroy($cart->id);

        return redirect('/')->with('delete', 'Item has been successfuly deleted');
    }

    public function purchase(Request $request) {
        Cart::where('user_id', '=', $request->user_id)->delete();

        return redirect('/')->with('success', 'Thank you for purchasing in our website');
    }
}
