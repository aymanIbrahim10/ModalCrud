<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutUsRequest;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AboutUsController extends Controller
{
    public function index()
    {
        $about_us = AboutUs::get();
        return view('admin.aboutUs.index', compact('about_us'));
    }
//////////////////////////////////////////////////////////////////////////////////
    public function create()
    {
        return view('admin.aboutUs.create');
    }
//////////////////////////////////////////////////////////////////////////////////
    public function store(AboutUsRequest $request)
    {
        $aboutUs = AboutUs::create([
            'title' => $request->title,
            'details' => $request->details,
            'status' => $request->status,
        ]);
        if ($request->hasFile('photo') && $request->photo != '') {
            $file = $request->file('photo');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('admin/images/AboutUs/'), $filename);
            $path = 'admin/images/AboutUs/' . $filename;
            $aboutUs->update(['photo' => $path]);
        }
        if ($aboutUs)
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
//////////////////////////////////////////////////////////////////////////////////
    public function edit(Request $request)
    {
        $aboutUs = AboutUs::findOrfail($request->id);
        if (!$aboutUs)
            return response()->json([
                'status' => false,
                'msg' => 'لا يوجد معلومات بهذا الاسم',
            ]);
        return view('admin.aboutUs.edit', compact('aboutUs'));
    }
//////////////////////////////////////////////////////////////////////////////////
    public function update(AboutUsRequest $request)
    {
        $aboutUs = AboutUs::find($request->about_id);
        if (!$aboutUs)
            return redirect()->route('abouts.index')->with(['error' => 'عفوا هذا القسم غير موجود']);
        $aboutUs->update([
            'title' => $request->title,
            'details' => $request->details,
            'status' => $request->status,
        ]);

        if ($request->hasFile('photo') && $request->photo != '') {
            $image_path = $aboutUs->photo;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $file = $request->file('photo');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $path = 'admin/images/AboutUs/' . $filename;

            $file->move(public_path('admin/images/AboutUs/'), $filename);
            $aboutUs->update(['photo' => $path]);
        }
        if ($aboutUs)
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
//////////////////////////////////////////////////////////////////////////////////
    public function destroy(Request $request)
    {
        $about = AboutUs::findOrFail($request->about_id);
        $image_path = $about->photo;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $about->delete();
        return redirect()->route('abouts.index')->with(['success' => 'تم حذف  البيانات  بنجاح ']);

    }
}
