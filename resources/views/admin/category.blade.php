@extends('admin.index')
@section('content')

<div class="container">
        <form method="POST" action="storecategory">
        @csrf
            <div class="row" style="margin-top: 100px;">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3> Add Category</h3>
                        </div>
                        <div class="panel-body">
                      
                        @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
                        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
                    
                        <div class="form-group">
                               <input type="text" class="form-control" name="categoryname">
                         </div>
                            
                    </div>
                    <button class="btn btn-primary " type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
    
@endsection