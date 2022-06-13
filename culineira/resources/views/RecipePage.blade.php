<!DOCTYPE html>
<html>
    <head>
    <title>Culineira | Recipes</title>
    <!--Meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--CDN Bootstrap CSS-->
    <link rel="icon" type="image/png" href="http://127.0.0.1:8000/assets/Culineira_Logo.png"/>
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
  background: white;
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
    font-size: 16px;
    padding:4px;
     }
    #sidebar ul li > ul {
      margin-left: 10px; }
      #sidebar ul li > ul li {
        font-size: 14px; }
    #sidebar ul li a {
      padding: 10px;
      display: block;
      color:#2F4858;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1); }
      #sidebar ul li:hover {
        background: #F0F0F0;
        border-radius: 6px;
        color: whitesmoke;
      }
    #sidebar ul li.active > a {
      background: transparent;
      border-left: 4px solid #2F4858;
    }
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
  background: #eb7336;
  border-color: #eb7336; }


.footer p {
  color: rgba(255, 255, 255, 0.5); }

/*profil container side bar*/
.p-4.pt-2 .container-fluid.p-2.pt-3.rounded-3{
  transition: width 2s, height 2s, transform 1s;
  margin-top:-10px;
  background:white;
  will-change: transform;
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
  margin-bottom:15px;
}
.p-4.pt-2 .container-fluid.p-2.pt-3.rounded-3:hover{
  transform: scale(1.05);
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
}
.navbar-light .navbar-nav .nav-item .nav-link{
    color:white;
}
.navbar-light .navbar-nav .nav-item.active .nav-link{
    bottom:3px;
    font-weight:500;
    position: relative;
}
		</style>

    </head>
    <body>
		<div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="p-4 pt-2">
            <img class="w-100" src="{{asset('assets/Culineira_FullLogo.png')}}" alt='user_flazefy'
                style='display: block; margin-left: auto; margin-right: auto;'>

            @foreach($user as $data)
                @if($data->username == 'flazefy')
                <div class='container-fluid p-2 pt-3 rounded-3' title='Click to open profile' type='button'>
                    <img class="img logo rounded-circle mb-3" src="{{asset('assets/image/users/user_flazefy.jpg')}}" alt='user_flazefy'
                    style='display: block; margin-left: auto; margin-right: auto;'>
                    <h5 class="text-center" style='color:color:#2F4858;'>@<span>{{$data->username}}</span></h5>
                    <div class='row' style='justify-content:center;'>
                        <div class='col-md-3'>
                            <a style='font-size:15px; font-weight:bold; color:#2F4858; text-align:center;'>25</a>
                            <p style='font-size:12px; color:#2F4858;'>Following</p>
                        </div>
                        <div class='col-md-3'>
                            <a style='font-size:15px; font-weight:bold; color:#2F4858; text-align:center;'>300</a>
                            <p style='font-size:12px; color:#2F4858;'>Followers</p>
                        </div>
                        <div class='col-md-3'>
                            <a style='font-size:15px; font-weight:bold; color:#2F4858; text-align:center;'>3</a>
                            <p style='font-size:12px; color:#2F4858;'>Recipes</p>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach

                <ul class="list-unstyled components mb-3">
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
            <button class="btn btn-danger" style='margin-top:-15px;'>Sign-Out</button>
            </div>
    	</nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5" style='width:100%; max-height: calc(90vh - 140px); overflow-x: auto;'>
            <div class="accordion" id="accordionRecipe">
                <nav class="navbar navbar-expand-lg navbar-light" style='background: rgba(60, 60, 60, 0.4); position:sticky; top: 0; z-index:100;'>
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
                                <li class="nav-item">
                                    <a class="nav-link" href="" role="button" data-bs-toggle="collapse" data-bs-target="#globalCollapse" aria-expanded="false" aria-controls="CollapseExample2" >Global</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="" role="button" data-bs-toggle="collapse" data-bs-target="#favoritesCollapse" aria-expanded="false" aria-controls="CollapseExample2">Favorites</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="" role="button" data-bs-toggle="collapse" data-bs-target="#myrecipesCollapse" aria-expanded="false" aria-controls="CollapseExample2">My Recipes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="" role="button" data-bs-toggle="collapse" data-bs-target="#aboutlCollapse" aria-expanded="false" aria-controls="CollapseExample2">About</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="collapse show" id="globalCollapse" data-bs-parent="#accordionRecipe">
                    <div class='container-fluid mb-3' style='background:white;'>
                        <h2 class="mb-2">Main Course</h2>
                        <div class="fs-8" style='font-size:14px; color:#808080; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; line-clamp: 3; -webkit-box-orient: vertical;'
                            ><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="row">
                        @foreach($recipe as $data)
                            @if($data->recipe_type == 'Main Course')
                            <div class="card w-25 p-2 border m-3" style='min-width:250px;'>
                                <img src="http://127.0.0.1:8000/assets/image/recipes/<?php echo str_ireplace(' ', '%20', $data->recipe_name)."_".$data->user_id;?>.png" alt='<?php echo $data->recipe_name."_".$data->user_id;?>'
                                    style='border-radius:4px; margin-top:-60px; width:50%; display: block; margin-left: auto; margin-right: auto;'>
                                <h5 style='font-size:16px; text-align:center;'>{{$data->recipe_name}}</h5>
                                <div class='container' style='background:#f0f0f0; padding:5px;'>
                                    <div class='row' style='justify-content:center; width:110%;'>
                                        <div class='col-md-5'>
                                            <a style='font-size:12px; color:#5cb85c;'>{{$data->recipe_level}}</a>
                                        </div>
                                        <div class='col-md-5'>
                                            <a style='font-size:12px;'>{{$data->recipe_type}}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class='container mt-2'>
                                    <div class='row' style='justify-content:center; width:110%;'>
                                        <div class='col-md-3'>
                                            <a style='font-size:15px; font-weight:bold; text-align:center;'>{{$data->recipe_time_spend}}</a>
                                            <p style='font-size:12px;'>min</p>
                                        </div>
                                        <div class='col-md-3'>
                                            <a style='font-size:15px; font-weight:bold; text-align:center;'>{{$data->recipe_calorie}}</a>
                                            <p style='font-size:12px;'>cal</p>
                                        </div>
                                        <div class='col-md-4'>
                                            <p style='font-size:12px; justify-content:center; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; line-clamp: 3; -webkit-box-orient: vertical;'>{{$data->recipe_main_ing}}</p>
                                        </div>
                                    </div>
                                </div>
                                <button class='btn btn-primary'><i class="fa-solid fa-arrow-right"></i> Cook Now</button>
                            </div>
                            @endif
                        @endforeach
                        </div>
                    </div><!--End of container-->

                    <div class='container-fluid mb-3' style='background:white;'>
                        <h2 class="mb-2">Appetizer</h2>
                        <div class="fs-8" style='font-size:14px; color:#808080; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; line-clamp: 3; -webkit-box-orient: vertical;'
                            ><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="row">
                        @foreach($recipe as $data)
                            @if($data->recipe_type == 'Appetizer')
                            <div class="card w-25 p-2 border m-3" style='min-width:250px;'>
                                <img src="http://127.0.0.1:8000/assets/image/recipes/<?php echo str_ireplace(' ', '%20', $data->recipe_name)."_".$data->user_id;?>.png" alt='<?php echo $data->recipe_name."_".$data->user_id;?>'
                                    style='border-radius:4px; margin-top:-60px; width:50%; display: block; margin-left: auto; margin-right: auto;'>
                                <h5 style='font-size:16px; text-align:center;'>{{$data->recipe_name}}</h5>
                                <div class='container' style='background:#f0f0f0; padding:5px;'>
                                    <div class='row' style='justify-content:center; width:110%;'>
                                        <div class='col-md-5'>
                                            <a style='font-size:12px; color:#5cb85c;'>{{$data->recipe_level}}</a>
                                        </div>
                                        <div class='col-md-5'>
                                            <a style='font-size:12px;'>{{$data->recipe_type}}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class='container mt-2'>
                                    <div class='row' style='justify-content:center; width:110%;'>
                                        <div class='col-md-3'>
                                            <a style='font-size:15px; font-weight:bold; text-align:center;'>{{$data->recipe_time_spend}}</a>
                                            <p style='font-size:12px;'>min</p>
                                        </div>
                                        <div class='col-md-3'>
                                            <a style='font-size:15px; font-weight:bold; text-align:center;'>{{$data->recipe_calorie}}</a>
                                            <p style='font-size:12px;'>cal</p>
                                        </div>
                                        <div class='col-md-4'>
                                            <p style='font-size:12px; justify-content:center; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; line-clamp: 3; -webkit-box-orient: vertical;'>{{$data->recipe_main_ing}}</p>
                                        </div>
                                    </div>
                                </div>
                                <button class='btn btn-primary'><i class="fa-solid fa-arrow-right"></i> Cook Now</button>
                            </div>
                            @endif
                        @endforeach
                        </div>
                    </div><!--End of container-->

                    <div class='container-fluid mb-3' style='background:white;'>
                        <h2 class="mb-2">Desert</h2>
                        <div class="fs-8" style='font-size:14px; color:#808080; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; line-clamp: 3; -webkit-box-orient: vertical;'
                            ><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="row">
                        @foreach($recipe as $data)
                            @if($data->recipe_type == 'Desert')
                            <div class="card w-25 p-2 border m-3" style='min-width:250px;'>
                                <img src="http://127.0.0.1:8000/assets/image/recipes/<?php echo str_ireplace(' ', '%20', $data->recipe_name)."_".$data->user_id;?>.png" alt='<?php echo $data->recipe_name."_".$data->user_id;?>'
                                    style='border-radius:4px; margin-top:-60px; width:50%; display: block; margin-left: auto; margin-right: auto;'>
                                <h5 style='font-size:16px; text-align:center;'>{{$data->recipe_name}}</h5>
                                <div class='container' style='background:#f0f0f0; padding:5px;'>
                                    <div class='row' style='justify-content:center; width:110%;'>
                                        <div class='col-md-5'>
                                            <a style='font-size:12px; color:#5cb85c;'>{{$data->recipe_level}}</a>
                                        </div>
                                        <div class='col-md-5'>
                                            <a style='font-size:12px;'>{{$data->recipe_type}}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class='container mt-2'>
                                    <div class='row' style='justify-content:center; width:110%;'>
                                        <div class='col-md-3'>
                                            <a style='font-size:15px; font-weight:bold; text-align:center;'>{{$data->recipe_time_spend}}</a>
                                            <p style='font-size:12px;'>min</p>
                                        </div>
                                        <div class='col-md-3'>
                                            <a style='font-size:15px; font-weight:bold; text-align:center;'>{{$data->recipe_calorie}}</a>
                                            <p style='font-size:12px;'>cal</p>
                                        </div>
                                        <div class='col-md-4'>
                                            <p style='font-size:12px; justify-content:center; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; line-clamp: 3; -webkit-box-orient: vertical;'>{{$data->recipe_main_ing}}</p>
                                        </div>
                                    </div>
                                </div>
                                <button class='btn btn-primary'><i class="fa-solid fa-arrow-right"></i> Cook Now</button>
                            </div>
                            @endif
                        @endforeach
                        </div>
                    </div><!--End of container-->
                </div><!--End of collapse-->

                <div class="collapse" id="favoritesCollapse" data-bs-parent="#accordionRecipe">
                    <div class='container-fluid mb-3' style='background:white;'>
                        <h2 class="mb-2">Favorites</h2>

                    </div><!--End of container-->
                </div><!--End of collapse-->

            </div><!--End of accordion-->

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

