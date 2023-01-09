@extends('layouts.admin')
@section('title', ' لوحة التحكم - الرئيسية - حولنا - إضافة معلومة')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">إضافة بيانات ماذا عننا : </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">لوحة التحكم</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('abouts.index') }}">حولنا</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">اضافة معلومة</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" method="POST" id="categoryForm" action="" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="title">العنوان : </label>
                                        <input type="text" class="form-control" id="title" name="title"
                                               placeholder="أدخل  العنوان الرئيسي">
                                        <small id="title_error" class="form-text text-danger"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="details">التفاصيل : </label>
                                        <textarea class="form-control" name="details" id="details" rows="2"
                                                  style="height: 50px;" placeholder="أدخل  بعض من التفاصيل "></textarea>
                                        <small id="details_error" class="form-text text-danger"></small>
                                    </div>

                                    <div class="form-group">
                                        <label for="status">الحالة  : </label>
                                        <select name="status" id="status" class="form-control js-example-basic-single">
                                            <!--placeholder-->
                                            <option disabled>حدد حالة المعلومة</option>
                                            <option value="0">غير مفعل</option>
                                            <option value="1">مفعل لروئته</option>
                                        </select>
                                        <small id="status_error" class="form-text text-danger"></small>
                                    </div>

                                    <span class="text-danger">jpg , svg , jpeg , pdf , gif </span>
                                    <div class="form-group">
                                        <input type="file" name="photo" class="file-upload-default"
                                               oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                   placeholder="رفع الصورة">
                                            <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button" style="height: 50px;">رفع الصورة</button>
                          </span>
                                        </div>
                                        <small id="photo_error" class="form-text text-danger"></small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <img id="pic"
                                         src="{{ asset('admin/assets/images/default/default.png') }}" alt=""
                                         style="
                            margin-top: 20px;height: 340px;

                            width: 100%;
                            border-radius: 8px;
                            border: 1px solid #ddd;
                            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">

                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <button type="submit" id="save_date" class="btn btn-primary me-2">حفظ البيانات</button>
                                <a href="{{ route('abouts.index') }}" class="btn btn-light">إلغاء الامر</a>
                            </div>
                        </form>
                    </div>
                </div>

                @stop
                @section('js')
                    <script>
                        $(document).on('click', '#save_date', function (e) {
                            e.preventDefault();
                            $('#title_error').text('');
                            $('#photo_error').text('');
                            $('#details_error').text('');
                            $('#status_error').text('');
                            var formData = new FormData($('#categoryForm')[0]);
                            $.ajax({
                                type: 'post',
                                url: "{{route('abouts.store')}}",
                                data: formData,
                                processData: false,
                                contentType: false,
                                cache: false,
                                success: function (data) {
                                    if (data.status == true) {
                                        $.toast({
                                            heading: 'رسالة نجاح',
                                            text: 'تم إضافة المعلومات بنجاح',
                                            showHideTransition: 'slide',
                                            icon: 'success',
                                            loaderBg: '#f96868',
                                            position: 'top-right'
                                        });
                                    }
                                    window.location="{{route('abouts.index')}}";
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
