@extends('web.layouts.includes.main')
@section('content')
    <section class="supject_banner mb-5">
        <div class="container">
            <div class="subject_head">
                <h1 class="fw-bold">{{ $category->name }}</h1>
            </div>
        </div>
    </section>
    @if ($sub_subjects->isEmpty())
        <h3 class="text-center text-danger">لم يتم اضافة دروس ل {{ $category->name }} بعد</h3>
    @else
        <section class="subject_all position-relative">
            <div class="overflew position-fixed" id="overflew"></div>
            <div class="container">
                <div class="row">
                    @foreach ($sub_subjects as $key => $sub_subject)
                        <div class="col-12 col-md-6 col-lg-4 subject_all_box mb-5">
                            <div class="subject__all_box_content position-relative">
                                <div class="subject__all_img imgBtn">
                                    <img src="{{ asset('/public/' . Storage::url($sub_subject->img)) }}" alt="">
                                </div>
                                <div class="position-absolute subject_video" id="subject_video">
                                    <video controls>
                                        <source src="{{ asset('/public/' . Storage::url($sub_subject->video)) }}"
                                            type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                                <div class="subject__all_title position-absolute text-end">
                                    <h3 class="title fw-bold">
                                        <a href="#" class="text-decoration-none">{{ $sub_subject->name }}</a>
                                    </h3>
                                    <p class="date fw-bold">{{ $sub_subject->date }}</p>
                                    {{ $sub_subject->name }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
