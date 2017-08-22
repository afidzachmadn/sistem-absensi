@extends('layout.master')

@section ('sidebar-dashboard-user')
<li class="nav-small-cap m-t-10">--- Pilihan Menu</li>
                    <li> <a href="/dashboard" class="waves-effect"><i class="fa fa-tachometer p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i class="fa fa-star p-r-10"></i> <span class="hide-menu waves-effect">Absensi<span class="fa arrow"></span></span></a>
                         <ul class="nav nav-second-level">
                            <li class="waves-effect active"> <a href="/permohonan-absensi">Permohonan Absensi</a> </li>
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
                            <li class="active">Permohonan Absensi</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
@endsection

@section("isi-dashboard-user")
 <!-- .row -->
 
<div class="col-sm-12">
    <div class="white-box p-l-20 p-r-20">
        <h3 class="box-title m-b-0 text-center">Isi data permohonan absensi</h3>
        </br>
        </br>
        <form class="floating-labels ">
        <div class="row">
            <div class="col-md-12">

                    <div class="form-group m-b-40">
                        <input type="text" class="form-control" id="input1" required><span class="highlight"></span> <span class="bar"></span>
                        <label for="input1">Nama</label>
                    </div>

                    <div class="form-group m-b-40">
                        <input type="text" class="form-control" id="input2" required><span class="highlight"></span> <span class="bar"></span>
                        <label for="input2">NIK</label>
                    </div>

                    <div class="form-group m-b-40">
                        <input type="text" class="form-control" id="input3" required><span class="highlight"></span> <span class="bar"></span>
                        <label for="input3">Email</label>
                    </div>

                    <div class="form-group m-b-40">
                        <input type="text" class="form-control" id="input3" required><span class="highlight"></span> <span class="bar"></span>
                        <label for="input3">No HP</label>
                    </div>

                    <div class="form-group m-b-40">
                        <input type="text" class="form-control" id="input3" required><span class="highlight"></span> <span class="bar"></span>
                        <label for="input3">Bagian</label>
                    </div>

                    <div class="form-group m-b-40">
                        <input type="text" class="form-control" id="input3" required><span class="highlight"></span> <span class="bar"></span>
                        <label for="input3">Jabatan</label>
                    </div>

                    <div class="form-group m-b-40">
                        <textarea class="form-control" id="input3" required></textarea><span class="highlight"></span> <span class="bar"></span>
                        <label for="input3">Alasan Absensi</label>
                    </div>

                    <div class="form-group m-b-40">
                            <div class="input-group">
                                <p for="datepicker-autoclose-1">Dari tanggal:</p><br>
                                <input type="text" class="form-control" id="datepicker-autoclose-1" placeholder="mm/dd/yyyy"> <span class="input-group-addon"><i class="icon-calender"></i></span><span class="highlight"></span> <span class="bar"></span>
                            </div>
                    </div>

                    <div class="form-group m-b-40">
                            <div class="input-group">
                                <p for="datepicker-autoclose-2">Sampai tanggal:</p><br>
                                <input type="text" class="form-control" id="datepicker-autoclose-2" placeholder="mm/dd/yyyy"> <span class="input-group-addon"><i class="icon-calender"></i></span><span class="highlight"></span> <span class="bar"></span>
                            </div>
                    </div>

                    <div class="form-group m-b-40">
                        <div class="col-sm-12">
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                    <label>Upload Bukti (jika ada)</label>
                                    <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span>
                                    </div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                    <input type="file" name="..."> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a><span class="highlight"></span> <span class="bar"></span>
                            </div>
                            
                        </div>
                    </div>

                   
               
                </div>
                
           
            </div>
                <div class="md-12">
                    <button type="submit" class="btn btn-block btn-info waves-effect waves-light" style="background:#ab8ce4">Kirim Permohonan</button>
                </div>
        </div>
        </form>
    </div>
</div>


               
                    
                    
                

@endsection