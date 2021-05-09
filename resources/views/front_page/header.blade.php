<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">







        <link rel = "icon" href = '{{url("images/pic01.jpg")}}' type = "image/x-icon">


        <title>Master Electrical Industary</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

    



        @foreach($seo as $masters)
        <meta content="{{$masters->text2}}" name="keywords">
  
  @endforeach
        
        <meta content="Consulting Website Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset ('/js/menu/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{ asset ('/js/menu/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->

        <link href="{{ asset('/css/menu/style.css') }}" rel="stylesheet">

         </head>

    <body>

    	 <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="far fa-clock"></i>
                                <h2>8:00 - 9:00</h2>
                                <p>Mon - Sat</p>
                            </div>
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <h2>+92-321-4115996</h2>
                                <p>For Appointment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">Confer</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="/aboute/us" class="nav-item nav-link">About</a>
                        <a href="/master/products" class="nav-item nav-link">Products</a>
                        <!-- <a href="feature.html" class="nav-item nav-link">Feature</a>
                        <a href="advisor.html" class="nav-item nav-link">Advisor</a>
                        <a href="review.html" class="nav-item nav-link">Review</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu">
                                <a href="/master/products" class="dropdown-item">Master Products</a>
                                <a href="single.html" class="dropdown-item">Single Page</a>
                            </div>
                        </div> -->
                        <a href="/contact/us" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
