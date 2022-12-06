@extends('web.layouts.includes.master')
@section('content')
    @include('admin.layouts.alerts.success')
    @include('admin.layouts.alerts.error')
    <section class="master_cat">
        <div class="container">
            <div class="row">
                <a href="{{ route('web.eduPlatform') }}"
                    class="col-12 col-md-6 col-lg-4 master_cat_box text-decoration-none mb-3">
                    <div class="master_cat_content d-flex justify-content-between align-items-center">
                        <div class="title">منصة الأولياء والتلاميذ</div>
                        <div class="icon"><i class="fa-solid fa-people-roof"></i></div>
                    </div>
                </a>
                <a href="{{route('web.drives')}}" class="col-12 col-md-6 col-lg-4 master_cat_box text-decoration-none mb-3">
                    <div class="master_cat_content d-flex justify-content-between align-items-center">
                        <div class="title">منصة الأساتذة</div>
                        <div class="icon"><i class="fa-solid fa-list-check"></i></div>
                    </div>
                </a>
                <a href="{{route('web.bookDrive')}}" class="col-12 col-md-6 col-lg-4 master_cat_box text-decoration-none mb-3">
                    <div class="master_cat_content d-flex justify-content-between align-items-center">
                        <div class="title">منصة الكتب الجامعية</div>
                        <div class="icon"><i class="fa-solid fa-book-open"></i></div>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection
