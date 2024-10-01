<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function getInformation(Request $request)
    {
        if ($request->has('id') and $request->has('qty') and $request->input('id') != "" and $request->input('qty') != "") {
            $id = $request->input('id');
            $qty = $request->input('qty');

            $product = Product::where('id', $id)->first();



            return view('cart', compact('qty', 'product'));
        }
    }

    public function receipt(Request $request)
    {
        if ($request->has('submit')) {
            $product_id = $request->input('id');
            $qty = $request->input('qty');
            $name = $request->input('name');
            $phone = $request->input('phone');
            $address = $request->input('address');
            $price = $request->input('price');
            $creditcardnumber = $request->input('creditcardnumber');

            $product = Product::where('id', $product_id)->first();

            return view('receipt', compact(
                'product',
                'qty',
                'name',
                'phone',
                'address',
                'price',
                'creditcardnumber'
            ));
        }
    }
}
