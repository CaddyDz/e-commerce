<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use App\Discount;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
	/**
	 * Display index view with products, brands and deal of the day.
	 *
	 * @return \Illuminate\View\View
	 */
	public function index(): View
	{
		$products = Product::all();
		$brands = Brand::all();
		$deal = Discount::whereDay('updated_at', today())
			->orderBy('value', 'desc')
			->first();
		return view('index', compact('products', 'brands', 'deal'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Product  $product
	 * @return \Illuminate\Http\Response
	 */
	public function show(Product $product)
	{
		return view('product', compact('product'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Product  $product
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Product $product)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Product  $product
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Product $product)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Product  $product
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Product $product)
	{
		//
	}
}
