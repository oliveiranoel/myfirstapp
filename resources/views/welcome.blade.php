@extends('layout')

@section('title', 'Test Page')

@section('content')
    <h1>My {{ $foo }} app</h1>

{{--    <h1>My {!! $notEscapedData !!} app</h1>--}}

{{--    <ul>--}}
{{--        @foreach ($passingData as $data)--}}
{{--            <li>{{ $data }}</li>--}}
{{--        @endforeach--}}
{{--    </ul>--}}

@endsection
