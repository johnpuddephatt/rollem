@if ($layout->posts)
    <div class="container my-16 grid gap-16 lg:grid-cols-3">
        @foreach ($layout->posts as $post)
            <x-post-card class="" :post="$post" />
        @endforeach
    </div>
@endif
