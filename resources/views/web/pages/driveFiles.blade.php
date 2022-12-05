@extends('web.layouts.includes.main')
@section('content')
    <div class="wrraber">
        <section class="supject_banner mb-5">
            <div class="container">
                <div class="subject_head">
                    <h1 class="fw-bold">{{ $drive->name }}</h1>
                </div>
            </div>
        </section>
        <div class="driveFile_page">
            @if ($driveFiles->isEmpty())
                <h3 class="text-center text-danger">لا يوجد ملفات لهذا المجلد</h3>
            @else
                <section class="driveFile">
                    <div class="container">
                        <div class="row">
                            @foreach ($driveFiles as $key => $driveFile)
                                <div class="col-12 col-md-6 col-lg-4 col-xl-3 driveFile_box mb-3 d-flex justify-content-center">
                                    <div class="driveFile_content text-center">
                                        <div class="driveFile_img">
                                            <img src="{{ asset('/public/' . Storage::url($driveFile->img)) }}"
                                                alt="">
                                        </div>
                                        <div class="driveFile_info">
                                            <p>{{ $driveFile->name }}</p>
                                            <a href="{{ asset('/public/' . Storage::url($driveFile->file)) }}"
                                                class="btn btn-info fw-bold" download="{{ $driveFile->name }}">تحميل</a>
                                            <a href="{{ route('web.driveFiles.content', $driveFile->id) }}"
                                                class="btn btn-success fw-bold">قراءة</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            @endif
        </div>
    </div>
@endsection
