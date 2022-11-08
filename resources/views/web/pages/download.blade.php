@extends('web.layouts.includes.main')
@section('content')
    <section class="supject_banner">
        <div class="container">
            <div class="subject_head">
                <h1 class="fw-bold">{{ $subject->name }}</h1>
            </div>
        </div>
    </section>
        <section class="subject_details">
            <div class="container">
                <div class="row">
                    <h3 class="text-center mt-5">للتحميل اضغط <a
                            href="{{ asset('/public/' . Storage::url($subject->file)) }}"
                            download="{{ $subject->name }}">هنا</a></h3>
                </div>
            </div>
        </section>
@endsection
