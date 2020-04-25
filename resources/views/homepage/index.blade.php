<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('homepage/img/fav.png')}}">
    <title>Contacts List System | LOGIN</title>

    <link href="{{ asset('admin_dashboard/dist/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_dashboard/style.css') }}" rel="stylesheet">
        <link href="{{ asset('admin_dashboard/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">

</head>

<body>
    <div class="main-wrapper container">
        <div class="row mt-5 pt-5">
            <div class="col-12 text-center">
                <h2>LIST OF CONTACT LIST</h2>
            </div>
            <div class="col-12">
               <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="users" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
    <script src="{{ asset('admin_dashboard/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_dashboard/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admin_dashboard/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('admin_dashboard/assets/extra-libs/DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('admin_dashboard/dist/js/pages/datatable/datatable-basic.init.js') }} "></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        let table = $('#users').DataTable({
            'ajax': "{{ route('home.contact') }}",
            'columns': [
                { 'data': 'DT_RowIndex' },
                { 'data': 'name' },
                { 'data': 'email' },
                { 'data': 'contact_number' },
            ],
            'paging'      : true,
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : false,
            'info'        : true,
            'autoWidth'   : false,
            fnDrawCallback: function () {
                self.QtdOcorrenciasAgendadosHoje = this.api().page.info().recordsTotal;
                $('#agent_count').text(self.QtdOcorrenciasAgendadosHoje);
            }
        });
    </script>
</body>
</html>