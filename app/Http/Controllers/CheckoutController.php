<?php

namespace App\Http\Controllers;

use App\Shipping;

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
}
