@extends('layouts.site')
@section('title', 'الصفحة الرئيسية - المنتجات')
@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            @isset($products)
                {{--                @if($products < 0 )--}}
                {{--                    <div class="col-12">--}}
                {{--                        <div class="card">--}}
                {{--                            <div class="card-header text-danger">رسالة</div>--}}
                {{--                            <div class="card-body text-center" style="color: coral;--}}
                {{--                                            font-size: x-large;--}}
                {{--                                            padding: 100px;--}}
                {{--                                            font-weight: bold;">--}}
                {{--                                عفوا لم يتم اضافة اي ممتج في هذا القسم بعد--}}
                {{--                                و نعتذر لك ان ذلك سيتم اضافته قريبا !--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--            @else--}}


                <div class="card-header mb-4">
                    <h4>
                        قائمة بمنتجات القسم
                    </h4>
                </div>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4">

                    @foreach($products as  $product )
                        <div class="col mb-5">
                            <div class="card h-90">
                                <!-- Sale badge-->
                                <div class="badge bg-dark text-white position-absolute"
                                     style="top: 0.5rem; right: 0.5rem">
                                    {{ $product->getActive() }}
                                </div>
                                <!-- Product image-->
                                @if($product->photo == '')
                                    <img class="card-img-top" style="height: 200px;"
                                         src="{{asset('user/img/default.png')}}" alt="..."/>
                                @else
                                    <img class="card-img-top" style="height: 200px;" src="{{asset($product->photo)}}"
                                         alt="..."/>
                                @endif
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">{{$product->name}}</h5>
                                        <!-- Product reviews-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"><i class="fa fa-star"></i></div>
                                            <div class="bi-star-fill"><i class="fa fa-star"></i></div>
                                            <div class="bi-star-fill"><i class="fa fa-star"></i></div>
                                            <div class="bi-star-fill"><i class="fa fa-star"></i></div>
                                            <div class="bi-star-fill"><i class="fa fa-star"></i></div>
                                        </div>
                                        ${{$product->price}}
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                                                href="{{route('details',$product->id)}}">تفاصيل</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
                {{--                @endif--}}
            @endisset
            @isset($datass)
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-danger">رسالة</div>
                        <div class="card-body text-center" style="color: coral;
                                                                                font-size: x-large;
                                                                                padding: 100px;
                                                                                font-weight: bold;">
                            {{$datass}}
                        </div>
                    </div>
                </div>
            @endisset
        </div>
    </section>
@stop
