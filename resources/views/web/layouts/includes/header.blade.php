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
            <li><a href="{{ route('login.form') }}">تسجيل الدخول</a></li>
        </ul>
    </nav>
</div>

<main>
