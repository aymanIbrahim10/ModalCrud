<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{ route('welcome') }}">
            <img src="{{asset('admin/assets/images/default/images.png')}}" alt="img" style="width: 40px;height: 40px;border-radius: 8px;">

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('welcome') }}">الرئيسية</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('abouts')}}">من نحن</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">قائمة الاقسام</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li style="margin-right: 10px;">
                            الاقسام
                            <hr class="dropdown-divider"/>

                        </li>
                                                    @foreach($categories as $category)
                                                    <li><a class="dropdown-item" href="{{route('productCat',$category->id)}}">{{$category->cat_name}}</a></li>
                                                    @endforeach
                    </ul>
                </li>
            </ul>
            @if (Route::has('login'))
                <div class="d-flex">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-dark" style="margin-right: 10px;">لوحة
                            التحكم</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-dark" style="margin-right: 10px;">تسجيل
                            الدخول</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-dark" style="margin-right: 10px;">إنشاء
                                حساب </a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</nav>
