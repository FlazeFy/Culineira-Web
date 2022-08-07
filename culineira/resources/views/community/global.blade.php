<style>
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

<div class="col-md-12">

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
                            @include('community.global_content')
                            @php($i++)
                    @else
                        @if($gl->cat == 2)
                            @if($gl->id != session()->get('idKey'))
                                @include('community.global_content')
                                @php($i++)
                            @endif
                        @else
                            @include('community.global_content')
                            @php($i++)
                        @endif
                    @endif

                    @if($i % 2 == 0)
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>

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
