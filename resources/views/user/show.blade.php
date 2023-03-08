@section('image', $user->photo?->getUrl('thumbnail'))

@section('title', $user->name)
@extends('layouts.default') @section('content')
    @include('components.user-hero')

    <div class="min-h-[50vh] bg-white pt-16 pb-32">
        <div class="container">
            <div class="text-5xl font-bold">{{ $user->role }}</div>
            <div class="prose mt-16">
                {!! $user->biography !!}
            </div>
        </div>
    </div>
@endsection
