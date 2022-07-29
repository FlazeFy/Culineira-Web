@if(session()->get('groupKey') == "0")
    <form action="/community/createGroup" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid p-4">
            <h2 class="text-left" style="color:#Eb7336;">Create Groups</h2>
            <div class="row mb-2">
                <div class="col-md-4">
                    <label class="form-label">Group Name</label>
                    <input class="form-control" type="text" name="group_name" required></input>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Type</label>
                    <select class="form-select" name="group_type" required>
                        <option selected value="Public">Public</option>
                        <option value="Private">Private</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Image <i class="fa-solid fa-circle-question" type="button"></i></label>
                    <input class="form-control" type="file" id="formFile" onchange="preview()" name="group_image" accept="image/png, image/jpg, image/jpeg" required>
                </div>
            </div>
            <label class="form-label">Description</label>
            <textarea class="form-control mb-2" name="group_description" rows="3" required placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing... "></textarea>
            <div class="row">
                <div class="col-md-5">
                    <label class="form-label fw-bold">Rules</label>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Preview</label>
                    <img id="frame" src="http://127.0.0.1:8000/assets/NoImage.png" class="img-fluid rounded" style="width:200px; border:3px solid #EB7736;"/>
                </div>
                <div class="col-md-3">
                    <a onclick="clearImage()" class="btn btn-danger mt-3 w-100"><i class="fa-solid fa-trash"></i> Reset</a>
                    <button class="btn btn-success mt-3 w-100" type="submit" value="Save"><i class="fa-solid fa-plus"></i> Create</button>
                </div>
            </div>
        </div>
    </form>
    @php($count++)
@endif
