</main>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 footer_box">
                <h4>
                    <span>صفحات</span>
                </h4>
                <div class="box_content">
                    <div class="pages"><a href="{{ route('web.index') }}" class="text-decoration-none">الرئيسية</a></div>
                    @foreach ($categories as $key => $category)
                        <div class="pages col-6 ">
                            <a href="{{ route('web.subjects', $category->id) }}"
                                class="text-decoration-none">{{ $category->name }}</a>
                        </div>
                    @endforeach
                    <div class="pages"><a href="#" class="text-decoration-none">تسجيل</a></div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 footer_box">
                <h4>
                    <span>تواصل</span>
                </h4>
                <div class="box_content">
                    <div class="tel"><i class="fa-solid fa-phone"></i> <span>
                            @isset($generalSetting->tel1)
                                {{ $generalSetting->tel1 }}
                            @endisset
                        </span></div>
                    <div class="tel"><i class="fa-solid fa-phone"></i> <span>
                            @isset($generalSetting->tel2)
                                {{ $generalSetting->tel2 }}
                            @endisset
                        </span></div>
                    <div class="tel"><i class="fa-solid fa-phone"></i> <span>
                            @isset($generalSetting->tel3)
                                {{ $generalSetting->tel3 }}
                            @endisset
                        </span></div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 footer_box">
                <h4>
                    <span>متابعة</span>
                </h4>
                <div class="box_content">
                    <div class="social"><i class="fa-brands fa-facebook"></i> <a href="#"
                            class="text-decoration-none">Facebook</a></div>
                    <div class="social"><i class="fa-brands fa-twitter"></i> <a href="#"
                            class="text-decoration-none">Twitter</a></div>
                    <div class="social"><i class="fa-regular fa-envelope"></i> <a href="mailto:ahmed@gmail.com"
                            class="text-decoration-none">Gmail</a></div>
                </div>
            </div>
        </div>
    </div>
</footer>
