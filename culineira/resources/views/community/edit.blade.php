@foreach($groupId as $g)
    @if($g->id == session()->get('groupKey'))
    <div class="modal fade" id="editGroup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{$g->groups_name}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/community/editGroup/{{$g->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label class="form-label">Group Name</label>
                                <input class="form-control" type="text" name="group_name" value="{{$g->groups_name}}" required></input>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Type</label>
                                <select class="form-select" name="group_type" required>
                                    <option <?php if($g->groups_type == "Public"){ echo" selected "; }?> value="Public">Public</option>
                                    <option <?php if($g->groups_type == "Private"){ echo" selected "; }?> value="Private">Private</option>
                                </select>
                            </div>
                        </div>
                        <label class="form-label">Image <i class="fa-solid fa-circle-question" type="button"></i></label>
                        <input class="form-control" type="file" id="formFile" onchange="preview()" name="group_image" accept="image/png, image/jpg, image/jpeg" value="{{$g->groups_image}}">
                        <label class="form-label">Description</label>
                        <textarea class="form-control mb-2" name="group_description" rows="3" required>{{$g->groups_description}}</textarea>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Preview</label>
                                <img id="frame" src="http://127.0.0.1:8000/storage/{{$g->groups_image}}" class="img-fluid rounded" style="width:200px; border:3px solid #EB7736;"/>
                            </div>
                            <div class="col-md-6">
                                <a onclick="clearImage()" class="btn btn-danger mt-5 w-75"><i class="fa-solid fa-trash"></i> Reset</a>
                                <button class="btn btn-success mt-3 w-75" type="submit" value="Save"><i class="fa-solid fa-floppy-disk"></i> Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endif
@endforeach
