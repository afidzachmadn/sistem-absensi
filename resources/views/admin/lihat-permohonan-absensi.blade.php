@extends('layout.master')

@section ('sidebar-dashboard-user')
<li class="nav-small-cap m-t-10">--- Pilihan Menu</li>
                    <li> <a href="/admin/dashboard" class="waves-effect"><i class="fa fa-tachometer p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="/admin/lihat-permohonan-absensi" class="waves-effect active"><i class="fa fa-tachometer p-r-10"></i> <span class="hide-menu">Lihat Permohonan Absensi</span></a> </li>
                    <li> <a href="#" class="waves-effect"><i class="fa fa-warning p-r-10"></i> <span class="hide-menu">Lihat Aduan</span></a> </li>
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

<div class="col-sm-12">
    <div class="white-box">
        <h3 class="box-title text-center">Permohonan Absensi yang menunggu konfirmasi anda</h3>
            </br>
            <div class="table-responsive">
                <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
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
                            <td>1</td>
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
                            <th>No</th>
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
        <div class="sm-12">
            <button type="button" class="btn btn-block btn-default" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="background:#ab8ce4;color:white;">Konfirmasi</button>
        </div>
    </div>
    

</div>


<!-- yang dibawah ini enggak kelihatan -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="exampleModalLabel1">Konfirmasi Absensi Pegawai</h4> </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Masukan no perusahaan yang barusan anda pilih: </label>
                            <input type="text" class="form-control"></input> 
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label">Ketik "terverifikasi" tanpa tanda petik:</label>
                            <input type="text"class="form-control"></input>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <input class="btn btn-block btn-primary" type="submit" value="Saya yakin untuk mengkonfirmasi!"/>
                </div>
                    </form>
            </div>
        </div>
    </div>
</div>

@endsection