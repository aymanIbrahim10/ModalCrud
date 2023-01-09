@extends('layouts.admin')
@section('title', ' لوحة التحكم - الرئيسية - الاقسام - إضافة قسم')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">إضافة بيانات القسم : </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">لوحة التحكم</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('categories.index') }}">الاقسام</a></li>
            <li class="breadcrumb-item active" aria-current="page">اضافة قسم</li>
          </ol>
        </nav>
      </div>
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <form class="forms-sample"  method="POST" id="categoryForm" action="">
                @csrf
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                  <label for="cat_name">إسم القسم : </label>
                  <input type="text" class="form-control" id="cat_name" name="cat_name" placeholder="أدخل إسم القسم">
                  <small id="cat_name_error" class="form-text text-danger"></small>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                  <label for="cat_desc">تفاصيل القسم : </label>
                  <textarea class="form-control" name="cat_desc" id="cat_desc" rows="2"
                  style="height: 50px;" placeholder="أدخل تفاصيل عن القسم"></textarea>
                  <small id="cat_desc_error" class="form-text text-danger"></small>
                </div>
            </div>
        </div>
        <div class="card-footer text-center">
                <button type="submit" id="save_date" class="btn btn-primary me-2">حفظ البيانات</button>
                <a href="{{ route('categories.index') }}" class="btn btn-light">إلغاء الامر</a>
            </div>
              </form>
            </div>
        </div>

@stop
@section('js')
<script>
$(document).on('click', '#save_date', function (e) {
    e.preventDefault();
    $('#cat_name_error').text('');
    $('#cat_desc_error').text('');
    var formData = new FormData($('#categoryForm')[0]);
    $.ajax({
        type: 'post',
        url: "{{route('categories.store')}}",
        data: formData,
        processData: false,
        contentType: false,
        cache: false,
        success: function (data) {
            if (data.status == true) {
                $.toast({
                heading: 'رسالة نجاح',
                text: 'تم إضافة القسم بنجاح',
                showHideTransition: 'slide',
                icon: 'success',
                loaderBg: '#f96868',
                position: 'top-right'
                });
            }
        }, error: function (reject) {
            var response = $.parseJSON(reject.responseText);
            $.each(response.errors, function (key, val) {
                $("#" + key + "_error").text(val[0]);
            });
        }
    });
});
</script>
@stop
