@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto py-8">
    <div class="bg-white shadow rounded p-6">
        <h1 class="text-2xl font-semibold mb-2">Dashboard</h1>
        <p class="text-gray-600">You're logged in!</p>

        <div class="mt-6 flex flex-wrap gap-3">
            <a href="{{ route('posts.index') }}" class="inline-block px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">
                Kelola Posts
            </a>

            @can('create', App\Models\Post::class)
                <a href="{{ route('posts.create') }}" class="inline-block px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
                    Buat Post Baru
                </a>
            @endcan
        </div>
    </div>
</div>
@endsection
