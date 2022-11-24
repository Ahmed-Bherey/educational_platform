<div class="nav_content">
    <div class="container">
        <nav class="d-flex justify-content-between nav">
            <div class="menu_icon">
                <i class="fa-solid fa-bars"></i>
            </div>
            <ul>
                @if (Auth('member')->check())
                    <li><a href="{{ route('user.logout') }}" class="navLink">تسجيل خروج</a></li>
                @else
                    <li><a href="{{ route('user.login.form') }}" class="navLink">تسجيل الدخول</a></li>
                @endif
                <li><a href="{{ route('web.index') }}" class="navLink active">الرئيسية</a></li>
                <li><a href="{{ route('web.index') }}" class="navLink active">التصنيفات</a></li>
                <li><a href="{{ route('web.subjectsAll') }}" class="navLink active">اخر التحديثات</a></li>
                <li class="d-none"><input type="color" id="coloc_controller"></li>
                {{-- @foreach ($categories as $category)
                    <li><a href="{{ route('web.subjects', $category->id) }}" class="navLink">{{ $category->name }}</a></li>
                @endforeach --}}
            </ul>
            <div class="logo">
                Al-Education
            </div>
        </nav>
    </div>
</div>
<div class="nav_content sticky_navbar position-fixed top-0 left-0">
    <div class="container">
        <nav class="d-flex justify-content-between nav">
            <div class="menu_icon">
                <i class="fa-solid fa-bars"></i>
            </div>
            <ul>
                @if (Auth('member')->check())
                    <li><a href="{{ route('user.logout') }}">تسجيل خروج</a></li>
                @else
                    <li><a href="{{ route('user.login.form') }}">تسجيل الدخول</a></li>
                @endif
                <li><a href="{{ route('web.index') }}">الرئيسية</a></li>
                <li><a href="{{ route('web.index') }}" class="navLink active">التصنيفات</a></li>
                <li><a href="{{ route('web.subjectsAll') }}" class="navLink active">اخر التحديثات</a></li>
                <li class="d-none"><input type="color" id="coloc_controller"></li>
                {{-- @foreach ($categories as $category)
                    <li><a href="{{ route('web.subjects', $category->id) }}">{{ $category->name }}</a></li>
                @endforeach --}}
            </ul>
            <div class="logo">
                Al-Education
            </div>
        </nav>
    </div>
</div>


<main>
