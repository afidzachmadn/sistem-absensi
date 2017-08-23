<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeControllerAdmin extends Controller
{
    //


    public function dashboard(Request $request) {
        $id = $request->session()->get('id');
        $cek_role = DB::table('users')->where('id',$id)->first();
        if($cek_role == null){
            return view('auth.login');
        }
        else{
            $CekRole = $cek_role -> role;
            $nama_petugas = $cek_role -> nama;
            
            if($request->session()->get('login') && $CekRole == 'admin') {
                
                $hitung_terkonfirmasi = DB::table('data_absensi')->where([['status_konfirmasi','=', 'terkonfirmasi'],['petugas_konfirmasi','=', $nama_petugas],])->count();
                
                $hitung_belum_terkonfirmasi = DB::table('data_absensi')->where([['status_konfirmasi','=', null],['petugas_konfirmasi','=', null],])->count();
                
                $hitung_total =  DB::table('data_absensi')->where([['status_konfirmasi','=', null],])->count();

                //dd($hitung_total);
                return view('admin.dashboard',array('terkonfirmasi' => $hitung_terkonfirmasi, 'belum_terkonfirmasi' => $hitung_belum_terkonfirmasi, 'total' => $hitung_total));
            } 
            
            else {
                return view('auth.login');
            }
        }
   }

   public function lihat_permohonan_absensi(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    if($cek_role == null){
        return view('auth.login');
    }
    else{
        $CekRole = $cek_role -> role;
        
        if($request->session()->get('login') && $CekRole == 'admin') {
            $lihat_data = DB::table('data_absensi')->where([['status_konfirmasi','=', null],])->get();
            $CekRole = $cek_role -> role;

            return view('admin.lihat-permohonan-absensi', array('lihat_data' => $lihat_data));
        } 
        
        else {
            return view('auth.login');
        }
    }
}



public function terkonfirmasi(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    if($cek_role == null){
        return view('auth.login');
    }
    else{
        $CekRole = $cek_role -> role;
        
        if($request->session()->get('login') && $CekRole == 'admin') {
            $lihat_data = DB::table('data_absensi')->where([['status_konfirmasi','=', 'terkonfirmasi'],])->get();
            $CekRole = $cek_role -> role;

            return view('admin.terkonfirmasi', array('lihat_data' => $lihat_data));
        } 
        
        else {
            return view('auth.login');
        }
    }
}

public function data_diri(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    if($cek_role == null){
        return view('auth.login');
    }
    else{
        $CekRole = $cek_role -> role;
        
        if($request->session()->get('login') && $CekRole == 'admin') {
            $lihat_data = DB::table('users')->where('id',$id)->first();
            $CekRole = $cek_role -> role;
            return view('admin.data-diri', array('data_diri' => $lihat_data));
        } 
        
        else {
            return view('auth.login');
        }
    }
}

public function edit_data_diri(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    if($cek_role == null){
        return view('auth.login');
    }

    else{
        $CekRole = $cek_role -> role;
        
        if($request->session()->get('login') && $CekRole == 'admin') {
            $lihat_data = DB::table('users')->where('id',$id)->first();
            $CekRole = $cek_role -> role;
            return view('admin.data-diri-edit', array('data_diri' => $lihat_data));
        } 
        
        else {
            return view('auth.login');
        }
    }
}

public function edit_data_diri_proses(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    //dd($cek_role);
    if($cek_role == null){
        return view('auth.login');
    }

    else{
        $CekRole = $cek_role -> role;
        
        if($request->session()->get('login') && $CekRole == 'admin') {
            $lihat_data = DB::table('users')->where('id',$id)->first();
            $CekRole = $cek_role -> role;

            $nama = $request->get('nama');
            $nik = $request->get('nik');
            $email = $request->get('email');
            $no_hp = $request->get('no_hp');
            $bagian = $request->get('bagian');
            $jabatan = $request->get('jabatan');
    
            $file = $request->file('img');
            $fileName = $file->hashName();
            $storeFile = $file->store('public/foto');
    
            $userDb = DB::table('users')->where('id', $id)
            
                                        ->update(['nama' => $nama, 'nik' => $nik, 'email' => $email, 'no_hp' => $no_hp, 'bagian' => $bagian, 'jabatan' => $jabatan, 'img_url' => $fileName]);
            //dd($userDb);
            //dd($userDb);
            $request->session()->put('img_url', $fileName);

            return redirect()->action('HomeControllerAdmin@data_diri');
        } 
        
        else {
            return view('auth.login');
        }
    }
}




public function konfirmasi_proses(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    //dd($cek_role);
    if($cek_role == null){
        return view('auth.login');
    }

    else{
        $CekRole = $cek_role -> role;
        
        if($request->session()->get('login') && $CekRole == 'admin') {
            $CekRole = $cek_role -> role;
            $nama_petugas_konfirmasi = $cek_role -> nama;

            $no = $request->get('no');
            $nik = $request->get('nik');
            $status_konfirmasi = $request->get('status_konfirmasi');
            
            $lihat_data = DB::table('data_absensi')->where('no',$no)
                                        ->update(['status_konfirmasi' => $status_konfirmasi, 'petugas_konfirmasi' => $nama_petugas_konfirmasi]);

            return redirect()->action('HomeControllerAdmin@lihat_permohonan_absensi');
        } 
        
        else {
            return view('auth.login');
        }
    }
}


public function batal_konfirmasi_proses(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    //dd($cek_role);
    if($cek_role == null){
        return view('auth.login');
    }

    else{
        $CekRole = $cek_role -> role;
        
        if($request->session()->get('login') && $CekRole == 'admin') {
            $CekRole = $cek_role -> role;
            $nama_petugas_konfirmasi = $cek_role -> nama;

            $no = $request->get('no');
            //$nik = $request->get('nik');
           // $status_konfirmasi = $request->get('status_konfirmasi');
            
            $lihat_data = DB::table('data_absensi')->where('no',$no)
                                        ->update(['status_konfirmasi' => null, 'petugas_konfirmasi' => null]);

            return redirect()->action('HomeControllerAdmin@terkonfirmasi');
        } 
        
        else {
            return view('auth.login');
        }
    }
}






}
