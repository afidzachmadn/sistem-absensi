@extends('layout.master')

@section ('sidebar-dashboard-user')
<li class="nav-small-cap m-t-10">--- Pilihan Menu</li>
                    <li> <a href="/dashboard" class="waves-effect active"><i class="fa fa-tachometer p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
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
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
@endsection

@section("isi-dashboard-user")
 <!-- .row -->

                    

                    <div class="col-md-12">
                        <div class="white-box">
                            <h2 class="box-title text-center">Ringkasan absensi anda</h2>
                            <div class="row default-steps">
                                <div class="col-md-4 column-step">
                                    <div class="step-number" style="background:#ab8ce4">{{$terkonfirmasi}}</div>
                                    <div class="step-title">Dikonfirmasi</div>
                                    <div class="step-info">Jumlah absensi yang dikonfirmasi oleh Petugas</div>
                                </div>
                                <div class="col-md-4 column-step active" style="background:#ab8ce4">
                                    <div class="step-number">{{$total}}</div>
                                    <div class="step-title">Total</div>
                                    <div class="step-info">Banyaknya seluruh absensi yang pernah anda lakukan</div>
                                </div>
                                <div class="col-md-4 column-step">
                                    <div class="step-number" style="background:#ab8ce4">{{$belum_terkonfirmasi}}</div>
                                    <div class="step-title">Belum Dikonfirmasi</div>
                                    <div class="step-info">Jumlah absensi yang belum dikonfirmasi oleh Petugas</div>
                                </div>
                            </div>
                        </div>
                    </div>
  
                

@endsection