@extends('admin.index')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container">
        <form method="POST" action="fileUploadPost" enctype="multipart/form-data">
        @csrf
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
            <div class="row" style="margin-top: 100px;">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Upload File</h3>
                        </div>
                        <div class="panel-body">
         
                 
                      
                         <label>Category</label>
                         <select type="text" class="form-control" name="category_id"placeholder="Select Category"id="sub_category_name">
                         <option value="0" disabled selected>Select
                                Main Category*</option>
                                @foreach($data as $categories)
                            <option  value="{{ $categories->id }}">
                                {{ ucfirst($categories->categoryname) }}</option>
                            @endforeach
                        </select>
                           <label>Subcategory</label>
                         <select type="text" class="form-control" name="subcategory_id"placeholder="Select Sub Category" id="sub_category">
                         </select>
                         <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
        
        <script>
                    $(document).ready(function () {
                    $('#sub_category_name').on('change', function () {
                    let id = $(this).val();
                    $('#sub_category').empty();
                    $('#sub_category').append(`<option value="0" disabled selected>Processing...</option>`);
                    $.ajax({
                    type: 'GET',
                    url: 'emuu/' + id,
                    success: function (response) {
                    var response = JSON.parse(response);
                    console.log(response);   
                    $('#sub_category').empty();
                    $('#sub_category').append(`<option value="0" disabled selected>Select Sub Category*</option>`);
                    response.forEach(element => {
                        $('#sub_category').append(`<option value="${element['id']}">${element['subcategoryname']}</option>`);
                        });
                    }
                });
            });
        });
        </script>

                      
                         <label>File Name</label>
                         <div class="form-group">
                               <input type="text" class="form-control" name="filename">
                         </div>
                         <label>File Description</label>
                         <div class="form-group">
                               <input type="text" class="form-control" name="filedescription">
                         </div>
                         <label>File image</label>
                         <div class="form-group">
                               <input type="file" class="form-control" name="fileimage">
                         </div>
                         <label>File</label>
                         <div class="form-group">
                               <input type="file" class="form-control" name="file">
                         </div>
                       
                         
                         <input name="subject_all" class="subject-all" id="pay" type="checkbox">  Has To Pay<br/>
                         <div id="amount">
                            <label>Amount</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="amount">
                            </div> 
                         </div>

                       <script type="text/javascript">
                    $('#amount').hide();

    jQuery('#pay').change(function() {

        if ($(this).prop('checked')) {
            $('#amount').show();
        }
        else {
            $('#amount').hide();
        }
    });

                        </script>   
                    </div>
                    <button class="btn btn-primary " type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
   
@endsection