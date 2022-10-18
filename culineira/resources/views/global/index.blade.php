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

            .card {
        display: inline-block;
        position: relative;
        border-radius: 6px;
        background: #fff;
        width: 100%;
    }

    .category.text-primary{
        color:#EB7336 !important;
        font-size:14px !important;
    }

.card .card-image {
    height: 60%;
    position: relative;
    overflow: hidden;
    margin-left: 15px;
    margin-right: 15px;
    margin-top: -30px;
    border-radius: 6px;
}

.card .card-image img {
    width: 100%;
    height: 100%;
    border-radius: 6px;
    pointer-events: none;
}

.card .card-image .card-caption {
    position: absolute;
    bottom: 15px;
    left: 15px;
    color: #fff;
    font-size: 1.3em;
    text-shadow: 0 2px 5px rgba(33, 33, 33, 0.5);
}

.card img {
    width: 100%;
    height: auto;
}

.img-raised {
    box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}

.card .ftr {
    margin-top: 15px;
}

.card .ftr div {
    display: inline-block;
}

.card .ftr .author {
    color: #888;
}

.card .ftr .stats {
    float: right;
    line-height: 30px;
}

.card .ftr .stats {
    position: relative;
    top: 1px;
    font-size: 14px;
}


/* ============ Card Table ============ */

.table {
    margin-bottom: 0px;
}

.card .table {
    padding: 15px;
}

.card .table-primary {
    background: linear-gradient(60deg, #ab47bc, #7b1fa2);
}

.card .table-info {
    background: linear-gradient(60deg, #26c6da, #0097a7);
}

.card .table-success {
    background: linear-gradient(60deg, #66bb6a, #388e3c);
}

.card .table-warning {
    background: linear-gradient(60deg, #ffa726, #f57c00);
}

.card .table-danger {
    background: linear-gradient(60deg, #ef5350, #d32f2f);
}

.card .table-rose {
    background: linear-gradient(60deg, #ec407a, #c2185b);
}

.card [class*="table-"] {
    color: #FFFFFF;
    border-radius: 6px;
}

.card [class*="table-"] .card-caption a,
.card [class*="table-"] .card-caption,
.card [class*="table-"] .icon i {
    color: #FFFFFF;
}

.card [class*="table-"] .icon i {
    border-color: rgba(255, 255, 255, 0.25);
}

.card [class*="table-"] .author a,
.card [class*="table-"] .ftr .stats,
.card [class*="table-"] .category,
.card [class*="table-"] .card-description {
    color: rgba(255, 255, 255, 0.8);
}

.card [class*="table-"] .author a:hover,
.card [class*="table-"] .author a:focus,
.card [class*="table-"] .author a:active {
    color: #FFFFFF;
}

.card [class*="table-"] h1 small,
.card [class*="table-"] h2 small,
.card [class*="table-"] h3 small {
    color: rgba(255, 255, 255, 0.8);
}


/* ============ Card Blog ============ */

.card-blog {
    margin-top: 30px;
}

.card-blog .card-caption {
    margin-top: 5px;
}

.card-blog .card-image + .category {
    margin-top: 20px;
}

.card-raised {
    box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}

/* ============ Card Profile ============ */

.card-profile {
    margin-top: 30px;
    text-align: center;
}


/* ============ Card Category ============ */

.category {
    position: relative;
    line-height: 0;
    margin: 15px 0;
}

.card .category-social .fa {
    font-size: 24px;
    position: relative;
    margin-top: -4px;
    top: 2px;
    margin-right: 5px;
}


/* ============ Card Author ============ */

.card .author .avatar {
    width: 36px;
    height: 36px;
    overflow: hidden;
    border-radius: 50%;
    margin-right: 5px;
}

.card .author a {
    color: #333;
    text-decoration: none;
}

.card .author a .ripple-cont {
    display: none;
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
                                    <a class="nav-link" href="" role="button" data-bs-toggle="collapse" data-bs-target="#globalCollapse" aria-expanded="false" aria-controls="CollapseExample2" >Global</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="collapse show" id="globalCollapse" data-bs-parent="#accordionCommunity">
                    <!--Global-->
                    <div class="mt-5">
                        <!--Control section.-->
                        @include('others.control_community')
                    </div>

                    <div class="cards-1 section-gray">
                        <div class="container">
                            <div class="row" id="global_list_holder">
                                @php($i = 0)
                                @foreach($global as $gl)
                                    @if($i % 2 == 0)
                                        <div class="col-md-4">
                                            @include('global.global_content')
                                            @php($i++)
                                    @else
                                        @if($gl->cat == 2)
                                            @if($gl->id != session()->get('idKey'))
                                                @include('global.global_content')
                                                @php($i++)
                                            @endif
                                        @else
                                            @include('global.global_content')
                                            @php($i++)
                                        @endif
                                    @endif

                                    @if($i % 2 == 0)
                                        </div>
                                    @endif
                                @endforeach

                                <!--
                                <div class="card mb-4">
                                    <div class="table table-danger">
                                        <h5 class="category-social">
                                                    <i class="fa fa-newspaper-o"></i> News
                                                </h5>
                                        <h4 class="card-caption">
                                                    <a href="#">"Consectetur odio feugiat"</a>
                                                </h4>
                                        <p class="card-description"> Lorem ipsum dolor sit amet, consectetur adipis cingelit. Etiam lacinia elit et placerat finibus.</p>
                                        <div class="ftr text-center"> <a href="#" class="btn btn-white btn-round">Read More</a> </div>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
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
    </script>

	</body>
</html>

