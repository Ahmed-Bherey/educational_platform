<div class="container">
    <nav class="d-flex justify-content-between">
        <div class="logo">
            Al-Education
        </div>
        <ul>
            {{-- <li><a href="#">مدرسونا</a></li> --}}
            {{-- <li><a href="#">التصنيفات</a>
                <ul class="position-absolute text-center">
                    @foreach ($categories as $category)
                    <li><a href="{{route('web.subjects',$category->id)}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </li> --}}
            @foreach ($categories as $category)
            <li><a href="{{route('web.subjects',$category->id)}}">{{$category->name}}</a></li>
            @endforeach
            <li><a href="{{ route('web.index') }}">الرئيسية</a></li>
            @if(Auth('member')->check())
            <li><a href="{{ route('user.logout') }}">تسجيل خروج</a></li>
            @else
            <li><a href="{{ route('user.login.form') }}">تسجيل الدخول</a></li>
            @endif
        </ul>
    </nav>
</div>

<main>
