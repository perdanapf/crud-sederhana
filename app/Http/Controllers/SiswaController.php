<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SiswaModel;

class SiswaController extends Controller
{

    public function index()
    {
        $data = array(  
            'dt_siswa' => SiswaModel::all()
        );

        return view('siswa.list', $data);
    }
    
    public function insert(Request $request)
    {
       if ($request->isMethod('post')) {
        $siswa = new SiswaModel();
        $siswa->nis_siswa = $request->input('nis');
        $siswa->nama_siswa = $request->input('nama');
        $siswa->alamat_siswa = $request->input('alamat');
        $siswa->save();
        return redirect('siswa')-> with(['pesan' => 'Data Siswa Berhasil di Simpan']);
       }
        return view('siswa.form');
    }
    
    public function ubah (Request $request, $id) {
        $siswa = SiswaModel::find($request->id);
        $data = array(
            'siswa' => $siswa
        );
        if ($request->isMethod('post')) {
            $siswa->nis_siswa = $request->input('nis');
            $siswa->nama_siswa = $request->input('nama');
            $siswa->alamat_siswa = $request->input('alamat');
            $siswa->save();
            return redirect('siswa')-> with(['pesan' => 'Data Siswa Berhasil di Update!']);
        }
        return view('siswa.form', $data);
    }

    public function hapus($id) {
        $siswa = SiswaModel::find($id);
        $siswa->delete();
        return redirect('siswa')-> with(['pesan' => 'Data Siswa Berhasil di Hapus!']);
    }

   
}
