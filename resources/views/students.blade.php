<!DOCTYPE html>
<html>
<head>
    <title>Laravel 11 Yajra Datatables Example - xpertphp.com</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
</head>
<body>
       
<div class="container">
    <div class="card mt-5">
        <h3 class="card-header p-3">Laravel 11 Yajra Datatables Example - xpertphp.com</h3>
        <div class="card-body">
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Address</th>
                        <th width="100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
       
</body>
       
<script type="text/javascript">
  $(function () {
        
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('students.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'first_name', name: 'first_name'},
            {data: 'last_name', name: 'last_name'},
            {data: 'address', name: 'address'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
        
  });
</script>
</html>
