@extends('web.layouts.includes.main')
@section('content')
    <section class="supject_banner">
        <div class="container">
            <div class="subject_head">
                <h1 class="fw-bold">{{ $subject->name }}</h1>
            </div>
        </div>
    </section>
    <div class="wrraber">
        <section class="subject_details">
            <div class="container">
                <div class="row flex-column">
                    <div class="subject_details_content">
                        <div class="video">
                            @if ($subject->video != null)
                                <video controls>
                                    <source src="{{ asset('/public/' . Storage::url($subject->video)) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            @else
                                <embed src="{{ asset('/public/' . Storage::url($subject->file)) }}" width="70%"
                                    height="300px" />
                            @endif
                        </div>
                    </div>
                    <div class="explain">
                        <p>
                            {{ $subject->explain }}
                        </p>
                        <a href="{{ route('download', $subject->id) }}" class="btn btn-info fw-bold">تحميل</a>
                        <a href="{{ route('web.subject.content', $subject->id) }}" class="btn btn-success fw-bold">قراءة</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
