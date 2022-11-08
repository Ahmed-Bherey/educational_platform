<div class="container">
    <nav class="d-flex justify-content-between">
        <ul>
            @if(Auth('member')->check())
            <li><a href="{{ route('user.logout') }}">تسجيل خروج</a></li>
            @else
            <li><a href="{{ route('user.login.form') }}">تسجيل الدخول</a></li>
            @endif
            <li><a href="{{ route('web.index') }}">الرئيسية</a></li>
            @foreach ($categoriesAll as $category)
            <li><a href="{{route('web.subjects',$category->id)}}">{{$category->name}}</a></li>
            @endforeach
        </ul>
        <div class="logo">
            Al-Education
        </div>
    </nav>
</div>

<main>
