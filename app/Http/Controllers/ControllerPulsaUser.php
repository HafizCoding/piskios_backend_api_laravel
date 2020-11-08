<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datapembeliModel;
use PDF;

class ControllerPulsaUser extends Controller
{
    public function index()
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        $users = datapembeliModel::latest()->paginate(5);
        return view('users.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'nohp' => 'required',
            'id_provider' => 'required',
            'nominal' => 'required',
        ]); 

        //fungsi eloquent untuk menambah data
        datapembeliModel::create($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('users.index')
            ->with('success', 'Data transaksi Berhasil Ditambahkan');
    }

    public function show($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan id user
        $user = datapembeliModel::find($id);
        //return view('users.detail', compact('user'));
        $pdf = PDF::loadView('users.detail', compact('user'));
        return $pdf->download('laporan-pdf.pdf');
    }

    public function edit($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan id user untuk diedit
        $user = datapembeliModel::find($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'nohp' => 'required',
            'id_provider' => 'required',
        ]);

        //fungsi eloquent untuk mengupdate data inputan kita
        datapembeliModel::find($id)->update($request->all());

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('users.index')
            ->with('success', 'Data transaksi berhasil Diupdate');
    }

    public function destroy($id)
    {
        //fungsi eloquent untuk menghapus data
        datapembeliModel::find($id)->delete();
        return redirect()->route('users.index')
            ->with('success', 'Data transaksi berhasil Dihapus');
    }
    
    public function cetakpdf($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan id user
        $user = datapembeliModel::find($id);
        return view('users.cetakpdf', compact('user'));
        return $pdf->stream();
    }
}
