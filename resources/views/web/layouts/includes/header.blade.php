<div class="nav_content">
    <div class="container">
        <nav class="d-flex justify-content-between nav">
            <div class="menu_icon">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="logo">
                Al-Education
            </div>
            <ul>
                <li><a href="{{ route('web.index') }}" class="navLink active">الرئيسية</a>
            </li>
                <li><a href="{{ url('/edu-platform/#categories') }}" class="navLink active">التصنيفات</a></li>
                <li><a href="{{ route('web.subjectsAll') }}" class="navLink active">اخر التحديثات</a></li>
                <li class="d-none"><input type="color" id="coloc_controller"></li>
                {{-- @foreach ($categories as $category)
                    <li><a href="{{ route('web.subjects', $category->id) }}" class="navLink">{{ $category->name }}</a></li>
                @endforeach --}}
                @if (Auth('member')->check())
                    <li><a href="{{ route('user.logout') }}" class="navLink">تسجيل خروج</a></li>
                @else
                    <li><a href="{{ route('user.login.form') }}" class="navLink">تسجيل الدخول</a></li>
                @endif
            </ul>
        </nav>
    </div>
</div>
<div class="nav_content sticky_navbar position-fixed top-0 left-0">
    <div class="container">
        <nav class="d-flex justify-content-between nav">
            <div class="menu_icon">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="logo">
                Al-Education
            </div>
            <ul>
                <li><a href="{{ route('web.index') }}">الرئيسية</a></li>
                <li><a href="{{ url('/edu-platform/#categories') }}" class="navLink active">التصنيفات</a></li>
                <li><a href="{{ route('web.subjectsAll') }}" class="navLink active">اخر التحديثات</a></li>
                <li class="d-none"><input type="color" id="coloc_controller"></li>
                {{-- @foreach ($categories as $category)
                    <li><a href="{{ route('web.subjects', $category->id) }}">{{ $category->name }}</a></li>
                @endforeach --}}
                @if (Auth('member')->check())
                    <li><a href="{{ route('user.logout') }}">تسجيل خروج</a></li>
                @else
                    <li><a href="{{ route('user.login.form') }}">تسجيل الدخول</a></li>
                @endif
            </ul>
        </nav>
    </div>
</div>
@isset($ads->img)
    <section class="ads text-center mb-3 mt-3" data-aos="fade-up">
        <div class="container">
            <div class="ad_img">
                <a href="{{ $ads->link }}" target="blank">
                    <img src="{{ asset('/public/' . Storage::url($ads->img)) }}" alt="">
                </a>
            </div>
        </div>
    </section>
@endisset
<main>
