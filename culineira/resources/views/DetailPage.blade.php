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
                                            <h5 class="mt-2">How to make</h5>
                                            @php($i=1)
                                            @foreach($steps as $stp)
                                                @if($stp->recipe_id == $data->id)
                                                <div class="card shadow border-0 w-100 mb-2">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <a style="color:#EB7336;">Steps #{{$i}}
                                                            @if($stp->steps_type == "Optional")
                                                                <b class="text-secondary">~ {{$stp->steps_type}}</b>
                                                            @endif
                                                            </a><br>
                                                            @if($stp->steps_image != "null")
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        <img src="http://127.0.0.1:8000/storage/{{ $stp->steps_image }}" alt='{{ $stp->steps_image }}'
                                                                            style='width:50%; display: block; margin-left: auto; margin-right: auto;'>
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        <a>{{$stp->steps_body}}</a>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <a>{{$stp->steps_body}}</a>
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
                                                                                        <img src="http://127.0.0.1:8000/storage/{{ $u->image_url }}" alt='{{ $u->image_url }}' class="rounded-circle mr-1" width="35" >
                                                                                    </div>
                                                                                    <div class="flex-shrink-1 rounded py-2 px-3 mr-3" style="<?php if($cmt->users_id == $data->user_id){echo "border:2px #EB7336 solid;";}?>">
                                                                                        <div class="font-weight-bold mb-1" style="color:#EB7336;">{{$u->username}}<span class="text-secondary" id="dateMsg"> {{$cmt->created_at}}</span></div>
                                                                                        @if($cmt->comment_image != "null")
                                                                                            <img src="http://127.0.0.1:8000/storage/{{ $cmt->comment_image }}" alt='{{ $cmt->comment_image }}'  class="rounded-circle mr-1"
                                                                                                style='width:30%; display: block; margin-left: auto; margin-right: auto;'>
                                                                                            <a>{{$cmt->comment_body}}</a>
                                                                                        @else
                                                                                            <a>{{$cmt->comment_body}}</a>
                                                                                        @endif
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
                                                                        <div hidden>
                                                                            <div data-name="popover-content-custom-<?php echo $stp->id;?>">
                                                                                <button type="button" class="btn btn-primary btn-circle btn-xl" title="Image" data-bs-toggle="collapse" href="#collapseAddImage"><i class="fa-solid fa-image"></i></button>
                                                                                <button type="button" class="btn btn-primary btn-circle btn-xl" title="Video" data-bs-toggle="collapse" href="#collapseAddVideo"><i class="fa-solid fa-video"></i></button>
                                                                                <button type="button" class="btn btn-primary btn-circle btn-xl" title="Tips" data-bs-toggle="collapse" href="#collapseAddTips"><i class="fa-solid fa-lightbulb"></i></button>
                                                                            </div>
                                                                        </div>
                                                                        <a id="btn_popover_<?php echo $stp->id;?>" class="btn btn-primary" data-bs-toggle="popover-custom" data-html="true" title="Attached" ><i class="fa-solid fa-paperclip"></i></a>
                                                                    </div>
                                                                    <div class="col-11">
                                                                        <div class="input-group">
                                                                            <input name="steps_id" class="form-control" value="<?php echo $stp->id; ?>" required hidden>
                                                                            <input type="text" class="form-control" placeholder="Type your comment" name="comment_body" required>
                                                                            <button type="submit" class="btn btn-primary">Send</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="accordionAtchTls">
                                                                    <div class="collapse" id="collapseAddImage" data-bs-parent="#accordionAtchTls">
                                                                        <div class="container-fluid py-1">
                                                                            <h7><i class="fa-solid fa-circle-info"></i> Maximum size image is 5 mb</h7>
                                                                            <div class="input-group">
                                                                                <img id="frame" src="http://127.0.0.1:8000/assets/NoImage.png" class="img-fluid d-block mx-auto" style="width:150px; border-radius:100%; border:3px solid #EB7736;"/>
                                                                                <div class="row mt-2">
                                                                                    <div class="col-md-3">
                                                                                        <a onclick="clearImageComment()" class="btn btn-danger w-100"><i class="fa-solid fa-trash"></i> Reset</a>
                                                                                    </div>
                                                                                    <div class="col-md-9">
                                                                                        <input class="form-control w-100" type="file" id="formFileComment" onchange="previewComment()" name="comment_image" accept="image/png, image/jpg, image/jpeg">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="collapse" id="collapseAddVideo" data-bs-parent="#accordionAtchTls">
                                                                        <div class="container-fluid py-1">
                                                                            <h7><i class="fa-solid fa-circle-info"></i> Maximum size video is 5 mb</h7>
                                                                            <div class="input-group">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="collapse" id="collapseAddTips" data-bs-parent="#accordionAtchTls">
                                                                        <div class="container-fluid py-1">
                                                                            <h7><i class="fa-solid fa-circle-info"></i> ...</h7>
                                                                            <div class="input-group">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!--End of accordion attached-->
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
                                            <h5 class="mt-2">How to make</h5>
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
                                                                            <a style="color:#EB7336;">Steps #{{$i}}
                                                                            @if($stp->steps_type == "Optional")
                                                                                <b class="text-secondary">~ {{$stp->steps_type}}</b>
                                                                            @endif
                                                                            </a><br>
                                                                            @if($stp->steps_image != "null")
                                                                                <div class="row">
                                                                                    <div class="col-md-5">
                                                                                        <img src="http://127.0.0.1:8000/storage/{{ $stp->steps_image }}" alt='{{ $stp->steps_image }}'
                                                                                            style='width:50%; display: block; margin-left: auto; margin-right: auto;'>
                                                                                    </div>
                                                                                    <div class="col-md-7">
                                                                                        <a>{{$stp->steps_body}}</a>
                                                                                    </div>
                                                                                </div>
                                                                            @else
                                                                                <a>{{$stp->steps_body}}</a>
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
                                                                                                        <img src="http://127.0.0.1:8000/storage/{{ $u->image_url }}" alt='{{ $u->image_url }}' class="rounded-circle mr-1" width="35" >
                                                                                                    </div>
                                                                                                    <div class="flex-shrink-1 rounded py-2 px-3 mr-3" style="<?php if($cmt->users_id == $data->user_id){echo "border:2px #EB7336 solid;";}?>">
                                                                                                        <div class="font-weight-bold mb-1" style="color:#EB7336;">{{$u->username}}<span class="text-secondary" id="dateMsg"> {{$cmt->created_at}}</span></div>
                                                                                                        @if($cmt->comment_image != "null")
                                                                                                            <img src="http://127.0.0.1:8000/storage/{{ $cmt->comment_image }}" alt='{{ $cmt->comment_image }}'
                                                                                                                style='width:50%; display: block; margin-left: auto; margin-right: auto;'>
                                                                                                            <a>{{$cmt->comment_body}}</a>
                                                                                                        @else
                                                                                                            <a>{{$cmt->comment_body}}</a>
                                                                                                        @endif
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
                                                                                        <div hidden>
                                                                                            <div data-name="popover-content-custom-<?php echo $stp->id;?>_Stepper">
                                                                                                <button type="button" class="btn btn-primary btn-circle btn-xl" title="Image" data-bs-toggle="collapse" href="#collapseAddImage_Stepper"><i class="fa-solid fa-image"></i></button>
                                                                                                <button type="button" class="btn btn-primary btn-circle btn-xl" title="Video" data-bs-toggle="collapse" href="#collapseAddVideo_Stepper"><i class="fa-solid fa-video"></i></button>
                                                                                                <button type="button" class="btn btn-primary btn-circle btn-xl" title="Tips" data-bs-toggle="collapse" href="#collapseAddTips_Stepper"><i class="fa-solid fa-lightbulb"></i></button>
                                                                                            </div>
                                                                                        </div>
                                                                                        <a id="btn_popover_<?php echo $stp->id;?>_Stepper" class="btn btn-primary" data-bs-toggle="popover-custom" data-html="true" title="Attached" ><i class="fa-solid fa-paperclip"></i></a>
                                                                                    </div>
                                                                                    <div class="col-11">
                                                                                        <div class="input-group">
                                                                                            <input name="steps_id" class="form-control" value="<?php echo $stp->id; ?>" required hidden>
                                                                                            <input type="text" class="form-control" placeholder="Type your comment" name="comment_body" required>
                                                                                            <button type="submit" class="btn btn-primary">Send</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div id="accordionAtchStp">
                                                                                    <div class="collapse" id="collapseAddImage_Stepper" data-bs-parent="#accordionAtchStp">
                                                                                        <div class="container-fluid py-1">
                                                                                            <h7><i class="fa-solid fa-circle-info"></i> Maximum size image is 5 mb</h7>
                                                                                            <div class="input-group">
                                                                                                <img id="frame" src="http://127.0.0.1:8000/assets/NoImage.png" class="img-fluid d-block mx-auto" style="width:150px; border-radius:100%; border:3px solid #EB7736;"/>
                                                                                                <div class="row mt-2">
                                                                                                    <div class="col-md-3">
                                                                                                        <a onclick="clearImageComment()" class="btn btn-danger w-100"><i class="fa-solid fa-trash"></i> Reset</a>
                                                                                                    </div>
                                                                                                    <div class="col-md-9">
                                                                                                        <input class="form-control w-100" type="file" id="formFileComment" onchange="previewComment()" name="comment_image" accept="image/png, image/jpg, image/jpeg">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="collapse" id="collapseAddVideo_Stepper" data-bs-parent="#accordionAtchStp">
                                                                                        <div class="container-fluid py-1">
                                                                                            <h7><i class="fa-solid fa-circle-info"></i> Maximum size video is 5 mb</h7>
                                                                                            <div class="input-group">

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="collapse" id="collapseAddTips_Stepper" data-bs-parent="#accordionAtchStp">
                                                                                        <div class="container-fluid py-1">
                                                                                            <h7><i class="fa-solid fa-circle-info"></i> ...</h7>
                                                                                            <div class="input-group">

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div><!--End of accordion attached-->
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
                                            <form action="/detail/likes/<?php echo $data->id;?>" method="POST" >
                                                @csrf
                                                @php($l=0)
                                                @foreach($likesUser as $like)
                                                    @php($l++)
                                                @endforeach
                                                @if($l > 0)
                                                    <button class="btn btn-primary w-100 bg-transparent border-2" title="Dislike this recipe" type="submit"><i class="fa-solid fa-heart" style="color:#DE5667;"></i></button>
                                                @else
                                                    <button class="btn btn-primary w-100 bg-transparent border-2" title="Like this recipe" type="submit"><i class="fa-regular fa-heart" style="color:#DE5667;"></i></button>
                                                @endif
                                            </form>
                                        </div>
                                        <div class="col-md-3">
                                            <button class="btn btn-primary w-100 border-2" style="background:#B35387; border-color:#B35387;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-paperclip"></i></button>
                                            <ul class="dropdown-menu p-2" aria-labelledby="dropdownMenuButton1">
                                                @php($count = 0)
                                                    @foreach($list as $ls)
                                                    <form action="/detail/updateList/<?php echo $data->id; ?>" method="POST">
                                                    @csrf
                                                    @foreach($listRel as $lsr)
                                                        @if($lsr->list_id == $ls->id)
                                                            @php($count++)
                                                        @endif
                                                    @endforeach
                                                    @if($count == 0)
                                                        <li><input hidden name="list_name" value="{{$ls->list_name}}"><button class="dropdown-item" type="submit">{{$ls->list_name}}</button></li>
                                                    @else
                                                        <li><input hidden name="list_name" value="{{$ls->list_name}}"><button class="dropdown-item" type="submit"><i class="fa-solid fa-check" style="color:green;"></i> {{$ls->list_name}}</button></li>
                                                    @endif
                                                    </form>
                                                    @php($count = 0)
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <button class="btn btn-primary w-100 border-2" style="background:#00B6AB; border-color:#00B6AB;" onclick='printRecipe();' title="Print as PDF"><i class="fa-solid fa-print"></i> Print</button>
                                        </div>
                                    </div>
                                    <h5 class="mt-2">Ingredients</h5>
                                    <div class="container-fluid mb-2">
                                        <b>Required</b><br>
                                        @php($i=1)
                                        @foreach($ingredients as $ing)
                                            @if(($ing->recipe_id == $data->id)&&($ing->ingredients_type == "Required"))
                                                <a style="font-size:12px;">{{$ing->ingredients_vol}} ~ {{$ing->ingredients_name}}</a><br>
                                                @php($i++)
                                            @endif
                                        @endforeach

                                        <br><b>Optional</b><br>
                                        @php($i=1)
                                        @foreach($ingredients as $ing)
                                            @if(($ing->recipe_id == $data->id)&&($ing->ingredients_type == "Optional"))
                                                <a style="font-size:12px;">{{$ing->ingredients_vol}} ~ {{$ing->ingredients_name}}</a><br>
                                                @php($i++)
                                            @endif
                                        @endforeach
                                    </div>
                                    <hr>
                                    <h5>Contributors <i class="fa-solid fa-circle-info"></i></h5>
                                    <div class="container-fluid mb-2">
                                        <div class="row" style='height:90px;'>
                                        @foreach($user as $data2)
                                            @if($data->user_id == $data2->id)
                                            <div class="card border-gray m-2" style='min-width:40px; width:40px; border:none; background:transparent; margin-top:5px;' type='button'>
                                                <a href="">
                                                <img class="img logo rounded-circle mb-3" src="http://127.0.0.1:8000/storage/{{ $data2->image_url }}" alt='{{ $data2->image_url }}'  class="rounded-circle mr-1"
                                                    style='display: block; margin-left: auto; margin-right: auto; width:40px;'>
                                                <a style='font-size:11px; white-space: nowrap;  display: block; margin-left: auto; margin-right: auto; margin-top:-10px;' id="recipe_maker">{{$data2->username}}</a>
                                                </a>
                                            </div>
                                            @endif
                                        @endforeach
                                        </div>
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
                    <h3 class="mb-2">Similar Recipe <i class="fa-solid fa-circle-exclamation fa-2xs" type="button" data-bs-toggle="popover" title="Information" data-bs-content="Show others recipe with same main ingredients"></i></h3>
                    <div class="row">
                    @foreach($similar as $data)
                        @foreach($recipeId as $rcp)
                            @if(($data->recipe_visibility != 'Private')&&($rcp->id != $data->id))
                                @foreach($user as $data2)
                                @if($data->user_id == $data2->id)
                                <li class="card border-gray w-25 p-2 border m-3" style='min-width:250px;'>
                                    <img src="http://127.0.0.1:8000/storage/{{ $data->recipe_url }}?>" alt='<?php echo $data->recipe_name."_".$data->user_id;?>'
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
                                </li>
                                @endif
                                @endforeach
                            @endif
                        @endforeach
                    @endforeach
                    </div>
                </div>

                <div class='container-fluid mb-3 p-3'>
                    <h3 class="mb-2">Wanna Make Complete Dish <i class="fa-solid fa-circle-exclamation fa-2xs" type="button" data-bs-toggle="popover" title="Information" data-bs-content="Show different type of recipe to make full dished"></i></h3>
                    <div class="row">
                    @foreach($recipeId as $d)
                        @php($type = $d->recipe_type)
                        @php($id = $d->id)
                    @endforeach
                    @foreach($recipe as $data)
                        @if(($data->recipe_type != $type)&&($data->recipe_visibility != 'Private')&&($data->id != $id))
                            @foreach($user as $data2)
                            @if($data->user_id == $data2->id)
                            <li class="card border-gray w-25 p-2 border m-3" style='min-width:250px;'>
                                <img src="http://127.0.0.1:8000/storage/{{ $data->recipe_url }}?>" alt='<?php echo $data->recipe_name."_".$data->user_id;?>'
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
                            </li>
                            @endif
                            @endforeach
                        @endif
                    @endforeach
                    </div>
                </div>

                <div class='container-fluid mb-3 p-3'>
                    <h3 class="mb-2">You May Also Like <i class="fa-solid fa-circle-exclamation fa-2xs" type="button" data-bs-toggle="popover" title="Information" data-bs-content="Show others recipe with same country or level"></i></h3>
                    <div class="row">
                    @foreach($mayLikeRecipe as $data)
                        @if($data->recipe_visibility != 'Private')
                            @foreach($user as $data2)
                            @if($data->user_id == $data2->id)
                            <li class="card border-gray w-25 p-2 border m-3" style='min-width:250px;'>
                                <img src="http://127.0.0.1:8000/storage/{{ $data->recipe_url }}?>" alt='<?php echo $data->recipe_name."_".$data->user_id;?>'
                                    style='margin-top:-60px; width:50%; display: block; margin-left: auto; margin-right: auto;'>
                                <img src="http://127.0.0.1:8000/storage/{{ $data2->image_url }}" alt='{{ $data2->image_url }}'
                                    style='border-radius:100%; margin-top:-40px; margin-left:20px; width:40px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>
                                <img src="http://127.0.0.1:8000/assets/image/country/<?php echo $data->recipe_country;?>.png" alt='<?php echo $data->recipe_country.".png";?>' title='<?php echo $data->recipe_country;?>'
                                    style='border-radius:100%; width:40px; margin-top:30px; margin-left:200px; position:absolute; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>
                                <h5 style='font-size:16px; text-align:center;' id="recipe_name">{{$data->recipe_name}}</h5>
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
                                            <a style='font-size:15px; font-weight:bold; text-align:center;' id="recipe_time_spend">{{$data->recipe_time_spend}}</a>
                                            <p style='font-size:12px;'>min</p>
                                        </div>
                                        <div class='col-md-3'>
                                            <a style='font-size:15px; font-weight:bold; text-align:center;' id="recipe_cal">{{$data->recipe_calorie}}</a>
                                            <p style='font-size:12px;'>cal</p>
                                        </div>
                                        <div class='col-md-4'>
                                            <p style='font-size:12px; justify-content:center; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; line-clamp: 2; -webkit-box-orient: vertical;'>{{$data->recipe_main_ing}}</p>
                                        </div>
                                    </div>
                                </div>
                                <a class='btn btn-primary' href="{{ url('/detail/' . $data->id) }}"><i class="fa-solid fa-arrow-right"></i> Cook Now</a>
                            </li>
                            @endif
                            @endforeach
                        @endif
                    @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>

    @if(Session::has('success_message'))
        <div class="position-fixed bottom-0 end-0 p-4" style="z-index: 11">
        <div id="detail_toast" class="toast hide shadow rounded-top" role="alert" aria-live="assertive" aria-atomic="true">
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

    <!--Loading-->
    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/js/loading.js"></script>

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
            $('#detail_modal').modal('show');
            $('#detail_toast').toast('show');
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
		var recipeName = [
            @foreach($recipe as $data)<?php echo "'"; echo $data['recipe_name']; echo "',"; ?>@endforeach
            @foreach($user as $data)<?php echo "'@"; echo $data['username']; echo "',"; ?>@endforeach
        ];
		autocomplete(document.getElementById("searchInput"), recipeName);
    </script>

	</body>
</html>

