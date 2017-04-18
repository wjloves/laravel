<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getClass(){
        $data = json_decode('[{"title":"梅西","start":"2017-04-01","url":"#"},{"title":"华华","start":"2017-04-07","url":"#"},{"url":"","id":"999","title":"绯红","start":"2017-04-09"},{"url":"#","id":"999","title":"梅西","start":"2017-04-16"},{"url":"#","title":"杨羊羊","start":"2017-04-11"},{"url":"#","title":"钱多多","start":"2017-04-12"},{"url":"#","title":"梅西","start":"2017-04-12"},{"url":"#","title":"绯红","start":"2017-04-12"},{"url":"#","title":"华华","start":"2017-04-12"},{"url":"#","title":"欧达姆","start":"2017-04-12"},{"url":"#","title":"钱多多","start":"2017-04-13"},{"url":"#","title":"梅西","start":"2017-04-28"}]',true);
        return response()->json($data);
    }
}
