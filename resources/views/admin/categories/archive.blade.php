@extends('layouts.admin')
@section('title', ' لوحة التحكم - الرئيسية - الأقسام - الارشيف')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">قائمة بجميع الاقسام المؤرشفة : </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">لوحة التحكم</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">قائمة الاقسام</a></li>
                        <li class="breadcrumb-item active" aria-current="page">الارشيف</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">الأقسام</h4>
                            </p>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th> #الرقم </th>
                                    <th> اسم القسم </th>
                                    <th> التفاصيل </th>
                                    <th> الاجراءات </th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ($categories as $category)
                                    @php $i++; @endphp
                                    <tr>
                                        <td> {{ $i }} </td>
                                        <td>
                                            {{ $category->cat_name }}
                                        </td>
                                        <td> {{ $category->cat_desc }} </td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="#" title="إسترجاع"
                                               data-bs-target="#transform_cat"
                                               data-cat_id="{{ $category->id }}" data-bs-toggle="modal">
                                                <i class="mdi mdi-google-drive">
                                                </i> </a>
                                            <a class="btn btn-danger btn-sm" href="#" title="حذف"
                                               data-bs-target="#delete_cat" data-cat_id="{{ $category->id }}"
                                               data-bs-toggle="modal">
                                                <i class="mdi mdi-delete"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <!-- مودل النقل إلى الارشيف -->
                            <div class="modal fade" id="transform_cat" tabindex="-1" role="dialog"
                                 aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="ModalLabel">نقل القسم إلى الأرشيف </h5>
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="archives/update" method="post">
                                            @method('PATCH')
                                            @csrf
                                            <div class="modal-body">
                                                هل انت متاكد من عملية إرجاع القسم ؟
                                                <input type="hidden" name="cat_id" id="cat_id" value="">
                                                <input type="hidden" name="id_page" id="id_page" value="2">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger">إرجاع الان</button>
                                                <button type="button" class="btn btn-light"
                                                        data-bs-dismiss="modal">إغلاق</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- نهاية مودل النقل إلى الارشيف -->
                            <!-- مودل النقل الحذف النهائي -->

                            <div class="modal fade" id="delete_cat" tabindex="-1" role="dialog"
                                 aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="ModalLabel">حذف القسم بالكامل </h5>
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="archives/destroy" method="post">
                                            @method('delete')
                                            @csrf
                                            <div class="modal-body">
                                                هل انت متاكد من عملية الحذف النهائي ؟
                                                <input type="hidden" name="cat_id" id="cat_id" value="">
                                                <input type="hidden" name="id_page" id="id_page" value="1">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger">حذف الان</button>
                                                <button type="button" class="btn btn-light"
                                                        data-bs-dismiss="modal">إغلاق</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- نهاية مودل الحذف النهائي -->
                        </div>
                    </div>
                </div>
            </div>
            @stop
            @section('js')
                <script>
                    (function ($) {
                        'use strict';
                        $('#delete_cat').on('show.bs.modal', function (event) {
                            var button = $(event.relatedTarget)
                            var cat_id = button.data('cat_id')
                            var modal = $(this)
                            modal.find('.modal-body #cat_id').val(cat_id);

                        })
                        $('#transform_cat').on('show.bs.modal', function (event) {
                            var button = $(event.relatedTarget)
                            var cat_id = button.data('cat_id')
                            var modal = $(this)
                            modal.find('.modal-body #cat_id').val(cat_id);

                        })
                    })(jQuery);
                </script>
@stop
