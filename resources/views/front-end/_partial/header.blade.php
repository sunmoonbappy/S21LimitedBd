<!DOCTYPE html>
<html>
<head>
<title>S-21 Apparels Ltd</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="favicon.ico" type="image/gif" sizes="16x16">

<!-- fontawesome -->
<link href="{{ URL::TO('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">

<!-- stylesheet -->
<link rel="stylesheet" href="{{ URL::TO('css/bootstrap.min.css') }}"/>
<link rel="stylesheet" href="{{ URL::TO('front-end/css/stellarnav.min.css') }}"/>
<link rel="stylesheet" href="{{ URL::TO('front-end/css/lightcase.css') }}"/>
<link rel="stylesheet" href="{{ URL::TO('front-end/css/owl.carousel.min.css') }}"/>
<link rel="stylesheet" href="{{ URL::TO('front-end/css/owl.theme.default.min.css') }}"/>
<link rel="stylesheet" href="{{ URL::TO('front-end/css/aos.css') }}"/>
<link rel="stylesheet" href="{{ URL::TO('front-end/css/bootstrap-touch-slider.css') }}"/>
<link rel="stylesheet" href="{{ URL::TO('front-end/css/animate.css') }}"/>
<link rel="stylesheet" href="{{ URL::TO('css/style.css') }}"/>
</head>
<body>

<!-- start header -->
<header>
    <div class="header-top w-100 bg-one">
        <div class="container">
            <div class="row">
                <ul class="text-right white-menu w-100 m-0">
                    <li class="list-inline-item"><a href="tel:1234567"><i class="fas fa-mobile-alt"></i>+880 017XX XXXXXX</a></li>
                    <li class="list-inline-item"><button type="button" class="btn btn-transparent" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fas fa-envelope"></i>info@gmail.com</button></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Send Us Email</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Recipient:</label>
                              <input type="text" disabled class="form-control" id="recipient-name" value="info@gmail.com">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Your Mail:</label>
                                <input type="text" class="form-control" id="your email" placeholder="Enter your mail">
                              </div>
                            <div class="form-group">
                              <label for="message-text" class="col-form-label">Message:</label>
                              <textarea class="form-control" id="message-text" cols="10" style="height: 160px;"></textarea>
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary">Send message</button>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->

<div class="navbar-wrapper clearfix w-100" id="sticker">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-2">
                <div class="row">
                    <div class="logo">
                        <a href="{{ URL::TO('/') }}"><img src="{{ URL::TO('front-end/images/logo.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-10">
                <div class="row">
                        <div class="stellarnav">
                                <ul>
                                    <li><a class="active" href="{{ URL::TO('/') }}">Home</a></li>
                                    <li><a class="">About</a>
                                        <ul>
                                            <li><a href="{{ URL::TO('about') }}">About Company</a></li>
                                            <li><a href="{{ URL::TO('mission') }}">Mission & Vision</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="" href="{{ URL::TO('product') }}">Product</a></li>
                                    <li><a class="" href="{{ URL::TO('testimonial') }}">Testimonial</a></li>
                                    <li><a class="" href="{{ URL::TO('gallery') }}">Gallery</a></li>
                                    <li><a class="" href="{{ URL::TO('brand') }}">Brand</a></li>
                                    <li><a class="" href="{{ URL::TO('contact') }}">Contact Us</a></li>
                                </ul>
                            </div><!-- .stellarnav -->
                    <!--/navigation-->
                </div>
            </div>
        </div>
    </div>
</div>
