<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\create;
use Illuminate\Http\detail;
use Illuminate\Http\edit;

class CustomerController extends Controller
{
    public function index() {
        return view('index');
    }

    public function search(Request $request) {
        return view('index');
    }

    public function create(Request $request) {
        return view('create');
    }

    public function detail(Request $request) {
        return view('detail');
    }

    public function edit(Request $request) {
        return view('edit');
    }
}
