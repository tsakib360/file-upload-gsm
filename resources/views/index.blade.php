
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
  

    <title>FirmwareCall.Com</title>
    <link rel="icon" href="img/farmwarecall.png" type="image/gif" sizes="16x16">
    

    <!-- Fonts -->
    
 

    <!-- Styles -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- Site CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <div>
        
        <header class="header header_style_01" style="padding: 0;">
            <nav class="megamenu navbar navbar-default">
                <div class="container" style="margin-top: 13px;">
                    <span><a style="color: steelblue; color: steelblue;font-size: large;border-right: 1px solid #e0e0e0;padding-right: 5px;" href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a></span>
                    <span><a style="color: #4DA6E9; color: steelblue;font-size: large;border-right: 1px solid #e0e0e0;padding-right: 5px;" href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a></span>
                    <span><a style="color: #0073AF; color: steelblue;font-size: large;border-right: 1px solid #e0e0e0;padding-right: 5px;" href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></span>

                    <span style="color: #fff;"><i class="fa fa-phone"></i> Phone / Whatsapp  01712-668015</span>

                    <ul class="navbar-nav ml-auto" style="float: right;">
                        <!-- Authentication Links -->
                    
                    
                      
                        
                                <li class="nav-item">
                                <a class=" hidden nav-link" href=" ">Login</a>
                                </li>
                              
                                <li class="nav-item">
                        <a href="{{ url('/home') }}" class="nav-link">Home</a>
                        </li>
                    
                        
                      
                                <li class="nav-item">
                                <a class="  nav-link" href="" >Login</a>
                                <li class="nav-item">
                    

           
                             
                     
                                                            <li class="nav-item">
                                    <a class=" hidden nav-link" href="">Register</a>
                                </li>
                     
                        <li class="nav-item">
                                    <a class="  nav-link" href="">Register</a>
                                </li>
                                                                               </ul>
               
            </nav>
            </nav>
        </header>

        <div style="background-color: transparent;background-image: radial-gradient(at top center,#125571 0%,#000000 78%);">
            <div id="top_banner" class="row top_banner">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <a href="index" class="navbar-brand"><img src="img/logo_bottom.png" id="myImage" alt="Logo" style="width: 80%;margin: 0px auto;"></a>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-xs-8">
                            <div class="search">
                                <div class="input-group input-group-lg" style="display: inline; border: none;">
                                    
                                    <form method="POST" action="" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                             
                                    <div style="display: inline-flex;">
                                        <div class="form-group">
                                            <input type="text" name="searchText" id="searchText" class="form-control input-lg" placeholder="Search..." />
                                            <div id="searchList" style="position: absolute;top: 60px;">
                                            </div>
                                        </div>
                                        <button class="btn btn-unique btn-rounded btn-sm my-0 waves-effect waves-light btn_search" type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                    </form>
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <a href="" class="btn btn-danger" style="font-size: 190%;border-radius: 100%;"><i class="fa fa-cart-arrow-down" aria-hidden="true">
                                                            </i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <header class="header header_style_01" style="margin: 0;">
            <nav class="megamenu navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="" class="navbar-brand top_logo" href="index.html"><img src="img/farmwarecall.png" alt="image" style="max-height:50px;margin-top: 10px;"></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right menu-top" style="width: 100%;">
                            <li><a class="active" href="home1"><i class="fa fa-home"></i> Home</a></li>
                            <li>
                              <a class="" href="recent">
                                <i class="fa fa-clock-o"></i> Recent File</a>
                            </li>
                            <li><a class=" " href="blog"><i class="fa fa-file-text"></i> Blog </a></li>
                            <li><a class="" href="about"><i class="fa fa-exclamation-circle"></i> About Us </a></li>
                            <li><a class="" href="contact"><i class="fa fa-envelope"></i> Contact Us</a></li>
                            <li  style="float: right;">
                                <a href="contact" class="btn-light btn-radius btn-brd top-btn "><i class="fa fa-send fw-r10"></i> Request File</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>







        <main class="py-4 container-fluid full_width">
		@yield('content')
		</main>
            



<footer style="background-color: #09254A;color: #fff;margin-top: 10px;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 q_link">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index">Home</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="privacy">Privacy</a></li>
                    <li><a href="terms">Terms of Service</a></li>
                    <li><a href="return">Return Policy</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3>Get in Touch</h3>
                <p><i class="fa fa-map-marker" aria-hidden="true"></i> Vatara, Budda, Dhaka</p>
                <p><i class="fa fa-phone"></i> Phone : 01712-668015</p>
                <p><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Toll Free : 01XXXXXXX</p>
                <p><i class="fa fa-fax" aria-hidden="true"></i> Fax : 01XXXXXXX</p>
                <p><i class="fa fa-envelope" aria-hidden="true"></i> firmwarecall@gmail.com</p>
                
            </div>
            <div class="col-md-4 logo_sign">
                <h3>Follow Us</h3>
                <span><a style="color: steelblue;" href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a></span>
                <span><a style="color: #4DA6E9;" href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a></span>
                <span><a style="color: #0073AF;" href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></span>
                <br>
                <img src="img/logo_bottom.png" style="height:55px;margin: 5px;">
                <br>
                                   
                            </div>
        </div>
    </div>
</footer>
<div class="row text-muted text-center" style="background: black;margin-right: 0;margin-left: 0;">
<strong>Copyright <i class="fa fa-copyright"></i> 2021 <a href="#" style="color: #fff;">FirmwareCall.Com</a> All Rights Reserved.</strong> <br>
    <span>Developed by  <strong><a href="https://softronixs.com">Softronixs Ltd.</a></strong></span>
</div>




<!-- Scripts -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    


    
    
    
</body>
</html>
