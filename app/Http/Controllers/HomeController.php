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
        $CekRole = $cek_role -> role;


        //dd($CekRole);
        //$statusVer = DB::table('users');
        //$status_iso = $statusVer->where('id', $id)->first();
        //$status_sni = $statusVer->where('id', $id)->first();

        //$status_pembayaran_iso = $statusVer->where('id',$id)->first();
        //$status_pembayaran_sni = $statusVer->where('id',$id)->first();

           if($request->session()->get('login') && $CekRole == 'user') {
            return view('user.dashboard');
        } else {
            return view('auth.login');
        }
   }



   public function data_diri(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    $CekRole = $cek_role -> role;


    //dd($CekRole);
    //$statusVer = DB::table('users');
    //$status_iso = $statusVer->where('id', $id)->first();
    //$status_sni = $statusVer->where('id', $id)->first();

    //$status_pembayaran_iso = $statusVer->where('id',$id)->first();
    //$status_pembayaran_sni = $statusVer->where('id',$id)->first();

       if($request->session()->get('login') && $CekRole == 'user') {

        return view('user.data-diri');
    } else {
        return view('auth.login');
    }
}


public function edit_data_diri(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    $CekRole = $cek_role -> role;


    //dd($CekRole);
    //$statusVer = DB::table('users');
    //$status_iso = $statusVer->where('id', $id)->first();
    //$status_sni = $statusVer->where('id', $id)->first();

    //$status_pembayaran_iso = $statusVer->where('id',$id)->first();
    //$status_pembayaran_sni = $statusVer->where('id',$id)->first();

       if($request->session()->get('login') && $CekRole == 'user') {

        return view('user.data-diri-edit');
    } else {
        return view('auth.login');
    }
}


public function permohonan_absensi(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    $CekRole = $cek_role -> role;


    //dd($CekRole);
    //$statusVer = DB::table('users');
    //$status_iso = $statusVer->where('id', $id)->first();
    //$status_sni = $statusVer->where('id', $id)->first();

    //$status_pembayaran_iso = $statusVer->where('id',$id)->first();
    //$status_pembayaran_sni = $statusVer->where('id',$id)->first();

       if($request->session()->get('login') && $CekRole == 'user') {

        return view('user.permohonan-absensi');
    } else {
        return view('auth.login');
    }
}


public function riwayat_absensi(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    $CekRole = $cek_role -> role;


    //dd($CekRole);
    //$statusVer = DB::table('users');
    //$status_iso = $statusVer->where('id', $id)->first();
    //$status_sni = $statusVer->where('id', $id)->first();

    //$status_pembayaran_iso = $statusVer->where('id',$id)->first();
    //$status_pembayaran_sni = $statusVer->where('id',$id)->first();

       if($request->session()->get('login') && $CekRole == 'user') {

        return view('user.riwayat-absensi');
    } else {
        return view('auth.login');
    }
}


}
