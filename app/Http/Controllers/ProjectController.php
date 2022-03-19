<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProjectController extends Controller
{
    //
    public function getData(Request $request) {
        $response = Http::withOptions(['verify' => false])->get("https://api.nomics.com/v1/currencies/ticker?key=dc45e0d3f1046c1d7cf1dbc815b03bfefec21144&per-page=100&page=1&interval=1d");
        return view('index', ['response' => $response->json()]);
    }

    public function about() {
        return view('about');
    }

    // "https://api.nomics.com/v1/currencies/ticker?key=dc45e0d3f1046c1d7cf1dbc815b03bfefec21144&ids=BTC,ETH,XRP&interval=1d,30d&convert=EUR&platform-currency=ETH&per-page=100&page=1"
    // https://api.nomics.com/v1/currencies/ticker?key=dc45e0d3f1046c1d7cf1dbc815b03bfefec21144
}
