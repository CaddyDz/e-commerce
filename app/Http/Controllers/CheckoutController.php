<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Order, Shipping};
use Gloudemans\Shoppingcart\Facades\Cart;

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

    public function store(Request $request)
    {
        if (Cart::content()->isEmpty()) {
            return back()->with('message', __('Your cart is empty'));
        }
        $this->validate($request, [
            'lastname' => 'bail|required|string',
            'firstname' => 'bail|required|string',
            'address1' => 'bail|required|string',
            'town' => 'bail|required|string',
            'district' => 'bail|required|integer|exists:shippings,id',
            'email' => 'bail|required|email',
            'phone' => $this->phone_rules(),
        ]);
        $shipping = Shipping::find($request->district);
        $order = Order::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'town' => $request->town,
            'district' => $shipping->state,
            'email' => $request->email,
            'phone' => $request->phone,
            'zip' => $request->zip,
            'notes' => $request->notes,
            'subtotal' => Cart::total(),
            'shipping_cost' => $shipping->price,
            'total' => floatval(Cart::total() + $shipping->price)
        ]);
        foreach (Cart::content() as $product) {
            $order->products()->attach($product->id, [
                'quantity' => $product->qty,
                'size' => $product->options->size,
                'color' => $product->options->color,
                'age' => $product->options->age,
            ]);
        }
        if (auth()->check()) {
            $order->user_id = auth()->id();
            // If the authenticated user doesn't have an address
            if (!auth()->user()->address) {
                // Assign the address from the order
                auth()->user()->address = $request->address1;
                auth()->user()->save();
            }
            $order->save();
        }
        Cart::destroy();
        session()->flash('confirmed');
        return redirect('/');
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
