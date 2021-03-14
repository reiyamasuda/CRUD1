<?php


namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {
        $customers = Customer::all();
        return view('index', ['customers' => $customers]);
    }

    public function search(Request $request) {
        return view('index');
    }

    public function create(Request $request) {
        return view('create');
    }

    public function detail(Request $request) {
        $id = $request->id;
        $customer = Customer::findOrFail($id);
        return view('detail', ['customer' => $customer]);
    }

    public function edit(Request $request) {
        return view('edit');
    }

    public function store(Request $request) {
        return redirect()->route('index');
    }

    public function update(Request $request) {
        return redirect()->route('index');
    }

    public function delete(Request $request) {
        return redirect()->route('index');
    }
}
