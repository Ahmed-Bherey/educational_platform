@extends('web.layouts.includes.main')
@section('content')
    <div class="wrraber">
        <section>
            <embed src="{{ asset('/public/' . Storage::url($subject->file)) }}" width="100%" height="2100px"
                style="margin: auto;" />
        </section>
    </div>
@endsection
