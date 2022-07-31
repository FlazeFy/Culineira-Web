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
                                            <img src="http://127.0.0.1:8000/storage/{{ $u->image_url }}" alt='{{ $u->image_url }}' class="rounded-circle mx-1" width="35" >
                                        </div>
                                        <div class="flex-shrink-1 rounded py-2 px-3 mr-3 shadow" style="<?php if($cmt->users_id == $data->user_id){echo "border:2px #EB7336 solid;";}?>">
                                            <div class="font-weight-bold mb-1" style="color:#EB7336;">{{$u->username}}<span class="text-secondary" id="dateMsg"> {{$cmt->created_at}}</span></div>
                                            @if($cmt->comment_image != "null")
                                                <img src="http://127.0.0.1:8000/storage/{{ $cmt->comment_image }}" alt='{{ $cmt->comment_image }}'  class="rounded mr-1"
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
                                    <button type="button" class="btn btn-primary btn-circle btn-xl" title="Image" data-bs-toggle="modal" data-bs-target="#attachImage-tls-{{$stp->id}}"><i class="fa-solid fa-image"></i></button>
                                    <button type="button" class="btn btn-primary btn-circle btn-xl" title="Video" ><i class="fa-solid fa-video"></i></button>
                                    <button type="button" class="btn btn-primary btn-circle btn-xl" title="Tips"><i class="fa-solid fa-lightbulb"></i></button>
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
                    <!--Attach-->
                    <div class="modal fade" id="attachImage-tls-{{$stp->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Attach Image</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img id="frameMsg" src="http://127.0.0.1:8000/assets/NoImage.png" class="img-fluid d-block mx-auto my-2" style="width:150px; border-radius:100%; border:3px solid #EB7736;"/>
                                <a onclick="clearImageMsg()" class="btn btn-danger w-50 my-3 d-block mx-auto"><i class="fa-solid fa-trash"></i> Reset</a>
                                <div class="file-drop-area">
                                    <span class="btn btn-primary mx-3">Choose files</span>
                                    <span style="color:#EB7336;">or drag and drop files here</span>
                                    <input class="file-input" type="file" id="formFileImg" onchange="previewMsg()" name="image" multiple accept="image/png, image/jpg, image/jpeg">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <h7><i class="fa-solid fa-circle-info"></i> Maximum image size is 5 mb (jpg, png, jpeg)</h7>
                            </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!--End of card.-->
    @php($i++)
    @endif
@endforeach

<script>
    //Image upload preview.
    function previewMsg() {
        frameMsg.src = URL.createObjectURL(event.target.files[0]);
    }
    function clearImageMsg() {
        document.getElementById('formFileImg').value = null;
        frameMsg.src = "http://127.0.0.1:8000/assets/NoImage.png";
    }
</script>
