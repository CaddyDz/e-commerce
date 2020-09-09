<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
	public function index()
	{
		$cart = Cart::content();

		return view('cart', compact('cart'));
	}

	public function add(Product $product, Request $request)
	{
		Cart::setGlobalTax(0);
		Cart::add($product, $request->quantity, [
			'size' => $request->size,
			'color' => $request->color,
			'properties' => $request->properties
		]);
		// request()->session()->flash('success', "$product->name added to cart!");
		return redirect(url()->previous('/'));
	}

	public function remove(string $rowId)
	{
		Cart::remove($rowId);

		return back();
	}
}
