@extends('web.layouts.includes.main')
@section('content')
    <div class="wrraber">
        <section>
            <embed src="{{ asset('/public/' . Storage::url($subject->file)) }}" width="100%"
                style="height: 100vh;" />
        </section>
    </div>
@endsection
