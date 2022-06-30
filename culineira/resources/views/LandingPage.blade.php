<!DOCTYPE html>
<html>
    <head>
    <title>Culineira</title>
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

            #dropIcon{
                transition: all .3s ease-in;
            }

            /*Footer*/
            .deneb_footer .widget_wrapper {
                background-repeat: no-repeat;
                background-size: cover;
                padding-top: 200px;
                padding-bottom: 70px;

            }
            @media (max-width: 767px) {
                .deneb_footer .widget_wrapper .widget {
                    margin-bottom: 40px;
                }
            }
            .deneb_footer .widget_wrapper .widget .widget_title {
                margin-bottom: 30px;
            }
            .deneb_footer .widget_wrapper .widget .widget_title h4 {
                font-weight: bold;
            }
            .deneb_footer .widget_wrapper .widget .widget_title h4:after {
                content: "";
                display: block;
                max-width: 38px;
                height: 2px;
                margin-top: 5px;
            }
            .deneb_footer .widget_wrapper .widegt_about p {
                margin-bottom: 20px;
            }
            .deneb_footer .widget_wrapper .widget_link ul li {
                margin-bottom: 5px;
            }
            .deneb_footer .widget_wrapper .widget_link ul li a {
                text-transform: capitalize;
                color: #7a808d;
            }
            .deneb_footer .widget_wrapper .widget_link ul li a:hover,
            .deneb_footer .widget_wrapper .widget_link ul li a:focus {
                color: #feb000;
            }
            .deneb_footer .widget_wrapper .widget_contact .contact_info .single_info {
                max-width: 250px;
                display: flex;
                flex-wrap: wrap;
                margin-bottom: 20px;
            }
            .deneb_footer .widget_wrapper .widget_contact .contact_info .single_info .icon {
                font-size: 12px;
                color: #feb000;
                margin-right: 10px;
            }
            .deneb_footer .widget_wrapper .widget_contact .contact_info .single_info .info p a {
                color: #7a808d;
            }
            .deneb_footer .widget_wrapper .widget_contact .contact_info .single_info .info p span {
                display: block;
            }

            .deneb_cta .cta_wrapper {
                padding: 20px;
                max-width: 970px;
                border-radius: 15px;
                margin: auto;
                margin-bottom: -185px;
                position: relative;
                background:#78578E;
                z-index: 1;
            }
            .deneb_cta .cta_wrapper:after {
                content: "";
                background: url(../images/shape/cta_shape.png) no-repeat;
                background-position: bottom;
                width: 100%;
                height: 100%;
                position: absolute;
                bottom: 0;
                left: 0;
                z-index: -1;
            }
            .deneb_cta .cta_wrapper .cta_content h3 {
                color: #fff;
                font-weight: bold;
            }
            @media (max-width: 767px) {
                .deneb_cta .cta_wrapper .cta_content h3 {
                    font-size: 24px;
                }
            }
            .deneb_cta .cta_wrapper .cta_content h3:after {
                content: "";
                display: block;
                background: url(../images/shape/line_2.png) no-repeat;
                max-width: 110px;
                height: 2px;
                margin-top: 13px;
                margin-bottom: 24px;
            }
            .deneb_cta .cta_wrapper .cta_content p {
                color: #fff;
            }
            .deneb_cta .cta_wrapper .button_box {
                float: right;
            }
            @media only screen and (min-width: 768px) and (max-width: 991px) {
                .deneb_cta .cta_wrapper .button_box {
                    float: none;
                    text-align: left;
                    margin-top: 30px;
                }
            }
            @media (max-width: 767px) {
                .deneb_cta .cta_wrapper .button_box {
                    float: none;
                    text-align: center;
                    margin-top: 30px;
                }
            }
            .deneb_cta .cta_wrapper .button_box .deneb_btn {
                background: #fff;
                color: #011a3e;
            }
            .deneb_cta .cta_wrapper .button_box .deneb_btn:hover,
            .deneb_cta .cta_wrapper .button_box .deneb_btn:focus {
                box-shadow: 2.5px 4.33px 15px 0px rgba(0, 0, 0, 0.15);
            }
		</style>

    </head>
    <body class="light">
        <script>
        const theme = localStorage.getItem('theme') || 'light';
        document.body.className = theme;
        </script>

        <div class="wrapper d-flex align-items-stretch">

            <!-- Page Content  -->
            <div id="content" class="pb-2" style='width:100%;'>
                <div class="container-fluid" style="background:linear-gradient(to bottom right, #FF8866, #EB7336);">
                    <div class="accordion py-4" id="accordionRecipe" style="padding:15%;">
                        <!--Secondary Navbar.-->
                        <nav class="navbar navbar-expand-lg navbar-light" style='background: rgba(60, 60, 60, 0.4); position:sticky; top: 0; z-index:100;'>
                            <img src="{{asset('assets/Culineira_Logo.png')}}" alt='logo'
                                style='display: block; margin-left: auto; margin-right: auto; width:40px;'>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="nav navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="" role="button">Recipe</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="" role="button">My Kitchen</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="" role="button">Community</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>

                        <div class='container-fluid bg-transparent'>
                            <div class="row">
                                <div class="col-md-7">
                                    <h1 class="text-white mt-5">Welcome, to Culineira</h1>
                                    <p class="text-white mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    <div class="row mb-xl-5">
                                        <button class="btn btn-success w-25 m-1 shadow" data-bs-toggle="collapse" data-bs-target="#loginForm">Sign In</button>
                                        <button class="btn btn-primary w-25 m-1 shadow" style="background:#78578E;" data-bs-toggle="collapse" data-bs-target="#createAccForm">Let's Join</button>
                                    </div>
                                    <p class="text-white mt-2">Stay connected with us</p>
                                    <div class="row">
                                        <button class="btn btn-primary bg-transparent border-0 mx-2" style="width:20px;">
                                            <i class="fa-brands fa-instagram fa-xl text-white"></i>
                                        </button>
                                        <button class="btn btn-primary bg-transparent border-0 mx-2" style="width:20px;">
                                            <i class="fa-brands fa-tiktok fa-xl text-white"></i>
                                        </button>
                                        <button class="btn btn-primary bg-transparent border-0 mx-2" style="width:20px;">
                                            <i class="fa-brands fa-facebook text-white fa-xl text-white"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div id="accordion">
                                        <div class="collapse show" id="landingImage" data-bs-parent="#accordion">
                                            <img src="{{asset('assets/Culineira_LandingImg.png')}}" alt='logo'
                                                style='display: block; margin-left: auto; margin-right: auto; width:100%;'>
                                        </div>
                                        <div class="collapse p-4" id="loginForm" data-bs-parent="#accordion" style="min-width:400px;">
                                            <form action="/login" method="POST">
                                            @csrf
                                            <a class="text-white">Username</a>
                                            <input class="form-control" type="text" name="username" required></input>
                                            <a class="text-white">Password</a>
                                            <input class="form-control" type="password" name="password" required></input>
                                            <div class="row mt-2">
                                                <div class="col-md-8">
                                                    <a class="btn btn-link text-white" style="font-size:13px;">Forget Password</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <button class="btn btn-success w-100" type="submit">Submit</button>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                        <div class="collapse" id="createAccForm" data-bs-parent="#accordion">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='container-fluid bg-transparent py-4' style="padding:15%;">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card border-0 shadow" style="width: 18rem; margin-top:50%;">
                                <div class="card-body">
                                    <h5 class="card-title">What is Culineira</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="card border-0 shadow mt-5 mx-2" style="width:220px;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <i class="fa-solid fa-book fa-2x"></i>
                                            </div>
                                            <div class="col-md-10">
                                                <h5 class="card-title">Recipes</h5>
                                            </div>
                                        </div>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                    </div>
                                </div>
                                <div class="card border-0 shadow mt-5 mx-2" style="width:220px;">
                                    <div class="card-body">
                                    <div class="row">
                                            <div class="col-md-2">
                                                <i class="fa-solid fa-kitchen-set fa-2x"></i>
                                            </div>
                                            <div class="col-md-10">
                                                <h5 class="card-title">My Kitchen</h5>
                                            </div>
                                        </div>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                    </div>
                                </div>
                                <div class="card border-0 shadow mt-5 mx-2" style="width:220px;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <i class="fa-solid fa-people-group fa-2x"></i>
                                            </div>
                                            <div class="col-md-10">
                                                <h5 class="card-title mx-1">Community</h5>
                                            </div>
                                        </div>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                    </div>
                                </div>
                                <div class="card border-0 shadow mt-3 mx-2" style="width:220px;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <i class="fa-solid fa-link fa-2x"></i>
                                            </div>
                                            <div class="col-md-10">
                                                <h5 class="card-title mx-1">Dependencies</h5>
                                            </div>
                                        </div>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                    </div>
                                </div>
                                <div class="card border-0 shadow mt-3 mx-2" style="width:220px;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <i class="fa-solid fa-person-chalkboard fa-2x"></i>
                                            </div>
                                            <div class="col-md-10">
                                                <h5 class="card-title mx-1">Classroom</h5>
                                            </div>
                                        </div>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                    </div>
                                </div>
                                <div class="card border-0 shadow mt-3 mx-2" style="width:220px; background:#EB7336;">
                                    <div class="card-body">
                                        <form action="/login/postFeedback" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <i class="fa-solid fa-comment-dots fa-2x text-white"></i>
                                                </div>
                                                <div class="col-md-10">
                                                    <h5 class="text-white">Feedback</h5>
                                                </div>
                                            </div>
                                            <textarea class="form-control" rows="5" aria-label="With textarea" name="feedback_body" placeholder="type your feedback here..."></textarea>
                                            <button class="btn btn-success mt-2" type="submit">Send</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="deneb_cta mt-5">
        <div class="container">
            <div class="cta_wrapper">
                <div class="cta_content">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{asset('assets/Culineira_Mascot.png')}}" alt='logo'
                                style='width:100%;'>
                        </div>
                        <div class="col-md-8">
                            <h3>Have any great recipe?<br><a style="font-size:14px;"> But you dont know where to share it?</a></h3>
                            <p>Curabitur libero eros, efficitur sit amet sodales tincidunt, aliquet et leo sed ut nibh feugiat, auctor enim quis.</p>
                            <a href="#" class="btn btn-success">Join Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <footer class="deneb_footer">
            <div class="widget_wrapper" style="background-image: url({{asset('assets/Culineira_Footer.png')}});">
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="widget widegt_about">
                                <div class="widget_title">
                                    <img src="assets/images/logo_1.png" class="img-fluid" alt="">
                                </div>
                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="widget widget_link">
                                <div class="widget_title">
                                    <h4>Links</h4>
                                </div>
                                <ul>
                                    <li><a href="#" class="text-white">About Us</a></li>
                                    <li><a href="#" class="text-white">Services</a></li>
                                    <li><a href="#" class="text-white">Portfolio</a></li>
                                    <li><a href="#" class="text-white">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="widget widget_contact">
                                <div class="widget_title">
                                    <h4>Contact Us</h4>
                                </div>
                                <div class="contact_info">
                                    <div class="single_info">
                                        <div class="icon">
                                            <i class="fas fa-phone-alt text-white"></i>
                                        </div>
                                        <div class="info">
                                            <p><a class="text-white">0811 4882 001</a></p>
                                        </div>
                                    </div>
                                    <div class="single_info">
                                        <div class="icon">
                                            <i class="fas fa-envelope text-white"></i>
                                        </div>
                                        <div class="info">
                                            <p><a class="text-white">flazen.edu@gmail.com</a></p>
                                        </div>
                                    </div>
                                    <div class="single_info">
                                        <div class="icon">
                                            <i class="fas fa-map-marker-alt text-white"></i>
                                        </div>
                                        <div class="info">
                                            <p class="text-white">Bandung</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center text-white">Copyright &copy; 2020 All rights reserved.</p>
            </div>
        </footer>

        <!--Others CDN.-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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
        </script>

	</body>
</html>

