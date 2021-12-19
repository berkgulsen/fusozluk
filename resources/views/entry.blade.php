@extends('front.layouts.master')
@section('title',$title->title)
@section('content')
    @include('widget.titlewidget')
    @include('widget.topnavwidget')
    <div class="container-fluid">

        <div class="card-header mb-3 mt-3 fw-bolder fs-3">
            {{$title->title}}
        </div>
        @foreach($entries as $entry)
            <div class="card mb-3">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>{!! $entry->content !!}</p>
                        <footer class="blockquote-footer">author will write here</footer>
                    </blockquote>
                </div>
            </div>
        @endforeach

        <div class="d-flex justify-content-center">
            {{ $entries->links() }}
        </div>
@endsection
