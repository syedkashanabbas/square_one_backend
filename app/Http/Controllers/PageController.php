<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function services() {
        return view('services');
    }

    public function ourwork() {
        return view('ourwork');
    }

    public function pricing() {
        return view('pricing');
    }

    public function whyus() {
        return view('whyus');
    }
}