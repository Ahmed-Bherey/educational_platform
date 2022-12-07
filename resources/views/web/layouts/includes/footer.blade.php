</main>
<footer class="position-relative">
    <div class="container">
        <div class="row parenRow">
            <div class="col-12 col-md-6 footer_box text-center" data-aos="fade-up">
                <h4>
                    <span>صفحات</span>
                </h4>
                <div class="box_content">
                    <div class="pages"><a href="{{ route('web.index') }}" class="text-decoration-none">الرئيسية</a></div>
                    <div class="pages"><a href="{{ url('/#categories') }}" class="text-decoration-none">التصنيفات</a>
                    </div>
                    <div class="pages"><a href="{{ route('web.subjectsAll') }}" class="text-decoration-none">اخر
                            التحديثات</a></div>
                    <div class="pages">
                        @if (Auth('member')->check())
                            <a href="{{ route('user.logout') }}" class="text-decoration-none">خروج</a>
                        @else
                            <a href="{{ route('register.form') }}" class="text-decoration-none">تسجيل</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 footer_box text-center" data-aos="fade-down">
                <h4>
                    <span>تواصل</span>
                </h4>
                <div class="box_content">
                    <div class="tel d-flex justify-content-center align-items-center">
                        @isset($generalSetting->tel1)
                            <div class="tel_icon">
                                <i class="fa-solid fa-phone-flip"></i>
                            </div>
                            <div class="para">
                                {{ $generalSetting->tel1 }}
                            </div>
                        @endisset
                    </div>
                    <div class="tel d-flex justify-content-center align-items-center">
                        @isset($generalSetting->tel1)
                            <div class="tel_icon">
                                <i class="fa-solid fa-phone-flip"></i>
                            </div>
                            <div class="para">
                                {{ $generalSetting->tel1 }}
                            </div>
                        @endisset
                    </div>
                    <div class="tel d-flex justify-content-center align-items-center">
                        @isset($generalSetting->tel1)
                            <div class="tel_icon">
                                <i class="fa-solid fa-phone-flip"></i>
                            </div>
                            <div class="para">
                                {{ $generalSetting->tel1 }}
                            </div>
                        @endisset
                    </div>
                </div>
            </div>
            {{-- <div class="col-12 col-md-6 col-lg-4 footer_box" data-aos="fade-up">
                <h4>
                    <span>متابعة</span>
                </h4>
                <div class="box_content">
                    <div class="social"><i class="fa-brands fa-facebook"></i> <a href="{{ $generalSetting->facebook }}"
                            class="text-decoration-none">Facebook</a></div>
                    <div class="social"><i class="fa-brands fa-twitter"></i> <a href="{{ $generalSetting->twitter }}"
                            class="text-decoration-none">Twitter</a></div>
                    <div class="social"><i class="fa-regular fa-envelope"></i> <a
                            href="mailto:{{ $generalSetting->email }}" class="text-decoration-none">Gmail</a></div>
                </div>
            </div> --}}
        </div>
        <div class="footer_icon d-flex">
            <div><a href="{{ $generalSetting->facebook }}"><i class="fa-brands fa-facebook-f"></i></a></div>
            <div><a href="{{ $generalSetting->twitter }}"><i class="fa-brands fa-twitter"></i></a></div>
            <div><a href="{{ $generalSetting->email }}"><i class="fa-regular fa-envelope"></i></a></div>
        </div>
    </div>
    <div class="copyright position-absolute">
        {{-- <p>
            Developed by <a href="https://api.whatsapp.com/send?phone=201221093210"
            class="text-decoration-none" target="blank">Ahmed Abdelwahab</a>
        </p> --}}
        <p class="text-center">
            جميع الحقوق محفوظة &copy; <a href="https://api.whatsapp.com/send?phone={{ $generalSetting->tel1 }}"
                class="text-decoration-none" target="blank">Ai
                Education</a>
        </p>
    </div>
</footer>

<!------------------------------- Start sidebar -------------------------->

<aside class="side_menu">
    <nav>
        <ul>
            <li><a href="{{ route('web.index') }}">الرئيسية</a></li>
            <li><a href="{{ url('/#categories') }}">التصنيفات</a></li>
            <li><a href="{{ route('web.subjectsAll') }}">اخر التحديثات</a></li>
            @if (Auth('member')->check())
                <li><a href="{{ route('web.drives') }}">المجلدات</a></li>
                <li><a href="{{ route('user.logout') }}">تسجيل خروج</a></li>
            @else
                <li><a href="{{ route('user.login.form') }}">تسجيل الدخول</a></li>
            @endif
        </ul>
    </nav>
</aside>

<!------------------------------- Start sidebar -------------------------->

<!------------------------------- Start Overlay Menu -------------------------->
<div class="overlay-menu"></div>
<!------------------------------- End Overlay Menu -------------------------->

<!------------------------------- Start Go To Top -------------------------->
<div class="go-top position-fixed end-0 bottom-0">
    <div class="container">
        <i class="fa-solid fa-arrow-up"></i>
    </div>
</div>
<!------------------------------- End Go To Top -------------------------->
