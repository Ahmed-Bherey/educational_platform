<div class="banner" data-aos="flip-up">
    <div class="banner_content">
        <h1 class="title mb-3">AI EDUCATION</h1>
        <p class="mb-5">منصة علمية تهدف لتسهيل التعلم عن بعد، انضم الآن إلى أفضل صرح تعليمي</p>
        <div class="btns mb-5">
            <a href="{{ route('register.form') }}">اشترك الان</a>
            <a href="{{ route('web.subjectsAll') }}" class="active">اخر التحديثات</a>
        </div>
        <div class="pages">
            <a href="{{ $generalSetting->twitter }}"><i class="fa-brands fa-twitter"></i></a>
            <a href="mailto:{{ $generalSetting->email }}"><i class="fa-regular fa-envelope"></i></i></a>
            <a href="{{ $generalSetting->facebook }}"><i class="fa-brands fa-facebook-f"></i></a>
        </div>
    </div>
</div>