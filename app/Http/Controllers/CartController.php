<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateCartRequest;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::content();

        return view('cart', compact('cart'));
    }

    public function add(Product $product, Request $request)
    {
        Cart::add($product, $request->quantity, [
            'size' => $request->size,
            'color' => $request->color,
            'age' => $request->age,
        ]);
        return redirect(url()->previous('/'));
    }

    public function update(UpdateCartRequest $request)
    {
        foreach ($request->quantity as $rowId => $quantity) {
            Cart::update($rowId, $quantity);
        }
        return back();
    }

    public function remove(string $rowId)
    {
        Cart::remove($rowId);

        return back();
    }
}
