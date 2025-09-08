 <!DOCTYPE html>
 <html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-sidenav-user="true">

 <head>
     <meta charset="utf-8" />
     <title>CDA - Car Decision App</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     {{-- <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" /> --}}
     {{-- <meta content="Coderthemes" name="author" /> --}}

     <!-- App favicon -->
     <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}">

     <!-- third party css -->
     <!-- DataTables Bootstrap 5 -->
     <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">

     <!-- DataTables Responsive -->
     <link href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css" rel="stylesheet">

     <!-- DataTables Buttons -->
     <link href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap5.min.css" rel="stylesheet">

     <!-- DataTables Select -->
     <link href="https://cdn.datatables.net/select/1.7.0/css/select.bootstrap5.min.css" rel="stylesheet">

     <!-- Bootstrap Datepicker -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css"
         rel="stylesheet">

     <!-- Dropify -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" rel="stylesheet">

     <!-- SweetAlert2 -->
     <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
     <!-- third party css end -->

     <!-- Theme Config Js -->
     <script src="{{ asset('assets/js/head.js') }}"></script>

     <!-- Bootstrap css -->
     <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

     <!-- App css -->
     <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

     <!-- Icons css -->
     <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

     <style>
         .swal2-container.swal2-top-end.swal2-backdrop-show {
             background: transparent !important;
         }
     </style>
 </head>
 <style>
     html,
     body {
         max-width: 100%;
         overflow-x: hidden;
     }

     .content-page {
         overflow-x: auto;
     }

     .leftside-menu {
         min-height: 100%;
         height: auto !important;
     }
 </style>
 <script>
     scrollX: true
 </script>

 <body>

     <!-- Begin page -->
     <div id="wrapper">

         <!-- ========== Menu ========== -->
         @include('layout.sidebar')
         <!-- ========== Left menu End ========== -->

         <!-- ============================================================== -->
         <!-- Start Page Content here -->
         <!-- ============================================================== -->

         <div class="content-page">

             <!-- ========== Topbar Start ========== -->
             @include('layout.topbar')
             <!-- ========== Topbar End ========== -->

             <div class="content">


                 <!-- Start Content-->
                 <div class="container-fluid">

                     <!-- start page title -->
                     @yield('content')
                     <!-- end page title -->

                 </div>

             </div> <!-- content -->

             <!-- Footer Start -->
             @include('layout.footer')
             <!-- end Footer -->

         </div>

         <!-- ============================================================== -->
         <!-- End Page content -->
         <!-- ============================================================== -->


     </div>
     <!-- END wrapper -->

     <!-- Theme Settings -->
     @include('layout.rightbar')

     <!-- Vendor js -->
     <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

     <!-- App js -->
     <script src="{{ asset('assets/js/app.min.js') }}"></script>

     <!-- third party js -->
     <!-- jQuery (wajib untuk DataTables) -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

     <!-- DataTables Core + Bootstrap 5 -->
     <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

     <!-- DataTables Responsive -->
     <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
     <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>

     <!-- DataTables Buttons -->
     <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
     <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap5.min.js"></script>
     <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
     <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>

     <!-- KeyTable -->
     <script src="https://cdn.datatables.net/keytable/2.10.0/js/dataTables.keyTable.min.js"></script>

     <!-- Select -->
     <script src="https://cdn.datatables.net/select/1.7.0/js/dataTables.select.min.js"></script>

     <!-- PDFMake (untuk export PDF di DataTables) -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

     <!-- SweetAlert2 -->
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

     <!-- third party js ends -->

     @yield('scripts')
     @stack('scripts')

 </body>

 <!-- Mirrored from coderthemes.com/ubold/layouts/modern/pages-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Apr 2024 01:12:39 GMT -->

 </html>
