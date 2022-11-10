<div class="container">
    <nav class="d-flex justify-content-between">
        <ul>
            {{-- <li class="dark_mood"><i class="fa-regular fa-moon"></i></li>
            <li class="light_mood"><i class="fa-regular fa-sun"></i></li> --}}
            @if(Auth('member')->check())
            <li><a href="{{ route('user.logout') }}">تسجيل خروج</a></li>
            @else
            <li><a href="{{ route('user.login.form') }}">تسجيل الدخول</a></li>
            @endif
            <li><a href="{{ route('web.index') }}">الرئيسية</a></li>
            @foreach ($categories as $category)
            <li><a href="{{route('web.subjects',$category->id)}}">{{$category->name}}</a></li>
            @endforeach
        </ul>
        <div class="logo">
            Al-Education
        </div>
    </nav>
</div>

<main>
