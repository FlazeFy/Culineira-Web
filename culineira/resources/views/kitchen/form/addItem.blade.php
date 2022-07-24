<div class="modal fade" id="addItemShelf" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <form action="/kitchen/addItemShelf" method="POST">
        @csrf
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Item to Shelf</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class='col-md-7 mb-3'>
                <input class="form-control" name="item_name" placeholder="Item Name" required>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="form-floating">
                        <textarea type="text" name="item_description" class="form-control"></textarea>
                        <label for="floatingInput">Description (Optional) :</label>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-floating">
                        <input type="number" name="item_qty" class="form-control" min="1" required>
                        <label for="floatingInput">Qty :</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success"><i class="fa-solid fa-plus"></i> Add Item</button>
        </div>
        </form>
    </div>
</div>
</div>
