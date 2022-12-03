@extends('admin.layouts.includes.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                {{-- start card --}}
                <div class="row mt-1">
                    <div class="col-sm-12 col-lg-12">
                        <div class="card">
                            <div class="card-header header-bg">
                                <h3 class="card-title header-title">اضافة ملف لمجلد</h3>
                            </div>
                            @include('admin.layouts.alerts.success')
                            @include('admin.layouts.alerts.error')
                            <form class="form-horizontal" action="{{ route('driveFile.update', $driveFile->id) }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    {{-- row 1 --}}
                                    <div class="row mb-3">
                                        <div class="col-md-9 row">
                                            <div class="col-sm-4 form-floating mb-3">
                                                <input type="date" class="form-control" value="{{ $driveFile->date }}"
                                                    id="date" placeholder="التاريخ" name="date">
                                                <label for="date" class="col-form-label">التاريخ
                                                </label>
                                            </div>
                                            <div class="col-sm-4 form-floating mb-3">
                                                <select required="required" class="form-control" name="drive_id"
                                                    id="drive_id">
                                                    <option value="">اختر المجلد</option>
                                                    @foreach ($drives as $key => $drive)
                                                        <option value="{{ $drive->id }}"
                                                            @if ($driveFile->drive_id == $drive->id) selected @endif>
                                                            {{ $drive->name }}</option>
                                                    @endforeach
                                                </select>
                                                <label for="drive_id" class="col-form-label">اختر المجلد</label>
                                            </div>
                                            <div class="col-sm-4 form-floating mb-3">
                                                <input type="text" class="form-control" value="{{ $driveFile->name }}"
                                                    id="name" placeholder="اسم الملف" name="name">
                                                <label for="name" class="col-form-label">اسم الملف</label>
                                            </div>
                                            <div class="col-sm-4 form-floating mb-3">
                                                <div class="heading d-flex" id="btn_img">
                                                    <div class="icon"><i class="fa-regular fa-image"></i></div>
                                                    <div class="heading_div" id="auther">
                                                        اضف صورة
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 form-floating mb-3" hidden>
                                                <input type="file" class="form-control" id="upload_img"
                                                    placeholder="اضف صورة" name="img">
                                                <label for="img" class="col-form-label">اضف صورة
                                                </label>
                                            </div>
                                            <div class="col-sm-4 form-floating mb-3">
                                                <div class="heading d-flex" id="btn_file">
                                                    <div class="icon"><i class="fa-regular fa-file"></i></div>
                                                    <div class="heading_div" id="auther">
                                                        اضف ملف الشرح
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 form-floating mb-3" hidden>
                                                <input type="file" class="form-control" id="upload_file"
                                                    placeholder="اضف ملف الشرح" name="file">
                                                <label for="file" class="col-form-label">اضف ملف الشرح
                                                </label>
                                            </div>
                                            <div class="col-sm-4 form-floating mb-3">
                                                <div class="heading d-flex" id="btn_video">
                                                    <div class="icon"><i class="fa-regular fa-circle-play"></i></div>
                                                    <div class="heading_div" id="auther">
                                                        اضف فيديو الشرح
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 form-floating mb-3" hidden>
                                                <input type="file" class="form-control" id="upload_video"
                                                    placeholder="اضف صورة" name="video">
                                                <label for="video" class="col-form-label">اضف فيديو الشرح
                                                </label>
                                            </div>
                                            <div class="col-sm-4 form-floating mb-3">
                                                <textarea class="form-control" rows="1" placeholder="نبذة ..." name="notes" id="note">{{ $driveFile->notes }}</textarea>
                                                <label for="note" class="col-form-label">نبذة
                                                </label>
                                            </div>
                                        </div>
                                        {{-- row 1 --}}
                                        <div class="col-md-3">
                                            <img src="{{ asset('/public/' . Storage::url($driveFile->img)) }}"
                                                style="max-width: 100%;" id="imgshow">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn bg-success-2 mr-3">
                                        <i class="fa fa-check text-light" aria-hidden="true"></i>
                                    </button>
                                    <button type="reset" class="btn bg-secondary" onclick="history.back()"
                                        type="submit">
                                        <i class="fas fa-undo"></i>
                                    </button>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        let btnImg = document.getElementById('btn_img'),
            btnVideo = document.getElementById('btn_video'),
            imgFile = document.getElementById('upload_img'),
            btnFile = document.getElementById('btn_file'),
            uploadFile = document.getElementById('upload_file'),
            videoFile = document.getElementById('upload_video');

        btnImg.addEventListener('click', () => {
            imgFile.click()
        })

        btnFile.addEventListener('click', () => {
            uploadFile.click()
        })

        btnVideo.addEventListener('click', () => {
            videoFile.click()
        })
    </script>
@endsection
