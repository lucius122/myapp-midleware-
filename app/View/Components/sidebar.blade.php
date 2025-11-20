<!-- Contoh: di sidebar -->
<ul>
  <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
  <li><a href="{{ route('mahasiswa.index') }}">Mahasiswa</a></li>
  @if(auth()->user()->role === 'admin')
    <li><a href="{{ route('mahasiswa.create') }}" class="text-green-600">Tambah Mahasiswa</a></li>
  @endif
</ul>
