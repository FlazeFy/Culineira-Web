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
        height:550px;
        display: flex;
        flex-direction: column;
        overflow-y: scroll;
        scrollbar-width: none;
    }
</style>

<div class="row">
    @foreach($userId as $data)
    <div class="col-md-3">
        <div class="container-fluid rounded shadow mt-2 p-2 w-100" id="scroll_contact">
            @foreach($groupId as $g)
            <form action="/community/openChat/{{$g->id}}" method="POST">
                @csrf
                <div class="container-fluid w-100 rounded p-2 my-1" id="communityBox"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url('http://127.0.0.1:8000/storage/ZwoKAcQljcJUH7vO1NncRMl1YJ4QoyovJDXfgXHt.jpg');">
                    <button type="submit" class="w-100 h-100 border-0 bg-transparent" title="See Comunity">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                            <div class="">
                                <h6 class="mb-0 text-white" id="communityTitle">{{$g->groups_name}}</h6>
                                <span class="text-white" style="font-size:11px;">Last message...</span>
                            </div>
                        </div>
                        <div class="badge">{{$g->groups_type}}</div>
                    </div>
                    </button>
                </div>
            </form>
            @endforeach
        </div>
    </div>
    <div class="col-md-9">
        <div class="container-fluid rounded shadow mt-2 p-2" style="height:550px; position: relative;">
            @foreach($groupId as $g)
                @if($g->id == session()->get('communityKey'))
                <div class="container p-2 rounded shadow" style="background-image: linear-gradient(to right, #eb7336, #eb8d36);">
                    <h6 class="mb-1 text-white">{{$g->groups_name}}</h6>
                    <button class="btn btn-success bg-transparent border-0 float-end" title="Setting" style="margin-top:-20px;"><i class="fa-solid fa-gear"></i></button>
                    <div class="row">
                        @foreach($member as $m)
                        <div class="card border-gray mx-1" id='member_image' type='button'>
                            <a href="">
                            <img class="img logo rounded-circle" src="http://127.0.0.1:8000/storage/{{$m->image_url}}" alt='{{$m->image_url}}' title="{{$m->username}}" class="rounded-circle mr-1"
                                style='display: block; margin-left: auto; margin-right: auto; width:40px;'>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="position-relative">
                    <div class="chat-messages p-2" style="height:420px !important;">
                        @php($c=0)
                        @foreach($message as $msg)
                            @foreach($user as $u)
                                @if($u->id == $msg->users_id)
                                <div class="chat-message-<?php if($u->username == session()->get('usernameKey')){echo "right";}else{echo "left";}?> pb-4">
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
                                </div>
                                @php($c++)
                                @endif
                            @endforeach
                        @endforeach
                    </div>
                </div>
                <form action="/community/sendChat/{{$g->id}}" method="POST">
                    @csrf
                    <div class='input-group' style="position:absolute; bottom:10px; width:95%;">
                        <a class='btn btn-primary'><i class='fa-solid fa-paperclip'></i></a>
                        <input type='text' class='form-control' placeholder='Type your message' name='message_body'>
                        <button class='btn btn-success' type='submit'><i class='fa-solid fa-paper-plane'></i> Send</button>
                    </div>
                </form>
                @endif
            @endforeach
        </div>
    </div>
    @endforeach
</div>
