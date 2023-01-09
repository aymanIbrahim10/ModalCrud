@extends('layouts.site')
@section('title', 'الصفحة الرئيسية - ماذا عننا')
@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-danger"> اعرف عننا :</div>
                        <div class="card-body">
                            <div class="row">
                                @foreach( $abouts as $about)
                            <div class="col-lg-6 mt-3">
                               <h3>
                                   عنوان المقال :
                                   {{$about->title}}
                               </h3>
                                <h4 style="color: #5e7188">
                                     المقال :
                                    {{$about->details}}
                                </h4>
                            </div>
                            <div class="col-lg-6 mt-3 mb-3">
                                @if($about->photo == '')
                                    <img src="{{asset('admin/assets/images/default/default.png')}}" alt="img" style="
    /* margin-left: -186px; */
    width: 100%;
    /* height: 100%; */
    border-radius: 8px;
    border: 1px solid #ddd;">
                                @else
                                    <img src="{{asset($about -> photo)}}" alt="img" style="
    /* margin-left: -186px; */
    width: 100%;
    /* height: 100%; */
    border-radius: 8px;
    border: 1px solid #ddd;">
                                @endif
                            </div>
                                    <hr>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>

        </div>
    </section>
@stop
