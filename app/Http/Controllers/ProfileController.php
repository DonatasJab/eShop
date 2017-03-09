<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Address;
use App\Models\Order;
use App\Models\User;
use Hash;
use Auth;
use Cart;

class ProfileController extends Controller
{
    public function index()
    {
        $items = Cart::content();
        
        return view('template.profile')->with([
            'categories'    => Category::all(),
            'total'         => Cart::subtotal(),
            'items'         => $items,
        ]);
    }

    public function getOrders()
    {
        $items = Cart::content();

        return view('template.orders')->with([
            'categories'    => Category::all(),
            'orders'        => Order::where('user_id', Auth::user()->id)->get(),
            'total'         => Cart::subtotal(),
            'items'         => $items,
        ]);
    }

    public function getAddresses()
    {
        $items = Cart::content();
        $addresses = Address::where('user_id', Auth::user()->id)->get();

        return view('template.addresses')->with([
            'categories'    => Category::all(),
            'addresses'     => $addresses,
            'total'         => Cart::subtotal(),
            'items'         => $items,
        ]);
    }

    public function getAddAddress()
    {
        $items = Cart::content();

        return view('template.addaddress')->with([
            'categories'    => Category::all(),
            'total'         => Cart::subtotal(),
            'items'         => $items,
        ]);
    }

    public function postAddAddress(Request $request)
    {
        $this->validate($request, [
            'first_name'    => 'required',
            'last_name'     => 'required',
            'address'       => 'required',
            'city'          => 'required',
            'phone_number'  => 'required|numeric',
            'title'         => 'required',
        ]);

        Address::create([
            'user_id'           => Auth::user()->id,
            'title'             => $request->input('title'),
            'first_name'        => $request->input('first_name'),
            'last_name'         => $request->input('last_name'),
            'address'           => $request->input('address'),
            'city'              => $request->input('city'),
            'postal_code'       => $request->input('postal_code'),
            'additional_info'   => $request->input('additional_info'),
            'phone_number'      => $request->input('phone_number'),
        ]);

        return redirect()->route('profile.addresses');

    }

    public function getEditAddress($id)
    {
        $address = Address::findOrFail($id);
        $items = Cart::content();

        return view('template.editaddress')->with([
            'categories'    => Category::all(),
            'address'       => $address,
            'total'         => Cart::subtotal(),
            'items'         => $items,
        ]);
    }

    public function postEditAddress(Request $request, $id)
    {
        $this->validate($request, [
            'first_name'    => 'required',
            'last_name'     => 'required',
            'address'       => 'required',
            'city'          => 'required',
            'phone_number'  => 'required|numeric',
            'title'         => 'required',
        ]);

        Address::where('id', $id)->update([
            'title'             => $request->input('title'),
            'first_name'        => $request->input('first_name'),
            'last_name'         => $request->input('last_name'),
            'address'           => $request->input('address'),
            'city'              => $request->input('city'),
            'postal_code'       => $request->input('postal_code'),
            'additional_info'   => $request->input('additional_info'),
            'phone_number'      => $request->input('phone_number'),
        ]);

        return redirect()->route('profile.addresses');
    }

    public function destroy($id)
    {
        Address::findOrFail($id);
        Address::destroy($id);

        return redirect()->back();
    }

    public function getSettings()
    {
        $items = Cart::content();
        $settings = User::where('id', Auth::user()->id)->first();

        return view('template.settings')->with([
            'categories'    => Category::all(),
            'settings'      => $settings,
            'total'         => Cart::subtotal(),
            'items'         => $items,
        ]);
    }

    public function postSettings(Request $request)
    {
        $this->validate($request, [
            'first_name'    => 'required|alpha',
            'last_name'     => 'required|alpha',
            'password'      => 'required',
            'newpassword'   => 'confirmed',
        ]);

        if(!Hash::check($request->input('password'), Auth::user()->password)) {
            return redirect()->back();
        }

        if($request->has('newpassword')) {
            $password = bcrypt($request->input('newpassword'));
        } else {
            $password = bcrypt($request->input('password'));
        }

        User::where('id', Auth::user()->id)->update([
            'first_name'        => $request->input('first_name'),
            'last_name'         => $request->input('last_name'),
            'email'             => $request->input('email'),
            'password'          => $password,
        ]);

        return redirect()->route('profile.home');
    }
}
