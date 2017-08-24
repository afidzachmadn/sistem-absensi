@extends('layout.master-admin')

@section ('sidebar-dashboard-admin')
<li class="nav-small-cap m-t-10">--- Pilihan Menu</li>
                    <li> <a href="{{env('APP_URL')}}/admin/dashboard" class="waves-effect"><i class="fa fa-tachometer p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="{{env('APP_URL')}}/admin/lihat-permohonan-absensi" class="waves-effect active"><i class="fa fa-tachometer p-r-10"></i> <span class="hide-menu">Lihat Permohonan Absensi</span></a> </li>
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
                            <li class="active">Terkonfirmasi</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
@endsection

@section("isi-dashboard-admin")

<div class="col-sm-12">
    <div class="white-box">
        <h3 class="box-title text-center">Daftar Absensi yang telah anda konfirmasi</h3>
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
                        @foreach($lihat_data as $data)        
                        <tr>
                            <td>{{$data -> no}}</td>
                            <td>{{$data -> nama}}</td>
                            <td>{{$data -> nik}}</td>
                            <td>{{$data -> bagian}}</td>
                            <td>{{$data -> jabatan}}</td>
                            <td>{{$data -> alasan_absen}}</td>
                            <td>
                            <a class="image-popup-no-margins" href="{{env('APP_URL')}}/storage/bukti-upload-absen/{{$data -> bukti_upload_absen}}" title=""><img src="{{env('APP_URL')}}/storage/bukti-upload-absen/{{$data -> bukti_upload_absen}}" class="img-responsive"/></a>
                            </td>
                            <td>{{$data -> tanggal_mulai_absen}}</td>
                            <td>{{$data -> tanggal_berakhir_absen}}</td>
                            <td>{{$data -> status_konfirmasi}}</td>
                            <td>{{$data -> petugas_konfirmasi}}</td>                                                
                        </tr>
                    @endforeach
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
            <button type="button" class="btn btn-block btn-default" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="background:#ab8ce4;color:white;">Batal Konfirmasi</button>
        </div>
        </br>
    </div>
    

</div>

<!-- yang bawah ga kelihatan yaw -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="exampleModalLabel1">Batal Konfirmasi Absensi Pegawai</h4> </div>
                <div class="modal-body">
                    <form action="{{url('/admin/batal-konfirmasi-proses')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Masukan No: </label>
                            <input type="text" class="form-control" name="no"></input> 
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Masukan NIK: </label>
                            <input type="text" class="form-control" name="nik"></input> 
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label">Ketik "batal konfirmasi" tanpa tanda petik:</label>
                            <input type="text"class="form-control" name="status_konfirmasi"></input>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <input class="btn btn-block btn-primary" type="submit" value="Konfirmasi!"/>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection