@section('image', $post->image?->getUrl('thumbnail'))
@section('title', $post->title)
@extends('layouts.default') @section('content')
    @include('flexible.post-hero', ['layout' => $post])
    <article>
        @foreach ($post->content as $layout)
            @include('flexible.' . $layout->name(), ['layout' => $layout])
        @endforeach
    </article>

    <div class="container mt-16">
        <h2 class="mb-12 text-4xl font-bold">More of our latest news</h2>
        <div class="my-16 grid gap-16 bg-white lg:grid-cols-3">
            @foreach ($related_posts as $related_post)
                <x-post-card :post="$related_post" />
            @endforeach
        </div>
    </div>
@endsection
