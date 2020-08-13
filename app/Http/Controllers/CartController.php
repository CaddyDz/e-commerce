<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Part;
use App\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
	public function index()
	{
		$cart = Cart::content();

		return view('cart', compact('cart'));
	}

	public function add(Product $product)
	{
		Cart::setGlobalTax(0);
		Cart::add($product);
		// request()->session()->flash('success', "$product->name added to cart!");
		return back();
	}

	public function remove(string $rowId)
	{
		Cart::remove($rowId);

		return back();
	}
}
