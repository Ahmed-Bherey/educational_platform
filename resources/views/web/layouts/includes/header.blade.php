<div class="nav_content">
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
                @foreach ($categories as $category)
                    <li><a href="{{ route('web.subjects', $category->id) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
            <div class="logo">
                Al-Education
            </div>
        </nav>
        {{-- sticky navbar --}}
        {{-- <nav class="sticky_navbar position-fixed bg-dark top-0 start-0 w-100">
            <div class="sticky_parent d-flex justify-content-between">
                <ul>
                    @if (Auth('member')->check())
                        <li><a href="{{ route('user.logout') }}">تسجيل خروج</a></li>
                    @else
                        <li><a href="{{ route('user.login.form') }}">تسجيل الدخول</a></li>
                    @endif
                    <li><a href="{{ route('web.index') }}">الرئيسية</a></li>
                    @foreach ($categories as $category)
                        <li><a href="{{ route('web.subjects', $category->id) }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
                <div class="logo">
                    Al-Education
                </div>
            </div>
        </nav> --}}
    </div>
</div>


<main>
