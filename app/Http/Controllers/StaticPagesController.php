<?php

namespace App\Http\Controllers;

class StaticPagesController extends Controller
{
    function contact() {
        return view('static_pages.contact');
    }
}
