<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function about() {
        return '<h4>about page</h4>';
    }

    public function contact() {
        return '<h4>contact page</h4>';
    }
}
