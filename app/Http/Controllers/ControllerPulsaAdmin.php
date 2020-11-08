<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datapembeliModel;
use PDF;

class ControllerPulsaAdmin extends Controller
{
    public function index()
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        $admins = datapembeliModel::latest()->paginate(5);
        return view('admins.index', compact('admins'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function show($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan id user
        $user = datapembeliModel::find($id);
        //return view('users.detail', compact('user'));
        $pdf = PDF::loadView('users.detail', compact('user'));
        return $pdf->download('laporan-pdf.pdf');
    }

    public function destroy($id)
    {
        //fungsi eloquent untuk menghapus data
        datapembeliModel::find($id)->delete();
        return redirect()->route('users.index')
            ->with('success', 'Data transaksi Berhasil Dihapus');
    }
    public function edit($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan id user untuk diedit
        $admin = datapembeliModel::find($id);
        return view('admins.edit', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'status' => 'required',
        ]);

        //fungsi eloquent untuk mengupdate data inputan kita
        datapembeliModel::find($id)->update($request->all());

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('admins.index')
            ->with('success', 'Data transaksi berhasil Diupdate');
    }

    
    public function cetakpdf($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan id user
        $user = datapembeliModel::find($id);
        return view('users.cetakpdf', compact('user'));
        return $pdf->stream();
    }
}
