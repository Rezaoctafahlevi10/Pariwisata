<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {   
        #penerapan query builder, disini ada class DB mengambil tabel bernama 'pegawai_tabel' disini ada get() itu mengambil keseluruhan 
        $pegawai = DB::table('pegawai_table')->get();
        //   return $pegawai;
        //   return view('index');
    	// // mengirim data pegawai ke view index
		return view('index',['pegawai'=> $pegawai]);
    }
    public function remove($id){
         DB::table('pegawai_table')->where('id', $id)->delete();
         return redirect('index');
    }// method untuk menampilkan view form tambah pegawai
	
    public function create(){
        return view ('Tambah_pegawai');
    }

    public function CreateSave_Db(Request $request){

        // insert data ke table pegawai
		DB::table('pegawai_table')->insert([
			'nama' => $request->nama,
			'alamat' => $request->alamat,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/index');
  
    }
}
