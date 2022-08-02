@if($gl->cat == 1)
    <div class="card card-blog mb-4">
        <div class="card-image">
            <a href="#"> <img class="img" src="http://127.0.0.1:8000/storage/{{$gl->image}}" >
                <div class="card-caption shadow">{{$gl->name}}</div>
            </a>
            <div class="ripple-cont"></div>
        </div>
        <div class="table">
            <h6 class="category text-success">
                @if($gl->context2 == "Public")
                    <i class="fa-solid fa-lock-open"></i>
                @else
                    <i class="fa-solid fa-lock"></i>
                @endif
                {{$gl->context2}}
            </h6>
            <a class="float-end" style="position:relative; margin-top:-30px;"> Created : {{date('m/d/Y', strtotime($gl->created_at))}}</a>
            <p class="card-description">{{$gl->description}}</p>
            <div class="ftr">
                <div class="author">
                    <a href="#"> <img src="http://127.0.0.1:8000/storage/{{$gl->image2}}" alt="..." class="avatar img-raised"> <span>{{$gl->context}}</span> </a>
                </div>
                <div class="stats"> <i class="fa-solid fa-people-group"></i> 10 Member </div>
            </div>
        </div>
    </div>
@else
    <div class="card mb-4">
        <div class="table">
            <h6 class="category text-primary"><i class="fa fa-globe "></i> {{$gl->context}}</h6>
            <div class='row' style='justify-content:center;'>
                <div class='col-md-4'>
                    <a style='font-size:15px; font-weight:bold; text-align:center;'>25</a>
                    <a style='font-size:12px;'>Following</a>
                </div>
                <div class='col-md-4'>
                    <a style='font-size:15px; font-weight:bold; text-align:center;'>300</a>
                    <a style='font-size:12px;'>Followers</a>
                </div>
                <div class='col-md-4'>
                    <a style='font-size:15px; font-weight:bold; text-align:center;'>3</a>
                    <a style='font-size:12px;'>Recipes</a>
                </div>
            </div>
            <div class="ftr">
                <div class="author">
                    <a href="#"> <img src="http://127.0.0.1:8000/storage/{{$gl->image}}" alt="" class="avatar img-raised"> <span>{{$gl->name}}</span>
                        <div class="ripple-cont">
                            <div class="ripple ripple-on ripple-out" style="left: 574px; top: 364px; background-color: rgb(60, 72, 88); transform: scale(11.875);"></div>
                        </div>
                    </a>
                </div>
                <div class="stats"> Joined : {{date('m/d/Y', strtotime($gl->created_at))}}</div>
            </div>
            <div class="row mt-4 mx-1">
                <div class="col-md-6">
                    <button class="btn btn-primary bg-transparent w-100" style="color:#EB4776;">Follow</button>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-info w-100 text-white" style="background:#00B6AB; border-color:#00B6AB;"><i class="fa-solid fa-arrow-right"></i> View</button>
                </div>
            </div>
        </div>
    </div>
@endif
