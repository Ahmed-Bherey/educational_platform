@extends('web.layouts.includes.main')
@section('content')
    <section class="supject_banner mb-5">
        <div class="container">
            <div class="subject_head">
                <h1 class="fw-bold">{{ $sub_cat_subject->name }}</h1>
            </div>
        </div>
    </section>
    @if ($sub_cat_subjects->isEmpty())
        <h3 class="text-center text-danger">لم يتم اضافة دروس ل {{ $sub_cat_subject->name }} بعد</h3>
    @else
        <section class="subject_all position-relative">
            <div class="overflew position-fixed" id="overflew"></div>
            <div class="container">
                <div class="row">
                    @foreach ($sub_cat_subjects as $key => $sub_cat_subject)
                        <div class="col-12 col-md-6 col-lg-4 subject_all_box mb-5">
                            <a href="{{ route('web.subject.details', $sub_cat_subject->id) }}">
                                <div class="subject__all_box_content position-relative">
                                    <div class="subject__all_img imgBtn">
                                        <img src="{{ asset('/public/' . Storage::url($sub_cat_subject->img)) }}"
                                            alt="">
                                    </div>
                                    <div class="subject__all_title position-absolute text-end">
                                        <h3 class="title fw-bold">
                                            <a href="#" class="text-decoration-none">{{ $sub_cat_subject->name }}</a>
                                        </h3>
                                        <a href="{{ route('web.subject.content', $sub_cat_subject->id) }}"
                                            style="width: 70%" class="btn btn-primary fw-bold">قراءة</a>
                                        <p class="date fw-bold">{{ $sub_cat_subject->date }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
