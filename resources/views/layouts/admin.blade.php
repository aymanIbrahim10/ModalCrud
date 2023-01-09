<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
      <link rel="stylesheet" href="{{ asset('admin/assets/vendors/select2/select2.min.css')}}">
      <link rel="stylesheet" href="{{ asset('admin/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}">

      <link rel="stylesheet" href="{{ asset('admin/assets/vendors/jquery-toast-plugin/jquery.toast.min.css') }}">

      <!-- End plugin css for this page -->
    <!-- inject:css -->
      <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/demo_1/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}" />
  </head>
  <body class="rtl">

 @include('admin.includes.header')
 <div class="container-fluid page-body-wrapper">
    <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
    <div id="theme-settings" class="settings-panel">
      <i class="settings-close mdi mdi-close"></i>
      <p class="settings-heading">جلود جانبية</p>
      <div class="sidebar-bg-options selected" id="sidebar-default-theme">
        <div class="img-ss rounded-circle bg-dark border me-3"></div>الإفتراضي
      </div>
      <div class="sidebar-bg-options" id="sidebar-dark-theme">
        <div class="img-ss rounded-circle bg-light border me-3"></div>ضوء
      </div>
      <p class="settings-heading mt-2">جلد الرأس</p>
      <div class="color-tiles mx-0 px-4">
        <div class="tiles primary"></div>
        <div class="tiles success"></div>
        <div class="tiles warning"></div>
        <div class="tiles danger"></div>
        <div class="tiles info"></div>
        <div class="tiles dark"></div>
        <div class="tiles default light"></div>
      </div>
    </div>
@include('admin.includes.sidebar')
@yield('content')
@include('admin.includes.footer')
    <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- plugins:js -->
<script src="{{ asset('admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('admin/assets/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendors/jquery-circle-progress/js/circle-progress.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendors/jquery-toast-plugin/jquery.toast.min.js') }}"></script>

<!-- End plugin js for this page -->
{{-- <script src="{{ asset('admin/assets/vendors/select2/select2.min.js')}}"></script>--}}

 <!-- inject:js -->
<script src="{{ asset('admin/assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('admin/assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('admin/assets/js/misc.js') }}"></script>
 <script src="{{ asset('admin/assets/js/todolist.js') }}"></script>
 <script src="{{ asset('admin/assets/js/file-upload.js') }}"></script>
 <script src="{{ asset('admin/assets/vendors/select2/select2.min.js')}}"></script>

 <script src="{{ asset('admin/assets/js/settings.js') }}"></script>

 <!-- endinject -->
<!-- Custom js for this page -->

<script src="{{ asset('admin/assets/js/dashboard.js') }}"></script>
 <script src="{{ asset('admin/assets/js/select2.js')}}"></script>

 <!-- End custom js for this page -->
@yield('js')
@include('admin.alerts.error')
@include('admin.alerts.success')
</body>
</html>
