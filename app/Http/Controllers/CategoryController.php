<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = category::get();
        return view('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        //insert  table offers in database
        $category = category::create([
            'cat_name' => $request->cat_name,
            'cat_desc' => $request->cat_desc,
        ]);
        if($category)
            return response()->json([
                'status' => true,
                'msg' => 'تم الحفظ بنجاح',
            ]);
        else
        return response()->json([
            'status' => false,
            'msg' => 'فشل الحفظ برجاء المحاوله مجددا',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $category = category::findOrfail($request -> id);
        if (!$category)
            return response()->json([
                'status' => false,
                'msg' => 'لا يوجد معلومات بهذا الاسم',
            ]);

        return view('admin.categories.edit',compact('category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request)
    {
        $categories = category::find($request->cat_id);
        if(!$categories)
            return redirect()->route('categories.index')->with(['error' => 'عفوا هذا القسم غير موجود']);

       //////////////////////////////////////////////////////////////////
        $categories->update($request->except('_token', '_method'));
        if($categories)
            return response()->json([
                'status' => true,
                'msg' => 'تم التحديث بنجاح',
            ]);
        else
            return response()->json([
                'status' => false,
                'msg' => 'فشل التحديث برجاء المحاوله مجددا',
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->cat_id;
        $id_page = $request->id_page;
        $categories = category::where('id', $id)->first();
        if ($id_page == 1) {
            $categories->forceDelete();
            return redirect()->route('categories.index')->with(['success' => 'تم حذف القسم بنجاح']);
        } elseif ($id_page == 2) {
            $categories->delete();
            return redirect()->route('categories.archives.index')->with(['success' => 'تم نقل القسم إلى الارشيف بنجاح']);
        }
    }
//    public function delete(Request $request){
//        $categories = category::findOrfail($request->id);
//        $categories->delete();
//        if($categories)
//            return response()->json([
//                'status' => true,
//                'msg' => 'تم الحذف  بنجاح',
//                'Catid' => $request->id,
//            ]);
//        else
//            return response()->json([
//                'status' => false,
//                'msg' => 'فشل الحذف برجاء المحاوله مجددا',
//            ]);
//    }
}
