<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $products = Product::limit(4)->latest()->get();
        $productsAll = Product::get();
        $categories = category::get();
        return view('welcome', compact('products', 'categories','productsAll'));
    }

    public function viewCatPro($id)
    {
        $datass = ' عفوا لم يتم اضافة اي ممتج في هذا القسم بعد
                                و نعتذر لك ان ذلك سيتم اضافته قريبا !';
        $products = Product::where('category_id', $id)->get();
        $categories = category::get();
        if (!$products)
            return view('site.productCat.index',compact('categories','datass'));
        else
            return view('site.productCat.index', compact('products','categories'));

    }

    public function about()
    {
        $abouts = AboutUs::where('status', 1)->get();
        $categories = category::get();

        return view('site.aboutUs.index',compact('abouts','categories'));

    }
    public function allPro(){

    }
    public function details($id){
        $product = Product::where('id',$id)->first();
        $categories = category::get();

        return view('site.products.index',compact('product','categories'));

    }
}
