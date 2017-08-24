@extends('layout.master')

@section ('sidebar-dashboard-user')
<li class="nav-small-cap m-t-10">--- Pilihan Menu</li>
                    <li> <a href="{{env('APP_URL')}}/dashboard" class="waves-effect"><i class="fa fa-tachometer p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i class="fa fa-star p-r-10"></i> <span class="hide-menu waves-effect">Absensi<span class="fa arrow"></span></span></a>
                         <ul class="nav nav-second-level">
                            <li class="waves-effect"> <a href="{{env('APP_URL')}}/permohonan-absensi">Permohonan Absensi</a> </li>
                            <li class="waves-effect active"> <a href="{{env('APP_URL')}}/riwayat-absensi">Lihat Riwayat Absensi</a> </li>
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
                            <li class="active">Riwayat Absensi</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
@endsection

@section("isi-dashboard-user")
 <!-- .row -->

<div class="col-sm-12">
    <div class="white-box">
        <h3 class="box-title text-center">Riwayat penilaian untuk diri sendiri</h3>
            </br>
            <div class="table-responsive">
                <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Bagian</th>
                            <th>Jabatan</th>     
                            <th>Alasan Absensi</th>
                            <th>Bukti Upload Absen</th>
                            <th>Tanggal Absen Dimulai</th>
                            <th>Tanggal Absen Berakhir</th>
                            <th>Status Konfirmasi </th>
                            <th>Petugas Konfirmasi </th>       
                        </tr>
                    </thead>
                    
                    <tbody>
                         @foreach($cek_absen as $LihatAbsen)       
                        <tr>
                       
                            <td>{{$LihatAbsen -> nama}}</td>
                            <td>{{$LihatAbsen -> nik}}</td>
                            <td>{{$LihatAbsen -> bagian}}</td>
                            <td>{{$LihatAbsen -> jabatan}}</td>
                            <td>{{$LihatAbsen -> alasan_absen}}</td>
                            <td>
                            <a class="image-popup-no-margins" href="{{env('APP_URL')}}/storage/bukti-upload-absen/{{$LihatAbsen -> bukti_upload_absen}}" title=""><img src="{{env('APP_URL')}}/storage/bukti-upload-absen/{{$LihatAbsen -> bukti_upload_absen}}" class="img-responsive"/></a>
                            </td>
                            <td>{{$LihatAbsen -> tanggal_mulai_absen}}</td>
                            <td>{{$LihatAbsen -> tanggal_berakhir_absen}}</td>
                            <td>{{$LihatAbsen -> status_konfirmasi}}</td>
                            <td>{{$LihatAbsen -> petugas_konfirmasi}}</td>                                    
                        </tr>
                        @endforeach
                    </tbody>
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Bagian</th>
                            <th>Jabatan</th>     
                            <th>Alasan Absensi</th>
                            <th>Bukti Upload Absen</th>
                            <th>Tanggal Absen Dimulai</th>
                            <th>Tanggal Absen Berakhir</th>
                            <th>Status Konfirmasi </th>
                            <th>Petugas Konfirmasi </th>       
                        </tr>
                    </thead>
                        
                </table>
            </div>
            </br>
        </div>
    </div>

</div>
               
                    
                    
                

@endsection