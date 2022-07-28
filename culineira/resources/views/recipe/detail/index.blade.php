<!DOCTYPE html>
<html>
    <head>
    <title>Recipes | @foreach($recipeId as $data){{$data->recipe_name}}@endforeach</title>
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
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/assets/css/chat.css"/>
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/assets/css/stepper/detail-recipe.css"/>

    <!-- Jquery -->
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

        <!--Source file.-->

		<style>
            :root {
                --prm-color: #EB7336;
                --prm-gray: #b1b1b1;
            }
            /*Loading*/
            .img-load{
                width:200px !important;
                height:200px !important;
                border-radius:100px;
            }
            .text-load{
                font-size:26px !important;
                color:#eb7336 !important;
                position: relative !important;
                margin-top:-400px !important;
            }
            /*Main style*/

            .flex-shrink-1.rounded.py-2.px-3.mr-3{
                background:var(--background8);
            }
            #dateMsg{
                color:var(--text2);
                font-size:10px;
            }

            /* Modal Setting*/
            .modal-content{
                background-color: var(--background3);
                border:none;
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
                                @foreach($recipeId as $data)
                                    <li class="nav-item">
                                        <a class="nav-link" href="/recipe" role="button" aria-expanded="false" aria-controls="CollapseExample2" >Cook Now > {{$data->recipe_name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </nav>

                    <!--Recipes Detail.-->
                    @foreach($recipeId as $data)
                        <div class='container-fluid mb-3 p-3'>
                            <h3 class="mb-2">{{$data->recipe_name}}
                                <span class="container border-0 text-secondary rounded-pill m-2" style="
                                    <?php if($data->recipe_level == "Beginner"){echo"background: rgba(5, 240, 44, 0.2);";}
                                        else if($data->recipe_level == "Intermediate"){echo"background: rgba(245, 164, 2, 0.2);";}
                                        else if($data->recipe_level == "Expert"){echo"background: rgba(255, 0, 0, 0.2);";}
                                    ?> font-size:15px;">{{$data->recipe_level}}
                                </span>
                                <span class="container border-0 text-secondary rounded-pill ml-1" style="font-size:15px;">
                                    <a style="color: #d9534f;"><i class="fa-solid fa-heart"></i>
                                        @php($total=0)
                                        @foreach($likesId as $like)
                                            @php($total++)
                                        @endforeach
                                        {{$total}}
                                    </a>
                                </span>
                            </h3>
                            <div class="row">
                                <div class="col-md-3 text-center mb-2">
                                    <img src="http://127.0.0.1:8000/storage/{{ $data->recipe_url }}?>" alt='<?php echo $data->recipe_name."_".$data->user_id;?>'
                                        style='width:70%; display: block; margin-left: auto; margin-right: auto;'><hr>
                                    <h6 style="font-size:14px;"><span class="text-secondary">Type :</span> {{$data->recipe_type}}</h6>
                                    <h6 style="font-size:14px;"><span class="text-secondary">Country :</span> {{$data->recipe_country}}</h6>
                                    <h6 style="font-size:14px;"><span class="text-secondary">Time Spend :</span> {{$data->recipe_time_spend}} min</h6>
                                    <h6 style="font-size:14px;"><span class="text-secondary">Calorie :</span> {{$data->recipe_calorie}} cal</h6><br>

                                    <h6 style="font-size:14px;">Main Ingredients <i class="fa-solid fa-circle-info"></i></h6>
                                    <h7 style="font-size:13px;">{{$data->recipe_main_ing}}</h7>
                                    <hr>
                                    <h6 class="mt-4" style="font-size:14px;">Created On</h6>
                                    <h7 style="font-size:13px;" id="recipe_created_at">{{$data->created_at}}</h7>
                                    <h6 style="font-size:14px;">Updated On</h6>
                                    <h7 style="font-size:13px;" id="recipe_updated_at">{{$data->updated_at}}</h7>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <button class="btn btn-primary w-100" style="background:#00B6AB; border-color:#00B6AB;" data-bs-toggle="collapse" data-bs-target="#collapseDesc">
                                                Description</button>
                                        </div>
                                        <div class="col-md-3">
                                            <button class="btn btn-primary w-100" data-bs-toggle="collapse" data-bs-target="#collapseTiles">
                                                <i class="fa-solid fa-list-check"></i> Tiles</button>
                                        </div>
                                        <div class="col-md-3">
                                            <button class="btn btn-primary w-100" data-bs-toggle="collapse" data-bs-target="#collapseStepper">
                                                <i class="fa-solid fa-timeline"></i> Stepper</button>
                                        </div>
                                    </div>

                                    <div class="accordion" id="accordionSteps">
                                        <div id="collapseDesc" class="collapse" data-bs-parent="#accordionSteps">
                                            <h5 class="mt-2">Description</h5>
                                            @if($data->recipe_video != "null")
                                                <video controls class="rounded w-100" alt="video" >
                                                    <source src="http://127.0.0.1:8000/storage/{{ $data->recipe_video }}">
                                                </video>
                                            @endif
                                            <p id="recipe_desc"><?php echo nl2br($data->recipe_desc);?></p>
                                        </div>

                                        <div class="accordion" id="accordionMsgTls">
                                            <div id="collapseTiles" class="collapse show" data-bs-parent="#accordionSteps">
                                                <!--How to make (Tiles)-->
                                                @include('recipe.detail.steps_tiles')
                                            </div>
                                        </div>

                                        <div class="accordion" id="accordionExample">
                                            <div id="collapseStepper" class="collapse" data-bs-parent="#accordionSteps">
                                                <!--How to make (Stepper)-->
                                                @include('recipe.detail.steps_stepper')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-2">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <!--Like, unlike-->
                                            @include('recipe.detail.like')
                                        </div>
                                        <div class="col-md-3">
                                            <!--Add to list-->
                                            @include('recipe.detail.list')
                                        </div>
                                        <div class="col-md-6">
                                            <button class="btn btn-primary w-100 border-2" style="background:#00B6AB; border-color:#00B6AB;" onclick='printRecipe();' title="Print as PDF"><i class="fa-solid fa-print"></i> Print</button>
                                        </div>
                                    </div>
                                    <h5 class="mt-2">Ingredients</h5>
                                        <!--Ingredients-->
                                        @include('recipe.detail.ingredients')
                                    <hr>
                                    <h5>Contributors <i class="fa-solid fa-circle-info"></i></h5>
                                    <div class="container-fluid mb-2">
                                        <!--Contributor-->
                                        @include('recipe.detail.contributors')
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

            </div><!--End of accordion-->

            <!--Control section.-->
            <div class='mt-5'>
                @include('others.control')
            </div>

            <div id="recipe_list_holder">
                <div class='container-fluid mb-3 p-3'>
                    <!--Similiar recipe-->
                    @include('recipe.detail.similiar')
                </div>

                <div class='container-fluid mb-3 p-3'>
                    <!--Complete dish-->
                    @include('recipe.detail.complete')
                </div>

                <div class='container-fluid mb-3 p-3'>
                    <!--Preffered recipe-->
                    @include('recipe.detail.preffered')
                </div>

                <!--Footer-->
                @include('footer_main')

            </div>

        </div>
    </div>

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

    <script>
        //Custom popover
        $(document).ready(function() {
            //For tiles.
            <?php
                foreach($recipeId as $data){
                    foreach($steps as $stp){
                        if($stp->recipe_id == $data->id){
                            echo"
                            var options = {
                                html: true,
                                sanitize: false,
                                content: $('[data-name="; echo'"popover-content-custom-'.$stp->id.'"'; echo"]')
                            }
                            var exampleEl = document.getElementById('btn_popover_".$stp->id."')
                            var popover = new bootstrap.Popover(exampleEl, options)";
                        }
                    }
                }
            ?>
            //For stepper.
            <?php
                foreach($recipeId as $data){
                    foreach($steps as $stp){
                        if($stp->recipe_id == $data->id){
                            echo"
                            var options = {
                                html: true,
                                sanitize: false,
                                content: $('[data-name="; echo'"popover-content-custom-'.$stp->id.'_Stepper"'; echo"]')
                            }
                            var exampleEl = document.getElementById('btn_popover_".$stp->id."_Stepper')
                            var popover = new bootstrap.Popover(exampleEl, options)";
                        }
                    }
                }
            ?>
        })

        //Print recipe to pdf
        function printRecipe(){
            var recipeName = document.getElementById('recipe_name');
            var recipeMaker = document.getElementById('recipe_maker');
            var recipeTime = document.getElementById('recipe_time_spend');
            var recipeCal = document.getElementById('recipe_cal');
            var recipeDesc = document.getElementById('recipe_desc');
            var recipeCreated = document.getElementById('recipe_created_at');
            var recipeUpdated = document.getElementById('recipe_updated_at');
            var currentdate = new Date();

            var newWin=window.open('','Print-Window');
            newWin.document.open();

            newWin.document.write(
                "<html>" +
                "<img src='{{asset('assets/Culineira_FullLogo.png')}}' alt='logo'" +
                    " style='display: block; margin-left: auto; margin-right: auto; width:400px;'>" +

                "<p class=MsoNormal><span class=SpellE><b><span style='font-size:20.0pt;" +
                "line-height:107%'>" + recipeName.innerHTML+ "</b><span" +
                "style='font-size:14.0pt;line-height:107%'>  by @" + recipeMaker.innerHTML+ "</span><b><span " +
                "style='font-size:20.0pt;line-height:107%'><o:p></o:p></span></b></p>" +

                "<p class=MsoNormal><i><span style='font-size:10.0pt;line-height:107%'>(Time <span" +
                "class=GramE>spend :</span> " + recipeTime.innerHTML+ " Min, Calorie: " + recipeCal.innerHTML+ " Cal)<o:p></o:p></span></i></p>" +

                "<p class=MsoNormal><i><span style='font-size:10.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></i></p>" +

                "<p class=MsoNormal><b><span style='font-size:14.0pt;line-height:107%'>How To " +
                "Make<o:p></o:p></span></b></p>" +

                <?php
                    $i = 1;
                    foreach($recipeId as $r){
                        foreach($steps as $s){
                            if(($r->id == $s->recipe_id)&&($s->steps_type == "Required")){
                                echo '"'."<p class=MsoNormal><span style='font-size:13.0pt;line-height:107%'>Step #".$i."<o:p></o:p></span></p>".'" +';
                                echo '"'."<p class=MsoNormal><span style='font-size:12.0pt;line-height:107%'>".$s->steps_body."<o:p></o:p></span></p>".'" +';
                                $i++;
                            } else if(($r->id == $s->recipe_id)&&($s->steps_type == "Optional")){
                                echo '"'."<p class=MsoNormal><span style='font-size:13.0pt;line-height:107%'>Step #".$i." <b>(Optional)</b> <o:p></o:p></span></p>".'" +';
                                echo '"'."<p class=MsoNormal><span style='font-size:12.0pt;line-height:107%'>".$s->steps_body."<o:p></o:p></span></p>".'" +';
                                $i++;
                            }
                        }
                    }
                ?>

                "<p class=MsoNormal><span style='font-size:14.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>" +

                "<p class=MsoNormal><b><span style='font-size:14.0pt;line-height:107%'>Ingredients<o:p></o:p></span></b></p>" +

                "<p class=MsoNormal><span style='font-size:12.0pt;line-height:107%'>Required<o:p></o:p></span></p>" +

                <?php
                    foreach($recipeId as $r){
                        foreach($ingredients as $igr){
                            if(($r->id == $igr->recipe_id)&&($igr->ingredients_type == "Required")){
                                echo '"'."<p class=MsoNormal><span style='font-size:12.0pt;line-height:107%'>- ".$igr->ingredients_vol." ".$igr->ingredients_name."<o:p></o:p></span></p>".'" +';
                            }
                        }
                    }
                ?>

                "<p class=MsoNormal><span style='font-size:12.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>" +

                "<p class=MsoNormal><span style='font-size:12.0pt;line-height:107%'>Optional<o:p></o:p></span></p>" +

                <?php
                    foreach($recipeId as $r){
                        foreach($ingredients as $igr){
                            if(($r->id == $igr->recipe_id)&&($igr->ingredients_type == "Optional")){
                                echo '"'."<p class=MsoNormal><span style='font-size:12.0pt;line-height:107%'>- ".$igr->ingredients_vol." ".$igr->ingredients_name."<o:p></o:p></span></p>".'" +';
                            }
                        }
                    }
                ?>

                "<p class=MsoNormal><span style='font-size:12.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>" +

                "<p class=MsoNormal><b><span style='font-size:14.0pt;line-height:107%'>Description<o:p></o:p></span></b></p>" +

                "<p class=MsoNormal><span style='font-size:12.0pt;line-height:107%'>" + recipeDesc.innerHTML+ "<o:p></o:p></span></p>" +

                "<p class=MsoNormal><span style='font-size:12.0pt;line-height:107%'><o:p>&nbsp;</o:p></span></p>" +

                "<p class=MsoNormal align=right style='text-align:right; color:gray; font-size:11.5px;'><i>This recipe is " +
                "created at<o:p></o:p></i>" + recipeCreated.innerHTML+ "</p>" +

                "<p class=MsoNormal align=right style='text-align:right; color:gray; font-size:11.5px;'><i>Updated at <o:p></o:p></i>" + recipeUpdated.innerHTML + "</p>" +

                "<p class=MsoNormal align=right style='text-align:right; color:gray; font-size:11.5px;'><i>And print at <o:p></o:p></i>" + currentdate.getFullYear() + "-" +
                + (currentdate.getMonth()+1) + "-" + currentdate.getDate()  + " " + currentdate.getHours()  + ":" + currentdate.getMinutes() + ":" + currentdate.getSeconds() +"</p>" +

                "<p class=MsoNormal align=center style='text-align:center'><i><span" +
                "style='mso-spacerun:yes'></span><span class=SpellE>Culineira</span> <span" +
                "class=GramE>~ <span style='mso-spacerun:yes'></span>Copyright</span> © 2022 " +
                "All rights reserved<o:p></o:p></i></p>" +
                "<body onload='window.print()'></body>" +
                "</html>");
            newWin.document.close();
            setTimeout(function(){newWin.close();},10);
        }

        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>

	</body>
</html>

