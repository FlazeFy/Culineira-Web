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

    <!--Custom css-->
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/assets/css/style.css"/>

		<style>
            :root {
                --prm-color: #EB7336;
                --prm-gray: #b1b1b1;
            }
            /*Main style*/
            .footer p {
                color: rgba(255, 255, 255, 0.5);
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
		</style>

    </head>
    <body class="light">
        <script>
            //Get Theme
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
                                        <button class="btn btn-success w-25 m-1 rounded-pill shadow" data-bs-toggle="collapse" data-bs-target="#loginForm">Sign In</button>
                                        <button class="btn btn-primary w-25 m-1 rounded-pill shadow" style="background:#78578E;" data-bs-toggle="collapse" data-bs-target="#createAccForm">Let's Join</button>
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
                                            <!-- Login Form -->
                                            @include('landing.form.login')
                                        </div>
                                        <div class="collapse" id="createAccForm" data-bs-parent="#accordion">
                                            <!-- Create Acc Form -->
                                            @include('landing.form.createAcc')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section>
                    <!-- Our Feature -->
                    @include('landing.features')
                </section>

                <section>
                    <!-- F.A.Q -->
                    @include('landing.faq')
                </section>

                <section>
                    <!-- Feedback -->
                    @include('landing.feedback')
                </section>

            </div>
        </div>

        <section class="deneb_cta mt-5">
            <!-- Announcement -->
            @include('announcement.joinus')
        </section>

        <!-- Footer -->
        @include('landing.footer')

        <!--Modal & Toast validation-->
        @include('popup.failed')
        @include('popup.success')

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

