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
    <script href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css"></script>
    <!-- Jquery -->
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- Jquery DataTables -->
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap dataTables Javascript -->
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script type="text/javascript" charset="utf-8">
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>

        <!--Source file.-->

		<style>
            :root {
                --prm-color: #EB7336;
                --prm-gray: #b1b1b1;
            }
            /*Main style*/
            body.Light {
                --text: #414141;
                --text2: #2F4858;
                --background: #fff4eb;
                --background2: white; /*For container*/
                --background3: white; /*For container*/
                --background4: #f0f0f0;
                --background5: #CED4DA; /*For input border*/
                --background6: #F0F0F0;
                --background7: transparent; /*For modal, dropdown, popover border*/
                --background8: #f1f1f1; /*For bubble chat*/
            }
            body.Dark {
                --text: whitesmoke;
                --text2: whitesmoke;
                --background: #18191A;
                --background2: #18191A;
                --background3: #3A3B3C;
                --background4: #5e5d5d;
                --background6: #3A3B3C;
                --background7: #EB7336;
                --background8: #3A3B3C;
            }

            .flex-shrink-1.rounded.py-2.px-3.mr-3{
                background:var(--background8);
            }
            #dateMsg{
                color:var(--text2);
                font-size:10px;
            }

            .card.card-body{
                background:var(--background2);
            }
            .steps {
                display: block;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 2rem;
                position: relative;
            }

            .step-button {
                width: 50px;
                height: 50px;
                border-radius: 50%;
                border: none;
                background-color: var(--prm-gray);
                transition: .4s;
            }

            .step-button[aria-expanded="true"] {
                width: 60px;
                height: 60px;
                background-color: var(--prm-color);
                color: #fff;
            }

            .done {
                background-color: var(--prm-color);
                color: #fff;
            }

            .step-item {
                z-index: 10;
                text-align: center;
            }

            #progress {
            -webkit-appearance:none;
                position: absolute;
                width: 95%;
                z-index: 5;
                height: 10px;
                margin-left: 18px;
                margin-bottom: 18px;
            }

            /* to customize progress bar */
            #progress::-webkit-progress-value {
                background-color: var(--prm-color);
                transition: .5s ease;
            }

            #progress::-webkit-progress-bar {
                background-color: var(--prm-gray);

            }

            .dropdown-menu{
                background: var(--background4);
                border: 2px solid var(--background7);
            }
            .dropdown-item .btn.btn-light{
                color: var(--text);
            }

            .form-control{
                background: var(--background3);
                border-color: #CED4DA;
                color: var(--text);
            }
            .form-select{
                background: var(--background3);
                border-color: #CED4DA;
                color: var(--text);
            }
            thead{
                color: var(--text);
            }
            td h6{
                color: var(--text);
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
            .card.border-0{
                background: var(--background2);
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

            /*Navigation.*/
			.nav-pills-custom .nav-link {
				color: var(--text2);
				background: var(--background3);
				position: relative;
                font-size:14px;
			}
			.nav-pills-custom .nav-link:hover {
				color: white;
				background: #e8a382;
				position: relative;
			}
			.nav-pills-custom .nav-link.active {
				color: white;
				background: #EB7336;
			}
			@media (min-width: 992px) {
				.nav-pills-custom .nav-link::before {
					content: '';
					display: block;
					border-top: 8px solid transparent;
					border-left: 10px solid #EB7336;
					border-bottom: 8px solid transparent;
					position: absolute;
					top: 50%;
					right: -10px;
					transform: translateY(-50%);
					opacity: 0;
				}
			}
			.nav-pills-custom .nav-link.active::before {
				opacity: 1;
			}
			.nav-link.scrollto.rounded{
				font-size:14px;
				background:#00a34d;
			}
            .tab-content .tab-pane.fade.shadow.rounded.show.active.p-2{
                background: var(--background2);
            }
            .tab-pane.fade.shadow.rounded h5{
                color:var(--text2);
            }

            /*Navigation modal.*/
			.flex-row.nav-pills.nav-pills-custom .nav-link {
				color: var(--text2);
				background: var(--background3);
				position: relative;
                width: 150px;
                font-size:14px;
			}
			.flex-row.nav-pills.nav-pills-custom .nav-link:hover {
				color: white;
				background: #e8a382;
				position: relative;
			}
			.flex-row.nav-pills.nav-pills-custom .nav-link.active {
				color: white;
				background: #EB7336;
			}
			@media (min-width: 992px) {
				.flex-row.nav-pills.nav-pills-custom .nav-link::before {
					content: '';
					display: block;
					border-left: 8px solid transparent;
					border-top: 10px solid #EB7336;
					border-right: 8px solid transparent;
					position: absolute;
					top: 115%;
					right: 40%;
					transform: translateY(-50%);
					opacity: 0;
				}
			}
            .flex-row.nav-pills.nav-pills-custom .nav-link.active::before {
				opacity: 1;
			}

            /*Autocomplete search*/
			.autocomplete {
                position: relative;
                display: inline-block;
			}

			.autocomplete-items {
				position: absolute;
				border-bottom: none;
				border-top: none;
				z-index: 99;
				/*position the autocomplete items to be the same width as the container:*/
				top: 100%;
				left: 0;
				right: 0;
				border-radius:5px;
			}

			.autocomplete-items div {
				padding: 10px;
				cursor: pointer;
				background-color: var(--background6);
				border-bottom: 1px solid transparent;
				border-radius:5px;
			}

			/*when hovering an item:*/
			.autocomplete-items div:hover {
				background-color: #EB7336;
				color: #ffffff;
			}

			/*when navigating through the items using the arrow keys:*/
			.autocomplete-active {
				background-color: #EB7336 !important;
				color: #ffffff;
			}

            #dropIcon{
                transition: all .3s ease-in;
            }

            .chat-online {
                color: #34ce57
            }

            .chat-offline {
                color: #e4606d
            }

            .chat-messages {
                display: flex;
                flex-direction: column;
                max-height: 400px;
                overflow-y: scroll
            }

            .chat-message-left,
            .chat-message-right {
                display: flex;
                flex-shrink: 0
            }

            .chat-message-left {
                margin-right: auto
            }

            .chat-message-right {
                flex-direction: row-reverse;
                margin-left: auto;
            }
            .py-3 {
                padding-top: 1rem!important;
                padding-bottom: 1rem!important;
            }
            .px-4 {
                padding-right: 1.5rem!important;
                padding-left: 1.5rem!important;
            }
            .flex-grow-0 {
                flex-grow: 0!important;
            }
            .border-top {
                border-top: 1px solid #dee2e6!important;
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
                <img class="w-100" src="{{asset('assets/Culineira_FullLogo.png')}}" alt='logo'
                    style='display: block; margin-left: auto; margin-right: auto;'>

                <!--Profil section.-->
                @foreach($user as $data)
                    @if($data->username == session()->get('usernameKey'))
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
                        <a href="#"><i class="fa-solid fa-circle-info"></i> Guide</a>
                    </li>
                </ul>
                <button class="btn btn-danger" style='margin-top:-10px;' onclick="location.href='{{ url('/') }}'">Sign-Out</button>
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
                                @foreach($recipeId as $data)
                                    <li class="nav-item">
                                        <a class="nav-link" href="" role="button" data-bs-toggle="collapse" data-bs-target="#globalCollapse" aria-expanded="false" aria-controls="CollapseExample2" >Book Now > {{$data->recipe_name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="collapse show" id="globalCollapse" data-bs-parent="#accordionRecipe">
                    <!--Control Section.-->
                    <div class='container-fluid mb-1 bg-transparent' style='margin-top:-30px;'>
                        <div class='row'>
                            <div class='col-sm-4'>
                                <form autocomplete="off" action="" method="POST">
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><button class="btn btn-primary p-1" style="height:30px; width:30px;"><i class="fa-solid fa-magnifying-glass fa-xs"></i></button></span>
                                    <input type="text" class="form-control" id="searchInput" name="search" placeholder="recipe, @creator, or #community" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                </form>
                            </div>
                            <div class='col-sm-2 mt-1'>
                                <select class="form-select" aria-label="Default select example">
                                    <option value="Oriental">Oriental</option>
                                    <option value="Middle Eastern">Middle Eastern</option>
                                    <option value="Continental">Continental</option>
                                    <option value="Indian">Indian</option>
                                    <option value="Chinese">Chinese</option>
                                    <option value="Korean & Japanese">Korean & Japanese</option>
                                </select>
                            </div>
                            <div class='col-sm-2 mt-1'>
                                <select class="form-select" aria-label="Default select example">
                                    <option value="Beginner">Beginner</option>
                                    <option value="Intermediate">Intermediate</option>
                                    <option value="Expert">Expert</option>
                                </select>
                            </div>
                            <div class='col-sm-2 mt-1'>
                                <select class="form-select" aria-label="Default select example">
                                    <option value="20">< 20 min</option>
                                    <option value="<45">< 45 min</option>
                                    <option value=">45">> 45 min</option>
                                </select>
                            </div>
                            <div class='col-sm-2 mt-1'>
                                <button class="btn btn-primary"><i class="fa-solid fa-filter"></i> Filter</button>
                            </div>
                        </div>
                    </div>

                    <!--Recipes Detail.-->
                    @foreach($recipeId as $data)
                        <div class='container-fluid mb-3 p-3'>
                            <h3 class="mb-2">{{$data->recipe_name}}<span class="container border-0 text-secondary rounded-pill m-2" style="
                                <?php if($data->recipe_level == "Beginner"){echo"background: rgba(5, 240, 44, 0.2);";}
                                    else if($data->recipe_level == "Intermediate"){echo"background: rgba(245, 164, 2, 0.2);";}
                                    else if($data->recipe_level == "Expert"){echo"background: rgba(255, 0, 0, 0.2);";}
                                ?> font-size:15px;">{{$data->recipe_level}}</span></h3>
                            <div class="row">
                                <div class="col-md-3 text-center mb-2">
                                    <img src="http://127.0.0.1:8000/assets/image/recipes/<?php echo str_ireplace(' ', '%20', $data->recipe_name)."_".$data->user_id;?>.png" alt='<?php echo $data->recipe_name."_".$data->user_id;?>'
                                        style='width:70%; display: block; margin-left: auto; margin-right: auto;'><hr>
                                    <h6 style="font-size:14px;"><span class="text-secondary">Type :</span> {{$data->recipe_type}}</h6>
                                    <h6 style="font-size:14px;"><span class="text-secondary">Country :</span> {{$data->recipe_country}}</h6>
                                    <h6 style="font-size:14px;"><span class="text-secondary">Time Spend :</span> {{$data->recipe_time_spend}} min</h6>
                                    <h6 style="font-size:14px;"><span class="text-secondary">Calorie :</span> {{$data->recipe_calorie}} cal</h6><br>

                                    <h6 style="font-size:14px;">Main Ingredients <i class="fa-solid fa-circle-info"></i></h6>
                                    <h7 style="font-size:13px;">{{$data->recipe_main_ing}}</h7>
                                    <hr>
                                    <h6 class="mt-4" style="font-size:14px;">Created On</h6>
                                    <h7 style="font-size:13px;">{{$data->created_at}}</h7>
                                    <h6 style="font-size:14px;">Updated On</h6>
                                    <h7 style="font-size:13px;">{{$data->updated_at}}</h7>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <button class="btn btn-primary w-100" data-bs-toggle="collapse" data-bs-target="#collapseTiles">
                                                <i class="fa-solid fa-list-check"></i> Tiles</button>
                                        </div>
                                        <div class="col-md-3">
                                            <button class="btn btn-primary w-100" data-bs-toggle="collapse" data-bs-target="#collapseStepper">
                                                <i class="fa-solid fa-timeline"></i> Stepper</button>
                                        </div>
                                    </div>
                                    <h5 class="mt-2">How to make</h5>
                                    <div class="accordion" id="accordionSteps">
                                        <div class="accordion" id="accordionMsgTls">
                                        <div id="collapseTiles" class="collapse show" data-bs-parent="#accordionSteps">
                                            @php($i=1)
                                            @foreach($steps as $stp)
                                                @if($stp->recipe_id == $data->id)
                                                <div class="card shadow border-0 w-100 mb-2">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <a style="color:#EB7336;">Steps #{{$i}}</a><br>
                                                            <a>{{$stp->steps_body}}</a>
                                                            @if($stp->steps_type == "Optional")
                                                                <b>{{$stp->steps_type}}</b>
                                                            @endif
                                                        </div>
                                                        <button class="btn btn-link border-0 bg-transparent" style="font-size:16px; text-decoration:none; color:#EB7336;"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseMsgTls<?php echo $i; ?>"><i class="fa-solid fa-comment"></i> Comment</button>
                                                        <div class="accordion-collapse collapse" id="collapseMsgTls<?php echo $i; ?>" data-bs-parent="#accordionMsgTls">
                                                            <div class="card card-body">
                                                                <div class="position-relative">
                                                                    <div class="chat-messages p-2">
                                                                        @php($c=0)
                                                                        @foreach($comment as $cmt)
                                                                            @foreach($user as $u)
                                                                                @if(($cmt->steps_id == $stp->id)&&($u->id == $cmt->users_id))
                                                                                <div class="chat-message-<?php if($u->username == session()->get('usernameKey')){echo "right";}else{echo "left";}?> pb-4">
                                                                                    <div>
                                                                                        <img src="http://127.0.0.1:8000/assets/image/users/user_<?php echo $u->username;?>.jpg" class="rounded-circle mr-1" alt="<?php echo $u->username; ?>" width="35" >
                                                                                    </div>
                                                                                    <div class="flex-shrink-1 rounded py-2 px-3 mr-3" style="<?php if($cmt->users_id == $data->user_id){echo "border:2px #EB7336 solid;";}?>">
                                                                                        <div class="font-weight-bold mb-1" style="color:#EB7336;">{{$u->username}}<span class="text-secondary" id="dateMsg"> {{$cmt->created_at}}</span></div>
                                                                                        {{$cmt->comment_body}}
                                                                                    </div>
                                                                                </div>
                                                                                @php($c++)
                                                                                @endif
                                                                            @endforeach
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-0 py-2 border-top">
                                                                <form action="/detail/sendComment/<?php echo $data->id;?>" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-1">
                                                                        <a class="btn btn-primary" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content-id="popover-content"><i class="fa-solid fa-paperclip"></i></a>
                                                                        <div id="popover-content" class="d-none">
                                                                            <a class="text-secondary">Image</a>
                                                                            <p class="text-secondary mt-2" style="font-size:12px;"><i class="fa-solid fa-circle-info"></i> Max size for image 5 mb, with format jpg or png</p>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-11">
                                                                        <div class="input-group">
                                                                            <input name="steps_id" class="form-control" value="<?php echo $stp->id; ?>" required hidden>
                                                                            <input type="text" class="form-control" placeholder="Type your comment" name="comment_body" required>
                                                                            <button type="submit" class="btn btn-primary">Send</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!--End of card.-->
                                                @php($i++)
                                                @endif
                                            @endforeach
                                        </div>
                                        </div>

                                        <div id="collapseStepper" class="collapse" data-bs-parent="#accordionSteps">
                                            <div class="accordion" id="accordionExample">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="steps">
                                                            <!-- <progress id="progress" value=0 max=100></progress> -->
                                                            @php($i=1)
                                                            @php($aria="true")
                                                            @foreach($steps as $stp)
                                                                @if($stp->recipe_id == $data->id)
                                                                <div class="step-item">
                                                                    <button class="step-button text-center mb-1" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseStep<?php echo $i; ?>" aria-expanded="<?php echo $aria; ?>" aria-controls="collapseOne">{{$i}}</button>
                                                                </div>
                                                                @php($i++)
                                                                @php($aria="false")
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10">
                                                        @php($j=1)
                                                        @php($class=" show")
                                                        @foreach($steps as $stp)
                                                            @if($stp->recipe_id == $data->id)
                                                            <div class="card border-0 shadow rounded">
                                                                <div id="headingOne"></div>
                                                                <div id="collapseStep<?php echo $j; ?>" class="collapse<?php echo $class; ?>" aria-labelledby="headingOne"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="card-body p-4">
                                                                        <div class="row">
                                                                            <a style="color:#EB7336;">Steps #{{$j}}</a><br>
                                                                            <a class="mb-3">{{$stp->steps_body}}</a>
                                                                            @if($stp->steps_type == "Optional")
                                                                                <b>{{$stp->steps_type}}</b>
                                                                            @endif
                                                                            <a style="color:#EB7336; margin-top:10px;">Comment</a>
                                                                            <div class="card card-body">
                                                                                <div class="position-relative">
                                                                                    <div class="chat-messages p-2">
                                                                                        @php($c=0)
                                                                                        @foreach($comment as $cmt)
                                                                                            @foreach($user as $u)
                                                                                                @if(($cmt->steps_id == $stp->id)&&($u->id == $cmt->users_id))
                                                                                                <div class="chat-message-<?php if($u->username == session()->get('usernameKey')){echo "right";}else{echo "left";}?> pb-4">
                                                                                                    <div>
                                                                                                        <img src="http://127.0.0.1:8000/assets/image/users/user_<?php echo $u->username;?>.jpg" class="rounded-circle mr-1" alt="<?php echo $u->username; ?>" width="35" >
                                                                                                    </div>
                                                                                                    <div class="flex-shrink-1 rounded py-2 px-3 mr-3" style="<?php if($cmt->users_id == $data->user_id){echo "border:2px #EB7336 solid;";}?>">
                                                                                                        <div class="font-weight-bold mb-1" style="color:#EB7336;">{{$u->username}}<span class="text-secondary" id="dateMsg"> {{$cmt->created_at}}</span></div>
                                                                                                        {{$cmt->comment_body}}
                                                                                                    </div>
                                                                                                </div>
                                                                                                @php($c++)
                                                                                                @endif
                                                                                            @endforeach
                                                                                        @endforeach
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="flex-grow-0 py-2 border-top">
                                                                                <form action="/detail/sendComment/<?php echo $data->id;?>" method="POST" enctype="multipart/form-data">
                                                                                @csrf
                                                                                <div class="row">
                                                                                    <div class="col-1">
                                                                                        <a class="btn btn-primary" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content-id="popover-content"><i class="fa-solid fa-paperclip"></i></a>
                                                                                        <div id="popover-content" class="d-none">
                                                                                            <a class="text-secondary">Image</a>
                                                                                            <p class="text-secondary mt-2" style="font-size:12px;"><i class="fa-solid fa-circle-info"></i> Max size for image 5 mb, with format jpg or png</p>

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-11">
                                                                                        <div class="input-group">
                                                                                            <input name="steps_id" class="form-control" value="<?php echo $stp->id; ?>" required hidden>
                                                                                            <input type="text" class="form-control" placeholder="Type your comment" name="comment_body" required>
                                                                                            <button type="submit" class="btn btn-primary">Send</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @php($j++)
                                                            @php($class=" ")
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div><!--End of accordion-->
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-3 mb-2">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <button class="btn btn-primary w-100 border-0" style="background:#DE5667;"><i class="fa-solid fa-thumbs-up"></i></button>
                                        </div>
                                        <div class="col-md-3">
                                            <button class="btn btn-primary w-100 border-0" style="background:#B35387;"><i class="fa-solid fa-paperclip"></i></button>
                                        </div>
                                        <div class="col-md-6">
                                            <button class="btn btn-primary w-100 border-0" style="background:#00B6AB;"><i class="fa-solid fa-share-from-square"></i> Share</button>
                                        </div>
                                    </div>
                                    <h5 class="mt-2">Ingredients</h5>
                                    <div class="container-fluid mb-2">
                                        <b>Required</b><br>
                                        @php($i=1)
                                        @foreach($ingredients as $ing)
                                            @if(($stp->recipe_id == $data->id)&&($ing->ingredients_type == "Required"))
                                                <a style="font-size:12px;">{{$ing->ingredients_vol}} ~ {{$ing->ingredients_name}}</a><br>
                                                @php($i++)
                                            @endif
                                        @endforeach

                                        <br><b>Optional</b><br>
                                        @php($i=1)
                                        @foreach($ingredients as $ing)
                                            @if(($stp->recipe_id == $data->id)&&($ing->ingredients_type == "Optional"))
                                                <a style="font-size:12px;">{{$ing->ingredients_vol}} ~ {{$ing->ingredients_name}}</a><br>
                                                @php($i++)
                                            @endif
                                        @endforeach
                                    </div>
                                    <hr>
                                    <h5>Contributors <i class="fa-solid fa-circle-info"></i></h5>
                                    <div class="container-fluid mb-2">
                                        <div class="row" style='height:90px;'>
                                        @foreach($recipeId as $data)
                                            @foreach($user as $data2)
                                            @if($data->user_id == $data2->id)
                                            <div class="card border-gray m-2" style='min-width:40px; width:40px; border:none; background:transparent; margin-top:5px;' type='button'>
                                                <a href="">
                                                <img class="img logo rounded-circle mb-3" src="http://127.0.0.1:8000/assets/image/users/user_<?php echo $data2->username;?>.jpg" alt='<?php echo $data2->username.".jpg";?>'
                                                    style='display: block; margin-left: auto; margin-right: auto; width:40px;'>
                                                <a style='font-size:11px; white-space: nowrap;  display: block; margin-left: auto; margin-right: auto; margin-top:-10px;'>{{$data2->username}}</a>
                                                </a>
                                            </div>
                                            @endif
                                            @endforeach
                                        @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div><!--End of collapse-->

                <div class="collapse" id="aboutCollapse" data-bs-parent="#accordionRecipe">
                    <div class='container-fluid mb-3'>
                        <h3 class="mb-2">About</h3>

                    </div><!--End of container-->
                </div><!--End of collapse-->

            </div><!--End of accordion-->

        </div>
    </div>

    <!--Others CDN.-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        //Custom popover
        const list = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        list.map((el) => {
        let opts = {
            animation: false,
        }
        if (el.hasAttribute('data-bs-content-id')) {
            opts.content = document.getElementById(el.getAttribute('data-bs-content-id')).innerHTML;
            opts.html = true;
        }
        new bootstrap.Popover(el, opts);
        })

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


        //Search input.
        function autocomplete(inp, arr) {
			var currentFocus;

			inp.addEventListener("input", function(e) {
				var a, b, i, val = this.value;
				closeAllLists();
				if (!val) { return false;}
				currentFocus = -1;
				a = document.createElement("DIV");
				a.setAttribute("id", this.id + "autocomplete-list");
				a.setAttribute("class", "autocomplete-items");
				this.parentNode.appendChild(a);
				for (i = 0; i < arr.length; i++) {
					if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
						b = document.createElement("DIV");
						b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
						b.innerHTML += arr[i].substr(val.length);
						b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
						b.addEventListener("click", function(e) {
							inp.value = this.getElementsByTagName("input")[0].value;
							closeAllLists();
						});
						a.appendChild(b);
					}
				}
			});
			inp.addEventListener("keydown", function(e) {
				var x = document.getElementById(this.id + "autocomplete-list");
				if (x) x = x.getElementsByTagName("div");
				if (e.keyCode == 40) {
					currentFocus++;
					addActive(x);
				} else if (e.keyCode == 38) {
					currentFocus--;
					addActive(x);
				} else if (e.keyCode == 13) {
					e.preventDefault();
					if (currentFocus > -1) {
						if (x) x[currentFocus].click();
					}
				}
			});
			function addActive(x) {
				if (!x) return false;
				removeActive(x);
				if (currentFocus >= x.length) currentFocus = 0;
				if (currentFocus < 0) currentFocus = (x.length - 1);
				x[currentFocus].classList.add("autocomplete-active");
			}
			function removeActive(x) {
				for (var i = 0; i < x.length; i++) {
				x[i].classList.remove("autocomplete-active");
				}
			}
			function closeAllLists(elmnt) {
				var x = document.getElementsByClassName("autocomplete-items");
				for (var i = 0; i < x.length; i++) {
				if (elmnt != x[i] && elmnt != inp) {
					x[i].parentNode.removeChild(x[i]);
				}
				}
			}
			document.addEventListener("click", function (e) {
				closeAllLists(e.target);
			});
		}
		var recipeName = [
            @foreach($recipe as $data)<?php echo "'"; echo $data['recipe_name']; echo "',"; ?>@endforeach
            @foreach($user as $data)<?php echo "'@"; echo $data['username']; echo "',"; ?>@endforeach
        ];
		autocomplete(document.getElementById("searchInput"), recipeName);
    </script>

	</body>
</html>

