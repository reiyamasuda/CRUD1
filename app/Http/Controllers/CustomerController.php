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

    public function search(create $create) {
        return view('index');
    }

    public function search(detail $detail) {
        return view('index');
    }

    public function search(edit $edit) {
        return view('index');
    }
}
