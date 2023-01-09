@extends('layouts.admin')
@section('title', ' لوحة التحكم - الرئيسية')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="d-xl-flex justify-content-between align-items-start">
        <h2 class="text-dark font-weight-bold mb-2"> لوحة التحكم </h2>
{{--        <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">--}}
{{--          <div class="btn-group bg-white p-3" role="group" aria-label="Basic example">--}}
{{--            <button type="button" class="btn btn-link text-light py-0">7 أيام</button>--}}
{{--            <button type="button" class="btn btn-link text-dark py-0  border-right">شهر واحد</button>--}}
{{--            <button type="button" class="btn btn-link text-light py-0 border-right">3 أشهر</button>--}}
{{--          </div>--}}
{{--          <div class="dropdown me-0 mr-md-4 mt-2 mt-lg-0">--}}
{{--            <button class="btn bg-white dropdown-toggle p-3 d-flex align-items-center" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--              <i class="mdi mdi-calendar ms-1"></i> 24 Mar 2019 - 24 Mar 2019 </button>--}}
{{--            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">--}}
{{--              <h6 class="dropdown-header">Select</h6>--}}
{{--              <a class="dropdown-item" href="#">24 Mar 2019 - 24 Mar 2019 </a>--}}
{{--              <a class="dropdown-item" href="#">24 Apr 2019 - 24 May 2019 </a>--}}
{{--              <a class="dropdown-item" href="#">24 Jun 2019 - 24 Jul 2019 </a>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
      </div>
      <div class="row">
        <div class="col-md-12">
{{--          <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border {">--}}
{{--            <ul class="nav nav-tabs tab-transparent" role="tablist">--}}
{{--              <li class="nav-item">--}}
{{--                <a class="nav-link" id="home-tab" data-bs-toggle="tab" href="#" role="tab" aria-selected="true">المستخدمين</a>--}}
{{--              </li>--}}
{{--              <li class="nav-item">--}}
{{--                <a class="nav-link active" id="business-tab" data-bs-toggle="tab" href="#business-1" role="tab" aria-selected="false">اعمال</a>--}}
{{--              </li>--}}
{{--              <li class="nav-item">--}}
{{--                <a class="nav-link" id="performance-tab" data-bs-toggle="tab" href="#" role="tab" aria-selected="false">أداء</a>--}}
{{--              </li>--}}
{{--              <li class="nav-item">--}}
{{--                <a class="nav-link" id="conversion-tab" data-bs-toggle="tab" href="#" role="tab" aria-selected="false">تحويلات</a>--}}
{{--              </li>--}}
{{--            </ul>--}}
{{--            <div class="d-md-block d-none">--}}
{{--              <a href="#" class="text-light p-1"><i class="mdi mdi-view-dashboard"></i></a>--}}
{{--              <a href="#" class="text-light p-1"><i class="mdi mdi-dots-vertical"></i></a>--}}
{{--            </div>--}}
{{--          </div>--}}
          <div class="tab-content tab-transparent-content">
            <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
              <div class="row">
                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <h5 class="mb-2 text-dark font-weight-normal">قائمة الاقسام</h5>
                      <h2 class="mb-4 text-dark font-weight-bold">
                          {{ \App\Models\category::count() }}
                      </h2>
                      <div class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-lightbulb icon-md absolute-center text-dark"></i></div>
                      <p class="mt-4 mb-0">نسبة الاقسام</p>
                      <h3 class="mb-0 font-weight-bold mt-2 text-dark">100%</h3>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <h5 class="mb-2 text-dark font-weight-normal">قائمة المنتجات</h5>
                      <h2 class="mb-4 text-dark font-weight-bold">
                          {{ \App\Models\product::count() }}

                      </h2>
                      <div class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-account-circle icon-md absolute-center text-dark"></i></div>
                      <p class="mt-4 mb-0">نسبة المنتجات</p>
                      <h3 class="mb-0 font-weight-bold mt-2 text-dark">100%</h3>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <h5 class="mb-2 text-dark font-weight-normal">المنتجات مفعلة</h5>
                      <h2 class="mb-4 text-dark font-weight-bold">
                          {{ number_format(\App\Models\Product::where('status' ,1 )->sum('price'),2)}}
                      </h2>
                      <div class="dashboard-progress dashboard-progress-3 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-eye icon-md absolute-center text-dark"></i></div>
                      <p class="mt-4 mb-0">نسبة المنتجات</p>
                      <h3 class="mb-0 font-weight-bold mt-2 text-dark">
                          {{ round(\App\Models\Product::where('status' ,1 )->count()/\App\Models\Product::count() * 100)  }}%
                      </h3>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <h5 class="mb-2 text-dark font-weight-normal">منتجات غير مفعلة </h5>
                      <h2 class="mb-4 text-dark font-weight-bold">
                          {{ number_format(\App\Models\Product::where('status' ,0 )->sum('price'),2)}}

                      </h2>
                      <div class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-cube icon-md absolute-center text-dark"></i></div>
                      <p class="mt-4 mb-0">نسبة المنتجات</p>
                      <h3 class="mb-0 font-weight-bold mt-2 text-dark">
                          {{ round(\App\Models\Product::where('status' ,0 )->count()/\App\Models\Product::count() * 100)  }}%

                      </h3>
                    </div>
                  </div>
                </div>
              </div>
{{--              <div class="row">--}}
{{--                <div class="col-12 grid-margin">--}}
{{--                  <div class="card">--}}
{{--                    <div class="card-body">--}}
{{--                      <div class="row">--}}
{{--                        <div class="col-sm-12">--}}
{{--                          <div class="d-flex justify-content-between align-items-center mb-4">--}}
{{--                            <h4 class="card-title mb-0">النشاط الأخير</h4>--}}
{{--                            <div class="dropdown dropdown-arrow-none">--}}
{{--                              <button class="btn p-0 text-dark dropdown-toggle" type="button" id="dropdownMenuIconButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                <i class="mdi mdi-dots-vertical"></i>--}}
{{--                              </button>--}}
{{--                              <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton1">--}}
{{--                                <h6 class="dropdown-header">الإعدادات</h6>--}}
{{--                                <a class="dropdown-item" href="#">عمل</a>--}}
{{--                                <a class="dropdown-item" href="#">عمل آخر</a>--}}
{{--                                <a class="dropdown-item" href="#">شيء آخر هنا</a>--}}
{{--                                <div class="dropdown-divider"></div>--}}
{{--                                <a class="dropdown-item" href="#"> رابط منفصل</a>--}}
{{--                              </div>--}}
{{--                            </div>--}}
{{--                          </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-3 col-sm-4 grid-margin  grid-margin-lg-0">--}}
{{--                          <div class="wrapper pb-5 border-bottom">--}}
{{--                            <div class="text-wrapper d-flex align-items-center justify-content-between mb-2">--}}
{{--                              <p class="mb-0 text-dark">اجمالي الربح</p>--}}
{{--                              <span class="text-success"><i class="mdi mdi-arrow-up"></i>2.95%</span>--}}
{{--                            </div>--}}
{{--                            <h3 class="mb-0 text-dark font-weight-bold">$ 92556</h3>--}}
{{--                            <canvas id="total-profit"></canvas>--}}
{{--                          </div>--}}
{{--                          <div class="wrapper pt-5">--}}
{{--                            <div class="text-wrapper d-flex align-items-center justify-content-between mb-2">--}}
{{--                              <p class="mb-0 text-dark">نفقات</p>--}}
{{--                              <span class="text-success"><i class="mdi mdi-arrow-up"></i>52.95%</span>--}}
{{--                            </div>--}}
{{--                            <h3 class="mb-4 text-dark font-weight-bold">$ 59565</h3>--}}
{{--                            <canvas id="total-expences"></canvas>--}}
{{--                          </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-9 col-sm-8 grid-margin  grid-margin-lg-0">--}}
{{--                          <div class="pe-0 pr-lg-4">--}}
{{--                            <div class="d-xl-flex justify-content-between align-items-center mb-2">--}}
{{--                              <div class="d-lg-flex align-items-center mb-lg-2 mb-xl-0">--}}
{{--                                <h3 class="text-dark font-weight-bold ms-2 mb-0">مبيعات الأجهزة</h3>--}}
{{--                                <h5 class="mb-0">(نمو 62 ٪)</h5>--}}
{{--                              </div>--}}
{{--                              <div class="d-lg-flex">--}}
{{--                                <p class="ms-2 mb-0">وحدة زمنية:</p>--}}
{{--                                <p class="text-dark font-weight-bold mb-0">GMT-0400 التوقيت الصيفي الشرقي</p>--}}
{{--                              </div>--}}
{{--                            </div>--}}
{{--                            <div class="graph-custom-legend clearfix" id="device-sales-legend"></div>--}}
{{--                            <canvas id="device-sales-rtl"></canvas>--}}
{{--                          </div>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="row">--}}
{{--                <div class="col-sm-4 grid-margin stretch-card">--}}
{{--                  <div class="card card-danger-gradient">--}}
{{--                    <div class="card-body mb-4">--}}
{{--                      <h4 class="card-title text-white">الاحتفاظ بالحساب</h4>--}}
{{--                      <canvas id="account-retension"></canvas>--}}
{{--                    </div>--}}
{{--                    <div class="card-body bg-white pt-4">--}}
{{--                      <div class="row pt-4">--}}
{{--                        <div class="col-sm-6">--}}
{{--                          <div class="text-center">--}}
{{--                            <h4>تحويلات</h4>--}}
{{--                            <h1 class="text-dark font-weight-bold mb-md-3">$306</h1>--}}
{{--                          </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-6">--}}
{{--                          <div class="text-center border-right border-md-0">--}}
{{--                            <h4>إلغاء</h4>--}}
{{--                            <h1 class="text-dark font-weight-bold">$1,520</h1>--}}
{{--                          </div>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-8  grid-margin stretch-card">--}}
{{--                  <div class="card">--}}
{{--                    <div class="card-body">--}}
{{--                      <div class="d-xl-flex justify-content-between mb-2">--}}
{{--                        <h4 class="card-title">تحليلات مشاهدات الصفحة</h4>--}}
{{--                        <div class="graph-custom-legend primary-dot" id="pageViewAnalyticLengend"></div>--}}
{{--                      </div>--}}
{{--                      <canvas id="page-view-analytic-rtl"></canvas>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="row">--}}
{{--                <div class="col-sm-4 grid-margin grid-margin-lg-0 stretch-card">--}}
{{--                  <div class="card">--}}
{{--                    <div class="card-body recent-activity">--}}
{{--                      <h4 class="card-title">نشاط الأخير</h4>--}}
{{--                      <div class="d-flex mb-3">--}}
{{--                        <div>--}}
{{--                          <div class="activity-info bg-danger"> I </div>--}}
{{--                        </div>--}}
{{--                        <div class="activity-details">--}}
{{--                          <h4 class="text-dark font-weight-normal">إيفا باربر</h4>--}}
{{--                          <p class="mb-0">إضافة مهمة جديدة على trello</p>--}}
{{--                          <p class="text-small mb-0">05:58AM</p>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      <div class="d-flex mb-3">--}}
{{--                        <div class="activity-info bg-warning"> D </div>--}}
{{--                        <div class="activity-details">--}}
{{--                          <h4 class="text-dark font-weight-normal">دوروثي روميرو</h4>--}}
{{--                          <p class="mb-0">إضافة مهمة جديدة على trello</p>--}}
{{--                          <p class="text-small mb-0">02:50PM</p>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      <div class="d-flex mb-3">--}}
{{--                        <div class="activity-info bg-success"> R </div>--}}
{{--                        <div class="activity-details">--}}
{{--                          <h4 class="text-dark font-weight-normal">ريكاردو هوكينز</h4>--}}
{{--                          <p class="mb-0">إضافة مهمة جديدة على trello</p>--}}
{{--                          <p class="text-small mb-0">05:22AM</p>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      <div class="d-flex">--}}
{{--                        <div class="activity-info hide-border bg-info"> N </div>--}}
{{--                        <div class="activity-details">--}}
{{--                          <h4 class="text-dark font-weight-normal">نوح مونتغمري</h4>--}}
{{--                          <p class="mb-0">إضافة مهمة جديدة على trello</p>--}}
{{--                          <p class="text-small mb-0">08:19PM</p>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-4 grid-margin grid-margin-lg-0 stretch-card">--}}
{{--                  <div class="card">--}}
{{--                    <div class="card-body">--}}
{{--                      <h4 class="card-title">رصيدي</h4>--}}
{{--                      <div class="d-lg-flex justify-content-between align-items-center">--}}
{{--                        <h1 class="text-dark mb-0">$3258</h1>--}}
{{--                        <p class="text-success mb-0 font-weight-medium">+30.56% ($121)</p>--}}
{{--                      </div>--}}
{{--                      <p class="mb-5 pb-1">الوديعة: <span class="font-weight-bold">$5430</span></p>--}}
{{--                      <canvas id="my-balance"></canvas>--}}
{{--                      <div class="border p-3 mt-2">--}}
{{--                        <div class="row">--}}
{{--                          <div class="col-sm-6 mb-4 mb-lg-0">--}}
{{--                            <div class="d-lg-flex justify-content-between align-items-center">--}}
{{--                              <div class="text-small text-dark">متاح :</div>--}}
{{--                              <span class="font-weight-bold text-dark text-small ">30.56%</span>--}}
{{--                            </div>--}}
{{--                            <div class="progress progress-sm mt-1">--}}
{{--                              <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                            </div>--}}
{{--                          </div>--}}
{{--                          <div class="col-sm-6">--}}
{{--                            <div class="d-lg-flex justify-content-between align-items-center">--}}
{{--                              <div class="text-small text-dark">قيد الانتظار :</div>--}}
{{--                              <span class="font-weight-bold text-small text-dark">69.44%</span>--}}
{{--                            </div>--}}
{{--                            <div class="progress progress-sm mt-1">--}}
{{--                              <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                            </div>--}}
{{--                          </div>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-4 grid-margin grid-margin-lg-0 stretch-card">--}}
{{--                  <div class="card">--}}
{{--                    <div class="card-body">--}}
{{--                      <div class="dotted-border p-3 mb-3">--}}
{{--                        <div class="row">--}}
{{--                          <div class="col-sm-12">--}}
{{--                            <h4 class="card-title mb-1">مبيعات التنبؤ</h4>--}}
{{--                          </div>--}}
{{--                          <div class="col-sm-6">--}}
{{--                            <canvas id="prediction-1"></canvas>--}}
{{--                            <h3 class="font-weight-bold mt-3 text-dark">$3258</h3>--}}
{{--                            <p class="text-muted mb-0">مبيعات 350-985</p>--}}
{{--                          </div>--}}
{{--                          <div class="col-sm-6">--}}
{{--                            <canvas id="prediction-2"></canvas>--}}
{{--                            <h3 class="font-weight-bold mt-3 text-dark">$3258</h3>--}}
{{--                            <p class="text-muted mb-0">مبيعات 350-985</p>--}}
{{--                          </div>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      <div class="dotted-border p-3">--}}
{{--                        <div class="row">--}}
{{--                          <div class="col-sm-12">--}}
{{--                            <h4 class="card-title mt-4 mb-1">تاريخ الأسهم</h4>--}}
{{--                          </div>--}}
{{--                          <div class="col-sm-6">--}}
{{--                            <canvas id="prediction-3"></canvas>--}}
{{--                            <h3 class="font-weight-bold mt-3 text-dark">$3258</h3>--}}
{{--                            <p class="mb-0 text-muted">مبيعات 350-985</p>--}}
{{--                          </div>--}}
{{--                          <div class="col-sm-6">--}}
{{--                            <canvas id="prediction-4"></canvas>--}}
{{--                            <h3 class="font-weight-bold text-dark  mt-3">$3258</h3>--}}
{{--                            <p class="mb-0 text-muted">مبيعات 350-985</p>--}}
{{--                          </div>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->

@stop
