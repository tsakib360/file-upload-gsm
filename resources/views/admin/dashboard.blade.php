@extends('admin.index')
@section('content')
<!DOCTYPE html>
<html>
<head>
   
   
</head>
<body>
  
<div class="container">

    Welcome, {{ auth()->guard('admin')->user()->name }} <br>
    In the Admin Dashboard.....
</div>
   
</body>
</html>
@endsection