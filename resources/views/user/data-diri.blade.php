@extends('layout.master')

@section ('sidebar-dashboard-user')
<li class="nav-small-cap m-t-10">--- Pilihan Menu</li>
                    <li> <a href="/dashboard" class="waves-effect"><i class="fa fa-tachometer p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i class="fa fa-star p-r-10"></i> <span class="hide-menu waves-effect">Absensi<span class="fa arrow"></span></span></a>
                         <ul class="nav nav-second-level">
                            <li class="waves-effect"> <a href="/permohonan-absensi">Permohonan Absensi</a> </li>
                            <li class="waves-effect"> <a href="/riwayat-absensi">Lihat Riwayat Absensi</a> </li>
                        </ul>
                    </li>
                    
                    <li> <a href="#" class="waves-effect"><i class="fa fa-warning p-r-10"></i> <span class="hide-menu">Aduan</span></a> </li>
                    <li> <a href="#" class="waves-effect"><i class="fa fa-question-circle p-r-10"></i> <span class="hide-menu">Tips</span></a> </li>
@endsection

                
@section ('breadcrumb-dashboard-user')
 <div class="row bg-title" style="padding: 25px 15px 15px">
                    <!-- .page title -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Sistem Absensi</h4> </div>
                    <!-- /.page title -->
                    <!-- .breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">System</a></li>
                            <li class="active">Data Diri</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
@endsection

@section("isi-dashboard-user")
 <!-- .row -->
<div class="col-sm-12">
    <div class="white-box">
        <div class="user-bg"> <img width="100%" alt="user" src="../plugins/images/large/img1.jpg">
            <div class="overlay-box">
                <div class="user-content">
                    <a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg" class="thumb-lg img-circle" alt="img"></a>
                    <h4 class="text-white">Jill Gladys</h4>
                    <h5 class="text-white">jill@myadmin.com</h5>
                    <h5 class="text-white">085641641655</h5> 
                </div>
            </div>
        </div>
        <div class="user-btm-box">
            <div class="col-md-4 col-sm-4 text-center">
                <h3>131313413410</h3> 
            </div>
                                
            <div class="col-md-4 col-sm-4 text-center">
                <h3>Teknologi Informasi</h3> 
            </div>

            <div class="col-md-4 col-sm-4 text-center">
                <h3>Officer</h3> 
            </div>
        </div>
        <div class="sm-12">
            <a href="/edit-data-diri"><button class="btn btn-block btn-success">Edit</button></a>
        </div>
    </div>
</div>

               
                    
                    
                

@endsection