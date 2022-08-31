@extends('layouts.master')

@section('title' , $title)
@section('header_tags')
    @foreach ($css_files as $css_file)
        <link rel="stylesheet" href="{{ $css_file }}">
    @endforeach
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop
@section('content')

    {!! $output !!}

@stop
@section('footer_tags')
    @foreach ($js_files as $js_file)
        <script src="{{ $js_file }}"></script>
    @endforeach
    <script>
        if (typeof $ !== 'undefined') {
            $(document).ready(function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            });
        }
    </script>
@stop
