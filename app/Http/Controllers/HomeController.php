<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {
        return view('home', [
            'items' => Item::paginate(10)
        ]);
    }

    public function itemDetails(Item $item) {
        return view('item', [
            'item' => $item
        ]);
    }
}
