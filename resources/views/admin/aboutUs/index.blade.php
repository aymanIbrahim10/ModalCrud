@extends('layouts.admin')
@section('title', ' لوحة التحكم - الرئيسية - حولنا')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">قائمة جميع المعلومات : </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">لوحة التحكم</a></li>
                        <li class="breadcrumb-item active" aria-current="page">صفحة ماذا عننا</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">المعلومات</h4>
                            </p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th> #الرقم </th>
                                        <th>الصورة</th>
                                        <th> عنوان المعلومة </th>
                                        <th> التفاصيل </th>
                                        <th>الحالة</th>
                                        <th> الاجراءات </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ($about_us as $about)
                                        @php $i++; @endphp
                                        <tr>
                                            <td> {{ $i }} </td>
                                            <td>
                                                <img src="{{asset($about -> photo)}}" alt="img" style="width: 60px;height: 60px;border-radius: 8px;">
                                            </td>
                                            <td>
                                                {{ $about->title }}
                                            </td>
                                            <td> {{ $about->details }} </td>
                                            @if($about->status == 0)
                                            <td> <span  class="badge badge-secondary">{{ $about->getActive() }}</span> </td>
                                            @endif
                                            @if($about->status == 1)
                                                <td> <span  class="badge badge-success">{{ $about->getActive() }}</span> </td>
                                            @endif
                                            <td>
                                                <a class="btn btn-success btn-sm" href="{{ route('abouts.edit',$about->id) }}" title="تعديل">
                                                    <i class="mdi mdi-border-color"></i>
                                                </a>
                                                <a class="btn btn-danger btn-sm" href="#" title="حذف"
                                                    data-bs-target="#delete_about" data-about_id="{{ $about->id }}"
                                                    data-bs-toggle="modal">
                                                    <i class="mdi mdi-delete"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>


                            <!-- مودل النقل الحذف النهائي -->

                            <div class="modal fade" id="delete_about" tabindex="-1" role="dialog"
                                aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="ModalLabel">حذف المعلومات بالكامل </h5>
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="destroy" method="post">
                                            @method('delete')
                                            @csrf
                                            <div class="modal-body">
                                                هل انت متاكد من عملية الحذف ؟
                                                <input type="hidden" name="about_id" id="about_id" value="">
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
                $('#delete_about').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget)
                    var about_id = button.data('about_id')
                    var modal = $(this)
                    modal.find('.modal-body #about_id').val(about_id);

                })
            })(jQuery);
            </script>
            @stop
