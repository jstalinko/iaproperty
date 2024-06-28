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
        $sub = ($cat == null) ? SubCategory::orderBy('id', 'desc')->limit(5)->get() : SubCategory::where('category_id', (int) $cat)->get();
        $filter = empty($request->get('filter')) ? null : $request->get('filter');

        if ($filter == null) {
            $data['Products'] = ($subGet == null) ? Product::orderBy('id', 'desc')->limit(8)->with('subcategory')->get() : Product::where('sub_category_id', (int)$subGet)->orderBy('id', 'desc')->limit(8)->with('subcategory')->get();
        } else {
            if ($filter == 'all') {
                $data['Products'] = Product::with('subcategory')->get();
            } elseif ($filter == 'new') {
                $data['Products'] = Product::with('subcategory')->orderBy('id', 'desc')->get();
            } elseif ($filter == 'populer') {
                $data['Products'] = Product::with('subcategory')->orderBy('views', 'desc')->get();
            } elseif ($filter == 'asc_harga') {
                $data['Products'] = Product::with('subcategory')->orderBy('price', 'asc')->get();
            } elseif ($filter == 'desc_harga') {
                $data['Products'] = Product::with('subcategory')->orderBy('price', 'desc')->get();
            }else if($filter == 'recommended')
            {
                $data['Products'] = Product::where('recomended' , true)->orderBy('id','desc')->get();
            }
        }

        $data['SubCategories'] = $sub;
        $data['Categories'] = Category::all();
        $data['ActiveCat'] = $cat;
        $data['Filter'] = $filter;
        return Inertia::render('justorange-default', $data);
    }

    public function getPage(Request $request): \Inertia\Response
    {
        $posts = Post::where('slug', $request->page)->first();
        if ($posts) {
            $data['page'] = $request->page;
            $data['post'] = $posts;
            $data['Categories'] = Category::all();
            return Inertia::render('pages', $data);
        } else {
            return to_route('/products');
        }
    }

    public function getProducts(Request $request): \Inertia\Response
    {
        $cat = empty($request->get('cat')) ? null : $request->get('cat');
        $subGet = empty($request->get('sub')) ? null : $request->get('sub');
        $sub = ($cat == null) ? SubCategory::orderBy('id', 'desc')->limit(5)->get() : SubCategory::where('category_id', (int) $cat)->get();
        $filter = empty($request->get('filter')) ? null : $request->get('filter');

        if ($filter == null) {
            $data['Products'] = Product::with('subcategory')->limit(12)->get();
        } else {
            if ($filter == 'all') {
                $data['Products'] = Product::with('subcategory')->get();
            } elseif ($filter == 'new') {
                $data['Products'] = Product::with('subcategory')->orderBy('id', 'desc')->get();
            } elseif ($filter == 'populer') {
                $data['Products'] = Product::with('subcategory')->orderBy('views', 'desc')->get();
            } elseif ($filter == 'asc_harga') {
                $data['Products'] = Product::with('subcategory')->orderBy('price', 'asc')->get();
            } elseif ($filter == 'desc_harga') {
                $data['Products'] = Product::with('subcategory')->orderBy('price', 'desc')->get();
            }
        }
        $data['SubCategories'] = $sub;
        $data['Categories'] = Category::all();
        $data['ActiveCat'] = $cat;
        $data['Filter'] = $filter;

        return Inertia::render('products/index', $data);
    }

    public function detailProduct(Request $request): \Inertia\Response
    {
        $data['product'] = Product::where('slug', $request->slug)->with('subcategory')->first();
        $data['Products'] = Product::where('sub_category_id', $data['product']->sub_category_id)->orderBy('views', 'desc')->with('subcategory')->limit(4)->get();

        $data['Category'] = Category::find($data['product']->subcategory->category_id);
        $data['Categories'] = Category::all();
        if ($data['product']) {
            return Inertia::render('products/detail', $data);
        } else {
            return to_route('/');
        }
    }

    public function getProductByCategory(Request $request): \Inertia\Response
    {
        $category = Category::find($request->id);
        $subCat = SubCategory::where('category_id' , $category->id);
        $subGet = empty($request->get('sub')) ? null : $request->get('sub');
        $data['Products'] = ($subGet == null) ? Product::where('sub_category_id',$subCat->first()->id)->orderBy('id', 'desc')->with('subcategory')->get() : Product::where('sub_category_id', (int)$subGet)->orderBy('id', 'desc')->with('subcategory')->get();
        $data['Categories'] = Category::all();
        $data['SubCategories'] = SubCategory::where('category_id' , $category->id)->get();
        $data['ActiveCat'] = $subGet;
        $data['Category'] = $category;
        $data['subCategory'] = ($subCat==null) ? SubCategory::all() : SubCategory::find($subGet);
        if ($data['Products']) {
            return Inertia::render('products/category', $data);
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
