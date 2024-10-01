<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PostController extends Controller
{
    public function productList(Request $request)
    {
        if ($request->has('buy')) {
            $id = $request->input('id');
            $quantity = $request->input('qty');

            return redirect('/cart?id='. $id .'&qty='. $quantity);
        }

        $all_product_list = Product::all();

        return view('shop', [
            'all_product_list' => $all_product_list,
        ]);
    }


}
