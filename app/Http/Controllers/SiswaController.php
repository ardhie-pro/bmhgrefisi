<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function tampil()
    {
        $data = Siswa::get();
        return view('siswa.tampil', compact('data'));
    }

    function input(Request $request)
    {
        $siswa = new Siswa();
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->nomer_tlp = $request->nomer_tlp;
        $siswa->hoby = $request->hoby;
        $siswa->save();
        return redirect()->route('siswa.tampil');
    }
    function edit($id)
    {
        $data = Siswa::find($id);
        return view('siswa.edit', compact('data'));
    }
    function update(Request $request, $id)
    {
        $siswa = Siswa::find($id);
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->nomer_tlp = $request->nomer_tlp;
        $siswa->hoby = $request->hoby;
        $siswa->update();
        return redirect()->route('siswa.tampil');
    }
    function delete($id)
    {
        $data = Siswa::find($id);
        $data->delete();
        return redirect()->route('siswa.tampil');
    }
}
