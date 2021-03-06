<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
class AuthController extends Controller
{
    public function login(Request $request) {
        $id = $request->session()->get('id');
        $cek_role = DB::table('users')->where('id',$id)->first();
        if($cek_role != null){

            $CekRole = $cek_role -> role;
            if($request->session()->get('login') && $CekRole == 'user') {
                return redirect()->action('HomeController@dashboard');
            }
            
            elseif($request->session()->get('login') && $CekRole == 'admin'){
    
                return redirect()->action('HomeControllerAdmin@dashboard');
                
            }
            
            else {
                return view('auth.login');
            }
        }
        else{
            return view('auth.login');
        }
        
    }


    public function logout(Request $request) {
        $request->session()->flush();
        return redirect()->action('AuthController@login');
    }
    

    public function bacadatabase(Request $request) {
        $email = $request->input('email');
        $password=$request->input('password');
        // login ke db
        $usersTable = DB::table('users');
        //cek username dan pass di database
        $usercheck= $usersTable->where('email', $email)->first();
        $get_role = $usercheck -> role;
        //dd($usercheck);
        //dd($get_jabatan);


        if($get_role == 'user'){
            if($usercheck != null){

        
                $decrypt = decrypt($usercheck->password);
                //dd($decrypt);
            
                if($password == $decrypt) {
                    $request->session()->put('login', true);
                    //$request->session()->put('role', 'karyawan');
                    $request->session()->put('name', $usercheck->nama);
                    $request->session()->put('id', $usercheck->id);
                    $request->session()->put('img_url', $usercheck->img_url);
                
                    return redirect()->action('HomeController@dashboard');
                }

                else {
                    return redirect()->action('AuthController@login');
                }
            }
            
            else{
                return redirect()->action('AuthController@login');
            }
        }
        elseif($get_role == 'admin'){
            if($usercheck != null){

        
                $decrypt = decrypt($usercheck->password);
                //dd($decrypt);
            
                if($password == $decrypt) {
                    $request->session()->put('login', true);
                    //$request->session()->put('role', 'karyawan');
                    $request->session()->put('name', $usercheck->nama);
                    $request->session()->put('id', $usercheck->id);
                    $request->session()->put('img_url', $usercheck->img_url);
                
                    return redirect()->action('HomeControllerAdmin@dashboard');
                }

                else {
                    return redirect()->action('AuthController@login');
                }
            }
            
            else{
                return redirect()->action('AuthController@login');
            }
        }

        else{
            return redirect()->action('AuthController@login');
        }
    }
















}
