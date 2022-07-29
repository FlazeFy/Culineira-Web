@foreach($shelf as $s)
    <div class="modal fade" id="updateItem-{{$s->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{$s->item_name}}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/kitchen/updateItemShelf/{{$s->id}}" method="POST">
                @csrf
                <div class='col-md-7 mb-3'>
                    <input class="form-control" name="item_name" value="{{$s->item_name}}" required>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-floating">
                            <textarea type="text" name="item_description" class="form-control">{{$s->item_description}}</textarea>
                            <label for="floatingInput">Description (Optional) :</label>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-floating">
                            <input type="number" name="item_qty" class="form-control" min="1" value="{{$s->item_qty}}" required>
                            <label for="floatingInput">Qty :</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-2 float-end"><i class="fa-solid fa-floppy-disk"></i> Save Changes</button>
            </form>
        </div>
        </div>
    </div>
    </div>
@endforeach
