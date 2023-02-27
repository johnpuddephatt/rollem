@extends('layouts.default') @section('content')
    @include('components.user-hero')

    <div class="bg-white min-h-[50vh] pt-16 pb-32">
        <div class="container">
            <div class="text-5xl font-bold">{{ $user->role }}</div>
            <div class="prose mt-16">
                {!! $user->biography !!}
            </div>
        </div>
    </div>
@endsection
