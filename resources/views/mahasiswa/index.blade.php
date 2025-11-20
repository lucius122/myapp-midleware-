@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
  @if(session('success'))
    <div class="mb-4 text-green-600">{{ session('success') }}</div>
  @endif
  @if(session('error'))
    <div class="mb-4 text-red-600">{{ session('error') }}</div>
  @endif

  <div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold">Daftar Mahasiswa</h1>
    @if(auth()->user()->role === 'admin')
      <a href="{{ route('mahasiswa.create') }}" class="px-4 py-2 rounded-md bg-blue-600 text-white">Tambah Mahasiswa</a>
    @endif
  </div>

  <div class="bg-white shadow rounded-md overflow-hidden">
    <table class="w-full table-auto">
      <thead>
        <tr class="bg-gray-100">
          <th class="p-2 text-left">NIM</th>
          <th class="p-2 text-left">Nama</th>
          <th class="p-2 text-left">Jurusan</th>
          <th class="p-2 text-left">Angkatan</th>
          <th class="p-2">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse($mahasiswas as $m)
        <tr class="border-b">
          <td class="p-2">{{ $m->nim }}</td>
          <td class="p-2">{{ $m->nama }}</td>
          <td class="p-2">{{ $m->jurusan }}</td>
          <td class="p-2">{{ $m->angkatan }}</td>
          <td class="p-2 text-center">
            <a href="{{ route('mahasiswa.show', $m) }}" class="px-2 py-1 rounded text-sm">Lihat</a>
            @if(auth()->user()->role === 'admin')
              <a href="{{ route('mahasiswa.edit', $m) }}" class="px-2 py-1 rounded text-sm">Edit</a>
              <form action="{{ route('mahasiswa.destroy', $m) }}" method="POST" class="inline" onsubmit="return confirm('Hapus data ini?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-2 py-1 rounded text-sm text-red-600">Hapus</button>
              </form>
            @endif
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="5" class="p-4 text-center">Belum ada data</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>

  <div class="mt-4">
    {{ $mahasiswas->links() }} <!-- pagination -->
  </div>
</div>
@endsection
