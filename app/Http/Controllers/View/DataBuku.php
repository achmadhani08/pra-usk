<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Penerbit;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DataBuku extends Controller
{
    // Show View
    public function penerbit()
    {
        $penerbits = Penerbit::all();
        return view('admin.penerbit', compact('penerbits'));
    }
    public function kategori()
    {
        $kategoris = Kategori::all();
        return view('admin.kategori', compact('kategoris'));
    }
    public function buku()
    {
        $bukus = Buku::all();
        $kategoris = Kategori::all();
        $penerbits = Penerbit::all();

        return view('admin.buku', compact('bukus', 'kategoris', 'penerbits'));
    }

    // Store Data
    public function submit_penerbit(Request $request)
    {
        // Stored data validation
        $rules = [
            'kode' => 'required|unique:penerbits',
            'nama' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            $errors = $validator->errors();

            return redirect()->route('admin.penerbit')->with('status', 'danger')->with('message', "Gagal Menambah Penerbit, " . $errors);
        }
        try {
            Penerbit::create(
                $request->all()
            );
            return redirect()->route('admin.penerbit')->with(
                'status',
                'success'
            )->with('message', 'Berhasil Menambah Penerbit');
        } catch (Exception $e) {
            return redirect()->route('admin.penerbit')->with('status', 'danger')->with('message', "Gagal Menambah Penerbit" . $e);
        }
    }
    public function submit_kategori(Request $request)
    {
        // Stored data validation
        $rules = [
            'kode' => 'required|unique:kategoris',
            'nama' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            $errors = $validator->errors();

            return redirect()->route('admin.kategori')->with('status', 'danger')->with('message', "Gagal Menambah Kategori, " . $errors);
        }
        try {
            Kategori::create(
                $request->all()
            );
            return redirect()->route('admin.kategori')->with(
                'status',
                'success'
            )->with('message', 'Berhasil Menambah Kategori');
        } catch (Exception $e) {
            return redirect()->route('admin.kategori')->with('status', 'danger')->with('message', "Gagal Menambah Kategori" . $e);
        }
    }
    public function submit_buku(Request $request)
    {
        // Stored data validation
        $rules = [
            'judul' => 'required',
            'kategori_id' => 'required',
            'penerbit_id' => 'required',
            'tahun_terbit' => 'required',
            'pengarang' => 'required',
            'j_buku_baik' => 'required',
            'j_buku_buruk' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            $errors = $validator->errors();

            return redirect()->route('admin.buku')->with('status', 'danger')->with('message', "Gagal Menambah Buku, " . $errors);
        }
        try {
            Buku::create(
                $request->all()
            );
            return redirect()->route('admin.buku')->with(
                'status',
                'success'
            )->with('message', 'Berhasil Menambah Buku');
        } catch (Exception $e) {
            return redirect()->route('admin.buku')->with('status', 'danger')->with('message', "Gagal Menambah Buku" . $e);
        }
    }

    // Delete Data
    public function hapus_penerbit($id)
    {
        $penerbit = Penerbit::findOrFail($id);
        $penerbit->delete();

        if ($penerbit) {
            return redirect()->back()->with('status', 'success')->with('message', 'Penerbit berhasil dihapus');
        }
        return redirect()->back()->with('status', 'danger')->with('message', 'Penerbit gagal dihapus');
    }
    public function hapus_kategori($id)
    {
        // dd($id);
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        if ($kategori) {
            return redirect()->back()->with('status', 'success')->with('message', 'Kategori berhasil dihapus');
        }
        return redirect()->back()->with('status', 'danger')->with('message', 'Kategori gagal dihapus');
    }
    public function hapus_buku($id)
    {
        // dd($id);
        $buku = Buku::findOrFail($id);
        $buku->delete();

        if ($buku) {
            return redirect()->back()->with('status', 'success')->with('message', 'Buku berhasil dihapus');
        }
        return redirect()->back()->with('status', 'danger')->with('message', 'Buku gagal dihapus');
    }
}
