@extends('web.layouts.includes.main')
@section('content')
    <div class="wrraber">
        <div class="drives_page">
            <section class="drives">
                <div class="container">
                    <div class="row">
                        @foreach ($drives as $key => $drive)
                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 drive_box" data-aos="fade-up">
                                <div class="drive_content mb-3">
                                    <a href="#" class="d-flex justify-content-around text-decoration-none">
                                        <div class="drive_icon"><i class="fa-solid fa-folder"></i></div>
                                        <div class="drive_name">{{ $drive->name }}</div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
