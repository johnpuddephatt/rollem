@section('title', $page->title)
@extends('layouts.default') @section('content')
    @foreach ($page->content as $layout)
        @include('flexible.' . $layout->name(), ['layout' => $layout])
    @endforeach
@endsection
