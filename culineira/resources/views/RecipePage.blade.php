<!DOCTYPE html>
<html>

    <head>
        <title>Culineira | Recipes</title>
        <!--Meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--CDN Bootstrap CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">		<link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
		<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<script src="https://kit.fontawesome.com/12801238e9.js" crossorigin="anonymous"></script>

        <!--Source file.-->

		<style>
				body {
  font-family: "Poppins", Arial, sans-serif;
  font-size: 14px;
  line-height: 1.8;
  font-weight: normal;
  background: #fff4eb;
  color: gray; }

a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
  color: #f8b739;
  text-decoration: none;
}
  a:hover, a:focus {
    text-decoration: none !important;
    outline: none !important;
    -webkit-box-shadow: none;
    box-shadow: none; }

button {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease; }
  button:hover, button:focus {
    text-decoration: none !important;
    outline: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important; }

h1, h2, h3, h4, h5,
.h1, .h2, .h3, .h4, .h5 {
  line-height: 1.5;
  font-weight: 400;
  font-family: "Poppins", Arial, sans-serif;
  color: #000; }

.ftco-section {
  padding: 7em 0; }

.ftco-no-pt {
  padding-top: 0; }

.ftco-no-pb {
  padding-bottom: 0; }

.heading-section {
  font-size: 28px;
  color: #000; }
  .heading-section small {
    font-size: 18px; }

.img {
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center; }

.navbar {
  padding: 15px 10px;
  background: #fff;
  border: none;
  border-radius: 0;
  margin-bottom: 40px;
  -webkit-box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
  box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1); }

.navbar-btn {
  -webkit-box-shadow: none;
  box-shadow: none;
  outline: none !important;
  border: none; }

.line {
  width: 100%;
  height: 1px;
  border-bottom: 1px dashed #ddd;
  margin: 40px 0; }

.wrapper {
  width: 100%; }

#sidebar {
  min-width: 300px;
  max-width: 300px;
  background: #d45d20;
  color: #fff;
  -webkit-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s; }
  #sidebar.active {
    margin-left: -300px; }
  #sidebar .logo {
    display: block;
    width: 120px;
    height: 120px;
    margin: 0 auto; }
    #sidebar .logo span {
      display: block; }
  #sidebar ul.components {
    padding: 0; }
  #sidebar ul li {
    font-size: 16px; }
    #sidebar ul li > ul {
      margin-left: 10px; }
      #sidebar ul li > ul li {
        font-size: 14px; }
    #sidebar ul li a {
      padding: 10px 0;
      display: block;
      color: rgba(255, 255, 255, 0.8);
      border-bottom: 1px solid rgba(255, 255, 255, 0.1); }
      #sidebar ul li a:hover {
        color: #C4FCF0; }
    #sidebar ul li.active > a {
      background: transparent;
      color: #f8b739; }
  @media (max-width: 991.98px) {
    #sidebar {
      margin-left: -300px; }
      #sidebar.active {
        margin-left: 0; } }

a[data-toggle="collapse"] {
  position: relative; }

.dropdown-toggle::after {
  display: block;
  position: absolute;
  top: 50%;
  right: 0;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%); }

@media (max-width: 991.98px) {
  #sidebarCollapse span {
    display: none; } }

#content {
  width: 100%;
  padding: 0;
  min-height: 100vh;
  -webkit-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s; }

.btn.btn-primary {
  background: #f8b739;
  border-color: #f8b739; }
  .btn.btn-primary:hover, .btn.btn-primary:focus {
    background: #f8b739 !important;
    border-color: #f8b739 !important; }

.footer p {
  color: rgba(255, 255, 255, 0.5); }
		</style>

    </head>
    <body>
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
	        <ul class="list-unstyled components mb-5">
	            <li class="active">
	                <a href="#"><i class="fa-solid fa-book"></i> Recipes</a>
                </li>
                <li>
	              <a href="#"><i class="fa-solid fa-kitchen-set"></i> My Kitchen</a>
                </li>
                <li>
                    <a href="#"><i class="fa-solid fa-people-group"></i> Community</a>
                </li>
                <li>
                    <a href="#"><i class="fa-solid fa-user"></i> Profile</a>
	            </li>
	        </ul>
                <button class="btn btn-danger">Sign-Out</button>
	            </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Global</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Favorites</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">My Recipes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <h2 class="mb-2">Main Course</h2>
        <p class="fs-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <div class="row">
            <div class="card w-25 p-2 border m-3">
                <img src="{{asset('assets/image/recipes/MieGorengBakso_flazefy.png')}}" alt='MieGorengBakso_flazefy'
					style='border-radius:4px; margin-top:-60px; width:50%; display: block; margin-left: auto; margin-right: auto;'>
                <h5 style='font-size:16px; text-align:center;'>Mie Goreng Bakso</h5>
                <div class='container' style='background:#f0f0f0; padding:5px;'>
                    <div class='row' style='justify-content:center;'>
                        <div class='col-md-5'>
                            <a style='font-size:12px; color:#5cb85c;'>Beginner</a>
                        </div>
                        <div class='col-md-5'>
                            <a style='font-size:12px;'>Main Course</a>
                        </div>
                    </div>
                </div>
                <div class='container mt-2'>
                    <div class='row' style='justify-content:center;'>
                        <div class='col-md-3'>
                            <a style='font-size:15px; font-weight:bold; text-align:center;'>25</a>
                            <p style='font-size:12px;'>min</p>
                        </div>
                        <div class='col-md-3'>
                            <a style='font-size:15px; font-weight:bold; text-align:center;'>300</a>
                            <p style='font-size:12px;'>cal</p>
                        </div>
                        <div class='col-md-4'>
                            <i class="fa-solid fa-bowl-food fa-lg" style='text-align:center;'></i>
                            <p style='font-size:12px; justify-content:center;'>noodle</p>
                        </div>
                    </div>
                </div>
                <button class='btn btn-primary'><i class="fa-solid fa-arrow-right"></i> Cook Now</button>
            </div>
        </div>
      </div>
		</div>

    <script>
        (function($) {

        "use strict";

        var fullHeight = function() {

            $('.js-fullheight').css('height', $(window).height());
            $(window).resize(function(){
                $('.js-fullheight').css('height', $(window).height());
            });

        };
        fullHeight();

        $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        });

        })(jQuery);
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>

	</body>
</html>

