<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{ asset('backend/assets/vendor/fonts/circular-std/style.css')}}">
      <link rel="stylesheet" href="{{ asset('backend/assets/libs/css/style.css')}}">
      <link rel="stylesheet" href="{{ asset('backend/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
      <link rel="stylesheet" href="{{ asset('backend/assets/vendor/charts/chartist-bundle/chartist.css')}}">
      <link rel="stylesheet" href="{{ asset('backend/assets/vendor/charts/morris-bundle/morris.css')}}">
      <link rel="stylesheet" href="{{ asset('backend/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">
      <link rel="stylesheet" href="{{ asset('backend/assets/vendor/charts/c3charts/c3.css')}}">
      <link rel="stylesheet" href="{{ asset('backend/assets/vendor/fonts/flag-icon-css/flag-icon.min.css')}}">
      <link rel="stylesheet" href="{{ asset('backend/assets/vendor/datatables/css/dataTables.bootstrap4.css')}}">
      <link rel="stylesheet" href="{{ asset('backend/assets/vendor/datatables/css/buttons.bootstrap4.css')}}">
      <link rel="stylesheet" href="{{ asset('backend/assets/vendor/datatables/css/select.bootstrap4.css')}}">
      <link rel="stylesheet" href="{{ asset('backend/assets/vendor/datatables/css/fixedHeader.bootstrap4.css')}}">
      <link rel="stylesheet" href="{{ asset('backend/assets/vendor/select2/css/select2.css')}}">
      <link rel="stylesheet" href="{{ asset('backend/assets/vendor/summernote/css/summernote-bs4.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
      <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
   </head>
   <body>
      <!-- ============================================================== -->
      <!-- main wrapper -->
      <!-- ============================================================== -->
      <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
         <!-- navbar -->
         <!-- ============================================================== -->
         @include('admin.body.navbar')
         <!-- ============================================================== -->
         <!-- end navbar -->
         <!-- ============================================================== -->
         
         <!-- ============================================================== -->
         <!-- left sidebar -->
         <!-- ============================================================== -->
         @include('admin.body.sidebar')
         <!-- ============================================================== -->
         <!-- end left sidebar -->
         <!-- ============================================================== -->
         <!-- ============================================================== -->
         <!-- wrapper  -->
         <!-- ============================================================== -->
         <div class="dashboard-wrapper">
            
            <div class="container-fluid dashboard-content">

               @yield('dashboard-content')
               
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            @include('admin.body.footer')
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
         </div>
         <!-- ============================================================== -->
         <!-- end wrapper  -->
         <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- end main wrapper  -->
      <!-- ============================================================== -->
      <!-- Optional JavaScript -->
      <!-- jquery 3.3.1 -->
      <script src="{{ asset('backend/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
      <!-- bootstap bundle js -->
      <script src="{{ asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
      <!-- slimscroll js -->
      <script src="{{ asset('backend/assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
      <!-- main js -->
      <script src="{{ asset('backend/assets/libs/js/main-js.js')}}"></script>
      <!-- chart chartist js -->
      <script src="{{ asset('backend/assets/vendor/charts/chartist-bundle/chartist.min.js')}}"></script>
      <!-- sparkline js -->
      <script src="{{ asset('backend/assets/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
      <!-- morris js -->
      <script src="{{ asset('backend/assets/vendor/charts/morris-bundle/raphael.min.js')}}"></script>
      <script src="{{ asset('backend/assets/vendor/charts/morris-bundle/morris.js')}}"></script>
      <!-- chart c3 js -->
      <script src="{{ asset('backend/assets/vendor/charts/c3charts/c3.min.js')}}"></script>
      <script src="{{ asset('backend/assets/vendor/charts/c3charts/d3-5.4.0.min.js')}}"></script>
      <script src="{{ asset('backend/assets/vendor/charts/c3charts/C3chartjs.js')}}"></script>
      <script src="{{ asset('backend/assets/libs/js/dashboard-ecommerce.js')}}"></script>

      <!-- mailbox refer to add post -->
      <script src="{{ asset('backend/assets/vendor/select2/js/select2.min.js')}}"></script>
      <script src="{{ asset('backend/assets/vendor/summernote/js/summernote-bs4.js')}}"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

      <script src="{{ asset('backend/assets/vendor/multi-select/js/jquery.multi-select.js')}}"></script>
      <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
      <script src="{{ asset('backend/assets/vendor/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
      <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
      <script src="{{ asset('backend/assets/vendor/datatables/js/buttons.bootstrap4.min.js')}}"></script>
      <script src="{{ asset('backend/assets/vendor/datatables/js/data-table.js')}}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
      <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>

      <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
           case 'info':
           toastr.info(" {{ Session::get('message') }} ");
           break;
           case 'success':
           toastr.success(" {{ Session::get('message') }} ");
           break;
           case 'warning':
           toastr.warning(" {{ Session::get('message') }} ");
           break;
           case 'error':
           toastr.error(" {{ Session::get('message') }} ");
           break; 
        }
        @endif 

        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({ tags: true });
         });

         $(document).ready(function() {
         $('#summernote').summernote({
               height: 300

         });
      });
       </script>
   </body>
</html>
