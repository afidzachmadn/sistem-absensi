<!DOCTYPE html>

<html lang="en">

<head>

<!--#######################################################################################################
 * @application		<Sistem_Absensi_Terpadu_Alpha_Systems>
 * @author         Afidz Achmad Novendi <afidzachmadn@gmail.com>
 * @version         1.0
 * @copyright        Copyright © 2017 Afidz Achmad Novendi <afidzachmadn@gmail.com>
############################################################################################################-->
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{env('APP_URL')}}/images/logo-1.png">

    <title>Sistem Absensi Terpadu - PT. Desa Konoha</title>
      <!-- Bootstrap Core CSS -->
    <link href="{{env('APP_URL')}}/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{env('APP_URL')}}/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Editable CSS -->
    <link rel="stylesheet" href="{{env('APP_URL')}}/plugins/bower_components/jquery-datatables-editable/datatables.css" />
    <link href="{{env('APP_URL')}}/plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />

    <!-- animation CSS -->
    <link href="{{env('APP_URL')}}/css/animate.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{env('APP_URL')}}/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- page CSS -->
    <link href="{{env('APP_URL')}}/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="{{env('APP_URL')}}/plugins/bower_components/custom-select/custom-select.css" rel="stylesheet" type="text/css" />
    <link href="{{env('APP_URL')}}/plugins/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="{{env('APP_URL')}}/plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="{{env('APP_URL')}}/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="{{env('APP_URL')}}/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="{{env('APP_URL')}}/plugins/bower_components/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />

    <!--alerts CSS -->
    <link href="{{env('APP_URL')}}/plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">

    <!--My admin Custom CSS -->
    <link href="{{env('APP_URL')}}/plugins/bower_components/owl.carousel/owl.carousel.min.css" rel="stylesheet" type="text/css" />
    <link href="{{env('APP_URL')}}/plugins/bower_components/owl.carousel/owl.theme.default.css" rel="stylesheet" type="text/css" />

     <!-- Page plugins css -->
    <link href="{{env('APP_URL')}}/plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">

    <!-- Color picker plugins css -->
    <link href="{{env('APP_URL')}}/plugins/bower_components/jquery-asColorPicker-master/css/asColorPicker.css" rel="stylesheet">

    <!-- Date picker plugins css -->
    <link href="{{env('APP_URL')}}/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />

    <!-- Daterange picker plugins css -->
    <link href="{{env('APP_URL')}}/plugins/bower_components/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="{{env('APP_URL')}}/plugins/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Popup CSS -->
    <link href="{{env('APP_URL')}}/plugins/bower_components/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">

    <!-- animation CSS -->
    <link href="{{env('APP_URL')}}/css/animate.css" rel="stylesheet">
    <!-- dropify -->
    <link rel="stylesheet" href="{{env('APP_URL')}}/plugins/bower_components/dropify/dist/css/dropify.min.css">
    <!-- Custom CSS -->
    <link href="{{env('APP_URL')}}/css/style.min.css" rel="stylesheet">
                              
    <!-- color CSS -->
    <link href="{{env('APP_URL')}}/css/colors/purple.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Top Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <!-- Toggle icon for mobile view --><a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a class="logo" href="{{env('APP_URL')}}/dashboard"><b><img src="{{env('APP_URL')}}/plugins/images/header-gambar.png" alt="home" /></b>&nbsp<span class="hidden-xs"><strong>Konoha</strong>systems</span></a></div>
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-right hidden-xs">
                    <li style="visibility:hidden"><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="fa fa-toggle-left ti-menu"></i></a></li>
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                </ul>
               
                
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg" style="padding-top:50px">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                        <!-- /input-group -->
                    </li>
                    <li class="user-pro" style="padding-top:15px">
                        <a href="#" class="waves-effect"><img src="{{env('APP_URL')}}/storage/foto/{{Session::get('img_url')}}" alt="user-img" class="img-circle"> <span class="hide-menu">{{Session::get('name')}}<span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{env('APP_URL')}}/admin/data-diri"><i class="fa fa-user"></i>Data Diri</a></li>
                            <li><a href="{{env('APP_URL')}}/logout"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li>
                    <!-- yield sidebar -->

                    @yield('sidebar-dashboard-admin')
                    <!--
                    
                    @yield('sidebar-iso-user')
                    @yield('sidebar-sni-user')
                    @yield('sidebar-one-stop-service-user')
                    @yield('sidebar-profile-user') sama untuk profile-user maupun profile-edit-user
                    @yield('sidebar-tips-user') -->
                </ul>
            </div>
        </div>
        <!-- yield untuk breadcrumb -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- letakan yield -->
                @yield('breadcrumb-dashboard-admin')
                <!--
                
                @yield('breadcrumb-iso-user')
                @yield('breadcrumb-sni-user')
                @yield('breadcrumb-one-stop-service-user')
                @yield('breadcrumb-profile-user')
                @yield('breadcrumb-profile-edit-user')
                @yield('breadcrumb-lihat-dokumen-iso')
                @yield('breadcrumb-lihat-dokumen-sni')
                @yield('breadcrumb-tips-user')
                @yield('breadcrumb-bukti-pembayaran-iso')
                @yield('breadcrumb-bukti-pembayaran-sni') -->
                

                <!-- contents start here -->
                    @yield('header-dashboard-admin')
                    <!-- FOR THIS SECTION IS ONLY FOR DASHBOARD! -->
                


                <!-- .row -->
                <div class="row">
                     @yield('isi-dashboard-admin')
                    
                    
                     
                    



                </div>
                <!-- .row -->
                
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; PT. Desa Konoha </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
  


  <!-- jQuery -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{env('APP_URL')}}/bootstrap/dist/js/tether.min.js"></script>
    <script src="{{env('APP_URL')}}/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{env('APP_URL')}}/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="{{env('APP_URL')}}/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="{{env('APP_URL')}}/js/waves.js"></script>
    <!-- Sweet-Alert  -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/sweetalert/sweetalert.min.js"></script>
    <script src="{{env('APP_URL')}}/plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js"></script>

    <!--Morris JavaScript -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="{{env('APP_URL')}}/plugins/bower_components/morrisjs/morris.js"></script>
    <!-- jQuery for carousel -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/owl.carousel/owl.carousel.min.js"></script>
    <script src="{{env('APP_URL')}}/plugins/bower_components/owl.carousel/owl.custom.js"></script>

    <!-- Sparkline chart JavaScript -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="{{env('APP_URL')}}/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <!-- jQuery peity -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/peity/jquery.peity.min.js"></script>
    <script src="{{env('APP_URL')}}/plugins/bower_components/peity/jquery.peity.init.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{env('APP_URL')}}/js/custom.min.js"></script>
    <script src="{{env('APP_URL')}}/js/dashboard1.js"></script>
    <!--Style Switcher -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
     <!-- Custom Theme JavaScript -->
    <script src="{{env('APP_URL')}}/js/custom.min.js"></script>
    <script src="{{env('APP_URL')}}/js/jasny-bootstrap.js"></script>
     <script src="{{env('APP_URL')}}/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
            $(document).ready(function () {
                var table = $('#example').DataTable({
                    "columnDefs": [
                        {
                            "visible": false
                            , "targets": 2
                        }
          ]
                    , "order": [[2, 'asc']]
                    , "displayLength": 25
                    , "drawCallback": function (settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function (group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                // Order by the grouping
                $('#example tbody').on('click', 'tr.group', function () {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    }
                    else {
                        table.order([2, 'asc']).draw();
                    }
                });
            });
        });
        $('#example23').DataTable({
            dom: 'Bfrtip'
            , buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
        });
    </script>

    <!-- jQuery file upload -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/dropify/dist/js/dropify.min.js"></script>
    <script>
        $(document).ready(function () {
            // Basic
            $('.dropify').dropify();
            // Translated
            // Used events
            var drEvent = $('#input-file-events').dropify();
            drEvent.on('dropify.beforeClear', function (event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });
            drEvent.on('dropify.afterClear', function (event, element) {
                alert('File deleted');
            });
            drEvent.on('dropify.errors', function (event, element) {
                console.log('Has Errors');
            });
            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function (e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                }
                else {
                    drDestroy.init();
                }
            })
        });
    </script>
    <!-- Plugin JavaScript -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/moment/moment.js"></script>
    <!-- Clock Plugin JavaScript -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.js"></script>
    <!-- Color Picker Plugin JavaScript -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
    <script src="{{env('APP_URL')}}/plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
    <script src="{{env('APP_URL')}}/plugins/bower_components/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- Date range Plugin JavaScript -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="{{env('APP_URL')}}/plugins/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script>
        // Clock pickers
        $('#single-input').clockpicker({
            placement: 'bottom'
            , align: 'left'
            , autoclose: true
            , 'default': 'now'
        });
        $('.clockpicker').clockpicker({
            donetext: 'Done'
        , }).find('input').change(function () {
            console.log(this.value);
        });
        $('#check-minutes').click(function (e) {
            // Have to stop propagation here
            e.stopPropagation();
            input.clockpicker('show').clockpicker('toggleView', 'minutes');
        });
        if (/mobile/i.test(navigator.userAgent)) {
            $('input').prop('readOnly', false);
        }
        // Colorpicker
        $(".colorpicker").asColorPicker();
        $(".complex-colorpicker").asColorPicker({
            mode: 'complex'
        });
        $(".gradient-colorpicker").asColorPicker({
            mode: 'gradient'
        });
        // Date Picker
        jQuery('.mydatepicker, #datepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            format: 'yyyy/mm/dd'
            ,autoclose: true
            , todayHighlight: true
        });
        jQuery('#datepicker-autoclose2').datepicker({
            format: 'yyyy/mm/dd'
            ,autoclose: true
            , todayHighlight: true
        });
        jQuery('#date-range').datepicker({
            toggleActive: true
        });
        jQuery('#datepicker-inline').datepicker({
            todayHighlight: true
        });
        // Daterange picker
        $('.input-daterange-datepicker').daterangepicker({
            buttonClasses: ['btn', 'btn-sm']
            , applyClass: 'btn-danger'
            , cancelClass: 'btn-inverse'
        });
        $('.input-daterange-timepicker').daterangepicker({
            timePicker: true
            , format: 'DD/MM/YYYY h:mm A'
            , timePickerIncrement: 30
            , timePicker12Hour: true
            , timePickerSeconds: false
            , buttonClasses: ['btn', 'btn-sm']
            , applyClass: 'btn-danger'
            , cancelClass: 'btn-inverse'
        });
        $('.input-limit-datepicker').daterangepicker({
            format: 'DD/MM/YYYY'
            , minDate: '01/06/2015'
            , maxDate: '30/06/2015'
            , buttonClasses: ['btn', 'btn-sm']
            , applyClass: 'btn-danger'
            , cancelClass: 'btn-inverse'
            , dateLimit: {
                days: 6
            }
        });
    </script>
    <!-- Magnific popup JavaScript -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
    <script src="{{env('APP_URL')}}/plugins/bower_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>




   
    

</body>

</html>