@extends('web.layouts.includes.main')
@section('content')
    <div class="wrraber">
        <section class="subject_all position-relative">
            <div class="overflew position-fixed" id="overflew"></div>
            <div class="container">
                <div class="row">
                    @foreach ($subjects as $key => $subject)
                        <div class="col-12 col-md-6 col-lg-4 subject_all_box">
                            <a href="{{ route('web.subject.details', $subject->id) }}">
                                <div class="subject__all_box_content position-relative">
                                    <div class="subject__all_img imgBtn">
                                        <img src="{{ asset('/public/' . Storage::url($subject->img)) }}" alt="">
                                    </div>
                                    <div class="subject__all_title position-absolute text-end">
                                        <h3 class="title fw-bold">
                                            <a href="#" class="text-decoration-none">{{ $subject->name }}</a>
                                        </h3>
                                        <div class="d-flex justify-content-around btns">
                                            <a href="{{ route('download', $subject->id) }}"
                                                class="btn btn-info fw-bold">تحميل</a>
                                            <a href="{{ route('web.subject.content', $subject->id) }}"
                                                class="btn btn-success fw-bold">قراءة</a>
                                        </div>
                                        <p class="date fw-bold">{{ $subject->date }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
