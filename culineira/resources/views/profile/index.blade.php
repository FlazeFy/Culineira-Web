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

    <!--Custom css-->
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/assets/css/style.css"/>

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
            .card {
                display: inline-block;
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
        @include('sidebar')

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
                                    <!-- Edit Profile Image -->
                                    @include('profile.form.editImage')
                                </div>
                                <div class="container-fluid mt-3 rounded border-gray border">
                                    <!-- Edit Socmed -->
                                    @include('profile.form.editSocmed')
                                </div>
                                <div class="container-fluid mt-3 p-3 rounded border-gray border">
                                    <!-- Achievement -->
                                    @include('profile.account.achievement')
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="container-fluid mb-3 rounded border-gray border">
                                    <!-- Edit Profile -->
                                    @include('profile.form.editProfile')
                                </div>

                            <div class="row gutters-sm">
                                <div class="col-sm-6 mb-3">
                                    <!-- Recipe -->
                                    @include('profile.account.recipe')
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <!-- Classroom -->
                                    @include('profile.account.classroom')
                                </div>
                            </div>

                            <div class="container-fluid rounded border-gray border p-2 mb-3">
                                <!-- Community -->
                                @include('profile.account.community')
                            </div>

                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="collapse" id="activityCollapse" data-bs-parent="#accordionProfile">
                    @foreach($userId as $u)
                    <div class='container-fluid mb-3'>
                        <!-- Activity -->
                        @include('profile.activity.list')
                    </div>
                    @endforeach
                </div>

                <!--Footer-->
                @include('footer_main')
            </div>
        </div>
    </div>

    <!--Modal & Toast validation-->
    @include('popup.failed')
    @include('popup.success')

    <!--Others CDN.-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!--Loading-->
    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/js/loading.js"></script>

    <!--Sidebar-->
    <script src="http://127.0.0.1:8000/assets/js/sidebar.js"></script>

    <!--Dark & Light Mode-->
    <script src="http://127.0.0.1:8000/assets/js/dark-light-mode.js"></script>

    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
        })
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>

	</body>
</html>

