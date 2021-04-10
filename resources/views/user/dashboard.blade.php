@extends('user.index')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>User pannel</title>
    
</head>
<body>
  
<div class="container">
    Welcome, {{ auth()->guard('user')->user()->name }} <br>
    In the User Dashboard.....
    

</div>
   
</body>
</html>
@endsection