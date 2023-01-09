<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        $categories = category::get();
        return view('admin.products.index', compact('products', 'categories'));

    }

    public function store(ProductRequest $request)
    {
        $products = Product::create($request->validated() +
            [
                'category_id' => $request->category_id
            ]);
        if ($request->hasFile('photo') && $request->photo != '') {
            $file = $request->file('photo');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('admin/images/products/'), $filename);
            $path = 'admin/images/products/' . $filename;
            $products->update(['photo' => $path]);
        }
        if ($products)
            return response()->json([
                'status' => true,
                'msg' => 'تم اضافة المنتج بنجاح',
            ]);
        else
            return response()->json([
                'status' => false,
                'msg' => 'فشل اضافة المنتج برجاء المحاوله مجددا',
            ]);
    }

    public function update(ProductRequest $request)
    {
        $id = category::where('cat_name', $request->category_id)->first()->id;
        $product = Product::findOrFail($request->id);
        $product->update([
            'category_id' => $id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $request->status,
        ]);
        if ($request->hasFile('photo') && $request->photo != '') {
            $image_path = $product->photo;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $file = $request->file('photo');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $path = 'admin/images/products/' . $filename;

            $file->move(public_path('admin/images/products/'), $filename);
            $product->update(['photo' => $path]);
        }
        if ($product)
            return redirect()->route('products.index')->with(['success' => 'تمت عملية تحديث المنتج بنجاح']);

    }

    public function destroy(Request $request)
    {
        $product = Product::findOrFail($request->product_delete_id);
        $product->delete();
        return redirect()->route('products.index')->with(['success' => 'تم حذف  بيانات المنتج بنجاح ']);

    }
}
