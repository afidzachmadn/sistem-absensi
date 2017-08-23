@extends('layout.master-admin')

@section ('sidebar-dashboard-admin')
<li class="nav-small-cap m-t-10">--- Pilihan Menu</li>
                    <li> <a href="/admin/dashboard" class="waves-effect"><i class="fa fa-tachometer p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="/admin/lihat-permohonan-absensi" class="waves-effect"><i class="fa fa-tachometer p-r-10"></i> <span class="hide-menu">Lihat Permohonan Absensi</span></a> </li>
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
<div class="col-sm-12">
    <div class="white-box p-l-20 p-r-20">
        <h3 class="box-title m-b-0 text-center">Edit data diri</h3>
        </br>
        </br>
        <form class="floating-labels" action="{{url('/admin/edit-data-diri-proses')}}" method="post" enctype="multipart/form-data">      
        {{csrf_field()}}

        <div class="row">
            <div class="col-md-12">
                

                    <div class="form-group">
                        <label class="col-sm-12">Foto Profil</label>
                        <div class="col-sm-12"> 
                            <img class="img-responsive" src="{{env('APP_URL')}}/storage/foto/{{$data_diri -> img_url}}" alt="" style="max-width:120px;"> 
                        </div>
                        <div class="col-sm-12">
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span>
                                </div><span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span> </br><span class="fileinput-exists">Change</span>
                                <input type="file" data-max-file-size="2M" data-allowed-file-extensions="pdf" name="img" data-default-file="" value="" required=""> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                </div>
                    </div>

                    <div class="form-group m-b-40">
                        <input type="text" class="form-control" id="input1" name="nama" value="{{$data_diri -> nama}}" required><span class="highlight"></span> <span class="bar"></span>
                        <label for="input1">Nama</label>
                    </div>

                    <div class="form-group m-b-40">
                        <input type="text" class="form-control" id="input2" name="nik" value="{{$data_diri -> nik}}" required><span class="highlight"></span> <span class="bar"></span>
                        <label for="input2">NIK</label>
                    </div>

                    <div class="form-group m-b-40">
                        <input type="text" class="form-control" id="input3" name="email" value="{{$data_diri -> email}}" required><span class="highlight"></span> <span class="bar"></span>
                        <label for="input3">Email</label>
                    </div>

                    <div class="form-group m-b-40">
                        <input type="text" class="form-control" id="input3" required name="no_hp" value="{{$data_diri -> no_hp}}"><span class="highlight"></span> <span class="bar"></span>
                        <label for="input3">No HP</label>
                    </div>

                    <div class="form-group m-b-40">
                        <input type="text" class="form-control" id="input3" required name="bagian" value="{{$data_diri -> bagian}}"><span class="highlight"></span> <span class="bar"></span>
                        <label for="input3">Bagian</label>
                    </div>

                    <div class="form-group m-b-40">
                        <input type="text" class="form-control" id="input3" required name="jabatan" value="{{$data_diri -> jabatan}}"><span class="highlight"></span> <span class="bar"></span>
                        <label for="input3">Jabatan</label>
                    </div>

                   
               
                </div>
                
           
            </div>
                <div class="md-12">
                    <button type="submit" class="btn btn-block btn-default waves-effect waves-light" style="background:#ab8ce4;color:white">Ganti</button>
                </div>
        </div>
        </form>
    </div>
</div>

@endsection