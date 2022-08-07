<div class="row">
    <div class="col-md">
        <h5>Item 1</h5>
        <div class="container-fluid rounded border-gray border p-2 mb-3 text-center">
            @if(count($compare1) == 0)
                <img src="{{asset('assets/storyset/Empty2.png')}}" alt='failed.png' class="w-50"><br>
                <h5>You haven't select any recipe yet</h5>
            @else
                @foreach($compare1 as $c1)
                    <h5>{{$c1->recipe_name}}</h5>
                    <span class="container border-0 text-secondary rounded-pill m-2" style="
                        <?php
                            if($c1->recipe_level == "Beginner"){echo"background: rgba(5, 240, 44, 0.2);";}
                            else if($c1->recipe_level == "Intermediate"){echo"background: rgba(245, 164, 2, 0.2);";}
                            else if($c1->recipe_level == "Expert"){echo"background: rgba(255, 0, 0, 0.2);";}
                        ?> font-size:15px;">{{$c1->recipe_level}}
                    </span>
                    <span class="container border-0 text-secondary rounded-pill ml-1" style="font-size:15px;">
                        <a style="color: #d9534f;"><i class="fa-solid fa-heart"></i> {{count($likesId1)}}</a>
                        <a class="ms-3">
                            <button class="btn btn-primary bg-transparent border-0 p-0  text-success" style="margin-top:-5px;" title="Forward to group" id="forwardDD" data-bs-toggle="dropdown">
                                <i class="fa-solid fa-share"></i> Forward</button>
                            <ul class="dropdown-menu p-2" aria-labelledby="forwardDD">
                                @php($count = 0)
                                    @foreach($groupId as $g)
                                    <form action="" method="POST">
                                        @csrf
                                        <li><input hidden name="group_id" value="{{$g->id}}"><button class="dropdown-item" type="submit">{{$g->groups_name}}</button></li>
                                    </form>
                                    @php($count = 0)
                                @endforeach
                            </ul>
                        </a>
                    </span>

                    <!--Recipe profile-->
                    <img src="http://127.0.0.1:8000/storage/{{ $c1->recipe_url }}?>" alt='<?php echo $c1->recipe_name."_".$c1->user_id;?>'
                        style='width:30%; display: block; margin-left: auto; margin-right: auto;'><hr>
                    <h6 style="font-size:14px;"><span class="text-secondary">Type :</span> {{$c1->recipe_type}}</h6>
                    <h6 style="font-size:14px;"><span class="text-secondary">Country :</span> {{$c1->recipe_country}}</h6>
                    <h6 style="font-size:14px;"><span class="text-secondary">Time Spend :</span> {{$c1->recipe_time_spend}} min</h6>
                    <h6 style="font-size:14px;"><span class="text-secondary">Calorie :</span> {{$c1->recipe_calorie}} cal</h6><br>
                    <h6 style="font-size:14px;">Main Ingredients <i class="fa-solid fa-circle-info"></i></h6>
                    <h7 style="font-size:13px;">{{$c1->recipe_main_ing}}</h7>

                    <!--Recipe Ingredients-->
                    <hr>
                    <h5 class="mt-2">Ingredients</h5>
                    <b>Required</b><br>
                    @php($i=1)
                    @foreach($ingredients as $ing)
                        @if(($ing->recipe_id == $c1->id)&&($ing->ingredients_type == "Required"))
                            <a style="font-size:12px;">{{$ing->ingredients_vol}} ~ {{$ing->ingredients_name}}</a><br>
                            @php($i++)
                        @endif
                    @endforeach

                    <!--Recipe Steps-->
                    <br><b>Optional</b><br>
                    @php($i=1)
                    @foreach($ingredients as $ing)
                        @if(($ing->recipe_id == $c1->id)&&($ing->ingredients_type == "Optional"))
                            <a style="font-size:12px;">{{$ing->ingredients_vol}} ~ {{$ing->ingredients_name}}</a><br>
                            @php($i++)
                        @endif
                    @endforeach

                    <hr>
                    <h5 class="mt-2">Steps</h5>
                    @php($i = 1)
                    @foreach($steps as $dataStp)
                        @if($dataStp->recipe_id == $c1->id)
                            <p class='text-secondary'><b>{{$i}}. </b> {{$dataStp->steps_body}}</p>
                            @php($i++)
                        @endif
                    @endforeach

                    <!--Recipe created data-->
                    <hr>
                    <h5>Contributors <i class="fa-solid fa-circle-info"></i></h5>
                    <div class="container-fluid mb-2">
                        <!--Contributor-->
                        <div class="row" style='height:90px;'>
                        @foreach($user as $data2)
                            @if($c1->user_id == $data2->id)
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

                    <h6 style="font-size:14px;">Created On</h6>
                    <h7 style="font-size:13px;" id="recipe_created_at">{{$c1->created_at}}</h7>
                    <h6 style="font-size:14px;">Updated On</h6>
                    <h7 style="font-size:13px;" id="recipe_updated_at">{{$c1->updated_at}}</h7>
                @endforeach
            @endif
        </div>
    </div>
    <div class="col-md">
        <h5>Item 2</h5>
        <div class="container-fluid rounded border-gray border p-2 mb-3 text-center">
            @if(count($compare2) == 0)
                <img src="{{asset('assets/storyset/Empty2.png')}}" alt='failed.png' class="w-50"><br>
                <h5>You haven't select any recipe yet</h5>
            @else
                @foreach($compare2 as $c2)
                    <h5>{{$c2->recipe_name}}</h5>
                    <span class="container border-0 text-secondary rounded-pill m-2" style="
                        <?php
                            if($c2->recipe_level == "Beginner"){echo"background: rgba(5, 240, 44, 0.2);";}
                            else if($c2->recipe_level == "Intermediate"){echo"background: rgba(245, 164, 2, 0.2);";}
                            else if($c2->recipe_level == "Expert"){echo"background: rgba(255, 0, 0, 0.2);";}
                        ?> font-size:15px;">{{$c2->recipe_level}}
                    </span>
                    <span class="container border-0 text-secondary rounded-pill ml-1" style="font-size:15px;">
                        <a style="color: #d9534f;"><i class="fa-solid fa-heart"></i> {{count($likesId1)}}</a>
                        <a class="ms-3">
                            <button class="btn btn-primary bg-transparent border-0 p-0  text-success" style="margin-top:-5px;" title="Forward to group" id="forwardDD" data-bs-toggle="dropdown">
                                <i class="fa-solid fa-share"></i> Forward</button>
                            <ul class="dropdown-menu p-2" aria-labelledby="forwardDD">
                                @php($count = 0)
                                    @foreach($groupId as $g)
                                    <form action="" method="POST">
                                        @csrf
                                        <li><input hidden name="group_id" value="{{$g->id}}"><button class="dropdown-item" type="submit">{{$g->groups_name}}</button></li>
                                    </form>
                                    @php($count = 0)
                                @endforeach
                            </ul>
                        </a>
                    </span>

                    <!--Recipe profile-->
                    <img src="http://127.0.0.1:8000/storage/{{ $c2->recipe_url }}?>" alt='<?php echo $c2->recipe_name."_".$c2->user_id;?>'
                        style='width:30%; display: block; margin-left: auto; margin-right: auto;'><hr>
                    <h6 style="font-size:14px;"><span class="text-secondary">Type :</span> {{$c2->recipe_type}}</h6>
                    <h6 style="font-size:14px;"><span class="text-secondary">Country :</span> {{$c2->recipe_country}}</h6>
                    <h6 style="font-size:14px;"><span class="text-secondary">Time Spend :</span> {{$c2->recipe_time_spend}} min</h6>
                    <h6 style="font-size:14px;"><span class="text-secondary">Calorie :</span> {{$c2->recipe_calorie}} cal</h6><br>
                    <h6 style="font-size:14px;">Main Ingredients <i class="fa-solid fa-circle-info"></i></h6>
                    <h7 style="font-size:13px;">{{$c2->recipe_main_ing}}</h7>

                    <!--Recipe Ingredients-->
                    <hr>
                    <h5 class="mt-2">Ingredients</h5>
                    <b>Required</b><br>
                    @php($i=1)
                    @foreach($ingredients as $ing)
                        @if(($ing->recipe_id == $c2->id)&&($ing->ingredients_type == "Required"))
                            <a style="font-size:12px;">{{$ing->ingredients_vol}} ~ {{$ing->ingredients_name}}</a><br>
                            @php($i++)
                        @endif
                    @endforeach

                    <!--Recipe Steps-->
                    <br><b>Optional</b><br>
                    @php($i=1)
                    @foreach($ingredients as $ing)
                        @if(($ing->recipe_id == $c2->id)&&($ing->ingredients_type == "Optional"))
                            <a style="font-size:12px;">{{$ing->ingredients_vol}} ~ {{$ing->ingredients_name}}</a><br>
                            @php($i++)
                        @endif
                    @endforeach

                    <hr>
                    <h5 class="mt-2">Steps</h5>
                    @php($i = 1)
                    @foreach($steps as $dataStp)
                        @if($dataStp->recipe_id == $c2->id)
                            <p class='text-secondary'><b>{{$i}}. </b> {{$dataStp->steps_body}}</p>
                            @php($i++)
                        @endif
                    @endforeach

                    <!--Recipe created data-->
                    <hr>
                    <h5>Contributors <i class="fa-solid fa-circle-info"></i></h5>
                    <div class="container-fluid mb-2">
                        <!--Contributor-->
                        <div class="row" style='height:90px;'>
                        @foreach($user as $data2)
                            @if($c2->user_id == $data2->id)
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

                    <h6 style="font-size:14px;">Created On</h6>
                    <h7 style="font-size:13px;" id="recipe_created_at">{{$c2->created_at}}</h7>
                    <h6 style="font-size:14px;">Updated On</h6>
                    <h7 style="font-size:13px;" id="recipe_updated_at">{{$c2->updated_at}}</h7>
                @endforeach
            @endif
        </div>
    </div>
</div>
