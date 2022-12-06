@extends('web.layouts.includes.main')
@section('content')
    <div class="wrraber">
        <section>
            <figure>
                <iframe src="{{ asset('/public/' . Storage::url($bookDriveFile->file)) }}" frameborder="0" width="100%"
                    style="height: 100vh;"></iframe>
            </figure>
            {{-- <embed src="{{ asset('/public/' . Storage::url($subject->file)) }}" width="100%"
                style="height: 100vh;" /> --}}
        </section>
    </div>
@endsection
