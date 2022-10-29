@extends('web.layouts.includes.main')
@section('content')
    <div class="wrraber">
        <section class="subject_details">
            <div class="container">
                <div class="row">
                    <div class="subject_details_content">
                        <div class="video">
                            <video controls>
                                <source src="{{ asset('/public/' . Storage::url($subject->video)) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <a href="{{ asset('/public/' . Storage::url($subject->video)) }}" class="btn btn-info fw-bold"
                            download="{{ $subject->name }}">تحميل</a>
                        <a href="{{ asset('/public/' . Storage::url($subject->video)) }}" class="btn btn-success fw-bold"
                            download="{{ $subject->name }}">قراءة</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
