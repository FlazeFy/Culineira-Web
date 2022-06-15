<!DOCTYPE html>
<html>
    <head>
    <title>Culineira | Recipes</title>
    <!--Meta tags-->
    <meta charset="utf-8" name="color-scheme" content="light dark">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--CDN Bootstrap CSS-->
    <link rel="icon" type="image/png" href="http://127.0.0.1:8000/assets/Culineira_Logo.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">		<link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
		<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<script src="https://kit.fontawesome.com/12801238e9.js" crossorigin="anonymous"></script>

        <!--Source file.-->

		<style>
            /*Main style*/
            body.Light {
                --text: #414141;
                --text2: #2F4858;
                --background: #fff4eb;
                --background2: white;
                --background3: white;
                --background4: #f0f0f0;
            }
            body.Dark {
                --text: whitesmoke;
                --text2: whitesmoke;
                --background: #18191A;
                --background2: #18191A;
                --background3: #3A3B3C;
                --background4: #5e5d5d;
            }
            /* Modal Setting*/
            .modal-content{
                background-color: var(--background3);
                border:none;
            }
            p {
                color: gray;
            }
            body {
                font-family: "Poppins", Arial, sans-serif;
                font-size: 14px;
                line-height: 1.8;
                font-weight: normal;
                color: var(--text);
                background: var(--background);
            }
            .col-md-3 {
                color: var(--text2);
            }
            a {
                -webkit-transition: .3s all ease;
                -o-transition: .3s all ease;
                transition: .3s all ease;
                color: grey;
                text-decoration: none;
            }
            a:hover, a:focus {
                text-decoration: none !important;
                outline: none !important;
                -webkit-box-shadow: none;
                box-shadow: none;
            }

            button {
                -webkit-transition: .3s all ease;
                -o-transition: .3s all ease;
                transition: .3s all ease;
            }
            #addRecipeButton{
                border-radius:100%;
                margin-top:-40px;
                width:40px;
                background:var(--background3);
                box-shadow: rgba(0, 0, 0, 0.25) 0px 5px 15px;
            }
            button:hover, button:focus {
                text-decoration: none !important;
                outline: none !important;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }
            .container-fluid.mb-3{
                background: var(--background2);
            }
            .card.border-gray{
                background: var(--background3);
            }
            .container-fluid.mb-3 #headingCard{
                background: var(--background4);
                border-radius:6px;
            }
            h1, h2, h3, h4, h5,
            .h1, .h2, .h3, .h4, .h5 {
                line-height: 1.5;
                font-weight: 400;
                font-family: "Poppins", Arial, sans-serif;
                color: var(--text);
            }

            .ftco-section {
                padding: 7em 0;
            }

            .ftco-no-pt {
                padding-top: 0;
            }

            .ftco-no-pb {
                padding-bottom: 0;
            }

            .heading-section {
                font-size: 28px;
                color: #000;
            }
            .heading-section small {
                font-size: 18px;
            }

            .img {
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center center;
            }

            .navbar {
                padding: 15px 10px;
                background: #fff;
                border: none;
                border-radius: 0;
                margin-bottom: 40px;
                -webkit-box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
                box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
            }

            .navbar-btn {
                -webkit-box-shadow: none;
                box-shadow: none;
                outline: none !important;
                border: none;
            }

            .line {
                width: 100%;
                height: 1px;
                border-bottom: 1px dashed #ddd;
                margin: 40px 0;
            }

            .wrapper {
                width: 100%;
            }

            #sidebar {
                min-width: 300px;
                max-width: 300px;
                background: var(--background3);
                color: #fff;
                -webkit-transition: all 0.3s;
                -o-transition: all 0.3s;
                transition: all 0.3s;
            }
            #sidebar.active {
                margin-left: -300px;
            }
            #sidebar .logo {
                display: block;
                width: 120px;
                height: 120px;
                margin: 0 auto;
            }
            #sidebar .logo span {
                display: block;
            }
            #sidebar ul.components {
                padding: 0;
            }
            #sidebar ul li {
                font-size: 16px;
                padding:4px;
            }
            #sidebar ul li > ul {
                margin-left: 10px;
            }
            #sidebar ul li > ul li {
                font-size: 14px;
            }
            #sidebar ul li a {
                padding: 10px;
                display: block;
                color: var(--text2);
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }
            #sidebar ul li:hover {
                background: var(--background4);
                border-radius: 6px;
                color: whitesmoke;
            }
            #sidebar ul li.active > a {
                background: transparent;
                border-left: 4px solid var(--text2);
            }
            @media (max-width: 991.98px) {
                #sidebar {
                margin-left: -300px; }
                #sidebar.active {
                margin-left: 0; }
            }

            a[data-toggle="collapse"] {
                position: relative;
            }

            .dropdown-toggle::after {
                display: block;
                position: absolute;
                top: 50%;
                right: 0;
                -webkit-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                transform: translateY(-50%);
            }

            @media (max-width: 991.98px) {
            #sidebarCollapse span {
                display: none; } }

            #content {
                width: 100%;
                padding: 0;
                min-height: 100vh;
                -webkit-transition: all 0.3s;
                -o-transition: all 0.3s;
                transition: all 0.3s;
            }

            .btn.btn-primary {
                background: #eb7336;
                border-color: #eb7336;
            }


            .footer p {
                color: rgba(255, 255, 255, 0.5);
            }

            /*Profil container sidebar.*/
            .p-4.pt-2 .container-fluid.p-2.pt-3.rounded-3{
                transition: width 2s, height 2s, transform 1s;
                margin-top:-10px;
                background: var(--background4);
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
    <body class="light">
    <script>
      const theme = localStorage.getItem('theme') || 'light';
      document.body.className = theme;
    </script>
		<div class="wrapper d-flex align-items-stretch">

        <!--Sidebar.-->
        <nav id="sidebar">
            <div class="p-4 pt-2">
                <img class="w-100" src="{{asset('assets/Culineira_FullLogo.png')}}" alt='user_flazefy'
                    style='display: block; margin-left: auto; margin-right: auto;'>

                <!--Profil section.-->
                @foreach($user as $data)
                    @if($data->username == 'flazefy')
                    <div class='container-fluid p-2 pt-3 rounded-3' title='Click to open profile' type='button'>
                        <img class="img logo rounded-circle mb-3" src="http://127.0.0.1:8000/assets/image/users/user_<?php echo $data->username;?>.jpg" alt='<?php echo $data->username.".jpg";?>'
                        style='display: block; margin-left: auto; margin-right: auto;'>
                        <h5 class="text-center" style='color:color:#2F4858;'>@<span>{{$data->username}}</span></h5>
                        <div class='row' style='justify-content:center;'>
                            <div class='col-md-3'>
                                <a style='font-size:15px; font-weight:bold; text-align:center;'>25</a>
                                <a style='font-size:12px;'>Following</a>
                            </div>
                            <div class='col-md-3'>
                                <a style='font-size:15px; font-weight:bold; text-align:center;'>300</a>
                                <a style='font-size:12px;'>Followers</a>
                            </div>
                            <div class='col-md-3'>
                                <a style='font-size:15px; font-weight:bold; text-align:center;'>3</a>
                                <a style='font-size:12px;'>Recipes</a>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach

                <!--Main Navbar.-->
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
                <button class="btn btn-danger" style='margin-top:-10px;'>Sign-Out</button>
                <button class="btn btn-primary" style='margin-top:-10px;' id="theme-toggle"><span id="theme"></span> Mode</button>
            </div>
    	</nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5" style='width:100%; max-height: calc(90vh - 140px); overflow-x: auto;'>
            <div class="accordion" id="accordionRecipe">
                <!--Secondary Navbar.-->
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
                                    <a class="nav-link" href="" role="button" data-bs-toggle="collapse" data-bs-target="#aboutCollapse" aria-expanded="false" aria-controls="CollapseExample2">About</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="collapse show" id="globalCollapse" data-bs-parent="#accordionRecipe">
                    <!--New Recipes.-->
                    <div class='container-fluid mb-3'>
                        <h3 class="mb-2">New Recipes this week</h3>
                        <div class="row" style='overflow-x: scroll; width:auto; height:130px;'><!--Row must support horizontal scroll without multiple line-->
                            <div class="card border-gray" style='min-width:100px; width:120px; border:none; background:transparent;' type='button' data-bs-toggle="modal" data-bs-target="#createInstantRecipe">
                                <img src="http://127.0.0.1:8000/assets/image/icon/CreateNewRecipe.png" alt='CreateNewRecipe.png'
                                    style='border-radius:100%; margin-top:10px; width:80px; box-shadow: rgba(0, 0, 0, 0.25) 0px 5px 15px; background:#EB7336; display: block; margin-left: auto; margin-right: auto;'>
                                <img src="http://127.0.0.1:8000/assets/image/icon/Add.png" alt='Add.png' id="addRecipeButton">
                                <a style='font-size:11px; white-space: nowrap;  display: block; margin-left: auto; margin-right: auto;'>New Recipe</a>
                            </div>
                        @foreach($recipe as $data)
                            @foreach($user as $data2)
                            @if($data->user_id == $data2->id)
                            @if(strtotime($data->created_at) > strtotime('-7 day'))
                            <div class="card border-gray" style='min-width:100px; width:120px; border:none; background:transparent;' type='button'>
                                <img src="http://127.0.0.1:8000/assets/image/recipes/<?php echo str_ireplace(' ', '%20', $data->recipe_name)."_".$data->user_id;?>.png" alt='<?php echo $data->recipe_name."_".$data->user_id;?>'
                                    style='border-radius:100%; margin-top:-10px; width:100px; display: block; margin-left: auto; margin-right: auto;'>
                                <img src="http://127.0.0.1:8000/assets/image/users/user_<?php echo $data2->username;?>.jpg" alt='<?php echo $data2->username.".jpg";?>' title='<?php echo $data2->username;?>'
                                    style='border-radius:100%; margin-top:-40px; width:40px; border:3px solid #eb7336; box-shadow: rgba(0, 0, 0, 0.25) 0px 5px 15px;'>
                                <a style='font-size:11px; white-space: nowrap;  display: block; margin-left: auto; margin-right: auto;'>{{$data->recipe_name}}</a>
                            </div>
                            @endif
                            @endif
                            @endforeach
                        @endforeach
                        </div>
                    </div>

                    <!--Recipe type.-->
                    <div class='container-fluid mb-3'>
                        <h3 class="mb-2">Main Course</h3>
                        <div class="fs-8" style='font-size:14px; color:#808080; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; line-clamp: 3; -webkit-box-orient: vertical;'
                            ><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="row">
                        @foreach($recipe as $data)
                            @if($data->recipe_type == 'Main Course')
                                @foreach($user as $data2)
                                @if($data->user_id == $data2->id)
                                <div class="card border-gray w-25 p-2 border m-3" style='min-width:250px;'>
                                    <img src="http://127.0.0.1:8000/assets/image/recipes/<?php echo str_ireplace(' ', '%20', $data->recipe_name)."_".$data->user_id;?>.png" alt='<?php echo $data->recipe_name."_".$data->user_id;?>'
                                        style='border-radius:4px; margin-top:-60px; width:50%; display: block; margin-left: auto; margin-right: auto;'>
                                    <img src="http://127.0.0.1:8000/assets/image/users/user_<?php echo $data2->username;?>.jpg" alt='<?php echo $data2->username.".jpg";?>' title='<?php echo $data2->username;?>'
                                        style='border-radius:100%; margin-top:-40px; margin-left:20px; width:40px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>
                                    <img src="http://127.0.0.1:8000/assets/image/country/<?php echo $data->recipe_country;?>.png" alt='<?php echo $data->recipe_country.".png";?>' title='<?php echo $data->recipe_country;?>'
                                        style='border-radius:100%; width:40px; margin-top:30px; margin-left:200px; position:absolute; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>
                                    <h5 style='font-size:16px; text-align:center;'>{{$data->recipe_name}}</h5>
                                    <div class='container' id='headingCard' style='padding:5px;'>
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
                            @endif
                        @endforeach
                        </div>
                    </div><!--End of container-->

                    <div class='container-fluid mb-3'>
                        <h3 class="mb-2">Appetizer</h3>
                        <div class="fs-8" style='font-size:14px; color:#808080; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; line-clamp: 3; -webkit-box-orient: vertical;'
                            ><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="row">
                        @foreach($recipe as $data)
                            @if($data->recipe_type == 'Appetizer')
                                @foreach($user as $data2)
                                @if($data->user_id == $data2->id)
                                <div class="card border-gray w-25 p-2 border m-3" style='min-width:250px;'>
                                    <img src="http://127.0.0.1:8000/assets/image/recipes/<?php echo str_ireplace(' ', '%20', $data->recipe_name)."_".$data->user_id;?>.png" alt='<?php echo $data->recipe_name."_".$data->user_id;?>'
                                        style='border-radius:4px; margin-top:-60px; width:50%; display: block; margin-left: auto; margin-right: auto;'>
                                    <img src="http://127.0.0.1:8000/assets/image/users/user_<?php echo $data2->username;?>.jpg" alt='<?php echo $data2->username.".jpg";?>' title='<?php echo $data2->username;?>'
                                        style='border-radius:100%; margin-top:-40px; margin-left:20px; width:40px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>
                                    <img src="http://127.0.0.1:8000/assets/image/country/<?php echo $data->recipe_country;?>.png" alt='<?php echo $data->recipe_country.".png";?>' title='<?php echo $data->recipe_country;?>'
                                        style='border-radius:100%; width:40px; margin-top:30px; margin-left:200px; position:absolute; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>
                                    <h5 style='font-size:16px; text-align:center;'>{{$data->recipe_name}}</h5>
                                    <div class='container' id='headingCard' style='padding:5px;'>
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
                            @endif
                        @endforeach
                        </div>
                    </div><!--End of container-->

                    <div class='container-fluid mb-3'>
                        <h3 class="mb-2">Desserts</h3>
                        <div class="fs-8" style='font-size:14px; color:#808080; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; line-clamp: 3; -webkit-box-orient: vertical;'
                            ><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="row">
                        @foreach($recipe as $data)
                            @if($data->recipe_type == 'Desserts')
                                @foreach($user as $data2)
                                @if($data->user_id == $data2->id)
                                <div class="card border-gray w-25 p-2 border m-3" style='min-width:250px;'>
                                    <img src="http://127.0.0.1:8000/assets/image/recipes/<?php echo str_ireplace(' ', '%20', $data->recipe_name)."_".$data->user_id;?>.png" alt='<?php echo $data->recipe_name."_".$data->user_id;?>'
                                        style='border-radius:4px; margin-top:-60px; width:50%; display: block; margin-left: auto; margin-right: auto;'>
                                    <img src="http://127.0.0.1:8000/assets/image/users/user_<?php echo $data2->username;?>.jpg" alt='<?php echo $data2->username.".jpg";?>' title='<?php echo $data2->username;?>'
                                        style='border-radius:100%; margin-top:-40px; margin-left:20px; width:40px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>
                                    <img src="http://127.0.0.1:8000/assets/image/country/<?php echo $data->recipe_country;?>.png" alt='<?php echo $data->recipe_country.".png";?>' title='<?php echo $data->recipe_country;?>'
                                        style='border-radius:100%; width:40px; margin-top:30px; margin-left:200px; position:absolute; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>
                                    <h5 style='font-size:16px; text-align:center;'>{{$data->recipe_name}}</h5>
                                    <div class='container' id='headingCard' style='padding:5px;'>
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
                            @endif
                        @endforeach
                        </div>
                    </div><!--End of container-->
                </div><!--End of collapse-->

                <div class="collapse" id="favoritesCollapse" data-bs-parent="#accordionRecipe">
                    <div class='container-fluid mb-3'>
                        <h3 class="mb-2">Favorites</h3>

                    </div><!--End of container-->
                </div><!--End of collapse-->

                <div class="collapse" id="myrecipesCollapse" data-bs-parent="#accordionRecipe">
                    <div class='container-fluid mb-3'>
                        <h3 class="mb-2">My Recipes</h3>

                    </div><!--End of container-->
                </div><!--End of collapse-->

                <div class="collapse" id="aboutCollapse" data-bs-parent="#accordionRecipe">
                    <div class='container-fluid mb-3'>
                        <h3 class="mb-2">About</h3>

                    </div><!--End of container-->
                </div><!--End of collapse-->

            </div><!--End of accordion-->

        </div>
    </div>

    <!--Create instant recipe modal-->
    <div class="modal fade" id="createInstantRecipe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content p-2">
        <div class="modal-header">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Recipe</h5>
                </div>
                <div class="col-md-4 mb-2">
                    <select class="form-select" name="recipe_type" required>
                        <option selected value="1">Main Course</option>
                        <option value="2">Intermediate</option>
                        <option value="3">Desserts</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <input class="form-control" name="recipe_country" type="text" placeholder="Indonesia" required></input>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-1 pt-2">
                    <label class="form-label">Name</label>
                </div>
                <div class="col-md-4 m-1">
                    <input class="form-control" name="recipe_name" type="text" placeholder="Pizza" required></input>
                </div>
                <div class="col-md-1 pt-2">
                    <label class="form-label">Level</label>
                </div>
                <div class="col-md-3 m-1">
                    <select class="form-select" name="recipe_level" required>
                        <option selected value="1">Beginner</option>
                        <option value="2">Intermediate</option>
                        <option value="3">Expert</option>
                    </select>
                </div>
                <div class="col-md-2 pt-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="recipe_halal" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Halal
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 p-2">
                    <div class="container-fluid p-0">
                        <label class="form-label" name="recipe_time_spend">Time Spend / Calorie <i class="fa-solid fa-circle-question" type="button"></i></label>
                        <div class="row">
                            <div class="col-md-3">
                                <input class="form-control" type="number" name="recipe_time_spend" placeholder="30" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label pt-2">Minutes</label>
                            </div>
                            <div class="col-md-3">
                                <input class="form-control" type="number" name="recipe_calorie" placeholder="150" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label pt-2">Cal</label>
                            </div>
                        </div>
                    </div>
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="recipe_desc" rows="5" required placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing... "></textarea>
                    <label class="form-label mt-2">Image <i class="fa-solid fa-circle-question" type="button"></i></label>
                    <input class="form-control" type="file" id="formFile" onchange="preview()" required>
                </div>
                <div class="col-md-6 p-2">
                    <label class="form-label">Main Ingredients <i class="fa-solid fa-circle-question" type="button"></i></label>
                    <textarea class="form-control" rows="3" name="recipe_main_ing" placeholder="Beef, Tomato, ..."></textarea>
                    <label class="form-label">Preview</label>
                    <div class="row">
                        <div class="col-md-7">
                            <img id="frame" src="http://127.0.0.1:8000/assets/NoImage.png" class="img-fluid" style="width:200px; border-radius:100%; border:3px solid #EB7736;"/>
                        </div>
                        <div class="col-md-5">
                            <button onclick="clearImage()" class="btn btn-danger mt-3 w-100"><i class="fa-solid fa-trash"></i> Reset</button>
                            <button type="button" class="btn btn-success mt-2 w-100" type="submit"><i class="fa-solid fa-plus"></i> Post </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>

    <script>
        //Darkmode setting.
        function getTheme() {
            return localStorage.getItem('theme') || 'Light';
        }
        function saveTheme(theme) {
            localStorage.setItem('theme', theme);
        }

        const colorScheme = document.querySelector('meta[name="color-scheme"]');
        function applyTheme(theme) {
            document.body.className = theme;
            colorScheme.content = theme;
        }

        function rotateTheme(theme) {
        if (theme === 'Light') {
            return 'Dark'
        }
            return 'Light';
        }

        const themeDisplay = document.getElementById('theme');
        const themeToggler = document.getElementById('theme-toggle');

        setTimeout(() => {
        let theme = getTheme();
        applyTheme(theme);
        themeDisplay.innerText = theme;

        themeToggler.onclick = () => {
            const newTheme = rotateTheme(theme);
            applyTheme(newTheme);
            themeDisplay.innerText = newTheme;
            saveTheme(newTheme);

            theme = newTheme;
        }
        }, 1000);

        //Image upload preview.
        function preview() {
            frame.src = URL.createObjectURL(event.target.files[0]);
        }
        function clearImage() {
            document.getElementById('formFile').value = null;
            frame.src = "http://127.0.0.1:8000/assets/NoImage.png";
        }

        //Sidebar setting.
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

    <!--Others CDN.-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>

	</body>
</html>

