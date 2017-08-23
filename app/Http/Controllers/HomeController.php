<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    //

    public function dashboard(Request $request) {
        $id = $request->session()->get('id');
        $cek_role = DB::table('users')->where('id',$id)->first();
        //dd($cek_role);
        if($cek_role == null){
            return view('auth.login');
        }
        else{
            $CekRole = $cek_role -> role;
            
            if($request->session()->get('login') && $CekRole == 'user') {
                
                $hitung_terkonfirmasi = DB::table('data_absensi')->where([['status_konfirmasi','=', 'terkonfirmasi'],['id','=', $id],])->count();
                
                $hitung_belum_terkonfirmasi = DB::table('data_absensi')->where([['status_konfirmasi','=', null],['id','=', $id],])->count();
                
                $hitung_total =  DB::table('data_absensi')->where([['id','=', $id],])->count();

                //dd($hitung_total);
                return view('user.dashboard',array('terkonfirmasi' => $hitung_terkonfirmasi, 'belum_terkonfirmasi' => $hitung_belum_terkonfirmasi, 'total' => $hitung_total));
            } 
            
            else {
                return view('auth.login');
            }
        }
       // $CekRole = $cek_role -> role;

        


        //dd($CekRole);
        //$statusVer = DB::table('users');
        //$status_iso = $statusVer->where('id', $id)->first();
        //$status_sni = $statusVer->where('id', $id)->first();

        //$status_pembayaran_iso = $statusVer->where('id',$id)->first();
        //$status_pembayaran_sni = $statusVer->where('id',$id)->first();

          
   }



   public function data_diri(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    if($cek_role == null){
        return view('auth.login');
    }
    else{
        $CekRole = $cek_role -> role;
        
        if($request->session()->get('login') && $CekRole == 'user') {
            $lihat_data = DB::table('users')->where('id',$id)->first();
            $CekRole = $cek_role -> role;
            return view('user.data-diri', array('data_diri' => $lihat_data));
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
        
        if($request->session()->get('login') && $CekRole == 'user') {
            $lihat_data = DB::table('users')->where('id',$id)->first();
            $CekRole = $cek_role -> role;
            return view('user.data-diri-edit', array('data_diri' => $lihat_data));
        } 
        
        else {
            return view('auth.login');
        }
    }
}

public function edit_data_diri_proses(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    if($cek_role == null){
        return view('auth.login');
    }

    else{
        $CekRole = $cek_role -> role;
        
        if($request->session()->get('login') && $CekRole == 'user') {
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

            return redirect()->action('HomeController@data_diri');
        } 
        
        else {
            return view('auth.login');
        }
    }
}


public function permohonan_absensi(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    if($cek_role == null){
        return view('auth.login');
    }

    else{
        $CekRole = $cek_role -> role;
        
        if($request->session()->get('login') && $CekRole == 'user') {
            $lihat_data = DB::table('users')->where('id',$id)->first();
            $CekRole = $cek_role -> role;
            return view('user.permohonan-absensi', array('data_diri' => $lihat_data));
        } 
        
        else {
            return view('auth.login');
        }
    }
}

public function permohonan_absensi_proses(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    $CekRole = $cek_role -> role;

       if($request->session()->get('login') && $CekRole == 'user') {

        $nama = $request->get('nama');
        $nik = $request->get('nik');
        $email = $request->get('email');
        $no_hp = $request->get('no_hp');
        $bagian = $request->get('bagian');
        $jabatan = $request->get('jabatan');
        $alasan_absen = $request->get('alasan_absen');
        $dari_tanggal = $request->get('dari_tanggal');
        //dd($dari_tanggal);
        $sampai_tanggal = $request->get('sampai_tanggal');


        $file = $request->file('bukti_upload_absen');
        $fileName = $file->hashName();
        $storeFile = $file->store('public/bukti-upload-absen');

        $userDb = DB::table('data_absensi')->where('id',$id)
                                            ->insert(['id' => $id, 'nama' => $nama, 'nik' => $nik, 'email' => $email, 'no_hp' => $no_hp, 'bagian' => $bagian, 'jabatan' => $jabatan, 'alasan_absen' => $alasan_absen, 'tanggal_mulai_absen' => $dari_tanggal, 'tanggal_berakhir_absen' => $sampai_tanggal, 'bukti_upload_absen' => $fileName]);
        //dd($userDb);
        //dd($userDb);
        $request->session()->put('bukti_upload_absen', $fileName);

        return redirect()->action('HomeController@permohonan_absensi');
        
    } else {
        return view('auth.login');
    }
}


public function riwayat_absensi(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    if($cek_role == null){
        return view('auth.login');
    }

    else{
        $CekRole = $cek_role -> role;
        
        if($request->session()->get('login') && $CekRole == 'user') {
            $cek_absen = DB::table('data_absensi')->where('id',$id)->get();
            $CekRole = $cek_role -> role;
            return view('user.riwayat-absensi', array('cek_absen' => $cek_absen));
        } 
        
        else {
            return view('auth.login');
        }
    }
}


}
