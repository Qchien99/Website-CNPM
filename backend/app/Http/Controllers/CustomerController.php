<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    private $customer;
    public function __construct(Customer $customer){
        $this->customer = $customer;
    }

    public function index(){

        $customers = $this->customer->latest()->paginate(4);
        return view('customer.index', compact('customers'));
    }
}
