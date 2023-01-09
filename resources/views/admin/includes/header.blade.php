<div class="container-scroller">
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="../../index.html"><img src="{{ asset('admin/assets/images/logo.svg') }}" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="{{ asset('admin/assets/images/logo-mini.svg') }}" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
{{--        <div class="search-field d-none d-xl-block">--}}
{{--          <form class="d-flex align-items-center h-100" action="#">--}}
{{--            <div class="input-group">--}}
{{--              <div class="input-group-prepend bg-transparent">--}}
{{--                <i class="input-group-text border-0 mdi mdi-magnify"></i>--}}
{{--              </div>--}}
{{--              <input type="text" class="form-control bg-transparent border-0" placeholder="البحث عن المنتجات">--}}
{{--            </div>--}}
{{--          </form>--}}
{{--        </div>--}}
        <ul class="navbar-nav navbar-nav-right">
{{--          <li class="nav-item  dropdown d-none d-md-block">--}}
{{--            <a class="nav-link dropdown-toggle" id="reportDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> تقارير </a>--}}
{{--            <div class="dropdown-menu navbar-dropdown" aria-labelledby="reportDropdown">--}}
{{--              <a class="dropdown-item" href="#">--}}
{{--                <i class="mdi mdi-file-pdf me-2"></i>بي دي إف </a>--}}
{{--              <div class="dropdown-divider"></div>--}}
{{--              <a class="dropdown-item" href="#">--}}
{{--                <i class="mdi mdi-file-excel me-2"></i>تفوق</a>--}}
{{--              <div class="dropdown-divider"></div>--}}
{{--              <a class="dropdown-item" href="#">--}}
{{--                <i class="mdi mdi-file-word me-2"></i>وثيقة </a>--}}
{{--            </div>--}}
{{--          </li>--}}
{{--          <li class="nav-item  dropdown d-none d-md-block">--}}
{{--            <a class="nav-link dropdown-toggle" id="projectDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> مشاريع </a>--}}
{{--            <div class="dropdown-menu navbar-dropdown" aria-labelledby="projectDropdown">--}}
{{--              <a class="dropdown-item" href="#">--}}
{{--                <i class="mdi mdi-eye-outline me-2"></i>عرض مشروع </a>--}}
{{--              <div class="dropdown-divider"></div>--}}
{{--              <a class="dropdown-item" href="#">--}}
{{--                <i class="mdi mdi-pencil-outline me-2"></i>تحرير المشروع</a>--}}
{{--            </div>--}}
{{--          </li>--}}
{{--          <li class="nav-item nav-language dropdown d-none d-md-block">--}}
{{--            <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--              <div class="nav-language-icon">--}}
{{--                <i class="flag-icon flag-icon-us" title="us" id="us"></i>--}}
{{--              </div>--}}
{{--              <div class="nav-language-text">--}}
{{--                <p class="mb-1 text-black">الإنجليزية</p>--}}
{{--              </div>--}}
{{--            </a>--}}
{{--            <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">--}}
{{--              <a class="dropdown-item" href="#">--}}
{{--                <div class="nav-language-icon ms-2">--}}
{{--                  <i class="flag-icon flag-icon-ae" title="ae" id="ae"></i>--}}
{{--                </div>--}}
{{--                <div class="nav-language-text">--}}
{{--                  <p class="mb-1 text-black">عربى</p>--}}
{{--                </div>--}}
{{--              </a>--}}
{{--              <div class="dropdown-divider"></div>--}}
{{--              <a class="dropdown-item" href="#">--}}
{{--                <div class="nav-language-icon ms-2">--}}
{{--                  <i class="flag-icon flag-icon-gb" title="GB" id="gb"></i>--}}
{{--                </div>--}}
{{--                <div class="nav-language-text">--}}
{{--                  <p class="mb-1 text-black">الإنجليزية</p>--}}
{{--                </div>--}}
{{--              </a>--}}
{{--            </div>--}}
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                <img src="{{ asset('admin/assets/images/faces/face28.png') }}" alt="image">
              </div>
              <div class="nav-profile-text">
                <p class="mb-1 text-black">هنري كلاين</p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown dropdown-menu-end p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
              <div class="p-3 text-center bg-primary">
                <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ asset('admin/assets/images/faces/face28.png') }}" alt="">
              </div>
              <div class="p-2">
                <h5 class="dropdown-header text-uppercase pe-2 text-dark text-right">خيارات المستخدم</h5>
{{--                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">--}}
{{--                  <span>صندوق الوارد</span>--}}
{{--                  <span class="p-0">--}}
{{--                    <span class="badge badge-primary ms-1">3</span>--}}
{{--                    <i class="mdi mdi-email-open-outline"></i>--}}
{{--                  </span>--}}
{{--                </a>--}}
{{--                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">--}}
{{--                  <span>الملف الشخصي</span>--}}
{{--                  <span class="p-0">--}}
{{--                    <span class="badge badge-success ms-1">1</span>--}}
{{--                    <i class="mdi mdi-account-outline"></i>--}}
{{--                  </span>--}}
{{--                </a>--}}
{{--                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="javascript:void(0)">--}}
{{--                  <span>الإعدادات</span>--}}
{{--                  <i class="mdi mdi-settings"></i>--}}
{{--                </a>--}}
{{--                <div role="separator" class="dropdown-divider"></div>--}}
{{--                <h5 class="dropdown-header text-uppercase  ps-2 text-dark mt-2">أجراءات</h5>--}}
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between"
                     href="{{route('welcome')}}">
                      <span>الواجهة الامامية</span>
                      <i class="mdi mdi-lock ms-1"></i>
                  </a>
                  <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <a :href="route('logout')"
                         onclick="event.preventDefault();
                                  this.closest('form').submit();"
                         class="dropdown-item py-1 d-flex align-items-center justify-content-between">
                          <span> {{ __('تسجيل الخروج') }} </span>
                          <i class="mdi mdi-logout ms-1"></i>
                      </a>
                  </form>

              </div>
            </div>
          </li>
{{--          <li class="nav-item dropdown">--}}
{{--            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--              <i class="mdi mdi-email-outline"></i>--}}
{{--              <span class="count-symbol bg-success"></span>--}}
{{--            </a>--}}
{{--            <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" aria-labelledby="messageDropdown">--}}
{{--              <h6 class="p-3 mb-0 bg-primary text-white py-4 text-right">رسائل</h6>--}}
{{--              <div class="dropdown-divider"></div>--}}
{{--              <a class="dropdown-item preview-item">--}}
{{--                <div class="preview-thumbnail">--}}
{{--                  <img src="{{ asset('admin/assets/images/faces/face4.jpg') }}" alt="image" class="profile-pic">--}}
{{--                </div>--}}
{{--                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">--}}
{{--                  <h6 class="preview-subject ellipsis mb-1 font-weight-normal">مارك يرسل لك رسالة</h6>--}}
{{--                  <p class="text-gray mb-0"> علامة نرسل لك رسالة 1 دقيقة مضت </p>--}}
{{--                </div>--}}
{{--              </a>--}}
{{--              <div class="dropdown-divider"></div>--}}
{{--              <a class="dropdown-item preview-item">--}}
{{--                <div class="preview-thumbnail">--}}
{{--                  <img src="{{ asset('admin/assets/images/faces/face2.jpg') }}" alt="image" class="profile-pic">--}}
{{--                </div>--}}
{{--                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">--}}
{{--                  <h6 class="preview-subject ellipsis mb-1 font-weight-normal">كريغ نرسل لك رسالة</h6>--}}
{{--                  <p class="text-gray mb-0">كريغ نرسل لك رسالة </p>--}}
{{--                </div>--}}
{{--              </a>--}}
{{--              <div class="dropdown-divider"></div>--}}
{{--              <a class="dropdown-item preview-item">--}}
{{--                <div class="preview-thumbnail">--}}
{{--                  <img src="{{ asset('admin/assets/images/faces/face3.jpg') }}" alt="image" class="profile-pic">--}}
{{--                </div>--}}
{{--                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">--}}
{{--                  <h6 class="preview-subject ellipsis mb-1 font-weight-normal">تحديث صورة الملف الشخصي </h6>--}}
{{--                  <p class="text-gray mb-0"> منذ 18 دقيقة</p>--}}
{{--                </div>--}}
{{--              </a>--}}
{{--              <div class="dropdown-divider"></div>--}}
{{--              <h6 class="p-3 mb-0 text-center">4 رسائل جديدة</h6>--}}
{{--            </div>--}}
{{--          </li>--}}
{{--          <li class="nav-item dropdown">--}}
{{--            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">--}}
{{--              <i class="mdi mdi-bell-outline"></i>--}}
{{--              <span class="count-symbol bg-danger"></span>--}}
{{--            </a>--}}
{{--            <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" aria-labelledby="notificationDropdown">--}}
{{--              <h6 class="p-3 mb-0 bg-primary text-white py-4 text-right">إشعارات</h6>--}}
{{--              <div class="dropdown-divider"></div>--}}
{{--              <a class="dropdown-item preview-item">--}}
{{--                <div class="preview-thumbnail">--}}
{{--                  <div class="preview-icon bg-success">--}}
{{--                    <i class="mdi mdi-calendar"></i>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">--}}
{{--                  <h6 class="preview-subject font-weight-normal mb-1">حدث اليوم</h6>--}}
{{--                  <p class="text-gray ellipsis mb-0"> مجرد تذكير بأن لديك حدث اليوم </p>--}}
{{--                </div>--}}
{{--              </a>--}}
{{--              <div class="dropdown-divider"></div>--}}
{{--              <a class="dropdown-item preview-item">--}}
{{--                <div class="preview-thumbnail">--}}
{{--                  <div class="preview-icon bg-warning">--}}
{{--                    <i class="mdi mdi-settings"></i>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">--}}
{{--                  <h6 class="preview-subject font-weight-normal mb-1">الإعدادات</h6>--}}
{{--                  <p class="text-gray ellipsis mb-0"> تحديث لوحة القيادة</p>--}}
{{--                </div>--}}
{{--              </a>--}}
{{--              <div class="dropdown-divider"></div>--}}
{{--              <a class="dropdown-item preview-item">--}}
{{--                <div class="preview-thumbnail">--}}
{{--                  <div class="preview-icon bg-info">--}}
{{--                    <i class="mdi mdi-link-variant"></i>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">--}}
{{--                  <h6 class="preview-subject font-weight-normal mb-1">إطلاق المسؤول</h6>--}}
{{--                  <p class="text-gray ellipsis mb-0"> مشرف جديد نجاح باهر!</p>--}}
{{--                </div>--}}
{{--              </a>--}}
{{--              <div class="dropdown-divider"></div>--}}
{{--              <h6 class="p-3 mb-0 text-center">اطلع على جميع الإشعارات</h6>--}}
{{--            </div>--}}
{{--          </li>--}}
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
