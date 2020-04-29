<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="HTML5,CSS3,JS,BOOTSTRAP 4.0">
  <meta name="author" content="Md Abdul Mannan Hridoy">

  <!-----Page Dashboard & Form Level Templetes CSS----->
  <link href="{{asset('/dashboard/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('/dashboard/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('/dashboard/css/ruang-admin.min.css')}}" rel="stylesheet">
  <link href="{{asset('/dashboard/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">


  <link href="{{asset('/dashboard/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  <!-----Page DataTables Level Plugins CSS----->
  <link href="{{asset('/css/myedit/jquery.dataTables.min.css')}}" rel="stylesheet">

  <!-----PROFILE SHOW CSS----->
  <link href="{{asset('/css/profile/style.css')}}" rel="stylesheet">

</head>
<body id="page-top">

    @include('include.admin_sidebar')
    <main>
      @yield('admin') 
    </main>

    <!-----Page Dashboard & Form Level Templetes----->
	  <script src="{{asset('/dashboard/vendor/jquery/jquery.min.js')}}"></script>
  	<script src="{{asset('/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  	<script src="{{asset('/dashboard/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  	<script src="{{asset('/dashboard/js/ruang-admin.min.js')}}"></script>
  	<script src="{{asset('/dashboard/vendor/chart.js/Chart.min.js')}}"></script>
  	<script src="{{asset('/dashboard/js/demo/chart-area-demo.js')}}"></script>

    <!-----Page DataTables Level Plugins----->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    </script>

    <!-----Page DataTables Custom(Search) Scripts----->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>


<!-- Salary Modal Scripts -->
<script>
        /*-----Salary Modal Update Scripts-----*/
$('#updateSalary').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var salary_amount = button.data('salary_amount') 
      var created_at = button.data('created_at')
      var salary_id = button.data('salary_id') 
      var modal = $(this)
      modal.find('.modal-title').text('Update Salary Amount')
      modal.find('.modal-body #salary_amount').val(salary_amount);
      modal.find('.modal-body #created_at').val(created_at);
      modal.find('.modal-body #salary_id').val(salary_id);

});
      /*-----Salary Modal Delete Scripts-----*/
$('#deleteSalary').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var salary_id = button.data('salary_id') 
      var modal = $(this)
      modal.find('.modal-title').text('Delete Salary Amount')
      modal.find('.modal-body #salary_id').val(salary_id);

});
</script>
<script src="http://localhost/project/public/vendor/sweetalert/sweetalert.all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script src="{{asset('/dashboard/vendor/jquery.min.js')}}"></script>
@include('sweetalert::alert')
<script>
    @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}")
    @endif
</script>
<!-- <script>
  @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif
</script> -->
@if(Session::has('message'))
<script>
var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;}
</script>
@endif
</body>
</html>