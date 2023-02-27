@extends('layouts.default') @section('content')
    <h1 class="text-6xl font-bold text-lilac">Heading</h1>

    <div class="container grid w-screen grid-cols-4">
        <div class="aspect-square bg-red"></div>
        <div class="aspect-square bg-lilac"></div>
        <div class="aspect-square bg-teal"></div>
        <div class="aspect-square bg-gray"></div>
    </div>

    @foreach (\App\Models\Production::all() as $production)
        <a href="{{ route('production.show', ['production' => $production->slug]) }}">PRODUCTION:
            {{ $production->title }}</a>
    @endforeach
@endsection
