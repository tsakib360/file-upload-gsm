@extends('index')
@section('content')

<div class="container">
    <div class="row w-100">



        @foreach($users as $user)


                                <div class="col-md-4 col-sm-6 col-lg-2">

                                    <div class="card">
                                        <span class="ribbon ribbon-top-left"><span class="folder_badge">New</span>
                                        <img src="{{ URL::asset('/images/'.$user->fileimage) }}" alt="file" style="max-width: 100px;max-height: 100px;">



                                        <h4 class="text_limit3">{{$user->categoryname}}</h4>
                                        <p class="text-muted text_limit3">{{$user->subcategoryname}}</p>

                                        @auth
                                            <a href="{{ URL::asset('/files/'.$user->file) }}">Download</a>
                                        @else
                                            <a href="{{ route('userLogin') }}">Download</a>
                                        @endauth

                                    </div>

                                </div>
            @endforeach



    </div>
</div>
    




@endsection
