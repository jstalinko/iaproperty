<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;
use App\Models\Linker;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class JustOrangeController extends Controller
{
    public function index(Request $request): \Inertia\Response
    {
        $cat = empty($request->get('cat')) ? null : $request->get('cat');
        $subGet = empty($request->get('sub')) ? null : $request->get('sub');
        $sub = ($cat == null) ? SubCategory::orderBy('id','desc')->limit(5)->get() : SubCategory::where('category_id', (int) $cat)->get();
        $data['Products'] = ($subGet == null) ? Product::orderBy('id', 'desc')->limit(8)->with('subcategory')->get() : Product::where('sub_category_id', (int)$subGet)->orderBy('id', 'desc')->limit(8)->with('subcategory')->get();
        $data['SubCategories'] = $sub;
        $data['Categories'] = Category::all();
        $data['ActiveCat'] = $cat;
        return Inertia::render('justorange-default', $data);
    }

    public function getPage(Request $request): \Inertia\Response
    {
        $posts = Post::where('slug',$request->page)->first();
        if($posts){
        $data['page'] = $request->page;
        $data['post'] = $posts; 
        return Inertia::render('pages', $data);
        }else{
            return to_route('/products');
        }
    }

    public function getProducts(): \Inertia\Response
    {
        $data['Products'] = Product::where('active', true)->orderBy('id', 'desc')->with('subcategory')->get();
        $data['SubCategories'] = SubCategory::all();
        return Inertia::render('products/index', $data);
    }

    public function detailProduct(Request $request): \Inertia\Response
    {
        $data['product'] = Product::where('slug', $request->slug)->with('subcategory')->first();
        $data['Products'] = Product::where('sub_category_id' , $data['product']->sub_category_id)->orderBy('views','desc')->with('subcategory')->limit(4)->get();
        if ($data['product']) {
            return Inertia::render('products/detail', $data);
        } else {
            return to_route('/');
        }
    }

    public function getProductByCategory(Request $request): \Inertia\Response
    {

        $data['Products'] = Product::where('active', true)->where('category_id', $request->id)->orderBy('id', 'desc')->with('subcategory')->get();
        $data['SubCategories'] = SubCategory::all();
        if ($data['Products']) {
            return Inertia::render('products/index', $data);
        } else {
            return to_route('/');
        }
    }

    public function linker(): \Inertia\Response
    {

        $data['linker'] = Linker::all();
        return Inertia::render('linker', $data);
    }
}
