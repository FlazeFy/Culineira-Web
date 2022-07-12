<!DOCTYPE html>
<html>
    <head>
    <title>Culineira | Profile</title>
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
            $('#recipeTable').DataTable();
        });
        $(document).ready(function () {
            $('#classTable').DataTable();
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
            .text-primary{
                color:var(--text2) !important;
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

            .btn-circle.btn-xl {
                width: 35px;
                height: 35px;
                padding: 5px;
                border-radius: 35px;
                font-size: 16px;
                line-height: 1.33;
            }
            .image-upload>input {
                display: none;
            }
            a.text-secondary.fw-normal{
                font-size:12px;
                width:auto;
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 1;
                line-clamp: 1;
                -webkit-box-orient: vertical;
            }
            #communityBox{
                width:30%;
                background-position: center;
                background-repeat:no-repeat;
                position: relative;
                background-size: cover;
                background-color: black;
            }
            #communityTitle{
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                line-clamp: 2;
                -webkit-box-orient: vertical;
            }
            #community-holder{
                display: flex;
                flex-direction: row;
                max-height: 400px;
                overflow-y: scroll;
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
                    <li>
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
            <div class="accordion" id="accordionProfile">
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
                                    <a class="nav-link" href="" role="button" data-bs-toggle="collapse" data-bs-target="#profileCollapse" aria-expanded="false" aria-controls="CollapseExample2">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="" role="button" data-bs-toggle="collapse" data-bs-target="#myCollectionCollapse" aria-expanded="false" aria-controls="CollapseExample2">Collection</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="" role="button" data-bs-toggle="collapse" data-bs-target="#activityCollapse" aria-expanded="false" aria-controls="CollapseExample2">Activity</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="" role="button" data-bs-toggle="collapse" data-bs-target="#historyCollapse" aria-expanded="false" aria-controls="CollapseExample2">History</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="" role="button" data-bs-toggle="collapse" data-bs-target="#settingCollapse" aria-expanded="false" aria-controls="CollapseExample2">Setting</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="collapse show" id="profileCollapse" data-bs-parent="#accordionProfile">
                    <div class='container-fluid mb-3'>
                        <h3 class="mb-2">Profile</h3>
                        @foreach($userId as $u)
                        <div class="row gutters-sm">
                            <div class="col-md-4 mb-3">
                                <div class="container-fluid rounded border-gray border" >
                                    <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center">
                                            <form action="/profile/updateImage/<?php echo $u->id; ?>" method="POST" id="formImage" enctype="multipart/form-data">
                                            @csrf
                                            <img id="frame" class="img logo rounded-circle shadow" src="http://127.0.0.1:8000/storage/{{ $u->image_url }}" alt='{{ $u->image_url }}'
                                                style='display: block; margin-left: auto; margin-right: auto; width:200px;'>
                                                <div class="image-upload" id="formFileEditAcc" onchange="previewEditAcc()">
                                                    <label for="file-input">
                                                        <img class="rounded-circle shadow d-block position-relative p-1" style="width:50px; height:50px; top:-50px; left:50px; background:#198754;" title="Change Image"
                                                            src="http://127.0.0.1:8000/assets/image/icon/ChangeImage.png"/>
                                                    </label>
                                                    <input id="file-input" type="file" name="image_url"/>
                                                </div>
                                            </form>
                                            <div class="mb-1">
                                                <h4>{{$u->username}}</h4>
                                                <p class="text-secondary mb-1"><i class="fa-solid fa-location-dot"></i> {{$u->country}}</p>
                                                <p class="text-muted font-size-sm">{{$u->description}}</p>
                                                <div class='row' style='justify-content:center;'>
                                                    <div class='col-md-3'>
                                                        <a style='font-size:15px; font-weight:bold; text-align:center;'>25</a>
                                                        <a style='font-size:12px; white-space:nowrap;'>Following</a>
                                                    </div>
                                                    <div class='col-md-3'>
                                                        <a style='font-size:15px; font-weight:bold; text-align:center;'>300</a>
                                                        <a style='font-size:12px; white-space:nowrap;'>Followers</a>
                                                    </div>
                                                    <div class='col-md-3'>
                                                        <a style='font-size:15px; font-weight:bold; text-align:center;'>3</a>
                                                        <a style='font-size:12px; white-space:nowrap;'>Recipes</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid mt-3 rounded border-gray border">
                                    <ul class="list-group list-group-flush">
                                    @foreach($socmedId as $s)
                                    <form action="/profile/updateSocmed/<?php echo $s->id; ?>" method="POST">
                                        @csrf
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-0 bg-transparent">
                                            <h6 class="mb-2"><i class="fa-brands fa-facebook fa-lg"></i> Facebook</h6>
                                            <input class="form-control" name="socmed_facebook" value="{{$s->socmed_facebook}}" placeholder="{{$s->socmed_facebook}}">
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-0 bg-transparent">
                                            <h6 class="mb-2"><i class="fa-brands fa-youtube fa-lg"></i> Youtube</h6>
                                            <input class="form-control" name="socmed_youtube" value="{{$s->socmed_youtube}}" placeholder="{{$s->socmed_youtube}}">
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-0 bg-transparent">
                                            <h6 class="mb-2"><i class="fa-brands fa-tiktok fa-lg"></i> TikTok</h6>
                                            <input class="form-control" name="socmed_tiktok" value="{{$s->socmed_tiktok}}" placeholder="{{$s->socmed_tiktok}}">
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-0 bg-transparent">
                                            <h6 class="mb-2"><i class="fa-brands fa-instagram fa-lg"></i> Instagram</h6>
                                            <input class="form-control" name="socmed_instagram" value="{{$s->socmed_instagram}}" placeholder="{{$s->socmed_instagram}}">
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-0 bg-transparent">
                                            <h6 class="mb-2"><i class="fa-brands fa-linkedin fa-lg"></i> LinkedIn</h6>
                                            <input class="form-control" name="socmed_linkedin" value="{{$s->socmed_linkedin}}" placeholder="{{$s->socmed_linkedin}}">
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-0 bg-transparent">
                                            <button type="submit" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> Update</button>
                                        </li>
                                    </form>
                                    @endforeach
                                    </ul>
                                </div>
                                <div class="container-fluid mt-3 p-3 rounded border-gray border">
                                    <h6 class="d-flex align-items-center mb-3">Achievement</h6>

                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="container-fluid mb-3 rounded border-gray border">
                                    <div class="card-body">
                                    <form action="/profile/updateProfile/<?php echo $u->id; ?>" method="POST" autocomplete="off">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Username</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary"><input class="form-control" name="username" value="{{$u->username}}" placeholder="{{$u->username}}" disabled></div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Email</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary"><input class="form-control" name="email" value="{{$u->email}}" placeholder="{{$u->email}}" disabled></div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Password</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary"><input class="form-control" name="password" value="{{$u->password}}" placeholder="{{$u->password}}"></div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Country</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <div class="autocomplete w-100">
                                                    <input class="form-control" id="searchInput" name="country" value="{{$u->country}}" placeholder="{{$u->country}}">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                            <h6 class="mb-0">Description</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary"><textarea class="form-control" rows="4" name="description" placeholder="{{$u->description}}">{{$u->description}}</textarea></div>
                                        </div>
                                        <hr>
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <button class="btn btn-success" type="submit"><i class="fa-solid fa-pen-to-square"></i> Update</button>
                                        </div>
                                        <div class="col-sm-5">
                                            <a class="text-secondary fst-italic fw-bold" style="font-size:12px;">Joined Since:  <span class="fw-normal">{{$u->updated_at}}</span></a><br>
                                            <a class="text-secondary fst-italic fw-bold" style="font-size:12px;">Last Updated:  <span class="fw-normal">{{$u->created_at}}</span></a>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>

                            <div class="row gutters-sm">
                                <div class="col-sm-6 mb-3">
                                    <div class="container-fluid h-100 rounded border-gray border p-2">
                                        <h6 class="d-flex align-items-center mb-3">Recipes</h6>
                                        <table class="table table-paginate" id="recipeTable" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                <th scope="col">Image</th>
                                                <th scope="col">Name & Main Ingredients</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!--Public Recipe List-->
                                                @foreach($recipeId as $r)
                                                    <tr class='clickable-row'>
                                                        <td style='width:60px;'> <img class="rounded img-fluid d-block mx-auto" src="http://127.0.0.1:8000/storage/{{ $r->recipe_url }}" alt='{{ $r->recipe_url }}'></td>
                                                        <td>
                                                            <a class="text-primary fw-normal">{{$r->recipe_name}}</a><br>
                                                            <a class="text-secondary fw-normal">{{$r->recipe_main_ing}}</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!--End of recipe section.-->
                                <div class="col-sm-6 mb-3">
                                    <div class="container-fluid h-100 rounded border-gray border p-2">
                                        <h6 class="d-flex align-items-center mb-3">Classroom</h6>
                                        <table class="table table-paginate" id="classTable" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                <th scope="col">Image</th>
                                                <th scope="col">Class Name & Type</th>
                                                <th scope="col">Recipes</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!--Classroom List-->
                                                @foreach($classId as $c)
                                                    <tr class='clickable-row'>
                                                        <td style='width:60px;'> <img class="rounded img-fluid d-block mx-auto" src="http://127.0.0.1:8000/storage/{{ $c->classroom_image }}" alt='{{ $c->classroom_image }}'></td>
                                                        <td>
                                                            <a class="text-primary fw-normal">{{$c->classroom_name}}</a><br>
                                                            <a class="text-secondary fw-normal">{{$c->classroom_type}}</a>
                                                        </td>
                                                        <td><a class="text-primary fw-normal">10 Recipes</a></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!--End of community section.-->
                            </div>

                            <div class="container-fluid rounded border-gray border p-2 mb-3">
                                <h6 class="d-flex align-items-center mb-3">Community</h6>
                                <div class="row m-1" id="community-holder">

                                    @foreach($groupId as $g)
                                    <div class="container rounded h-50 m-2 p-2" id="communityBox"
                                        style="background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url('http://127.0.0.1:8000/storage/ZwoKAcQljcJUH7vO1NncRMl1YJ4QoyovJDXfgXHt.jpg');">
                                        <a type="button" class="w-100 h-100" title="See Comunity">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-row align-items-center">
                                                <div class="ms-2 c-details">
                                                    <h6 class="mb-0 text-white" id="communityTitle">{{$g->groups_name}}</h6>
                                                    <span class="text-white" style="font-size:12px;">{{$g->created_at}}</span>
                                                </div>
                                            </div>
                                            <div class="badge">{{$g->groups_type}}</div>
                                        </div>
                                        <div class="mt-5">
                                            @foreach($user as $u2)
                                                @if($u2->id == $g->founder_id)
                                                    <h6 class="heading text-white"><i class="fa-solid fa-user"></i> {{$u2->username}}</h6>
                                                @endif
                                            @endforeach
                                            <div class="mt-1 text-white">32 Member</div>
                                        </div>
                                        </a>
                                    </div>
                                    @endforeach

                                </div><!--End of row.-->
                            </div>

                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(Session::has('success_message'))
        <div class="position-fixed bottom-0 end-0 p-4" style="z-index: 11">
        <div id="profile_toast" class="toast hide shadow rounded-top" role="alert" aria-live="assertive" aria-atomic="true">
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

        //Image upload preview.
        function previewEditAcc() {
            frame.src = URL.createObjectURL(event.target.files[0]);
        }
        document.getElementById("formFileEditAcc").onchange = function() {
            document.getElementById("formImage").submit();
        };

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

        //Modal setting.
        $(window).on('load', function() {
            $('#profile_modal').modal('show');
            $('#profile_toast').toast('show');
        });


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
        var country = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
        autocomplete(document.getElementById("searchInput"), country);
    </script>

	</body>
</html>

