@extends('index')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 contact_us_form">

			<div style="padding: 59px;">
				<!-- Default Form -->
				<div>
					<form class="contact_form" action="{{route('message')}}" method="post" enctype="multipart/form-data">
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
  
					  <h2>CONTACT US</h2>
					  <p type="Name*:"><input  type ="text" name="name"  placeholder="required" ></p>
					  <p type="Email*:"><input type="email" name="email" placeholder="example@company.com" ></p>
					  <p type="Phone*:"><input type="phone"name="phone"  placeholder="required" ></p>
					  <p type="Subject*:"><input type="text"name="subject"  placeholder="required" ></p>
					  <p type="Message:"><input type="text" name="message" placeholder="What would you like to tell us.." style="border: 2px solid #1f1d1d; height: 200px;"></p>
					  <button type="submit" class="rect_button">Submit</button>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-4" style="padding: 0 30px;padding-top:280px;">
			<div style="background: mintcream;padding: 59px;border: 1px solid darkgray;box-shadow: 1px 1px 4px -1px black;margin: 0px;">
					            <h3>Get in Touch</h3>
	            <p>Vatara, Budda, Dhaka</p>
	            <p>Phone : 01712-668015</p>
	            <p>Toll Free : 01XXXXXXX</p>
	            <p>Fax : 01XXXXXXX</p>
	            <p>firmwarecall@gmail.com</p>
			</div>
		</div>
	</div>
</div>

        </main>
    </div>

@endsection