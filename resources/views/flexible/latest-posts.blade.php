@if ($layout->posts->count())
    <div class="container my-16 grid gap-16 bg-white lg:grid-cols-3">
        @foreach ($layout->posts as $post)
            <x-post-card class="" :post="$post" />
        @endforeach
    </div>
@endif
