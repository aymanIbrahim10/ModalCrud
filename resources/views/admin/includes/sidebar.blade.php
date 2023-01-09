<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-category">الرئيسية</li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
          <span class="menu-title">لوحة القيادة</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
          <span class="icon-bg"> <i class="mdi mdi-apps menu-icon"></i> </span>
          <span class="menu-title">الاقسام</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="page-layouts">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('categories.index') }}">جميع الاقسام</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('categories.create') }}">إضافة القسم</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('categories.archives.index') }}">إرشيف الاقسام</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ay" aria-expanded="false" aria-controls="ay">
          <span class="icon-bg"><i class="mdi mdi-playlist-play menu-icon"></i></span>
          <span class="menu-title">اجراءات المنتجات</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ay">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('products.index')}}">قائمة المنتجات</a></li>
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/layout/sidebar-hidden.html">الشريط الجانبي المخفية</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/layout/sidebar-hidden-overlay.html">تراكب الشريط الجانبي</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/layout/sidebar-fixed.html">الشريط الجانبي ثابت</a></li>--}}
          </ul>
        </div>
      </li>
{{--      <li class="nav-item">--}}
{{--        <a class="nav-link" href="../../pages/samples/widgets.html">--}}
{{--          <span class="icon-bg"><i class="mdi mdi-widgets menu-icon"></i></span>--}}
{{--          <span class="menu-title">الحاجيات</span>--}}
{{--        </a>--}}
{{--      </li>--}}
     <li class="nav-item nav-category">ضبط واجهة المستخدم</li>
     <li class="nav-item">
       <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic12" aria-expanded="false" aria-controls="ui-basic12">
         <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
         <span class="menu-title">صفحة ماذا عننا</span>
         <i class="menu-arrow"></i>
        </a>
       <div class="collapse" id="ui-basic12">
          <ul class="nav flex-column sub-menu">
           <li class="nav-item"> <a class="nav-link" href="{{route('abouts.index')}}">قائمة المعلومات</a></li>
           <li class="nav-item"> <a class="nav-link" href="{{route('abouts.create')}}">اضافة معلومات</a></li>
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/badges.html">شارات</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/breadcrumbs.html">فتات الخبز</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/dropdowns.html">قائِمة مُنْسَدِلة</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/modals.html">الحوار</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/progress.html">شريط التقدم</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/pagination.html">ترقيم الصفحات</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/tabs.html">علامات التبويب</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">الاسلوب والظهور</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/tooltips.html">تلميح</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/dragula.html">Dragula</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/clipboard.html">الحافظة</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/context-menu.html">قائمة السياق</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/slider.html">الانزلاق</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/colcade.html">Colcade</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/carousel.html">دائري</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/loaders.html">رافعات</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/treeview.html">عرض الشجرة</a></li>--}}
         </ul>
       </div>
     </li>
{{--     <li class="nav-item">--}}
{{--        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basicc" aria-expanded="false" aria-controls="ui-basic">--}}
{{--          <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>--}}
{{--          <span class="menu-title">الصفحة الرئيسية</span>--}}
{{--          <i class="menu-arrow"></i>--}}
{{--         </a>--}}
{{--      <div class="collapse" id="ui-basicc">--}}
{{--         <ul class="nav flex-column sub-menu">--}}
{{--          <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/accordions.html">قائمة المحتويات</a></li>--}}
{{--          <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">اضافة محتوى</a></li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--    </li>--}}
{{--      <li class="nav-item">--}}
{{--        <a class="nav-link" href="../../pages/ui-features/popups.html">--}}
{{--          <span class="icon-bg"><i class="mdi mdi-forum menu-icon"></i></span>--}}
{{--          <span class="menu-title">يظهر فجأة</span>--}}
{{--        </a>--}}
{{--      </li>--}}
{{--      <li class="nav-item">--}}
{{--        <a class="nav-link" href="../../pages/ui-features/notifications.html">--}}
{{--          <span class="icon-bg"><i class="mdi mdi-bell-ring menu-icon"></i></span>--}}
{{--          <span class="menu-title">إخطارات</span>--}}
{{--        </a>--}}
{{--      </li>--}}
{{--      <li class="nav-item">--}}
{{--        <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">--}}
{{--          <span class="icon-bg"><i class="mdi mdi-contacts menu-icon"></i></span>--}}
{{--          <span class="menu-title">الرموز</span>--}}
{{--          <i class="menu-arrow"></i>--}}
{{--        </a>--}}
{{--        <div class="collapse" id="icons">--}}
{{--          <ul class="nav flex-column sub-menu">--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/icons/mdi.html">رموز Mdi</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/icons/flag-icons.html">أيقونات العلم</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/icons/font-awesome.html">الرموز fontawsome</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/icons/simple-line-icon.html">أيقونات خط بسيط</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/icons/themify.html">Themify الرموز</a></li>--}}
{{--          </ul>--}}
{{--        </div>--}}
{{--      </li>--}}
{{--      <li class="nav-item">--}}
{{--        <a class="nav-link" data-bs-toggle="collapse" href="#forms" aria-expanded="false" aria-controls="forms">--}}
{{--          <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>--}}
{{--          <span class="menu-title">نماذج</span>--}}
{{--          <i class="menu-arrow"></i>--}}
{{--        </a>--}}
{{--        <div class="collapse" id="forms">--}}
{{--          <ul class="nav flex-column sub-menu">--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/forms/basic_elements.html">عناصر النموذج</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/forms/advanced_elements.html"> العناصر المتقدمة</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/forms/validation.html">التحقق من صحة</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/forms/wizard.html">ساحر</a></li>--}}
{{--          </ul>--}}
{{--        </div>--}}
{{--      </li>--}}
{{--      <li class="nav-item nav-category">المحررين</li>--}}
{{--      <li class="nav-item">--}}
{{--        <a class="nav-link" href="../../pages/forms/text_editor.html">--}}
{{--          <span class="icon-bg"><i class="mdi mdi-file-document menu-icon"></i></span>--}}
{{--          <span class="menu-title">محرري النصوص</span>--}}
{{--        </a>--}}
{{--      </li>--}}
{{--      <li class="nav-item">--}}
{{--        <a class="nav-link" href="../../pages/forms/code_editor.html">--}}
{{--          <span class="icon-bg"><i class="mdi mdi-code-not-equal-variant menu-icon"></i></span>--}}
{{--          <span class="menu-title">محرري الكود</span>--}}
{{--        </a>--}}
{{--      </li>--}}
{{--      <li class="nav-item nav-category">شرح البيانات </li>--}}
{{--      <li class="nav-item">--}}
{{--        <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">--}}
{{--          <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>--}}
{{--          <span class="menu-title">الرسوم البيانية</span>--}}
{{--          <i class="menu-arrow"></i>--}}
{{--        </a>--}}
{{--        <div class="collapse" id="charts">--}}
{{--          <ul class="nav flex-column sub-menu">--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/charts/chartjs.html">Chart Js</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/charts/morris.html">موريس</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/charts/flot-chart.html">Flot</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/charts/google-charts.html">جوجل</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/charts/sparkline.html">Sparkline</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/charts/c3.html">C3</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/charts/chartist.html">Chartist</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/charts/justGage.html">Just Gage</a></li>--}}
{{--          </ul>--}}
{{--        </div>--}}
{{--      </li>--}}
{{--      <li class="nav-item">--}}
{{--        <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">--}}
{{--          <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>--}}
{{--          <span class="menu-title">الجداول</span>--}}
{{--          <i class="menu-arrow"></i>--}}
{{--        </a>--}}
{{--        <div class="collapse" id="tables">--}}
{{--          <ul class="nav flex-column sub-menu">--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/tables/basic-table.html">الجدول الأساسي</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/tables/data-table.html">Data table</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/tables/js-grid.html"> Js Grid</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/tables/sortable-table.html">جدول قابل للفرز</a></li>--}}
{{--          </ul>--}}
{{--        </div>--}}
{{--      </li>--}}
{{--      <li class="nav-item">--}}
{{--        <a class="nav-link" data-bs-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">--}}
{{--          <span class="icon-bg"><i class="mdi mdi-map-marker-radius menu-icon"></i></span>--}}
{{--          <span class="menu-title">خرائط</span>--}}
{{--          <i class="menu-arrow"></i>--}}
{{--        </a>--}}
{{--        <div class="collapse" id="maps">--}}
{{--          <ul class="nav flex-column sub-menu">--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/maps/google-maps.html">خرائط جوجل</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/maps/mapael.html">Mapael</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/maps/vector-map.html">خريطة المتجهات</a></li>--}}
{{--          </ul>--}}
{{--        </div>--}}
{{--      </li>--}}
{{--      <li class="nav-item nav-category">صفحات عينة</li>--}}
{{--      <li class="nav-item">--}}
{{--        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">--}}
{{--          <span class="icon-bg"><i class="mdi mdi-lock menu-icon"></i></span>--}}
{{--          <span class="menu-title">صفحات المستخدم</span>--}}
{{--          <i class="menu-arrow"></i>--}}
{{--        </a>--}}
{{--        <div class="collapse" id="auth">--}}
{{--          <ul class="nav flex-column sub-menu">--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.html"> تسجيل الدخول 1</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login-2.html">تسجيل الدخول 2</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/mutli-level-login.html"> متعددة خطوة تسجيل الدخو </a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register.html"> تسجيل </a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register-2.html"> الاشتراك اثنين</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/lock-screen.html"> اقفل الشاشة </a></li>--}}
{{--          </ul>--}}
{{--        </div>--}}
{{--      </li>--}}
{{--      <li class="nav-item">--}}
{{--        <a class="nav-link" data-bs-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">--}}
{{--          <span class="icon-bg"><i class="mdi mdi-security menu-icon"></i></span>--}}
{{--          <span class="menu-title">صفحات خطأ</span>--}}
{{--          <i class="menu-arrow"></i>--}}
{{--        </a>--}}
{{--        <div class="collapse" id="error">--}}
{{--          <ul class="nav flex-column sub-menu">--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-404.html"> 404 </a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-500.html"> 500 </a></li>--}}
{{--          </ul>--}}
{{--        </div>--}}
{{--      </li>--}}
{{--      <li class="nav-item">--}}
{{--        <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">--}}
{{--          <span class="icon-bg"><i class="mdi mdi-medical-bag menu-icon"></i></span>--}}
{{--          <span class="menu-title">الصفحات العامة</span>--}}
{{--          <i class="menu-arrow"></i>--}}
{{--        </a>--}}
{{--        <div class="collapse" id="general-pages">--}}
{{--          <ul class="nav flex-column sub-menu">--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/blank-page.html"> صفحة فارغة </a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/profile.html"> الملف الشخصي </a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/faq.html">الأسئلة المطروحة</a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/faq-2.html">أسئلة مطروحة 2 </a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/news-grid.html"> شبكة الأخبار </a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/timeline.html"> الجدول الزمني </a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/user-listing.html"> قائمة المستخدم </a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/portfolio.html"> Portfolio </a></li>--}}
{{--          </ul>--}}
{{--        </div>--}}
{{--      </li>--}}
{{--      <li class="nav-item nav-category">تطبيقات</li>--}}
{{--      <li class="nav-item">--}}
{{--        <a class="nav-link" data-bs-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">--}}
{{--          <span class="icon-bg"><i class="mdi mdi-shopping menu-icon"></i></span>--}}
{{--          <span class="menu-title">التجارة الإلكترونية</span>--}}
{{--          <i class="menu-arrow"></i>--}}
{{--        </a>--}}
{{--        <div class="collapse" id="e-commerce">--}}
{{--          <ul class="nav flex-column sub-menu">--}}
{{--            <li class="nav-item"> <a class="nav-link" href="{{route('products.index')}}"> فاتورة </a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/pricing-table.html"> جدول التسعير </a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/orders.html"> طلب </a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/emailer.html"> قالب البريد الإلكتروني </a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/product-catalogue.html"> كتالوج المنتج </a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/project-list.html"> قائمة المشروع </a></li>--}}
{{--          </ul>--}}
{{--        </div>--}}
{{--      </li>--}}
{{--      <li class="nav-item">--}}
{{--        <a class="nav-link" href="../../pages/apps/kanban-board.html">--}}
{{--          <span class="icon-bg"><i class="mdi mdi-tablet-dashboard menu-icon"></i></span>--}}
{{--          <span class="menu-title">كانبان بورد</span>--}}
{{--        </a>--}}
{{--      </li>--}}
{{--      <li class="nav-item">--}}
{{--        <a class="nav-link" href="../../pages/apps/email.html">--}}
{{--          <span class="icon-bg"><i class="mdi mdi-email menu-icon"></i></span>--}}
{{--          <span class="menu-title">البريد الإلكتروني</span>--}}
{{--        </a>--}}
{{--      </li>--}}
{{--      <li class="nav-item">--}}
{{--        <a class="nav-link" href="../../pages/apps/calendar.html">--}}
{{--          <span class="icon-bg"><i class="mdi mdi-calendar-today menu-icon"></i></span>--}}
{{--          <span class="menu-title">التقويم</span>--}}
{{--        </a>--}}
{{--      </li>--}}
{{--      <li class="nav-item">--}}
{{--        <a class="nav-link" href="../../pages/apps/todo.html">--}}
{{--          <span class="icon-bg"><i class="mdi mdi-playlist-edit menu-icon"></i></span>--}}
{{--          <span class="menu-title">عمل قائمة</span>--}}
{{--        </a>--}}
{{--      </li>--}}
{{--      <li class="nav-item">--}}
{{--        <a class="nav-link" href="../../pages/apps/tickets.html">--}}
{{--          <span class="icon-bg"><i class="mdi mdi-ticket menu-icon"></i></span>--}}
{{--          <span class="menu-title">تذاكر</span>--}}
{{--        </a>--}}
{{--      </li>--}}
{{--      <li class="nav-item">--}}
{{--        <a class="nav-link" href="../../pages/apps/chat.html">--}}
{{--          <span class="icon-bg"><i class="mdi mdi-chat menu-icon"></i></span>--}}
{{--          <span class="menu-title">دردشة</span>--}}
{{--        </a>--}}
{{--      </li>--}}
{{--      <li class="nav-item">--}}
{{--        <a class="nav-link" href="../../pages/apps/gallery.html">--}}
{{--          <span class="icon-bg"><i class="mdi mdi-image-filter-frames menu-icon"></i></span>--}}
{{--          <span class="menu-title">صالة عرض</span>--}}
{{--        </a>--}}
{{--      </li>--}}
{{--      <li class="nav-item documentation-link">--}}
{{--        <a class="nav-link" href="http://www.bootstrapdash.com/demo/connect_plus/jquery/pages/documentation.html">--}}
{{--          <span class="icon-bg">--}}
{{--            <i class="mdi mdi-file-document-box menu-icon"></i>--}}
{{--          </span>--}}
{{--          <span class="menu-title">توثيق</span>--}}
{{--        </a>--}}
{{--      </li>--}}
{{--      <li class="nav-item sidebar-user-actions">--}}
{{--        <div class="user-details">--}}
{{--          <div class="d-flex justify-content-between align-items-center">--}}
{{--            <div>--}}
{{--              <div class="d-flex align-items-center">--}}
{{--                <div class="sidebar-profile-img">--}}
{{--                  <img src="{{ asset('admin/assets/images/faces/face28.png') }}" alt="image">--}}
{{--                </div>--}}
{{--                <div class="sidebar-profile-text">--}}
{{--                  <p class="mb-1">هنري كلاين</p>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <div class="badge badge-danger">3</div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </li>--}}
{{--      <li class="nav-item sidebar-user-actions">--}}
{{--        <div class="sidebar-user-menu">--}}
{{--          <a href="#" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>--}}
{{--            <span class="menu-title">الإعدادات</span>--}}
{{--          </a>--}}
{{--        </div>--}}
{{--      </li>--}}
{{--      <li class="nav-item sidebar-user-actions">--}}
{{--        <div class="sidebar-user-menu">--}}
{{--          <a href="#" class="nav-link"><i class="mdi mdi-speedometer menu-icon"></i>--}}
{{--            <span class="menu-title">قم بجولة</span></a>--}}
{{--        </div>--}}
{{--      </li>--}}
{{--      <li class="nav-item sidebar-user-actions">--}}
{{--        <div class="sidebar-user-menu">--}}
{{--          <a href="#" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>--}}
{{--            <span class="menu-title">تسجيل خروج</span></a>--}}
{{--        </div>--}}
{{--      </li>--}}
    </ul>
  </nav>
