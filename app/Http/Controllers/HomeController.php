<?php

namespace App\Http\Controllers;

use App\TravelPackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = TravelPackage::with(['galleries'])->take(4)->get();
        return view('pages.home', [
            'items' => $items,
        ]);
    }

    public function all_travel()
    {
        $items = TravelPackage::with(['galleries'])->get();
        return view('pages.all-travel', [
            'items' => $items,
        ]);
    }
}
