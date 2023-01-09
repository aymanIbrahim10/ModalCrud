@extends('layouts.site')
@section('title', 'الصفحة الرئيسية - المنتجات - معلومات المنتج')
@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">

            <div class="col-12">
                <div class="card">
                    <div class="card-header text-danger"> معلومات المنتج :</div>
                    <div class="card-body">
                        <div class="row">
                                <div class="col-lg-6"
                                     style="
    margin-top: 70px;
">
                                    <h4>
                                        اسم القسم :
                                        {{$product->category->cat_name}}
                                    </h4>
                                    <h5 style="color: #5e7188">
                                        المنتج :
                                        {{$product->name}}
                                    </h5>
                                    <h5 style="color: #5e7188">
                                        السعر :
                                        {{$product->price}}$
                                    </h5>
                                    <h5 style="color: #5e7188">
                                        التفاصيل :
                                        {{$product->description}}
                                    </h5>
                                </div>
                                <div class="col-lg-6">
                                    @if($product->photo == '')
                                        <img src="{{asset('admin/assets/images/default/default.png')}}" alt="img" style="
    /* margin-left: -186px; */
    width: 100%;
    /* height: 100%; */
    border-radius: 8px;
    border: 1px solid #ddd;">
                                    @else
                                        <img src="{{asset($product -> photo)}}" alt="img" style="
    /* margin-left: -186px; */
    width: 100%;
    /* height: 100%; */
    border-radius: 8px;
    border: 1px solid #ddd;">
                                    @endif
                                </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
@stop
