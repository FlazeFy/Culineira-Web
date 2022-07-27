<!DOCTYPE html>
<html>
    <head>
    <title>Culineira | My Kitchen</title>
    <!--Meta tags-->
    <meta charset="utf-8" name="color-scheme" content="light dark">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--CDN Bootstrap CSS-->
    <link rel="icon" type="image/png" href="http://127.0.0.1:8000/assets/Culineira_Logo.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">		<link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <script src="https://kit.fontawesome.com/12801238e9.js" crossorigin="anonymous"></script>

    <!--Custom css-->
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/assets/css/style.css"/>

    <!-- Jquery -->
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

        <!--Source file.-->

		<style>
            :root {
                --prm-color: #EB7336;
                --prm-gray: #b1b1b1;
            }
            /*Main style*/

            /* Modal Setting*/
            .modal-content{
                background-color: var(--background3);
                border:none;
            }

            .footer p {
                color: rgba(255, 255, 255, 0.5);
            }

            #recipe_list_holder{
                display: flex;
                flex-direction: column;
                height: 200px;
                overflow-y: scroll;
            }
            #recipe_list_add_holder{
                display: flex;
                flex-direction: column;
                height: 450px;
                overflow-y: scroll;
            }
            #shelf_holder{
                height: 400px;
                overflow-y: scroll;
            }
            #list_title{
                font-size:16px;
                text-align:center;
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 1;
                line-clamp: 1;
                -webkit-box-orient: vertical;
            }
            .scrolling-wrapper {
                overflow-x: scroll;
                overflow-y: hidden;
                white-space: nowrap;
            }
            .card {
                display: inline-block;
            }
            #list_desc{
                font-size:11px;
                white-space:normal;
                text-align:center;
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                line-clamp: 2;
                -webkit-box-orient: vertical;
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
                    <li>
                        <a href="{{ url('/recipe') }}"><i class="fa-solid fa-book"></i> Recipes</a>
                    </li>
                    <li class="active">
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
                                    <a class="nav-link" href="" role="button" aria-expanded="false" aria-controls="CollapseExample2"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <!--List.-->
                <div class='container-fluid bg-transparent mb-3'>
                    <h3 class="mb-2">Recipe List</h3>
                    <div class="row">
                        <div class="col-md-2">
                            <!--List Control.-->
                            <div class="card border-gray p-2 border-0 m-2" style='width:160px; background-image: linear-gradient(to right, #eb7336, #eb8d36);'>
                                <h5 style='font-size:16px; text-align:center; color:white;'>Make New List</h5>
                                <img src="{{asset('assets/storyset/List.png')}}" class="w-75 mb-1">
                                <a class='btn btn-success mb-2 w-100' data-bs-toggle="modal" data-bs-target="#createList"><i class="fa-solid fa-arrow-right"></i> Create Now</a>
                                <form action="/kitchen/deleteList" method="POST">
                                    @csrf
                                    <button class='btn btn-danger mb-2 w-100' type='submit'><i class="fa-solid fa-trash-can"></i> Delete</button>
                                <a class='btn btn-primary mb-2 border-0 w-100' style="background:#77568D;" href=""><i class="fa-solid fa-right-left"></i> Convert</a>
                            </div>
                        </div>

                        <div class="col-md-10">
                            <!--Recipe List.-->
                            @include('kitchen.list')
                        </div>
                        </form><!--End of delete form list.-->
                    </div>
                </div>

                <!--Recipes.-->
                <div class='container-fluid mb-3'>
                    <h3 class="mb-2">Recipe Calendar</h3>

                </div>

                <!--Shelf.-->
                <div class='container-fluid mb-3'>
                    <h3 class="mb-2">Shelf</h3>
                    <form action="/kitchen/deleteItemShelf" method="POST">
                        <div class="row m-2 w-50">
                            @csrf
                            <a class="btn btn-success mb-2 mx-2 w-25" id="add_item_shelf" data-bs-toggle="modal" data-bs-target="#addItemShelf"><i class="fa-solid fa-plus"></i> Add Item</a>
                            <button class='btn btn-danger mb-2 w-25' type='submit'><i class="fa-solid fa-trash-can"></i> Delete</button>
                        </div>
                        @include('kitchen.shelf')
                    </form>
                </div>

                <!--Recipes.-->
                <div class='container-fluid mb-3'>
                    <h3 class="mb-2">Classroom</h3>

                </div>

            </div><!--End of accordion-->

        </div>
    </div>

    <!-- Modal Create New List -->
    @include('kitchen.form.createList')

    <!-- Modal Add New Item -->
    @include('kitchen.form.addItem')

    <!-- Delete list Modal -->
    @include('kitchen.form.deleteList')

    <!-- Add recipe to list modal -->
    @include('kitchen.form.addRecipeList')

    <!--Modal validation-->
    @include('popup.failed')
    @include('popup.success')

    <!--Others CDN.-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!--Loading-->
    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/js/loading.js"></script>

    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
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
    </script>

    <script>
        //Modal setting.
        $(window).on('load', function() {
            $('#recipe_modal').modal('show');
            $('#recipe_toast').toast('show');
        });
    </script>

	</body>
</html>

