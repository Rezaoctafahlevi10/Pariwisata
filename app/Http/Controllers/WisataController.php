<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WisataController extends Controller
{
    public function index()
    {   
        #penerapan query builder, disini ada class DB mengambil tabel bernama 'pegawai_tabel' disini ada get() itu mengambil keseluruhan 
        $wisata = DB::table('wisata')
                -> orderByRaw('nama  DESC') #penerapan raw query (raw metodh)
                ->get();
        //   return $wisata;
        //   return view('index');
    	// // mengirim data wisata$wisata ke view index
		return view('index',['wisata'=> $wisata]);
    }
    public function remove($id){
         DB::table('wisata')->where('id', $id)->delete();
         return redirect('index');
    }// method untuk menampilkan view form tambah wisata$wisata
	
    public function create(){
        return view ('Tambah_wisata');
    }

    public function createSave_Db(Request $request){

        // insert data ke table wisata$wisata
		DB::table('wisata')->insert([
			'nama' => $request->nama,
            'fasilitas' => $request->fasilitas,
            'harga'=> $request -> harga,
		]);
        
		// alihkan halaman ke halaman wisata$wisata
		return redirect('/index');
    }

    public function edit($id){
       // mengambil data wisata$wisata berdasarkan id yang dipilih
	$edit = DB::table('wisata')->where('id',$id)->get();

	return view('Edit_wisata',['edit' => $edit]);
    
	// return view('Edit_pegawai');
    }

    public function updateSave_Db(Request $request){
        // update data ke table wisata$wisata
		DB::table('wisata')->where('id',$request->id)-> update([ #where raw
			'nama' => $request->nama,
            'fasilitas' => $request->fasilitas,
            'harga'=> $request -> harga,
		]);
		// alihkan halaman ke halaman wisata$wisata
		return redirect('/index');
    } 
}
