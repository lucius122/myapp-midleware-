@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4 max-w-2xl">
  <h1 class="text-xl font-bold mb-4">Edit Mahasiswa</h1>

  <form action="{{ route('mahasiswa.update', $mahasiswa) }}" method="POST" class="bg-white p-4 shadow rounded">
    @method('PUT')
    @include('mahasiswa._form')
    <div class="flex justify-end mt-4">
      <a href="{{ route('mahasiswa.index') }}" class="mr-2 px-4 py-2 rounded border">Batal</a>
      <button type="submit" class="px-4 py-2 rounded bg-green-600 text-white">Update</button>
    </div>
  </form>
</div>
@endsection
