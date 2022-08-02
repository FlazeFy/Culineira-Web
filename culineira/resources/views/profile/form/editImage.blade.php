<div class="card-body">
    <div class="d-flex flex-column align-items-center text-center">
        <form action="/profile/updateImage" method="POST" id="formImage" enctype="multipart/form-data">
        @csrf
        <img id="frame" class="img logo rounded-circle shadow" src="http://127.0.0.1:8000/storage/{{ $u->image_url }}" alt='{{ $u->image_url }}'
            style='display: block; margin-left: auto; margin-right: auto; width:200px;'>
            <div class="image-upload" id="formFileEditAcc" onchange="previewEditAcc()">
                <label for="file-input">
                    <img class="rounded-circle shadow d-block position-relative p-1" style="width:50px; height:50px; top:-50px; left:50px; background:#198754;" title="Change Image"
                        src="http://127.0.0.1:8000/assets/image/icon/ChangeImage.png"/>
                </label>
                <input id="file-input" type="file" name="image_url"/>
            </div>
        </form>
        <div class="mb-1">
            <h4>{{$u->username}}</h4>
            <p class="text-secondary mb-1"><i class="fa-solid fa-location-dot"></i> {{$u->country}}</p>
            <p class="text-muted font-size-sm">{{$u->description}}</p>
            <div class='row' style='justify-content:center;'>
                <div class='col-md-3'>
                    <a style='font-size:15px; font-weight:bold; text-align:center;'>25</a>
                    <a style='font-size:12px; white-space:nowrap;'>Following</a>
                </div>
                <div class='col-md-3'>
                    <a style='font-size:15px; font-weight:bold; text-align:center;'>300</a>
                    <a style='font-size:12px; white-space:nowrap;'>Followers</a>
                </div>
                <div class='col-md-3'>
                    <a style='font-size:15px; font-weight:bold; text-align:center;'>3</a>
                    <a style='font-size:12px; white-space:nowrap;'>Recipes</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    //Image upload preview.
    function previewEditAcc() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }
    document.getElementById("formFileEditAcc").onchange = function() {
        document.getElementById("formImage").submit();
    };
</script>
