<div class="modal fade" id="deleteList" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/kitchen/browse-list/destroy/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <h6 class="text-center">Are you sure want to delete this list?<h6>
                @if($data->list_status == "Starred")
                    <h6 class="text-secondary text-center">Note : This list is starred<h6>
                @endif
                <div class="row w-100 mb-2">
                    <div class="col-md-3"></div>
                    <div class="col-md-5">
                        <input hidden class="form-control" name="list_name" type="text" value="{{$data->list_name}}"></input>
                        <input required class="form-control" name="validation" type="text" placeholder="Example List"></input>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-danger" type="submit">Yes</button>
                    </div>
                </div>
                <p class="text-secondary text-center mt-2" style="font-size:12px;"><i class="fa-solid fa-circle-info"></i> Please type the same recipe name for validation</p>
                </form>
            </div>
        </div>
    </div>
</div>
