@extends('web.layouts.includes.main')
@section('content')
    <div class="wrraber">
        <section class="supject_banner mb-5">
            <div class="container">
                <div class="subject_head">
                    <h1 class="fw-bold">{{ $bookDrive->name }}</h1>
                </div>
            </div>
        </section>
        <div class="bookDriveFile_page">
            @if ($bookDriveFiles->isEmpty())
                <h3 class="text-center text-danger">لم يتم اضافة كتب ل {{$bookDrive->name}}</h3>
            @else
                <section class="driveFile">
                    <div class="container">
                        <div class="row">
                            @foreach ($bookDriveFiles as $key => $bookDriveFile)
                                <div
                                    class="col-12 col-md-6 col-lg-4 col-xl-3 driveFile_box mb-3 d-flex justify-content-center">
                                    <div class="driveFile_content text-center">
                                        <div class="driveFile_img">
                                            <img src="{{asset('/public/' . Storage::url($bookDriveFile->img))}}" alt="">
                                        </div>
                                        <div class="driveFile_info">
                                            <p>{{ $bookDriveFile->name }}</p>
                                            <a href="{{ asset('/public/' . Storage::url($bookDriveFile->file)) }}"
                                                class="btn btn-info fw-bold btn_download"
                                                download="{{ $bookDriveFile->name }}">تحميل</a>
                                            <a href="{{ route('web.bookDriveFile.content', $bookDriveFile->id) }}"
                                                class="btn btn-success fw-bold btn_read">قراءة</a>
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
