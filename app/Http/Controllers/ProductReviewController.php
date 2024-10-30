<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductReview;
use Illuminate\Http\Request;

class ProductReviewController extends Controller
{
    public function reviewStore($id, Request $request) {
        // dd($request->except(['_token', 'simpan']));

        ProductReview::create([
            'product_id' => $request->input('product_id'),
            'user_id' => $request->input('user_id'),
            'review' => $request->input('review')
        ]);

        return redirect()->route('detail_product', ['id' => $id])->with('reviewed', 'Your review successfully added!');
    }
}
