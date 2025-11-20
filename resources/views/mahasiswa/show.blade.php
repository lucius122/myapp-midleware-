@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4 max-w-xl">
  <h1 class="text-xl font-bold mb-4">Detail Mahasiswa</h1>

  <div class="bg-white p-4 shadow rounded">
    <p><strong>NIM:</strong> {{ $mahasiswa->nim }}</p>
    <p><strong>Nama:</strong> {{ $mahasiswa->nama }}</p>
    <p><strong>Jurusan:</strong> {{ $mahasiswa->jurusan }}</p>
    <p><strong>Angkatan:</strong> {{ $mahasiswa->angkatan }}</p>
    <p><strong>Email:</strong> {{ $mahasiswa->email }}</p>
    <p><strong>No HP:</strong> {{ $mahasiswa->no_hp }}</p>
    <p><strong>Alamat:</strong> {{ $mahasiswa->alamat }}</p>
  </div>

  <div class="mt-4">
    <a href="{{ route('mahasiswa.index') }}" class="px-4 py-2 rounded border">Kembali</a>
  </div>
</div>
@endsection
