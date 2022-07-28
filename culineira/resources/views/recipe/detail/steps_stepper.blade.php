<h5 class="mt-2">How to make</h5>
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

