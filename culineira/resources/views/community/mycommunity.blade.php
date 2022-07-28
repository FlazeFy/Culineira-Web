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
    <div class="col-md-3">
        <div class="container-fluid rounded shadow mt-2 p-2 w-100" id="scroll_contact">
            @foreach($groupId as $g)
            <div class="container-fluid w-100 rounded p-2 my-1" id="communityBox"
                style="background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url('http://127.0.0.1:8000/storage/ZwoKAcQljcJUH7vO1NncRMl1YJ4QoyovJDXfgXHt.jpg');">
                <a type="button" class="w-100 h-100" title="See Comunity">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                        <div class="">
                            <h6 class="mb-0 text-white" id="communityTitle">{{$g->groups_name}}</h6>
                            <span class="text-white" style="font-size:11px;">Last message...</span>
                        </div>
                    </div>
                    <div class="badge">{{$g->groups_type}}</div>
                </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <div class="col-md-9">
        <div class="container-fluid rounded shadow mt-2 p-2" style="height:550px; position: relative;">
            <div class="container p-2 rounded shadow" style="background-image: linear-gradient(to right, #eb7336, #eb8d36);">
                <h6 class="mb-1 text-white">groups name</h6>
                <button class="btn btn-success bg-transparent border-0 float-end" title="Setting" style="margin-top:-20px;"><i class="fa-solid fa-gear"></i></button>
                <div class="row">
                    <div class="card border-gray mx-1" id='member_image' type='button'>
                        <a href="">
                        <img class="img logo rounded-circle" src="http://127.0.0.1:8000/storage/b8TEiCQkqsbVGY4LihhGA0KAMNZQOuHvLJvd1Y33.jpg" alt='b8TEiCQkqsbVGY4LihhGA0KAMNZQOuHvLJvd1Y33.jpg'  class="rounded-circle mr-1"
                            style='display: block; margin-left: auto; margin-right: auto; width:40px;'>
                        </a>
                    </div>
                </div>
            </div>
            <div class="position-relative">
                <div class="chat-messages p-2" style="height:420px !important;">
                    <div class="chat-message-right pb-4">
                        <div>
                            <img src="http://127.0.0.1:8000/storage/b8TEiCQkqsbVGY4LihhGA0KAMNZQOuHvLJvd1Y33.jpg" alt='' class="rounded-circle mr-1" width="35" >
                        </div>
                        <div class="flex-shrink-1 rounded py-2 px-3 mx-2 shadow">
                            <div class="font-weight-bold mb-1" style="color:#EB7336;">Test<span class="text-secondary" id="dateMsg"> datetime</span></div>
                            <a>Lorem ipsum</a>
                        </div>
                    </div>
                    <div class="chat-message-left pb-4">
                        <div>
                            <img src="http://127.0.0.1:8000/storage/b8TEiCQkqsbVGY4LihhGA0KAMNZQOuHvLJvd1Y33.jpg" alt='' class="rounded-circle mr-1" width="35" >
                        </div>
                        <div class="flex-shrink-1 rounded py-2 px-3 mx-2 shadow">
                            <div class="font-weight-bold mb-1" style="color:#EB7336;">Test<span class="text-secondary" id="dateMsg"> datetime</span></div>
                            <img src="http://127.0.0.1:8000/storage/b8TEiCQkqsbVGY4LihhGA0KAMNZQOuHvLJvd1Y33.jpg" alt='http://127.0.0.1:8000/storage/b8TEiCQkqsbVGY4LihhGA0KAMNZQOuHvLJvd1Y33.jpg'  class="rounded mr-1"
                                style='width:140px; display: block; margin-left: auto; margin-right: auto;'>
                            <a>Lorem?</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class='input-group' style="position:absolute; bottom:10px; width:95%;">
                <a class='btn btn-primary'><i class='fa-solid fa-paperclip'></i></a>
                <input type='text' class='form-control' placeholder='Type your message' name='body' required>
                <button class='btn btn-success' type='submit'><i class='fa-solid fa-paper-plane'></i> Send</button>
            </div>
        </div>
    </div>
</div>
