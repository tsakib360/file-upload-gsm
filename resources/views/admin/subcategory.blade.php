@extends('admin.index')
@section('content')
<div class="container">
        <form method="POST" action="storesubcategory">
        @csrf
            <div class="row" style="margin-top: 100px;">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Add subcategory</h3>
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
                        <label>Category</label>
                         <select type="text" class="form-control" name="category_id"> 
                         <option  selected>Select category</option>
                         @foreach($users as $user)
                         
                         <option  Value="{{$user->id}}">{{$user->categoryname}}</option>
                         @endforeach
                   </select>
                         <label>Subcategory</label>
                        <div class="form-group">
                    
                               <input type="text" class="form-control" name="subcategoryname">
                         </div>
                            
                    </div>
                    <button class="btn btn-primary " type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
    
@endsection