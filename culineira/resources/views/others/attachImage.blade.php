<div class="modal fade" id="attachImage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
