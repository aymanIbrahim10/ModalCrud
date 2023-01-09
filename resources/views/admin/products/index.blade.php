@extends('layouts.admin')
@section('title', ' لوحة التحكم - الرئيسية - المنتجات')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#ayman"
                        data-whatever="@mdo">
                    إضافة منتج
                </button>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">قائمة المنتجات</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="order-listing" class="table table-bordered ">
                                    <thead>
                                    <tr>
                                        <th>#الرقم</th>
                                        <th>صورة المنتج</th>
                                        <th>اسم القسم</th>
                                        <th>اسم المنتج</th>
                                        <th>سعر المنتج</th>
                                        <th>حالة المنتج</th>
                                        <th>وصف المنتج</th>
                                        <th>الإجراءات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach($products as $product)
                                        @php $i++; @endphp
                                        <tr class="categoryRow{{$product->id}}">
                                            <td>{{ $i }}</td>
                                            <td>
                                                @if($product->photo == '')
                                                    <img src="{{asset('admin/assets/images/default/default.png')}}" alt="img" style="width: 60px;height: 60px;border-radius: 8px;">
                                                @else
                                                    <img src="{{asset($product -> photo)}}" alt="img" style="width: 60px;height: 60px;border-radius: 8px;">
                                                @endif
                                            </td>
                                            <td>{{$product->category->cat_name}}</td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->price}}</td>
                                            @if($product->status == 0)
                                                <td> <span  class="badge badge-secondary">{{ $product->getActive() }}</span> </td>
                                            @endif
                                            @if($product->status == 1)
                                                <td> <span  class="badge badge-success">{{ $product->getActive() }}</span> </td>
                                            @endif
                                            <td>{{$product->description}}</td>
                                            <td>

                                                <button data-bs-target="#edit_product" type="button" title="تعديل"
                                                        class="btn btn-primary btn-sm"
                                                        data-id="{{ $product->id }}"
                                                        data-name="{{ $product->name }}"
                                                        data-price="{{ $product->price }}"
                                                        data-status="{{ $product->status }}"
                                                        data-photo="{{ $product->photo }}"
                                                        data-description="{{ $product->description }}"
                                                        data-category_id="{{ $product->category->cat_name }}"
                                                        data-bs-toggle="modal">
                                                    <i class="mdi mdi-border-color"></i>
                                                </button>
                                                <button data-bs-target="#delete_product" type="button" title="حذف"
                                                        class="btn btn-danger btn-sm"
                                                        data-product_delete_id="{{ $product->id }}"
                                                        data-bs-toggle="modal">
                                                    <i class="mdi mdi-delete"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- مودال أضافة منتج جديد -->
            <div class="modal fade" id="ayman" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel">إضافة منتج جديد</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="cmxform forms-sample" id="productyForm" action="" enctype="multipart/form-data">
                                @method('POST')
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">إختر القسم : </label>
                                            <select class="form-control form-control-lg"
                                                    id="exampleFormControlSelect1" name="category_id">
                                                @foreach($categories as $category)
                                                    <option
                                                        value="{{$category ->id}}">{{$category->cat_name}}</option>
                                                @endforeach
                                            </select>
                                            <small id="category_error" class="form-text text-danger"></small>
                                        </div>
                                        {{--//////////////////////////////////////////////////////////////////////////////////////////////////////////--}}
                                        <div class="form-group">
                                            <label for="name" class="col-form-label">إسم المنتج : </label>
                                            <input type="text" class="form-control" id="defaultconfig-2"
                                                   name="name"
                                                   placeholder="أكتب اسم المنتج" maxlength="20" >
                                            <small id="name_error" class="form-text text-danger"></small>

                                        </div>
                                        {{--//////////////////////////////////////////////////////////////////////////////////////////////////////////--}}
                                        <div class="form-group">
                                            <label for="name" class="col-form-label">سعر المنتج : </label>
                                            <input type="text" class="form-control" id="defaultconfig-2"
                                                   name="price"
                                                   placeholder="أكتب سعر المنتج" maxlength="20" >
                                            <small id="price_error" class="form-text text-danger"></small>

                                        </div>
                                        {{--//////////////////////////////////////////////////////////////////////////////////////////////////////////--}}
                                        <span class="text-danger">jpg , svg , jpeg , pdf , gif </span>
                                        <div class="form-group">
                                            <input type="file" name="photo" class="file-upload-default"
                                                   oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled
                                                       placeholder="رفع الصورة" style="background-color: #fff;">
                                                <span class="input-group-append">
                                                        <button class="file-upload-browse btn btn-primary" type="button"
                                                                style="height: 50px;">رفع الصورة</button>
                                                    </span>
                                            </div>
                                            <small id="photo_error" class="form-text text-danger"></small>
                                        </div>

                                        <div class="form-group">
                                            <label for="status">الحالة  : </label>
                                            <select name="status" id="status" class="form-control form-control-lg"
                                                    id="exampleFormControlSelect1">
                                                <!--placeholder-->
                                                <option disabled>حدد حالة المعلومة</option>
                                                <option value="0">غير متوفر</option>
                                                <option value="1">متوفر</option>
                                            </select>
                                            <small id="status_error" class="form-text text-danger"></small>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <img id="pic"
                                             src="{{ asset('admin/assets/images/default/default.png') }}" alt=""
                                             style="
                            margin-top: 20px;height: 405px;

                            width: 100%;
                            border-radius: 8px;
                            border: 1px solid #ddd;
                            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="description" class="col-form-label">وصف المنتج : </label>
                                            <textarea class="form-control" id="maxlength-textarea" maxlength="100"
                                                      name="description" placeholder="اكتب وصف للمنتج"style="height: 101px;"
                                            ></textarea>
                                            <small id="description_error" class="form-text text-danger"></small>
                                        </div>
                                        {{--//////////////////////////////////////////////////////////////////////////////////////////////////////////--}}
                                    </div>
                                </div>
                                <div class="modal-footer" style="justify-content: center;">
                                    <button type="submit" class="btn btn-primary me-2" id="save_date">حفظ البيانات</button>
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">إغلاق</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- نهاية مودال إضافة منتج جديد -->
            {{--    ///////////////////////////////////////////////--}}
            <div class="modal fade" id="delete_product" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel">حذف منتج </h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="destroy" method="post">
                            @method('delete')
                            @csrf

                            <div class="modal-body">
                                هل انت متاكد من عملية الحذف ؟
                                <input type="hidden" name="product_delete_id" id="product_delete_id" value="">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger">حذف الان</button>
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">إغلاق</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{--    ///////////////////////////////////////////////--}}
        {{--    ///////////////////////////////////////////////--}}

        <div class="modal fade" id="edit_product" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel">تعديل المنتج </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('products.update')}}" class="cmxform" id="commentForm" method="post" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="hidden" name="id" id="id" value="">

                                    <div class="form-group">
                                        <label for="category_id">إختر القسم : </label>
                                        <select class="form-control form-control-lg category_id"
                                                id="category_id" name="category_id">
                                            @foreach($categories as $category)
                                                <option>{{$category->cat_name}}</option>
                                            @endforeach
                                        </select>
                                        <small id="category_error" class="form-text text-danger"></small>
                                    </div>
                                    {{--//////////////////////////////////////////////////////////////////////////////////////////////////////////--}}
                                    <div class="form-group">
                                        <label for="name" class="col-form-label">إسم المنتج : </label>
                                        <input type="text" class="form-control name" id="defaultconfig-2"
                                               name="name"
                                               placeholder="أكتب اسم المنتج" maxlength="20" >
                                        <small id="name_error" class="form-text text-danger"></small>

                                    </div>
                                    {{--//////////////////////////////////////////////////////////////////////////////////////////////////////////--}}
                                    <div class="form-group">
                                        <label for="name" class="col-form-label">سعر المنتج : </label>
                                        <input type="text" class="form-control price" id="defaultconfig-2"
                                               name="price"
                                               placeholder="أكتب سعر المنتج" maxlength="20" >
                                        <small id="price_error" class="form-text text-danger"></small>

                                    </div>

                                    {{--//////////////////////////////////////////////////////////////////////////////////////////////////////////--}}
                                    <span class="text-danger">jpg , svg , jpeg , pdf , gif </span>
                                    <div class="form-group">
                                        <input type="file" name="photo" class="file-upload-default"
                                               oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                   placeholder="رفع الصورة" style="background-color: #fff;">
                                            <span class="input-group-append">
                                                        <button class="file-upload-browse btn btn-primary" type="button"
                                                                style="height: 50px;">رفع الصورة</button>
                                                    </span>
                                        </div>
                                        <span id="store-image"></span>
                                        <small id="photo_error" class="form-text text-danger"></small>
                                    </div>

                                    <div class="form-group">
                                        <label for="status">الحالة  : </label>
                                        <select name="status" id="status" class="form-control form-control-lg status"
                                                id="exampleFormControlSelect1">
                                            <!--placeholder-->
                                            <option disabled>حدد حالة المعلومة</option>
                                            <option value="0">غير متوفر</option>
                                            <option value="1">متوفر</option>
                                        </select>
                                        <small id="status_error" class="form-text text-danger"></small>
                                    </div>

                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <img id="pic" class="photo"
                                         src="" alt=""
                                         style="
                            margin-top: 20px;height: 405px;

                            width: 100%;
                            border-radius: 8px;
                            border: 1px solid #ddd;
                            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for="description" class="col-form-label">وصف المنتج : </label>
                                        <textarea class="form-control description" id="maxlength-textarea" maxlength="100"
                                                  name="description" placeholder="اكتب وصف للمنتج"style="height: 101px;"
                                        ></textarea>
                                        <small id="description_error" class="form-text text-danger"></small>
                                    </div>
                                    {{--//////////////////////////////////////////////////////////////////////////////////////////////////////////--}}
                                </div>
                            </div>
                            <div class="modal-footer" style="justify-content: center;">
                                <button type="submit" class="btn btn-primary">تحديث البيانات</button>
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">إغلاق</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{--    ///////////////////////////////////////////////--}}
        @stop
        @section('js')
            <script>
                (function ($) {
                    'use strict';
                    $(document).on('click', '#save_date', function (e) {
                        e.preventDefault();
                        $('#name_error').text('');
                        $('#photo_error').text('');
                        $('#description_error').text('');
                        $('#status_error').text('');
                        $('#category_error').text('');
                        $('#price_error').text('');
                        var formData = new FormData($('#productyForm')[0]);
                        $.ajax({
                            type: 'post',
                            url: "{{route('products.store')}}",
                            data: formData,
                            processData: false,
                            contentType: false,
                            cache: false,
                            success: function (data) {
                                if (data.status == true) {
                                    // $("#ayman").modal("hide");
                                    window.location="{{route('products.index')}}";
                                    $.toast({
                                        heading: 'رسالة نجاح',
                                        text: 'تم إضافة المعلومات بنجاح',
                                        showHideTransition: 'slide',
                                        icon: 'success',
                                        loaderBg: '#f96868',
                                        position: 'top-right'
                                    });
                                    // $('.categoryRow'+data.info).remove();

                                }
                            }, error: function (reject) {
                                var response = $.parseJSON(reject.responseText);
                                $.each(response.errors, function (key, val) {
                                    $("#" + key + "_error").text(val[0]);
                                });
                            }
                        });
                    });





                    $('#delete_product').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget)
                        var product_delete_id = button.data('product_delete_id')
                        var modal = $(this)
                        modal.find('.modal-body #product_delete_id').val(product_delete_id);

                    })
                    $('#edit_product').on('show.bs.modal', function (event) {
                        var button = $(event.relatedTarget)
                        var id = button.data('id')
                        var name = button.data('name')
                        var description = button.data('description')
                        var category_id = button.data('category_id')
                        var price = button.data('price')
                        var status = button.data('status')
                        var photo = button.data('photo')
                        {{--$('#store-image').html("<img src= '{{ URL::to('/')--}}
                        {{--             }}'/images/"+html.data.image+"width='70' class='img-thumbnail'/>")--}}
                        var modal = $(this)
                        modal.find('.modal-body #id').val(id);
                        modal.find('.modal-body #category_id').val(category_id);
                        modal.find('.modal-body .name').val(name);
                        modal.find('.modal-body .description').val(description);
                        modal.find('.modal-body .price').val(price);
                        modal.find('.modal-body .status').val(status);
                        // modal.find('.modal-body .photo').val(photo);
                        // modal.find('.modal-body .photo').attr('src',$(this).attr(photo));
                        {{--modal.find('.modal-body .photo').html("<img src={{ asset('/')}}"+photo +">");--}}
                        if(photo=='') {
                            modal.find('.modal-body .photo').attr('src', "{{ asset('admin/assets/images/default/default.png')}}");
                        }else {
                            modal.find('.modal-body .photo').attr('src', "{{ asset('/')}}" + photo + "");
                        }
                    })
                })(jQuery);
            </script>
@stop

