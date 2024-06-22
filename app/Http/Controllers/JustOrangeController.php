<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Linker;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class JustOrangeController extends Controller
{
    public function index(): \Inertia\Response
    {
        $data['Products'] = Product::orderBy('id','desc')->limit(8)->with('category')->get();
        return Inertia::render('justorange-default' , $data);
    }

    public function getPage(Request $request): \Inertia\Response
    {
        $data['page'] = $request->page;
        return Inertia::render('pages', $data);
    }

    public function getProducts(): \Inertia\Response
    {
        $data['Products'] = Product::where('active', true)->orderBy('id', 'desc')->with('category')->get();
        $data['Categories'] = Category::all();
        return Inertia::render('products/index', $data);
    }

    public function detailProduct(Request $request): \Inertia\Response
    {
        $data['product'] = Product::where('slug', $request->slug)->first();
        if ($data['product']) {
            return Inertia::render('products/detail', $data);
        } else {
            return to_route('/');
        }
    }

    public function getProductByCategory(Request $request): \Inertia\Response
    {
       
        $data['Products'] = Product::where('active', true)->where('category_id',$request->id)->orderBy('id', 'desc')->with('category')->get();
        $data['Categories'] = Category::all();
        if($data['Products']){
        return Inertia::render('products/index', $data);
        }else{
            return to_route('/');
        }
    }

    public function linker(): \Inertia\Response
    {

        $data['linker'] = Linker::all();
        return Inertia::render('linker' , $data);
    }
}
