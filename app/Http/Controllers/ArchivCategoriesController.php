<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class ArchivCategoriesController extends Controller
{
    public function index()
    {
        $categories = category::onlyTrashed()->get();
        return view('admin.categories.archive' ,compact('categories'));
    }
    public function update(Request $request)
    {
        $id = $request->cat_id;
        $flight = category::withTrashed()->where('id', $id)->restore();
        if ($flight)
            return redirect()->route('categories.index')->with(['success' => 'تم نقل القسم إلى قائمة الاقسام بنجاح']);
    }
    public function destroy(Request $request)
    {
//        $invoices = invoices::withTrashed()->where('id',$request->invoice_id)->first();
//        $invoices->forceDelete();

        $categories = category::withTrashed()->where('id',$request->cat_id)->first();
        $categories->forceDelete();
        return redirect()->route('categories.archives.index')->with(['success' => 'تم حذف القسم نهائيا بنجاح']);
    }
}
