@csrf

<div class="mb-4">
  <label class="block text-sm font-medium">NIM</label>
  <input type="text" name="nim" value="{{ old('nim', $mahasiswa->nim ?? '') }}" class="mt-1 block w-full rounded-md shadow-sm" required>
  @error('nim')<p class="text-red-500 text-sm">{{ $message }}</p>@enderror
</div>

<div class="mb-4">
  <label class="block text-sm font-medium">Nama</label>
  <input type="text" name="nama" value="{{ old('nama', $mahasiswa->nama ?? '') }}" class="mt-1 block w-full rounded-md shadow-sm" required>
  @error('nama')<p class="text-red-500 text-sm">{{ $message }}</p>@enderror
</div>

<div class="grid grid-cols-2 gap-4">
  <div class="mb-4">
    <label class="block text-sm font-medium">Jurusan</label>
    <input type="text" name="jurusan" value="{{ old('jurusan', $mahasiswa->jurusan ?? '') }}" class="mt-1 block w-full rounded-md shadow-sm">
  </div>

  <div class="mb-4">
    <label class="block text-sm font-medium">Angkatan</label>
    <input type="text" name="angkatan" value="{{ old('angkatan', $mahasiswa->angkatan ?? '') }}" class="mt-1 block w-full rounded-md shadow-sm">
  </div>
</div>

<div class="grid grid-cols-2 gap-4">
  <div class="mb-4">
    <label class="block text-sm font-medium">Email</label>
    <input type="email" name="email" value="{{ old('email', $mahasiswa->email ?? '') }}" class="mt-1 block w-full rounded-md shadow-sm">
  </div>

  <div class="mb-4">
    <label class="block text-sm font-medium">No. HP</label>
    <input type="text" name="no_hp" value="{{ old('no_hp', $mahasiswa->no_hp ?? '') }}" class="mt-1 block w-full rounded-md shadow-sm">
  </div>
</div>

<div class="mb-4">
  <label class="block text-sm font-medium">Alamat</label>
  <textarea name="alamat" class="mt-1 block w-full rounded-md shadow-sm">{{ old('alamat', $mahasiswa->alamat ?? '') }}</textarea>
</div>
