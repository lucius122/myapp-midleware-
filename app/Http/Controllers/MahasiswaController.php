<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function __construct()
    {
        // hanya user authenticated boleh lihat index & show
        $this->middleware('auth');

        // protect create/store/edit/update/destroy -> hanya admin
        $this->middleware('is_admin')->except(['index','show']);
    }

    public function index()
    {
        $mahasiswas = Mahasiswa::latest()->paginate(10);
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nim' => 'required|unique:mahasiswas,nim|max:20',
            'nama' => 'required|string|max:255',
            'jurusan' => 'nullable|string|max:255',
            'angkatan' => 'nullable|digits:4',
            'email' => 'nullable|email',
            'no_hp' => 'nullable|string|max:20',
            'alamat' => 'nullable|string',
        ]);

        Mahasiswa::create($data);

        return redirect()->route('mahasiswa.index')->with('success','Mahasiswa berhasil ditambahkan.');
    }

    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $data = $request->validate([
            'nim' => 'required|unique:mahasiswas,nim,' . $mahasiswa->id . '|max:20',
            'nama' => 'required|string|max:255',
            'jurusan' => 'nullable|string|max:255',
            'angkatan' => 'nullable|digits:4',
            'email' => 'nullable|email',
            'no_hp' => 'nullable|string|max:20',
            'alamat' => 'nullable|string',
        ]);

        $mahasiswa->update($data);

        return redirect()->route('mahasiswa.index')->with('success','Data mahasiswa berhasil diupdate.');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success','Mahasiswa berhasil dihapus.');
    }
}
