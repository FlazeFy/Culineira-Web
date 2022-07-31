<style>
    #communityBox{
        width:30%;
        background-position: center;
        background-repeat:no-repeat;
        position: relative;
        background-size: cover;
        background-color: black;
    }
    #communityTitle{
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        line-clamp: 2;
        -webkit-box-orient: vertical;
    }
    #community-holder{
        display: flex;
        flex-direction: row;
        max-height: 400px;
        overflow-y: scroll;
    }

    #member_image{
        min-width:40px;
        width:40px;
        border:none;
        background:transparent;
        margin-top:5px;
    }

    #scroll_contact{
        height:520px;
        display: flex;
        flex-direction: column;
        overflow-y: scroll;
        scrollbar-width: none;
    }

    .chat-messages{
        max-height:460px;
    }

    .chat-message-right #control-msg {
        padding : 4px;
        color : whitesmoke;
        text-align : center;
        visibility : hidden;
        opacity : 0;
        transition : 0.3s ease-in-out;
    }
    .chat-message-right:hover #control-msg {
        margin-top : 2px;
        visibility : visible;
        opacity : 1;
        transition-delay: 0.2s;
    }

    #headingCard{
        background: var(--background4);
        border-radius:6px;
    }
</style>

<div class="row">
    @foreach($userId as $data)
    <div class="col-md-3">
        <form action="/community/openChat/0" method="POST">
            @csrf
            <div class="container-fluid w-100 rounded p-2 mt-2" id="communityBox"
                style="background-image: linear-gradient(to right, #44a65e, #6ab87f);">
                <button type="submit" class="w-100 h-100 border-0 bg-transparent" title="See Comunity">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                        <div class="py-1">
                            <h6 class="mb-0 text-white float-start" id="communityTitle">Create Group &nbsp;</h6>
                            <span class="text-white float-start" style="font-size:11px;">Have discussion with you as the admin</span>
                        </div>
                    </div>
                    <div class="badge"></div>
                </div>
                </button>
            </div>
        </form>
        <div class="container-fluid rounded shadow mt-2 p-2 w-100" id="scroll_contact">
            @foreach($groupId as $g)
            <form action="/community/openChat/{{$g->id}}" method="POST">
                @csrf
                <div class="container-fluid w-100 rounded p-2 my-1" id="communityBox"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url('http://127.0.0.1:8000/storage/{{$g->groups_image}}');">
                    <button type="submit" class="w-100 h-100 border-0 bg-transparent" title="See Comunity">
                    <div class="d-flex justify-content-between">
                        <h6 class="mb-0 text-white" id="communityTitle">{{$g->groups_name}}</h6><br>
                        <div class="badge">{{$g->groups_type}}</div>
                    </div>
                    <a class="text-white float-start" style="font-size:11px;" id="communityTitle">
                        @php($i = 0)
                        @foreach($lastMsg as $lm)
                            @if(($lm->id == $g->id)&&($i == 0))
                                <b>{{$lm->username}}</b> ~ {{$lm->message_body}}
                                @php($i++)
                            @endif
                        @endforeach
                    </a>
                    </button>
                </div>
            </form>
            @endforeach
        </div>
    </div>
    <div class="col-md-9">
        <div class="container-fluid rounded shadow mt-2 p-2" style="height:600px; position: relative;">
            @php($count = 0)
            @foreach($groupId as $g)
                @if($g->id == session()->get('groupKey'))
                    <div class="container p-2 rounded shadow" style="background-image: linear-gradient(to right, #eb7336, #eb8d36);">
                        <h6 class="mb-1 text-white">{{$g->groups_name}}</h6>
                        <button class="btn btn-success bg-transparent border-0 float-end" data-bs-toggle="modal" data-bs-target="#editGroup"
                            title="Setting" style="margin-top:-20px;"><i class="fa-solid fa-gear"></i></button>
                        <div class="row">
                            @foreach($member as $m)
                            <div class="card border-gray mx-1" id='member_image' type='button'>
                                <a href="">
                                <img class="img logo rounded-circle" src="http://127.0.0.1:8000/storage/{{$m->image_url}}" alt='{{$m->image_url}}' title="{{$m->username}}" class="rounded-circle mr-1"
                                    style='display: block; margin-left: auto; margin-right: auto; width:40px;'>
                                </a>
                            </div>
                            @endforeach

                            <!--Edit groups-->
                            @include('community.form.edit')
                        </div>
                    </div>

                    <div class="chat-messages p-2" style="height:460px !important;" id="chat-messages-box">
                        @php($c=0)
                        @foreach($message as $msg)
                            @foreach($user as $u)
                                @if(($u->id == $msg->users_id)&&($msg->message_type != "notification")&&($msg->message_type != "forward-recipe"))
                                    <div class="chat-message-<?php if($u->username == session()->get('usernameKey')){echo "right ms-5 ps-5";}else{echo "left me-5 pe-5";}?> pb-4">
                                        <div>
                                            <img src="http://127.0.0.1:8000/storage/{{ $u->image_url }}" alt='{{ $u->image_url }}' class="rounded-circle mr-1 shadow" width="35" >
                                        </div>
                                        <div class="flex-shrink-1 rounded py-2 px-3 mx-2 shadow" style="<?php if($msg->users_id == $data->id){echo "border:2px #EB7336 solid;";}?>">
                                            <div class="font-weight-bold mb-1" style="color:#EB7336;">{{$u->username}}<span class="text-secondary" id="dateMsg"> {{$msg->created_at}}</span></div>
                                            @if($msg->message_type != "text")
                                                <img src="http://127.0.0.1:8000/storage/{{ $msg->message_type }}" alt='{{ $msg->message_type }}'
                                                    style='width:50%; display: block; margin-left: auto; margin-right: auto;'>
                                                <a>{{$msg->message_body}}</a>
                                            @else
                                                <a>{{$msg->message_body}}</a>
                                            @endif
                                        </div>
                                        @if($u->username == session()->get('usernameKey'))
                                        <div id='control-msg'>
                                            <form action="/community/unsendChat/{{$msg->id}}" method="POST">
                                                @csrf
											    <button class="btn btn-primary bg-transparent border-0 p-0" type='submit' title="Unsend message"><i class="fa-solid fa-trash text-danger fa-lg mx-2 my-4"></i></button>
                                            </form>
                                        </div>
                                        @endif
                                    </div>
                                    @php($c++)
                                @elseif(($u->id == $msg->users_id)&&($msg->message_type == "notification"))
                                    <div class="container w-50 px-5 mx-auto text-center d-block rounded">
                                        <a style="color:#EB7336; font-style:italic; font-size:14px;">- {{$u->username}} {{$msg->message_body}} -</a><br>
                                        <a class="text-secondary fst-italic" id="dateMsg">{{$msg->created_at}}</a>
                                    </div>
                                    @php($c++)
                                @elseif(($u->id == $msg->users_id)&&($msg->message_type == "forward-recipe"))
                                    @foreach($recipe as $r)
                                        @if($r->id == $msg->message_body)
                                            @foreach($user as $ru)
                                                @if($r->user_id == $ru->id)
                                                <div class="chat-message-<?php if($u->username == session()->get('usernameKey')){echo "right ms-5 ps-5 mt-4";}else{echo "left me-5 pe-5 mt-4";}?> pb-4">
                                                    <div>
                                                        <img src="http://127.0.0.1:8000/storage/{{ $u->image_url }}" alt='{{ $u->image_url }}' class="rounded-circle mr-1 shadow" width="35" >
                                                    </div>
                                                    <li class="card border-gray p-2 border m-3 shadow" style='width:300px;'>
                                                        <img src="http://127.0.0.1:8000/storage/{{ $r->recipe_url }}?>" alt='{{$r->recipe_url}}'
                                                            style='margin-top:-60px; width:50%; display: block; margin-left: auto; margin-right: auto;'>
                                                        <img src="http://127.0.0.1:8000/storage/{{ $ru->image_url }}" alt='{{ $ru->image_url }}'
                                                            style='border-radius:100%; margin-top:-40px; margin-left:20px; width:40px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>
                                                        <img src="http://127.0.0.1:8000/assets/image/country/<?php echo $r->recipe_country;?>.png" alt='<?php echo $r->recipe_country.".png";?>' title='<?php echo $r->recipe_country;?>'
                                                            style='border-radius:100%; width:40px; margin-top:40px; margin-left:220px; position:absolute; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>
                                                        <h5 style='font-size:16px; text-align:center;'>{{$r->recipe_name}}</h5>
                                                        <div class='container' id='headingCard' style='padding:5px;'>
                                                            <div class='row' style='justify-content:center; width:110%;'>
                                                                <div class='col-md-5'>
                                                                    <a style='font-size:12px; color:#5cb85c;'>{{$r->recipe_level}}</a>
                                                                </div>
                                                                <div class='col-md-5'>
                                                                    <a style='font-size:12px;'>{{$r->recipe_type}}</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class='container mt-2'>
                                                            <div class='row' style='justify-content:center; width:110%;'>
                                                                <div class='col-md-3'>
                                                                    <a style='font-size:15px; font-weight:bold; text-align:center;'>{{$r->recipe_time_spend}}</a>
                                                                    <p style='font-size:12px;'>min</p>
                                                                </div>
                                                                <div class='col-md-3'>
                                                                    <a style='font-size:15px; font-weight:bold; text-align:center;'>{{$r->recipe_calorie}}</a>
                                                                    <p style='font-size:12px;'>cal</p>
                                                                </div>
                                                                <div class='col-md-4'>
                                                                    <p style='font-size:12px; justify-content:center; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; line-clamp: 2; -webkit-box-orient: vertical;'>{{$r->recipe_main_ing}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class='btn btn-primary' href="{{ url('/detail/' . $r->id) }}"><i class="fa-solid fa-arrow-right"></i> Cook Now</a>
                                                    </li>
                                                    @if($u->username == session()->get('usernameKey'))
                                                    <div id='control-msg'>
                                                        <form action="/community/unsendChat/{{$msg->id}}" method="POST">
                                                            @csrf
                                                            <button class="btn btn-primary bg-transparent border-0 p-0" type='submit' title="Unsend message"><i class="fa-solid fa-trash text-danger fa-lg mx-2 my-4"></i></button>
                                                        </form>
                                                    </div>
                                                    @endif
                                                </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                    @php($c++)
                                @endif
                            @endforeach
                        @endforeach
                    </div>

                    <form action="/community/sendChat/{{$g->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class='input-group' style="position:absolute; bottom:10px; width:95%;">
                            <div hidden>
                                <div data-name="popover-content-message">
                                    <button type="button" class="btn btn-primary btn-circle btn-xl" title="Image" data-bs-toggle="modal" data-bs-target="#attachImage"><i class="fa-solid fa-image"></i></button>
                                    <button type="button" class="btn btn-primary btn-circle btn-xl" title="Video"><i class="fa-solid fa-video"></i></button>
                                    <button type="button" class="btn btn-primary btn-circle btn-xl" title="Tips"><i class="fa-solid fa-lightbulb"></i></button>
                                </div>
                            </div>
                            <a class='btn btn-primary' id="button-content-message" data-bs-toggle="popover-custom" data-html="true" title="Attached"><i class='fa-solid fa-paperclip'></i></a>
                            <input type='text' class='form-control' placeholder='Type your message...' name='message_body'>
                            <button class='btn btn-success' type='submit'><i class='fa-solid fa-paper-plane'></i> Send</button>
                        </div>
                        <!--Attach-->
                        @include('others.attachImage')
                    </form>
                    @php($count++)
                @endif
            @endforeach

            <!--Initial state.-->
            @if(($count == 0)&&(session()->get('groupKey') != "0"))
                <img id="frame3" src="http://127.0.0.1:8000/assets/storyset/Discussion.png" class="img-fluid mx-auto d-block mt-5 pt-3" style="width:200px;"/>
                <h2 class="text-center mt-3 mx-3" style="color:#Eb7336;">Welcome to community</h2>
                <h6 class="text-center mt-1 mx-3">In this feature, you can have a discussion with other user around the world</h6>
                <h7 class="text-center mt-3 mx-3 text-secondary d-block">I'm new with this feature &nbsp; <a class="btn btn-link text-decoration-none text-success m-0 p-0">See how to use</a></h7>
            @endif

            <!--Create group.-->
            @include('community.form.create')
        </div>
    </div>
    @endforeach
</div>
