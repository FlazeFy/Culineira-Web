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

    <!--Custom css-->
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/assets/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/assets/css/table.css"/>
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/assets/css/stepper/recipe.css"/>
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/assets/css/nav-tabs/recipe.css"/>
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/assets/css/nav-pills/recipe.css"/>

    <!-- Jquery -->
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- Jquery & Bootstrap DataTables -->
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
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
            .toast-body.rounded-bottom{
                background:var(--toast2);
                color:var(--text);
            }
            .toast-header{
                background:var(--toast1);
                color:var(--text);
            }

            /* Modal Setting*/
            .modal-content{
                background-color: var(--background3);
                border:none;
            }

            .footer p {
                color: rgba(255, 255, 255, 0.5);
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
                @include('others.miniprofile')

                <!--Main Navbar.-->
                <ul class="list-unstyled components mb-3">
                    <li class="active">
                        <a href="{{ url('/recipe') }}"><i class="fa-solid fa-book"></i> Recipes</a>
                    </li>
                    <li>
                    <a href="{{ url('/kitchen') }}"><i class="fa-solid fa-kitchen-set"></i> My Kitchen</a>
                    </li>
                    <li>
                        <a href="{{ url('/community') }}"><i class="fa-solid fa-people-group"></i> Community</a>
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
                                    <a class="nav-link" href="" role="button" data-bs-toggle="collapse" data-bs-target="#compareCollapse" aria-expanded="false" aria-controls="CollapseExample2">Compare</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="collapse show" id="globalCollapse" data-bs-parent="#accordionRecipe">
                    <!--Control section.-->
                    @include('others.control')

                    <!--New recipes.-->
                    @include('recipe.global.newrecipe')

                    <!--Unfinished recipe-->
                    @include('recipe.global.unfinished')

                    <!--Recipe type.-->
                    <div id="recipe_list_holder">
                        <!--Main Course-->
                        @include('recipe.global.maincourse')

                        <!--Appetizer-->
                        @include('recipe.global.appetizer')

                        <!--Desserts-->
                        @include('recipe.global.desserts')

                        <!--Preferred-->
                        @include('recipe.global.preferred')

                        <!--Recipe In List-->
                        @include('recipe.global.mylist')

                        <!--Top Recipe-->
                        @include('recipe.global.top')
                    </div>
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

                                            <div class="tab-pane fade rounded show active p-2" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                <!--My Recipes.-->
                                                @if(@count($myrecipes) != 0)
                                                    @include('recipe.myrecipe')
                                                @else
                                                    <img class="d-block mx-auto mt-4" src="{{asset('assets/storyset/Empty.png')}}" style="width:280px;">
                                                    <h2 class="text-center mx-3" style="color:#Eb7336;">Recipe Not Found</h2>
                                                    <h6 class="text-center mx-3">You haven't create any recipe yet</h6>
                                                @endif
                                            </div>

                                            <!--Favorites.-->
                                            <div class="tab-pane fade rounded p-2" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                <h5>Favorites</h5>

                                            </div>

                                            <div class="tab-pane fade rounded p-2" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                <!--Create Full New Recipe.-->
                                                @include('recipe.form.createFullRecipe')
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

                    </div>
                </div><!--End of collapse-->

                <div class="collapse" id="compareCollapse" data-bs-parent="#accordionRecipe">
                    <div class='container-fluid mb-3'>
                        <h3 class="mb-2">Compare</h3>
                        <!--Compare-->
                        @include('recipe.compare')
                    </div>
                </div><!--End of collapse-->

                <!--Footer-->
                @include('footer_main')
            </div><!--End of accordion-->

        </div>
    </div>

    <!--Create instant recipe modal-->
    @include('recipe.form.createInstantRecipe')

    <!--Edit recipe modal-->
    @include('recipe.form.edit')

    <!--Dependencies recipe modal-->
    @include('recipe.form.dependencies')

    <!--Delete Recipe Modal-->
    @include('recipe.form.delete')

    <!--Modal & toast validation-->
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

    <!--Stepper-->
    <script src="http://127.0.0.1:8000/assets/js/stepper/createRecipe.js"></script>

    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
        })
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
        })

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

