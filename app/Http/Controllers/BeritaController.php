<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kategori;
use Exception;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $berita  = Berita::with('kategori')->get();
        return view('backend.content.berita.list', compact('berita'));
    }

    public function tambah()
    {
        $kategori = Kategori::all();
        return view('backend.content.berita.formTambah', compact('kategori'));
    }

    public function prosesTambah(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'kategori_id' => 'required|exists:kategoris,id',
            'abstrak' => 'required',
            'penulis' => 'required',
            'tahun' => 'required|digits:4|integer',
            'file' => 'required|mimes:pdf|max:2048'
        ]);

        $berita = new Berita();
        $berita->judul = $request->judul;
        $berita->abstrak = $request->abstrak;
        $berita->id_kategori = $request->kategori_id; // <-- ini yang benar
        $berita->penulis = $request->penulis;
        $berita->tahun = $request->tahun;

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/jurnal', $namaFile);
            $berita->file = $namaFile;
        }

        try {
            $berita->save();
            return redirect(route('berita.index'))->with('pesan', ['success','Berhasil tambah data']);
        }catch(Exception $e){
            return redirect(route('berita.index'))->with('pesan', ['danger','Gagal tambah data']);
        }
    }

    public function ubah($id)
    {
        $berita = Berita::findOrFail($id);
        $kategori = Kategori::all();
        return view('backend.content.berita.formUbah', compact('berita', 'kategori'));
    }

    public function prosesUbah(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'judul' => 'required',
            'kategori_id' => 'required|exists:kategoris,id',
            'abstrak' => 'required',
            'penulis' => 'required',
            'tahun' => 'required|digits:4|integer',
            'file' => 'nullable|mimes:pdf|max:2048'
        ]);


        $berita = Berita::findOrFail($request->id);
        $berita->judul = $request->judul;
        $berita->abstrak = $request->abstrak;
        $berita->id_kategori = $request->kategori_id;
        $berita->penulis = $request->penulis;
        $berita->tahun = $request->tahun;

        if ($request->hasFile('file')) {
            // hapus file lama
            if ($berita->file && Storage::exists('public/jurnal/' . $berita->file)) {
                Storage::delete('public/jurnal/' . $berita->file);
            }

            $file = $request->file('file');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/jurnal', $namaFile);
            $berita->file = $namaFile;
        }

        try {
            $berita->save();
            return redirect(route('berita.index'))->with('pesan', ['success','Berhasil ubah jurnal']);
        }catch(Exception $e){
            return redirect(route('berita.index'))->with('pesan', ['danger','Gagal ubah jurnal']);
        }
    }

    public function hapus($id)
    {
        $berita = Berita::findOrFail($id);

        try {
            if ($berita->file && Storage::exists('public/jurnal/' . $berita->file)) {
                Storage::delete('public/jurnal/' . $berita->file);
            }
            $berita->delete();
            return redirect(route('berita.index'))->with('pesan', ['success','Berhasil hapus jurnal']);
        }catch(Exception $e){
            return redirect(route('berita.index'))->with('pesan', ['danger','Gagal hapus jurnal']);
        }
    }
}
