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
                --toast1: white;
                --toast2: white;
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
                --toast1: #E39168;
                --toast2: #EB7336;
            }
            .toast-body.rounded-bottom{
                background:var(--toast2);
                color:var(--text);
            }
            .toast-header{
                background:var(--toast1);
                color:var(--text);
            }
            .steps {
                display: flex;
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
                        <a href="{{ url('/profile') }}">
                        <img class="img logo rounded-circle mb-3" src="http://127.0.0.1:8000/storage/{{ $data->image_url }}" alt='{{ $data->image_url }}'
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
                        </a>
                    </div>
                    @endif
                @endforeach

                <!--Main Navbar.-->
                <ul class="list-unstyled components mb-3">
                    <li class="active">
                        <a href="{{ url('/recipe') }}"><i class="fa-solid fa-book"></i> Recipes</a>
                    </li>
                    <li>
                    <a href="{{ url('/kitchen') }}"><i class="fa-solid fa-kitchen-set"></i> My Kitchen</a>
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
                                <li class="nav-item">
                                    <a class="nav-link" href="" role="button" data-bs-toggle="collapse" data-bs-target="#globalCollapse" aria-expanded="false" aria-controls="CollapseExample2" >Global</a>
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
                    <!--Control Section.-->
                    <div class='container-fluid mb-1 bg-transparent' style='margin-top:-30px;'>
                        <div class='row'>
                            <div class='col-sm-4'>
                                <form autocomplete="off" action="" method="POST">
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><button class="btn btn-primary p-1" style="height:30px; width:30px;"><i class="fa-solid fa-magnifying-glass fa-xs"></i></button></span>
                                    <input type="text" class="form-control" id="searchInput" name="search" placeholder="recipe name, or main ingredients" aria-label="Username" aria-describedby="basic-addon1">
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
                        <a class="text-secondary">Filtered by : </a>
                    </div>

                    <!--New recipes.-->
                    <div class='container-fluid mb-3'>
                        <h3 class="mb-2">New Recipes this week</h3>
                        <div class="row" style='overflow-x: scroll; width:auto; height:140px;'><!--Row must support horizontal scroll without multiple line-->
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
                                <div class="card border-gray" style='min-width:100px; width:120px; border:none; background:transparent; margin-top:5px;' type='button'>
                                    <a href="{{ url('/detail/' . $data->id) }}">
                                    <img src="http://127.0.0.1:8000/storage/{{ $data->recipe_url }}?>" alt='{{$data->recipe_url}}'
                                        style='border-radius:100%; margin-top:-10px; width:100px; display: block; margin-left: auto; margin-right: auto;'>
                                    <img src="http://127.0.0.1:8000/storage/{{ $data2->image_url }}" alt='{{ $data2->image_url }}'
                                        style='border-radius:100%; margin-top:-80px; width:40px; border:3px solid #eb7336; box-shadow: rgba(0, 0, 0, 0.25) 0px 5px 15px;'>
                                    <a style='font-size:11px; white-space: nowrap;  display: block; margin-left: auto; margin-right: auto; margin-top:-30px;'>{{$data->recipe_name}}</a>
                                    </a>
                                </div>
                                @endif
                                @endif
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                    @php($unfinished=0)
                    @foreach($recipe as $data)
                        @foreach($user as $data2)
                            @if(($data->user_id == $data2->id)&&($data2->username == session()->get('usernameKey')))
                                @php($a=0)
                                @php($b=0)
                                @php($id=1)
                                @if($data->user_id == $id)
                                    @foreach($ingredients as $ing)
                                        @if($ing->recipe_id == $data->id)
                                            @php($a++)
                                        @endif
                                    @endforeach
                                    @foreach($steps as $stp)
                                        @if($stp->recipe_id == $data->id)
                                            @php($b++)
                                        @endif
                                    @endforeach
                                    @if(($a == 0)||($b == 0))
                                        @php($unfinished++)
                                    @endif
                                @endif
                            @endif
                        @endforeach
                    @endforeach
                    @if($unfinished > 0)
                        <div class='container-fluid mb-3 p-2' style='background: rgba(255, 0, 0, 0.2);'>
                            <h5 class="mb-1">You have unfinished recipe <i class="fa-solid fa-circle-exclamation" type="button" data-bs-toggle="popover" title="Warning !" data-bs-content="Your unfinished recipe will be automaticly delete after a week since it was created"></i></h5>
                            <button class="btn btn-link text-decoration-none" id="unfinishedRecipe" data-bs-toggle="collapse" data-bs-target="#collapseUnfinished">
                                <a class="text-secondary" id="unfinishedButtonText">Show Recipe</a> <i class="fa-solid fa-circle-chevron-down text-secondary" id="dropIcon"></i></button>
                            <div class="collapse" id="collapseUnfinished">
                                <div class="row" style='overflow-x: scroll; width:auto; height:130px;'>
                                    @foreach($recipe as $data)
                                        @php($i=0)
                                        @php($j=0)
                                        @if($data->user_id == $id)
                                            @foreach($ingredients as $ing)
                                                @if($ing->recipe_id == $data->id)
                                                    @php($i++)
                                                @endif
                                            @endforeach
                                            @foreach($steps as $stp)
                                                @if($stp->recipe_id == $data->id)
                                                    @php($j++)
                                                @endif
                                            @endforeach
                                            @if(($i == 0)||($j == 0))
                                            <div class="card border-gray" style='min-width:100px; width:120px; border:none; background:transparent;' type='button' data-bs-toggle="modal" data-bs-target="#dependenciesRecipe<?php echo "_".$data->id; ?>">
                                                <img src="http://127.0.0.1:8000/storage/{{ $data->recipe_url }}?>" alt='{{$data->recipe_url}}'
                                                    style='border-radius:100%; margin-top:-10px; width:100px; display: block; margin-left: auto; margin-right: auto;'>
                                                <img src="http://127.0.0.1:8000/assets/image/icon/Continue.png" alt='Add.png' id="addRecipeButton" style='padding:5px;'>
                                                <a style='font-size:11px; white-space: nowrap;  display: block; margin-left: auto; margin-right: auto;'>{{$data->recipe_name}}</a>
                                            </div>
                                            @endif
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif

                    <!--Recipe type.-->
                    <div class='container-fluid mb-3'>
                        <h3 class="mb-2">Main Course</h3>
                        <div class="fs-8" style='font-size:14px; color:#808080; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; line-clamp: 3; -webkit-box-orient: vertical;'
                            ><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="row">
                        @foreach($recipe as $data)
                            @if(($data->recipe_type == 'Main Course')&&($data->recipe_visibility != 'Private'))
                                @foreach($user as $data2)
                                @if($data->user_id == $data2->id)
                                <div class="card border-gray w-25 p-2 border m-3" style='min-width:250px;'>
                                    <img src="http://127.0.0.1:8000/storage/{{ $data->recipe_url }}?>" alt='{{$data->recipe_url}}'
                                        style='margin-top:-60px; width:50%; display: block; margin-left: auto; margin-right: auto;'>
                                    <img src="http://127.0.0.1:8000/storage/{{ $data2->image_url }}" alt='{{ $data2->image_url }}'
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
                                                <p style='font-size:12px; justify-content:center; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; line-clamp: 2; -webkit-box-orient: vertical;'>{{$data->recipe_main_ing}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class='btn btn-primary' href="{{ url('/detail/' . $data->id) }}"><i class="fa-solid fa-arrow-right"></i> Cook Now</a>
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
                            @if(($data->recipe_type == 'Appetizer')&&($data->recipe_visibility != 'Private'))
                                @foreach($user as $data2)
                                @if($data->user_id == $data2->id)
                                <div class="card border-gray w-25 p-2 border m-3" style='min-width:250px;'>
                                    <img src="http://127.0.0.1:8000/storage/{{ $data->recipe_url }}?>" alt='{{$data->recipe_url}}'
                                        style='margin-top:-60px; width:50%; display: block; margin-left: auto; margin-right: auto;'>
                                    <img src="http://127.0.0.1:8000/storage/{{ $data2->image_url }}" alt='{{ $data2->image_url }}'
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
                                                <p style='font-size:12px; justify-content:center; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; line-clamp: 2; -webkit-box-orient: vertical;'>{{$data->recipe_main_ing}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class='btn btn-primary' href="{{ url('/detail/' . $data->id) }}"><i class="fa-solid fa-arrow-right"></i> Cook Now</a>
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
                            @if(($data->recipe_type == 'Desserts')&&($data->recipe_visibility != 'Private'))
                                @foreach($user as $data2)
                                @if($data->user_id == $data2->id)
                                <div class="card border-gray w-25 p-2 border m-3" style='min-width:250px;'>
                                    <img src="http://127.0.0.1:8000/storage/{{ $data->recipe_url }}?>" alt='{{$data->recipe_url}}'
                                        style='margin-top:-60px; width:50%; display: block; margin-left: auto; margin-right: auto;'>
                                    <img src="http://127.0.0.1:8000/storage/{{ $data2->image_url }}" alt='{{ $data2->image_url }}'
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
                                                <p style='font-size:12px; justify-content:center; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; line-clamp: 2; -webkit-box-orient: vertical;'>{{$data->recipe_main_ing}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class='btn btn-primary' href="{{ url('/detail/' . $data->id) }}"><i class="fa-solid fa-arrow-right"></i> Cook Now</a>
                                </div>
                                @endif
                                @endforeach
                            @endif
                        @endforeach
                        </div>
                    </div><!--End of container-->
                </div><!--End of collapse-->

                <div class="collapse" id="myrecipesCollapse" data-bs-parent="#accordionRecipe">
                    <div class='container-fluid mb-3'>
                        <h3 class="mb-2">My Recipes</h3>
                        <section class="py-2 header">
                            <div class="container py-2">
                                <div class="row">
                                    <div class="col-md-2">
                                        <!--Tabs nav.-->
                                        <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                            <span class="font-weight-bold small text-uppercase"> My Recipes</span></a>
                                            <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                            <span class="font-weight-bold small text-uppercase"> Favorites</span></a>
                                            <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                            <span class="font-weight-bold small text-uppercase"> Create Recipe</span></a>
                                            <a class="nav-link mb-3 p-3 shadow" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                            <span class="font-weight-bold small text-uppercase"> Collaboration</span></a>
                                        </div>
                                    </div>

                                    <div class="col-md-10">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <!--My Recipes.-->
                                            <div class="tab-pane fade rounded show active p-2" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                <table class="table table-paginate" id="example" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">Image</th>
                                                    <th scope="col" style='width:150px;'>Name</th>
                                                    <th scope="col" style='width:180px;'>Info</th>
                                                    <th scope="col" class="w-25">Description</th>
                                                    <th scope="col">Version</th>
                                                    <th scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($user as $data2)
                                                    @foreach($recipe as $data)
                                                        @if(($data->user_id == $data2->id)&&($data2->username == session()->get('usernameKey')))
                                                            <tr>
                                                                <td><img src="http://127.0.0.1:8000/storage/{{ $data->recipe_url }}?>" alt='{{$data->recipe_url}}'
                                                                    style='width:80px;'></td>
                                                                <td><h6 style='font-size:12px;'>{{$data->recipe_name}}</h6></td>
                                                                <td>
                                                                    <h6 style='font-size:12px;'>Level : <span class='text-muted'>{{$data->recipe_level}}</span></h6>
                                                                    <h6 style='font-size:12px;'>Time Spend : <span class='text-muted'>{{$data->recipe_time_spend}} min</span></h6>
                                                                    <h6 style='font-size:12px;'>Calorie : <span class='text-muted'>{{$data->recipe_calorie}} cal</span></h6>
                                                                    <h6 style='font-size:12px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; line-clamp: 2; -webkit-box-orient: vertical;'>Main Ing : <span class='text-muted'>{{$data->recipe_main_ing}}</span></h6>
                                                                </td>
                                                                <td><p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; line-clamp: 4; -webkit-box-orient: vertical;"><?php echo nl2br($data->recipe_desc); ?></p></td>
                                                                <td>
                                                                    <h6 style='font-size:12px;'>Created : <p class='text-muted'>{{$data->created_at}}</span></p>
                                                                    <h6 style='font-size:12px;'>Last Updated : <p class='text-muted'>{{$data->updated_at}}</span></p>
                                                                </td>
                                                                <td>
                                                                    <div class='row w-100'>
                                                                        <div class='col-md-6'>
                                                                            <button class='btn btn-success' data-bs-toggle="modal" data-bs-target="#editRecipe<?php echo "_".$data->id; ?>"><i class="fa-solid fa-pen-to-square"></i></button>
                                                                        </div>
                                                                        <div class='col-md-6'>
                                                                            <button class='btn btn-danger' data-bs-toggle="modal" data-bs-target="#deleteRecipe<?php echo "_".$data->id; ?>"><i class="fa-solid fa-trash-can"></i></button>
                                                                        </div>
                                                                    </div>
                                                                    <button class='btn btn-primary dropdown-toggle mt-2 w-100' type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-eye"></i> <?php echo $data->recipe_visibility; ?></button>
                                                                    <ul class="dropdown-menu p-2" aria-labelledby="dropdownMenuButton1">
                                                                        <form action="/recipe/updateVisibility/<?php echo $data->id; ?>" method="POST">
                                                                        @csrf
                                                                        <fieldset>
                                                                            <div class="form-check">
                                                                                <input <?php if($data->recipe_visibility == "Public"){echo "checked";} ?> class="form-check-input" type="radio" name="visibility" value="Public" checked="checked">
                                                                                <label class="form-check-label" for="flexRadioDefault1">Public</label>
                                                                            </div>

                                                                            <div class="form-check">
                                                                                <input <?php if($data->recipe_visibility == "Private"){echo "checked";} ?> class="form-check-input" type="radio" name="visibility" value="Private">
                                                                                <label class="form-check-label" for="flexRadioDefault1">Private</label>
                                                                            </div>

                                                                            <div class="form-check">
                                                                                <input <?php if($data->recipe_visibility == "Restricted"){echo "checked";} ?> class="form-check-input" type="radio" name="visibility" value="Restricted">
                                                                                <label class="form-check-label" for="flexRadioDefault1">Restricted</label>
                                                                            </div>
                                                                        </fieldset>
                                                                        <button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk"></i> Save</button>
                                                                        </form>
                                                                    </ul>
                                                                    <button class="btn btn-success mt-2 w-100" data-bs-toggle="modal" data-bs-target="#dependenciesRecipe<?php echo "_".$data->id; ?>"><i class="fa-solid fa-list-check"></i> Steps</button>
                                                                </td>
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                                </tbody>
                                                </table>
                                            </div>

                                            <!--Favorites.-->
                                            <div class="tab-pane fade rounded p-2" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                <h5>Favorites</h5>

                                            </div>

                                            <!--Create Full New Recipe.-->
                                            <div class="tab-pane fade rounded p-2" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                <div class="accordion" id="accordionExample">
                                                    <div class="steps">
                                                        <progress id="progress" value=0 max=100 ></progress>
                                                        <div class="step-item">
                                                            <button class="step-button text-center" type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">1</button>
                                                            <div class="step-title">Preparation</div>
                                                        </div>
                                                        <div class="step-item">
                                                            <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">2</button>
                                                            <div class="step-title">Recipe Overview</div>
                                                        </div>
                                                        <div class="step-item">
                                                            <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">3</button>
                                                            <div class="step-title">Dependencies</div>
                                                        </div>
                                                        <div class="step-item">
                                                            <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">4
                                                            </button>
                                                            <div class="step-title">Finalization</div>
                                                        </div>
                                                    </div>
                                                    <form action="/recipe/storeFull" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                    <div class="card border-0">
                                                        <div id="headingOne">
                                                        </div>

                                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="card-body">
                                                                <div class="row mb-2">
                                                                    <div class="col-md-3">
                                                                    <img id="frame3" src="http://127.0.0.1:8000/assets/storyset/Preparation.png" class="img-fluid" style="width:200px;"/>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <a class="text-secondary">Welcome to create recipes. In this feature you can make your own recipe with your creativity. With dependencies, you recipes can track organize and make it easier for others to learn your recipes.</a><br>
                                                                        <a class="text-secondary">Before that, please read and accept this terms and condition :</a>
                                                                        <div class="form-check mt-2">
                                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" required>
                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--Steps control-->
                                                                <div class="row mb-2">
                                                                    <div class="col-md-9">
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <a class="btn btn-primary w-100" type="button" data-bs-toggle="collapse"
                                                                            data-bs-target="#collapseTwo">Next <i class="fa-solid fa-arrow-right"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card border-0">
                                                        <div  id="headingTwo"></div>
                                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                            <div class="card-body">
                                                                <div class="row mb-2">
                                                                    <div class="col-md-3">
                                                                    <img id="frame3" src="http://127.0.0.1:8000/assets/storyset/Overview.png" class="img-fluid" style="width:200px;"/>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <a class="text-secondary">In this steps. You must define your recipe overview such as recipe name, type, country, time spend & calorie, main ingredients, short description, visibility, and of course your recipe photo.</a>
                                                                    </div>
                                                                </div>
                                                                    <div class="row">
                                                                        <div class="col-md-4 mb-2">
                                                                            <select class="form-select" name="recipe_type" required>
                                                                                <option selected value="Main Course">Main Course</option>
                                                                                <option value="Appetizer">Appetizer</option>
                                                                                <option value="Desserts">Desserts</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <input class="form-control" name="recipe_country" type="text" placeholder="Indonesia" required></input>
                                                                        </div>
                                                                    </div>

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
                                                                                <option selected value="Beginner">Beginner</option>
                                                                                <option value="Intermediate">Intermediate</option>
                                                                                <option value="Expert">Expert</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-2 pt-2">
                                                                            <div class="form-check">
                                                                                <!--name="recipe_halal"-->
                                                                                <input class="form-check-input" type="checkbox" id="flexCheckDefault">
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
                                                                            <input class="form-control" type="file" id="formFileFull" onchange="previewFull()" name="recipe_image" accept="image/png, image/jpg, image/jpeg" required>
                                                                        </div>
                                                                        <div class="col-md-6 p-2">
                                                                            <label class="form-label">Main Ingredients <i class="fa-solid fa-circle-question" type="button"></i></label>
                                                                            <textarea class="form-control" rows="3" name="recipe_main_ing" placeholder="Beef, Tomato, ..."></textarea>
                                                                            <label class="form-label">Preview</label>
                                                                            <div class="row">
                                                                                <div class="col-md-7">
                                                                                    <img id="frameFull" src="http://127.0.0.1:8000/assets/NoImage.png" class="img-fluid" style="width:200px; border-radius:100%; border:3px solid #EB7736;"/>
                                                                                </div>
                                                                                <div class="col-md-5">
                                                                                    <label class="form-label">Visibility <i class="fa-solid fa-circle-question" type="button"></i></label>
                                                                                    <select class="form-select" name="recipe_visibility" required>
                                                                                        <option selected value="Public">Public</option>
                                                                                        <option value="Private">Private</option>
                                                                                        <option value="Restricted">Restricted</option>
                                                                                    </select>
                                                                                    <a onclick="clearImageFull()" class="btn btn-danger mt-3 w-100"><i class="fa-solid fa-trash"></i> Reset</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <!--Steps control-->
                                                                <div class="row mb-2">
                                                                    <div class="col-md-3">
                                                                        <a class="btn btn-primary w-100" type="button" data-bs-toggle="collapse"
                                                                            data-bs-target="#collapseOne"><i class="fa-solid fa-arrow-left"></i> Previous</a>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <a class="btn btn-primary w-100" type="button" data-bs-toggle="collapse"
                                                                            data-bs-target="#collapseThree">Next <i class="fa-solid fa-arrow-right"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card border-0">
                                                        <div  id="headingThree"></div>
                                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="card-body">
                                                                <div class="row mb-4">
                                                                    <div class="col-md-8">
                                                                        <a class="text-secondary">Next, you can make your ingredient with their value.</a>
                                                                        <a class="text-secondary">Note : You can still modify this in the future. But there's only 3 changes per recipe, so make sure you make the correct one</a><br>
                                                                        <a class="btn btn-primary" id="addIng">Add Ingredient</a>
                                                                        <a class="btn btn-danger" id="removeIng">Reset All</a>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <img id="frame3" src="http://127.0.0.1:8000/assets/storyset/Ingredient.png" class="img-fluid" style="width:150px;"/>
                                                                    </div>
                                                                    <div class="card-holder m-2" style="max-height: calc(70vh - 130px); overflow-x: auto;" id="ingHolder">

                                                                        <div class="card shadow border-0 w-100 mb-2">
                                                                            <div class="card-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-11">
                                                                                        <div class="row">
                                                                                            <div class="col-md-7">
                                                                                                <label class="form-label" for="flexCheckDefault">Ingredient Name</label>
                                                                                                <input class="form-control" name="ingredients_name[]" type="text" placeholder="ex: 'Fermented Milk'" required></input>
                                                                                            </div>
                                                                                            <div class="col-md-5">
                                                                                                <label class="form-label" for="flexCheckDefault">Value</label>
                                                                                                <input class="form-control" name="ingredients_vol[]" type="text" placeholder="ex: '500 ml'" required></input>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row mt-2">
                                                                                            <div class="col-md-3">
                                                                                            <select class="form-select" name="ingredients_type[]"><option value="Required">Required</option><option value="Optional">Optional</option></select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-1">
                                                                                        <i class="fa-solid fa-xmark fa-2xl" style='color:#b92c3a;'></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div><!--End of card.-->

                                                                    </div><!--End of item holder.-->
                                                                </div>
                                                                <div class="row mb-2">
                                                                    <div class="col-md-3">
                                                                    <img id="frame3" src="http://127.0.0.1:8000/assets/storyset/Steps.png" class="img-fluid" style="width:200px;"/>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <a class="text-secondary">Now, you can add your ingredient, tips, and the steps.</a>
                                                                        <a class="text-secondary">Note : You can still modify this in the future. But there's only 5 changes per recipe, so make sure you make the correct one</a><br>
                                                                        <a class="btn btn-primary" id="addSteps">Add Steps</a>
                                                                        <a class="btn btn-danger" id="removeSteps">Reset All</a>
                                                                    </div>
                                                                    <div class="card-holder m-2" id="stepsHolder">

                                                                        <div class="card shadow border-0 w-100 mb-2">
                                                                            <div class="card-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-11">
                                                                                        <a style="color:#EB7336;">Steps #1</a>
                                                                                        <textarea class="form-control" name="steps_body[]" rows="3" required placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing... "></textarea>
                                                                                        <div class="row mt-2">
                                                                                            <div class="col-md-3">
                                                                                                <select class="form-select" name="steps_type[]"><option value="Required">Required</option><option value="Optional">Optional</option></select>
                                                                                            </div>
                                                                                            <div class="col-md-2">
                                                                                                <div class="form-check form-switch">
                                                                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" data-bs-toggle="collapse" href="#switchAddImgRecipe" role="button">
                                                                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Image</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-7">
                                                                                                <div class="collapse" id="switchAddImgRecipe">
                                                                                                    <input class="form-control" type="file" id="formFileEditStep" onchange="previewEditStep()" name="steps_image[]" accept="image/png, image/jpg, image/jpeg">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-1">
                                                                                        <i class="fa-solid fa-xmark fa-2xl" style='color:#b92c3a;'></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div><!--End of card.-->

                                                                    </div><!--End of item holder.-->
                                                                </div>
                                                                <!--Steps control-->
                                                                <div class="row mb-2">
                                                                    <div class="col-md-3">
                                                                        <a class="btn btn-primary w-100" type="button" data-bs-toggle="collapse"
                                                                            data-bs-target="#collapseTwo"><i class="fa-solid fa-arrow-left"></i> Previous</a>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <a class="btn btn-primary w-100" type="button" data-bs-toggle="collapse"
                                                                            data-bs-target="#collapseFour">Next <i class="fa-solid fa-arrow-right"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card border-0">
                                                        <div  id="headingFour"></div>
                                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="card-body">
                                                                <div class="row mb-2">
                                                                    <div class="col-md-3">
                                                                        <img src="http://127.0.0.1:8000/assets/storyset/Finalization.png" class="img-fluid" style="width:200px;"/>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <a class="text-secondary">Finaly, after all of that. Now you can publish your recipe. And also you can add your video toturial if you want too.</a>
                                                                        <br>
                                                                        <label class="form-label mt-2">Video (Optional) <i class="fa-solid fa-circle-question" type="button"></i></label>
                                                                        <input class="form-control" type="file" id="formFileVideo" name="recipe_video" accept="video/mp4">
                                                                    </div>
                                                                </div>
                                                                <div class="container-fluid shadow p-3 mb-3">
                                                                    <div class="container rounded" style="border:3px solid #EB7736;">
                                                                        <video controls class="rounded w-100" alt="video" >
                                                                            <source id="frameVideo" src="2">
                                                                        </video>
                                                                    </div>
                                                                    <div class="row my-2">
                                                                        <div class="col-md-3">
                                                                            <a class="btn btn-danger w-100" onclick="clearVideo()">Reset</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--Steps control-->
                                                                <div class="row mb-2">
                                                                    <div class="col-md-3">
                                                                        <a class="btn btn-primary w-100" data-bs-toggle="collapse"
                                                                            data-bs-target="#collapseThree"><i class="fa-solid fa-arrow-left"></i> Previous</a>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <button class="btn btn-success w-100" type="submit">Upload <i class="fa-solid fa-arrow-up"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div><!--End of accordion-->
                                            </div>

                                            <!--Collaboration.-->
                                            <div class="tab-pane fade rounded p-2" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                <h5>Collaboration</h5>

                                            </div>

                                        </div><!--End of tab content.-->
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div><!--End of container-->
                </div><!--End of collapse-->

                <div class="collapse" id="aboutCollapse" data-bs-parent="#accordionRecipe">
                    <div class='container-fluid mb-3'>
                        <h3 class="mb-2">About</h3>

                    </div><!--End of container-->
                </div><!--End of collapse-->

            </div><!--End of accordion-->

            <!-- Footer
            @include('footer_main') -->

        </div>
    </div>

    <!--Create instant recipe modal-->
    <div class="modal fade" id="createInstantRecipe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content p-2">
        <form action="/recipe/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-header">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Recipe</h5>
                </div>
                <div class="col-md-4 mb-2">
                    <select class="form-select" name="recipe_type" required>
                        <option selected value="Main Course">Main Course</option>
                        <option value="Appetizer">Appetizer</option>
                        <option value="Desserts">Desserts</option>
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
                        <option selected value="Beginner">Beginner</option>
                        <option value="Intermediate">Intermediate</option>
                        <option value="Expert">Expert</option>
                    </select>
                </div>
                <div class="col-md-2 pt-2">
                    <div class="form-check">
                        <!--name="recipe_halal"-->
                        <input class="form-check-input" type="checkbox" id="flexCheckDefault">
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
                    <input class="form-control" type="file" id="formFile" onchange="preview()" name="recipe_image" accept="image/png, image/jpg, image/jpeg" required>
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
                            <label class="form-label">Visibility <i class="fa-solid fa-circle-question" type="button"></i></label>
                            <select class="form-select" name="recipe_visibility" required>
                                <option selected value="Public">Public</option>
                                <option value="Private">Private</option>
                                <option value="Restricted">Restricted</option>
                            </select>
                            <a onclick="clearImage()" class="btn btn-danger mt-3 w-100"><i class="fa-solid fa-trash"></i> Reset</a>
                            <button class="btn btn-success mt-2 w-100" type="submit" value="Save"><i class="fa-solid fa-plus"></i> Post </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
        </div>
    </div>
    </div>

    <!--Edit recipe modal-->
    @foreach($user as $data2)
        @foreach($recipe as $data)
            @if(($data->user_id == $data2->id)&&($data2->username == session()->get('usernameKey')))
                <div class="modal fade" id="editRecipe<?php echo "_".$data->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content p-2">
                    <form action="/recipe/update/<?php echo $data->id; ?>" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <div class="row">
                            <div class="col-md-4">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Recipe</h5>
                            </div>
                            <div class="col-md-4 mb-2">
                                <select class="form-select" name="recipe_type" required>
                                    <option <?php if($data->recipe_type == "Main Course"){echo" selected ";} ?> value="Main Course">Main Course</option>
                                    <option <?php if($data->recipe_type == "Appetizer"){echo" selected ";} ?> value="Appetizer">Appetizer</option>
                                    <option <?php if($data->recipe_type == "Desserts"){echo" selected ";} ?> value="Desserts">Desserts</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" name="recipe_country" type="text" value="<?php echo $data->recipe_country; ?>" required></input>
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
                                <input class="form-control" disabled name="recipe_name" type="text" value="<?php echo $data->recipe_name; ?>" required></input>
                            </div>
                            <div class="col-md-1 pt-2">
                                <label class="form-label">Level</label>
                            </div>
                            <div class="col-md-3 m-1">
                                <select class="form-select" name="recipe_level" required>
                                    <option <?php if($data->recipe_level == "Beginner"){echo" selected ";} ?> value="Beginner">Beginner</option>
                                    <option <?php if($data->recipe_level == "Intermediate"){echo" selected ";} ?> value="Intermediate">Intermediate</option>
                                    <option <?php if($data->recipe_level == "Expert"){echo" selected ";} ?> value="Expert">Expert</option>
                                </select>
                            </div>
                            <div class="col-md-2 pt-2">
                                <div class="form-check">
                                    <!--name="recipe_halal"-->
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault">
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
                                            <input class="form-control" type="number" name="recipe_time_spend" value="<?php echo $data->recipe_time_spend; ?>" required>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label pt-2">Minutes</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input class="form-control" type="number" name="recipe_calorie" value="<?php echo $data->recipe_calorie; ?>" required>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label pt-2">Cal</label>
                                        </div>
                                    </div>
                                </div>
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="recipe_desc" rows="5" required><?php echo $data->recipe_desc; ?></textarea>
                                <label class="form-label mt-2">Image <i class="fa-solid fa-circle-question" type="button"></i></label>
                                <input class="form-control" type="file" id="formFileEdit<?php echo $data->id; ?>" onchange="previewEdit<?php echo $data->id; ?>()" name="recipe_url" accept="image/png, image/jpg, image/jpeg">
                            </div>
                            <div class="col-md-6 p-2">
                                <label class="form-label">Main Ingredients <i class="fa-solid fa-circle-question" type="button"></i></label>
                                <textarea class="form-control" rows="3" name="recipe_main_ing"><?php echo $data->recipe_main_ing; ?></textarea>
                                <label class="form-label">Preview</label>
                                <div class="row">
                                    <div class="col-md-7">
                                        <img id="frameEdit<?php echo $data->id; ?>" src="http://127.0.0.1:8000/storage/{{ $data->recipe_url }}?>" class="img-fluid" style="width:200px; border-radius:100%; border:3px solid #EB7736;"/>
                                    </div>
                                    <div class="col-md-5">
                                        <a onclick="clearImageEdit<?php echo $data->id; ?>()" class="btn btn-danger mt-3 w-100"><i class="fa-solid fa-trash"></i> Reset</a>
                                        <button class="btn btn-success mt-2 w-100" type="submit" value="Save"><i class="fa-solid fa-floppy-disk"></i> Save </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    </div>
                </div>
                </div>
            @endif
        @endforeach
    @endforeach

    <!--Dependencies recipe modal-->
    @foreach($user as $data2)
        @foreach($recipe as $data)
            @if(($data->user_id == $data2->id)&&($data2->username == session()->get('usernameKey')))
                <div class="modal fade" id="dependenciesRecipe<?php echo "_".$data->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content p-2">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Dependencies</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <section class="py-2 header">
                            <div class="container py-2">
                                <div class="row">
                                    <!--Tabs nav.-->
                                    <div class="nav flex-row nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link m-3 p-3 shadow active" id="v-pills-ingredients-tab" data-bs-toggle="pill" href="#v-pills-ingredients<?php echo "_".$data->id; ?>" role="tab" aria-controls="v-pills-ingredients" aria-selected="true">
                                        <span class="font-weight-bold small text-uppercase"> Ingredients</span></a>
                                        <a class="nav-link m-3 p-3 shadow" id="v-pills-steps-tab" data-bs-toggle="pill" href="#v-pills-steps<?php echo "_".$data->id; ?>" role="tab" aria-controls="v-pills-steps" aria-selected="true">
                                        <span class="font-weight-bold small text-uppercase"> Steps</span></a>
                                        <a class="nav-link m-3 p-3 shadow" id="v-pills-add-tab" data-bs-toggle="pill" href="#v-pills-add<?php echo "_".$data->id; ?>" role="tab" aria-controls="v-pills-add" aria-selected="true">
                                        <span class="font-weight-bold small text-uppercase"> Add</span></a>
                                    </div>

                                    <div class="tab-content" id="v-pills-tabContent-Dependencies<?php echo "_".$data->id; ?>">
                                        <!--Ingredients.-->
                                        <div class="tab-pane fade rounded show active p-2" id="v-pills-ingredients<?php echo "_".$data->id; ?>" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                            <h5>Ingredients</h5>
                                            @foreach($ingredients as $dataIng)
                                                @if($dataIng->recipe_id == $data->id)
                                                    <p class="text-secondary">{{$dataIng->ingredients_vol}} ~ {{$dataIng->ingredients_name}}</p>
                                                @endif
                                            @endforeach
                                        </div>

                                        <!--Ingredients.-->
                                        <div class="tab-pane fade rounded p-2" id="v-pills-steps<?php echo "_".$data->id; ?>" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                            <h5>Steps</h5>
                                            <?php
                                                $i = 1;
                                                foreach($steps as $dataStp){
                                                    if($dataStp->recipe_id == $data->id){
                                                        echo"<p class='text-secondary'><b>".$i.".</b> ".$dataStp->steps_body."</p>";
                                                    }
                                                    $i++;
                                                }
                                            ?>
                                        </div>

                                        <!--Add.-->
                                        <div class="tab-pane fade rounded p-2" id="v-pills-add<?php echo "_".$data->id; ?>" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                            <h5>Add Dependencies</h5>
                                            <form action="/recipe/storeDependencies" method="POST" enctype="multipart/form-data">
                                                @csrf
                                            <div class="card-body">
                                                <input class="form-control" name="recipe_id" value="<?php echo $data->id; ?>" hidden></input>
                                                <div class="row mb-4">
                                                    <div class="col-md-8">
                                                        <a class="text-secondary">Next, you can make your ingredient with their value.</a>
                                                        <a class="text-secondary">Note : You can still modify this in the future. But there's only 3 changes per recipe, so make sure you make the correct one</a><br>
                                                        <a class="btn btn-primary" id="addIngModal<?php echo $data->id;?>">Add Ingredient</a>
                                                        <a class="btn btn-danger" id="removeIngModal<?php echo $data->id;?>">Reset All</a>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <img id="frame3" src="http://127.0.0.1:8000/assets/storyset/Ingredient.png" class="img-fluid" style="width:110px;"/>
                                                    </div>
                                                    <div class="card-holder m-2" style="max-height: calc(70vh - 130px); overflow-x: auto;" id="ingHolderModal<?php echo $data->id;?>">

                                                        <div class="card shadow border-0 w-100 mb-2">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-11">
                                                                        <div class="row">
                                                                            <div class="col-md-7">
                                                                                <label class="form-label" for="flexCheckDefault">Ingredient Name</label>
                                                                                <input class="form-control" name="ingredients_name[]" type="text" placeholder="ex: 'Fermented Milk'" required></input>
                                                                            </div>
                                                                            <div class="col-md-5">
                                                                                <label class="form-label" for="flexCheckDefault">Value</label>
                                                                                <input class="form-control" name="ingredients_vol[]" type="text" placeholder="ex: '500 ml'" required></input>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mt-2">
                                                                            <div class="col-md-3">
                                                                            <select class="form-select" name="ingredients_type[]"><option value="Required">Required</option><option value="Optional">Optional</option></select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <i class="fa-solid fa-xmark fa-2xl" style='color:#b92c3a;'></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--End of card.-->

                                                    </div><!--End of item holder.-->
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-3">
                                                    <img id="frame3" src="http://127.0.0.1:8000/assets/storyset/Steps.png" class="img-fluid" style="width:200px;"/>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <a class="text-secondary">Now, you can add your ingredient, tips, and the steps.</a>
                                                        <a class="text-secondary">Note : You can still modify this in the future. But there's only 5 changes per recipe, so make sure you make the correct one</a><br>
                                                        <a class="btn btn-primary" id="addStepsModal<?php echo $data->id;?>">Add Steps</a>
                                                        <a class="btn btn-danger" id="removeStepsModal<?php echo $data->id;?>">Reset All</a>
                                                    </div>
                                                    <div class="card-holder m-2" id="stepsHolderModal<?php echo $data->id;?>">

                                                        <div class="card shadow border-0 w-100 mb-2">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-11">
                                                                        <a style="color:#EB7336;">Steps #1</a>
                                                                        <textarea class="form-control" name="steps_body[]" rows="3" required placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing... "></textarea>
                                                                        <div class="row mt-2">
                                                                            <div class="col-md-3">
                                                                                <select class='form-select' aria-label='Default select example' name='steps_type[]'>
                                                                                    <option value="Required">Required</option>
                                                                                    <option value="Optional">Optional</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div class="form-check form-switch">
                                                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" data-bs-toggle="collapse" href="#switchAddImgRecipe" role="button">
                                                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Image</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-7">
                                                                                <div class="collapse" id="switchAddImgRecipe">
                                                                                    <input class="form-control" type="file" id="formFileEditStep" onchange="previewEditStep()" name="steps_image[]" accept="image/png, image/jpg, image/jpeg">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <i class="fa-solid fa-xmark fa-2xl" style='color:#b92c3a;'></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--End of card.-->

                                                    </div><!--End of item holder.-->
                                                </div>
                                                <button class="btn btn-success" type="submit" value="Save"><i class="fa-solid fa-floppy-disk"></i> Save</button>

                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    </div>
                </div>
                </div>
            @endif
        @endforeach
    @endforeach

    @foreach($user as $data2)
        @foreach($recipe as $data)
            @if(($data->user_id == $data2->id)&&($data2->username == session()->get('usernameKey')))
                <!--Delete Recipe Modal-->
                <div class="modal fade" id="deleteRecipe<?php echo "_".$data->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/recipe/destroy/<?php echo $data->id; ?>" method="POST" enctype="multipart/form-data">
                                @csrf
                                <h6 class="text-center">Are you sure want to delete this recipe?<h6>
                                <div class="row w-100 mb-2">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-5">
                                        <input hidden class="form-control" name="recipe_name" type="text" value="<?php echo $data->recipe_name; ?>"></input>
                                        <input required class="form-control" name="validation" type="text" placeholder="'pizza'"></input>
                                    </div>
                                    <div class="col-md-3">
                                        <button class="btn btn-danger" type="submit">Yes</button>
                                    </div>
                                </div>
                                <p class="text-secondary text-center mt-2" style="font-size:12px;"><i class="fa-solid fa-circle-info"></i> Please type the same recipe name for validation</p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
        @endforeach
    @endforeach

    <!--Modal validation-->
    @if(Session::has('failed_message'))
        <div class="modal fade" id="recipe_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Error</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="{{asset('assets/image/icon/Failed.png')}}" alt='failed.png' style='width:30%;'><br>
                    <h7 class="m-2">{{ Session::get('failed_message') }}</h7>
                </div>
            </div>
        </div>
        </div>
    @endif

    @if(Session::has('success_message'))
        <div class="position-fixed bottom-0 end-0 p-4" style="z-index: 11">
        <div id="recipe_toast" class="toast hide shadow rounded-top" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img class="mx-2" src="{{asset('assets/image/icon/Success.png')}}" alt='success.png' style='width:22px;'>
                <h6 class="me-auto mt-1 ">Success</h6>
                <small>Just now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body rounded-bottom">
                {{ Session::get('success_message') }}
            </div>
        </div>
        </div>
    @endif

    <!--Others CDN.-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
        })
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
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

        //Stepper Create Recipe
        const stepButtons = document.querySelectorAll('.step-button');
        const progress = document.querySelector('#progress');

        Array.from(stepButtons).forEach((button,index) => {
            button.addEventListener('click', () => {
                progress.setAttribute('value', index * 100 /(stepButtons.length - 1) );//there are 3 buttons. 2 spaces.

                stepButtons.forEach((item, secindex)=>{
                    if(index > secindex){
                        item.classList.add('done');
                    }
                    if(index < secindex){
                        item.classList.remove('done');
                    }
                })
            })
        });

        //Image upload preview.
        //For create instant recipe.
        function preview() {
            frame.src = URL.createObjectURL(event.target.files[0]);
        }
        function clearImage() {
            document.getElementById('formFile').value = null;
            frame.src = "http://127.0.0.1:8000/assets/NoImage.png";
        }

        //For edit recipe.
        <?php
        foreach($user as $data2){
            foreach($recipe as $data){
                if(($data->user_id == $data2->id)&&($data2->username == session()->get('usernameKey'))){
                    echo"
                    function previewEdit".$data->id."() {
                        frameEdit".$data->id.".src = URL.createObjectURL(event.target.files[0]);
                    }
                    function clearImageEdit".$data->id."() {
                        document.getElementById('formFileEdit".$data->id."').value = null;
                        frameEdit".$data->id.".src = 'http://127.0.0.1:8000/assets/NoImage.png';
                    }";
                }
            }
        }
        ?>

        //For create full recipe.
        function previewFull() {
            frameFull.src = URL.createObjectURL(event.target.files[0]);
        }
        function clearImageFull() {
            document.getElementById('formFileFull').value = null;
            frameFull.src = "http://127.0.0.1:8000/assets/NoImage.png";
        }

        $(document).on("change", "#formFileVideo", function(evt) {
            var $source = $('#frameVideo');
            $source[0].src = URL.createObjectURL(this.files[0]);
            $source.parent()[0].load();
        });
        function clearVideo() {
            document.getElementById('formFileVideo').value = null;
            frameVideo.src = "http://127.0.0.1:8000/assets/NoVideo.png";
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

    <script>
        $(document).ready(function () {
            //Steps controls.
            i = 1; j = 1; x = 1;

            //Add full recipe.
            $("#addSteps").on('click', function () {
                i++;
                $('#stepsHolder').append(
                    '<div class="card shadow border-0 w-100 mb-2"><div class="card-body"><div class="row"><div class="col-md-11"><a style="color:#EB7336;">Steps #' + i + '</a><textarea class="form-control" name="steps_body[]" rows="3" required placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing... "></textarea><div class="row mt-2"><div class="col-md-3"><select class="form-select" name="steps_type[]"><option value="Required">Required</option><option value="Optional">Optional</option></select></div><div class="col-md-2"><div class="form-check form-switch"><input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" data-bs-toggle="collapse" href="#switchAddImgRecipe' + i + '" role="button"><label class="form-check-label" for="flexSwitchCheckChecked">Image</label></div></div><div class="col-md-7"><div class="collapse" id="switchAddImgRecipe' + i + '"><input class="form-control" type="file" id="formFileEditStep" onchange="previewEditStep()" name="steps_image[]" accept="image/png, image/jpg, image/jpeg"></div></div></div></div><div class="col-md-1"><i class="fa-solid fa-xmark fa-2xl" style="color:#b92c3a;"></i></div></div></div></div>');

            })
            $("#removeSteps").click(function(){
                i = 0;
                $("#stepsHolder").empty();
            });

            $('#addIng').on('click', function () {
                $('#ingHolder').append(
                    '<div class="card shadow border-0 w-100 mb-2"><div class="card-body"><div class="row"><div class="col-md-11"><div class="row"><div class="col-md-7"><label class="form-label" for="flexCheckDefault">Ingredient Name</label><input class="form-control" name="ingredients_name[]" type="text" placeholder="ex: Fermented Milk" required></input></div><div class="col-md-5"><label class="form-label" for="flexCheckDefault">Value</label><input class="form-control" name="ingredients_vol[]" type="text" placeholder="ex: 500 ml" required></input></div></div><div class="row mt-2"><div class="col-md-3"><select class="form-select" name="ingredients_type[]"><option value="Required">Required</option><option value="Optional">Optional</option></select></div></div></div><div class="col-md-1"><i class="fa-solid fa-xmark fa-2xl" style="color:#b92c3a;"></i></div></div></div></div>');

            })
            $("#removeIng").click(function(){
                $("#ingHolder").empty();
            });

            //Modal setting.
            $(window).on('load', function() {
                $('#recipe_modal').modal('show');
                $('#recipe_toast').toast('show');
            });

            //Add dependencies only.
            @foreach($user as $data2)
                @foreach($recipe as $data)
                    @if(($data->user_id == $data2->id)&&($data2->username == session()->get('usernameKey')))
                        $("#addStepsModal<?php echo $data->id;?>").on('click', function () {
                            i++;
                            $('#stepsHolderModal<?php echo $data->id;?>').append(
                                '<div class="card shadow border-0 w-100 mb-2"><div class="card-body"><div class="row"><div class="col-md-11"><a style="color:#EB7336;">Steps #' + i + '</a><textarea class="form-control" name="steps_body[]" rows="3" required placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing... "></textarea><div class="row mt-2"><div class="col-md-3"><select class="form-select" name="steps_type[]"><option value="Required">Required</option><option value="Optional">Optional</option></select></div><div class="col-md-2"><div class="form-check form-switch"><input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" data-bs-toggle="collapse" href="#switchAddImgRecipe' + i + '" role="button"><label class="form-check-label" for="flexSwitchCheckChecked">Image</label></div></div><div class="col-md-7"><div class="collapse" id="switchAddImgRecipe' + i + '"><input class="form-control" type="file" id="formFileEditStep" onchange="previewEditStep()" name="steps_image[]" accept="image/png, image/jpg, image/jpeg"></div></div></div></div><div class="col-md-1"><i class="fa-solid fa-xmark fa-2xl" style="color:#b92c3a;"></i></div></div></div></div>');

                        })
                        $("#removeStepsModal<?php echo $data->id;?>").click(function(){
                            i = 0;
                            $("#stepsHolderModal<?php echo $data->id;?>").empty();
                        });

                        $('#addIngModal<?php echo $data->id;?>').on('click', function () {
                            $('#ingHolderModal<?php echo $data->id;?>').append(
                                '<div class="card shadow border-0 w-100 mb-2"><div class="card-body"><div class="row"><div class="col-md-11"><div class="row"><div class="col-md-7"><label class="form-label" for="flexCheckDefault">Ingredient Name</label><input class="form-control" name="ingredients_name[]" type="text" placeholder="ex: Fermented Milk" required></input></div><div class="col-md-5"><label class="form-label" for="flexCheckDefault">Value</label><input class="form-control" name="ingredients_vol[]" type="text" placeholder="ex: 500 ml" required></input></div></div><div class="row mt-2"><div class="col-md-3"><select class="form-select" name="ingredients_type[]"><option value="Required">Required</option><option value="Optional">Optional</option></select></div></div></div><div class="col-md-1"><i class="fa-solid fa-xmark fa-2xl" style="color:#b92c3a;"></i></div></div></div></div>');

                        })
                        $("#removeIngModal<?php echo $data->id;?>").click(function(){
                            $("#ingHolderModal<?php echo $data->id;?>").empty();
                        });
                    @endif
                @endforeach
            @endforeach

            $('#unfinishedRecipe').on('click', function () {
                x++;
                if(x % 2 == 0){
                    $('#unfinishedButtonText').text("Hide Recipe");
                    $('#dropIcon').css({
                        "-ms-transform" : "rotate(180deg)",      //Internet Explorer
                        "-webkit-transform": "rotate(180deg)",   //Chrome & Safari
                        "-moz-transform": "rotate(180deg)",      //Firefox
                        "-o-transform" : "rotate(180deg)",       //Opera
                        "transform": "rotate(180deg)",            //
                    });
                } else {
                    $('#unfinishedButtonText').text("Show Recipe");
                    $('#dropIcon').css({
                        "-ms-transform" : "rotate(0deg)",      //Internet Explorer
                        "-webkit-transform": "rotate(0deg)",   //Chrome & Safari
                        "-moz-transform": "rotate(0deg)",      //Firefox
                        "-o-transform" : "rotate(0deg)",       //Opera
                        "transform": "rotate(0deg)"            //Others
                    });
                }
            })
        });
    </script>

	</body>
</html>

