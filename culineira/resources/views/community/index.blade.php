<!DOCTYPE html>
<html>
    <head>
    <title>Culineira | Community</title>
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
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/assets/css/attach.css"/>

    <!-- Jquery -->
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

        <!--Source file.-->

		<style>
            :root {
                --prm-color: #EB7336;
                --prm-gray: #b1b1b1;
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
                @include('others.miniprofile')

                <!--Main Navbar.-->
                <ul class="list-unstyled components mb-3">
                    <li>
                        <a href="{{ url('/recipe') }}"><i class="fa-solid fa-book"></i> Recipes</a>
                    </li>
                    <li>
                        <a href="{{ url('/kitchen') }}"><i class="fa-solid fa-kitchen-set"></i> My Kitchen</a>
                    </li>
                    <li  class="active">
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
        <div id="content" class="px-5 pt-3" style='width:100%; max-height: calc(90vh - 140px); overflow-x: auto;'>
            <div class="accordion" id="accordionCommunity">
                <!--Secondary Navbar.-->
                <nav class="navbar navbar-expand-lg navbar-light mb-2" style='background: rgba(60, 60, 60, 0.4); position:sticky; top: 0; z-index:100;'>
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
                                    <a class="nav-link" href="" role="button" data-bs-toggle="collapse" data-bs-target="#mycommunityCollapse" aria-expanded="false" aria-controls="CollapseExample2">My Community</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="" role="button" data-bs-toggle="collapse" data-bs-target="#globalCollapse" aria-expanded="false" aria-controls="CollapseExample2" >Global</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="collapse show" id="mycommunityCollapse" data-bs-parent="#accordionCommunity">
                    <!--My Community-->
                    @include('community.mycommunity')
                </div>

                <div class="collapse show" id="globalCollapse" data-bs-parent="#accordionCommunity">
                    <!--Global-->
                    @include('community.global')
                </div>

            </div><!--End of accordion-->

        </div>
    </div>

    <!--Modal validation-->
    @include('popup.failed')
    @include('popup.success')

    <!--Others CDN.-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!--Loading-->
    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
    <!-- <script src="http://127.0.0.1:8000/assets/js/loading.js"></script> --> <!--Loading only when open the page, not the message too-->
    <script src="http://127.0.0.1:8000/assets/js/loading-message.js"></script>

    <!--Sidebar-->
    <script src="http://127.0.0.1:8000/assets/js/sidebar.js"></script>

    <!--Dark & Light Mode-->
    <script src="http://127.0.0.1:8000/assets/js/dark-light-mode.js"></script>

    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
        })

        //Image upload preview.
        function preview() {
            frame.src = URL.createObjectURL(event.target.files[0]);
        }
        function clearImage() {
            document.getElementById('formFile').value = null;
            frame.src = "http://127.0.0.1:8000/assets/NoImage.png";
        }

        //Attach Image upload
        $(document).on('change', '.file-input', function() {
            var filesCount = $(this)[0].files.length;
            var textbox = $(this).prev();
            if (filesCount === 1) {
                var fileName = $(this).val().split('\\').pop();
                textbox.text(fileName);
            } else {
                textbox.text(filesCount + ' files selected');
            }
        });

        //Popover attached
        var options = {
            html: true,
            sanitize: false,
            content: $('[data-name="popover-content-message"]')
        }
        var exampleEl = document.getElementById('button-content-message')
        var popover = new bootstrap.Popover(exampleEl, options);

    </script>

	</body>
</html>

