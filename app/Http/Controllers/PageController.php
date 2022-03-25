<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function index() {
        return view('index');
    }
    
    function about() {
        return view('about');
    }
    
    function blog() {
        return view('blog');
    }

    function booking() {
        return view('booking');
    }

    function contact() {
        return view('contact');
    }

    function feature() {
        return view('feature');
    }

    function menu() {
        return view('menu');
    }

    function single() {
        return view('single');
    }

    function team() {
        return view('team');
    }
}
