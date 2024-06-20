<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class JustOrangeController extends Controller
{
    public function index(): \Inertia\Response
    {
        return Inertia::render('justorange-default');
    }

    public function getPage(Request $request): \Inertia\Response
    {
        $data['page'] = $request->page;
        return Inertia::render('pages', $data);
    }

    public function getProducts(): \Inertia\Response
    {
        $data['products'] = Product::where('active', true)->orderBy('id', 'desc')->get();
        return Inertia::render('products/index', $data);
    }

    public function detailProduct(Request $request): \Inertia\Response
    {
        $data['product'] = Product::where('slug', $request->slug)->first();
        if ($data['product']) {
            return Inertia::render('product/detail', $data);
        } else {
            return to_route('justorange-default');
        }
    }
}
