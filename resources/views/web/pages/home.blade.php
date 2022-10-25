@extends('web.layouts.includes.master')
@section('content')
    <section class="leatest position-relative">
        <div class="container">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="leatest_container">
                            <div class="row">
                                <div class="col-12 col-md-6 leatest_img">
                                    <div class="img">
                                        <img src="{{ asset('public/web/img/l1.jpg') }}" alt="">
                                    </div>
                                    <div class="col-12 col-md-6 leatest_content text-center position-absolute">
                                        <p>
                                        <h3 class="mb-4">مين قال ان التاريخ صعب؟</h3>
                                        <p class="fw-bold">انضم الى افضل منصة لشرح التاريخ</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="leatest_container">
                            <div class="row">
                                <div class="col-12 col-md-6 leatest_img">
                                    <div class="img">
                                        <img src="{{ asset('public/web/img/l1.jpg') }}" alt="">
                                    </div>
                                    <div class="col-12 col-md-6 leatest_content text-center position-absolute">
                                        <p>
                                        <h3 class="mb-4">مين قال ان التاريخ صعب؟</h3>
                                        <p class="fw-bold">انضم الى افضل منصة لشرح التاريخ</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section class="subjects">
        <div class="container">
            <div class="main_subject mb-3">
                <div class="row gx-0">
                    <div class="col-12 col-lg-6 main_subject_content">
                        <a href="#" class="text-decoration-none">
                            <h1 class="main_subject_content_title mb-5">التاريخ الاسلامى</h1>
                            <div class="head_title mb-5">
                                <ul>
                                    <li><span>مجتمع تعليمى متكامل</span><i class="fa-solid fa-circle-check"></i>
                                    </li>
                                    <li><span>محتوى عالى الدقة</span><i class="fa-solid fa-circle-check"></i></li>
                                    <li><span>متابعة احدث الابحاث</span><i class="fa-solid fa-circle-check"></i>
                                    </li>
                                </ul>
                            </div>
                        </a>
                        <a href="#" class="btn_sub">مشاهدة الان</a>
                    </div>
                    <div class="col-12 col-lg-6 main_subject_img">
                        <img src="{{ asset('public/web/img/s1.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="sub_subject">
                <div class="row">
                    @foreach ($categories as $key => $category)
                        <div class="col-12 col-md-6 col-lg-4 subject_box">
                            <div class="subject_box_img">
                                <img src="{{ asset('/public/' . Storage::url($category->img)) }}" alt="">
                            </div>
                            <div class="subject_box_content">
                                <a href="{{route('web.subjects',$category->id)}}" class="text-decoration-none">
                                    <h1 class="main_subject_content_title mb-3">{{ $category->name }}</h1>
                                    <div class="head_title mb-5">
                                        <ul>
                                            @foreach (\App\Models\CategoryTotal::where('category_id', $category->id)->get() as $categorydesc)
                                                <li><span>{{ $categorydesc->desc }}</span><i
                                                        class="fa-solid fa-circle-check"></i>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </a>
                                <a href="{{route('web.subjects',$category->id)}}" class="btn_sub">مشاهدة الان</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
