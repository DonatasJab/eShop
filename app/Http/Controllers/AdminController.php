<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index')->with([
            'users'     => User::limit(5)->get(),
            'orders'    => User::join('orders', 'users.id', '=', 'orders.user_id')->get(),
        ]);
    }
}
