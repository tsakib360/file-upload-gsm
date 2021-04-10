@extends('admin.index')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" type="text/javascript"></script>

<!-- DataTables Select CSS -->

<!-- DataTables Select JS -->
<script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
    <title>Document</title>
</head>
<body>
<table  id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
<tr>
<<td>Id</td>
<td>Category</td>
<td>SubCategory</td>
<td>Action</td>
</thead>
<tbody>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->categoryname }}</td>
<td>{{ $user->subcategoryname }}</td>



<td> 

<a class="btn btn-success btn-sm rounded-0 list-inline-item" type="button" data-toggle="tooltip" title="Edit" href = 'editsubcategory/{{ $user->id }}'><i class="fa fa-edit"></i></a>

<a class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete" href = 'subcategory/delete/{{ $user->id }}'><i class="fa fa-trash"></i>
</a>
</td>
</td>
</tr>

@endforeach
</tbody>
</table>
</body>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</html>
@endsection