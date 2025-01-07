<div class="w-full">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <h1>Blog Posts</h1>

    <a href="{{ route('create-post') }}">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Create a Post
        </button>
    </a>

    @foreach ($posts as $post)
        <div class="card offset-3 col-6">
            <div class="card-header">
                {{ $loop->index + 1 }}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->description }}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    @endforeach
    <div x-intersect="$wire.loadMore()">

    </div>
</div>
