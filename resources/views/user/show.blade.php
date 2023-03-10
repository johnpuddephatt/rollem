@section('image', $user->photo?->getUrl('thumbnail'))

@section('title', $user->name)
@extends('layouts.default') @section('content')
    @include('components.user-hero')

    <div class="min-h-[50vh] bg-white pt-8 pb-32 lg:pt-16">
        <div class="container">
            <div class="text-3xl font-bold lg:text-5xl">{{ $user->role }}</div>
            <div class="lg prose mt-8 lg:mt-16">
                {!! $user->biography !!}
            </div>
        </div>
    </div>
@endsection
