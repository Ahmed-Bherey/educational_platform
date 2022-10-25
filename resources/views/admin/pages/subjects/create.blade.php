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
                                <h3 class="card-title header-title">اضافة درس</h3>
                            </div>
                            @include('admin.layouts.alerts.success')
                            @include('admin.layouts.alerts.error')
                            <form class="form-horizontal" action="{{ route('subject.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    {{-- row 1 --}}
                                    <div class="row mb-3">
                                        <div class="col-sm-4 form-floating">
                                            <input type="date" class="form-control" value="{{ date('Y-m-d') }}"
                                                id="date" placeholder="التاريخ" name="date">
                                            <label for="date" class="col-form-label">التاريخ
                                            </label>
                                        </div>
                                        <div class="col-sm-4 form-floating">
                                            <select required="required" class="form-control" name="category_id"
                                                id="category_id">
                                                <option value="">اختر التصنيف</option>
                                                @foreach ($categories as $key => $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            <label for="category_id" class="col-form-label">اختر التصنيف</label>
                                        </div>
                                        <div class="col-sm-4 form-floating">
                                            <input type="text" class="form-control" id="name"
                                                placeholder="اسم الدرس" name="name">
                                            <label for="name" class="col-form-label">اسم الدرس</label>
                                        </div>
                                    </div>
                                    {{-- row 1 --}}
                                    <div class="row mb-3">
                                        <div class="col-sm-4 form-floating">
                                            <input type="file" class="form-control" id="img" placeholder="اضف صورة"
                                                name="img">
                                            <label for="img" class="col-form-label">اضف صورة
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn bg-success-2 mr-3">
                                        <i class="fa fa-check text-light" aria-hidden="true"></i>
                                    </button>
                                    <button type="reset" class="btn bg-secondary" onclick="history.back()" type="submit">
                                        <i class="fas fa-undo"></i>
                                    </button>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-sm-12 col-md-12  col-lg-12 col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title" style="float:right; font-weight:bold;">الدروس
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="example1"
                                                class="table table-bordered table-striped dataTable dtr-inline"
                                                aria-describedby="example1_info">
                                                <thead>
                                                    <tr>
                                                        <td>#</td>
                                                        <td>التاريخ</td>
                                                        <td>التصنيف</td>
                                                        <td>الدرس</td>
                                                        <td>الصورة</td>
                                                        <td>عمليات</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($subjects as $key => $subject)
                                                        <tr class="odd">
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $subject->date }}</td>
                                                            <td>{{ $subject->categories->name }}</td>
                                                            <td>{{ $subject->name }}</td>
                                                            <td>
                                                                <img src="{{ asset('/public/' . Storage::url($subject->img)) }}"
                                                                    id="imgshow" height="50vh">
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('subject.edit', $subject->id) }}"
                                                                    type="submit" class="btn bg-secondary"><i
                                                                        class="far fa-edit" aria-hidden="true"></i></a>
                                                                <a href="{{ route('subject.destroy', $subject->id) }}"
                                                                    type="submit" onclick="return confirm('Are you sure?')"
                                                                    class="btn btn-danger"><i
                                                                        class="fas fa-trash-alt"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                {{-- end table --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
