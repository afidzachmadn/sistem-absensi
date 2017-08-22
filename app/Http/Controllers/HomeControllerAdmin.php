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
        $CekRole = $cek_role -> role;


        //dd($CekRole);
        //$statusVer = DB::table('users');
        //$status_iso = $statusVer->where('id', $id)->first();
        //$status_sni = $statusVer->where('id', $id)->first();

        //$status_pembayaran_iso = $statusVer->where('id',$id)->first();
        //$status_pembayaran_sni = $statusVer->where('id',$id)->first();

           if($request->session()->get('login') && $CekRole == 'admin') {
            return view('admin.dashboard');
        } else {
            return view('auth.login');
        }
   }

   public function lihat_permohonan_absensi(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    $CekRole = $cek_role -> role;


    //dd($CekRole);
    //$statusVer = DB::table('users');
    //$status_iso = $statusVer->where('id', $id)->first();
    //$status_sni = $statusVer->where('id', $id)->first();

    //$status_pembayaran_iso = $statusVer->where('id',$id)->first();
    //$status_pembayaran_sni = $statusVer->where('id',$id)->first();

       if($request->session()->get('login') && $CekRole == 'admin') {
        return view('admin.lihat-permohonan-absensi');
    } else {
        return view('auth.login');
    }
}
}
