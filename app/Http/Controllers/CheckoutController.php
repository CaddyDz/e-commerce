<?php

namespace App\Http\Controllers;

use App\Order;
use App\Shipping;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$states = Shipping::all();
		return view('checkout', compact('states'));
	}

	public function applyCoupon(Request $request)
	{
		session(['coupon' => $request->coupon]);
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'lastname' => 'bail|required|string',
			'firstname' => 'bail|required|string',
			'address1' => 'bail|required|string',
			'town' => 'bail|required|string',
			'district' => 'bail|required|string',
			'email' => 'bail|required|email',
			'phone' => $this->phone_rules(),
		]);
		$order = Order::create([
			'firstname' => $request->firstname,
			'lastname' => $request->lastname,
			'address1' => $request->address1,
			'address2' => $request->address2,
			'town' => $request->town,
			'district' => $request->district,
			'email' => $request->email,
			'phone' => $request->phone,
			'zip' => $request->zip,
			'notes' => $request->notes,
		]);
		if (auth()->check()) {
			$order->user_id = auth()->id();
			$order->save();
		}
		Cart::destroy();
		return redirect('/checkout');
	}

	/**
	 * Get the validation rules that apply to the phone number.
	 */
	private function phone_rules(): array
	{
		return [ // Escape the pipe used by laravel for the regex
			'bail',
			'nullable',
			'digits:10',
			'regex:/^(0)(5|6|7)(4|5|6|7)[0-9]{7}$/',
		];
	}
}
