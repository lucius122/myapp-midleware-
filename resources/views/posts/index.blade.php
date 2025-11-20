@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Posts</h1>

    @can('create', App\Models\Post::class)
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Buat Post</a>
    @endcan

    @foreach($posts as $post)
        <div class="card my-2">
            <div class="card-body">
                <h3>{{ $post->title }}</h3>
                <p>{{ Str::limit($post->body, 200) }}</p>

                <a href="{{ route('posts.show', $post) }}">Lihat</a>

                @can('update', $post)
                    <a href="{{ route('posts.edit', $post) }}">Edit</a>
                @endcan

                @can('delete', $post)
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline">
                        @csrf @method('DELETE')
                        <button type="submit" onclick="return confirm('Hapus?')">Hapus</button>
                    </form>
                @endcan
            </div>
        </div>
    @endforeach

    {{ $posts->links() }}
</div>
@endsection
