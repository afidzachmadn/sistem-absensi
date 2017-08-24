@extends('layout.master-admin')

@section ('sidebar-dashboard-admin')
<li class="nav-small-cap m-t-10">--- Pilihan Menu</li>
                    <li> <a href="{{env('APP_URL')}}/admin/dashboard" class="waves-effect"><i class="fa fa-tachometer p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="{{env('APP_URL')}}/admin/lihat-permohonan-absensi" class="waves-effect"><i class="fa fa-tachometer p-r-10"></i> <span class="hide-menu">Lihat Permohonan Absensi</span></a> </li>
                    <li> <a href="#" class="waves-effect"><i class="fa fa-warning p-r-10"></i> <span class="hide-menu">Lihat Aduan</span></a> </li>
@endsection

                
@section ('breadcrumb-dashboard-admin')
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

@section("isi-dashboard-admin")
 <!-- .row -->
<div class="col-sm-12">
    <div class="white-box">
        <div class="user-bg"> <img width="100%" alt="user" src="{{env('APP_URL')}}/plugins/images/large/img1.jpg">
            <div class="overlay-box">
                <div class="user-content">
                    <a href="javascript:void(0)"><img src="{{env('APP_URL')}}/storage/foto/{{$data_diri -> img_url}}" class="thumb-lg img-circle" alt="img"></a>
                    <h4 class="text-white">{{$data_diri -> nama}}</h4>
                    <h5 class="text-white">{{$data_diri -> email}}</h5>
                    <h5 class="text-white">{{$data_diri -> no_hp}}</h5> 
                </div>
            </div>
        </div>
        <div class="user-btm-box">
            <div class="col-md-4 col-sm-4 text-center">
                <h3>{{$data_diri -> nik}}</h3> 
            </div>
                                
            <div class="col-md-4 col-sm-4 text-center">
                <h3>{{$data_diri -> bagian}}</h3> 
            </div>

            <div class="col-md-4 col-sm-4 text-center">
                <h3>{{$data_diri -> jabatan}}</h3> 
            </div>
        </div>
        <div class="sm-12">
            <a href="{{env('APP_URL')}}/admin/edit-data-diri"><button class="btn btn-block btn-success">Edit</button></a>
        </div>
    </div>
</div>

               
                    
                    
                

@endsection