@extends('layout.master')

@section ('sidebar-dashboard-user')
<li class="nav-small-cap m-t-10">--- Pilihan Menu</li>
                    <li> <a href="/dashboard" class="waves-effect active"><i class="fa fa-tachometer p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i class="fa fa-star p-r-10"></i> <span class="hide-menu waves-effect">Absensi<span class="fa arrow"></span></span></a>
                         <ul class="nav nav-second-level">
                            <li class="waves-effect"> <a href="/permohonan-absensi">Permohonan Absensi</a> </li>
                            <li class="waves-effect active"> <a href="/riwayat-absensi">Lihat Riwayat Absensi</a> </li>
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
                        <tr>
                            <td>Jill Gladys</td>
                            <td>211233453423</td>
                            <td>Pengelola Teknologi Informasi</td>
                            <td>Officer</td>
                            <td>Saya sedang pergi bertamasya ke paris bersama keluarga</td>
                            <td><a href=""><button class="btn btn-block btn-success">lihat disini</button></a></td>
                            <td>11/03/2017</td>
                            <td>11/04/2017</td>
                            <td>belum-dikonfirmasi</td>
                            <td></td>


                                               
                                                
                        </tr>
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