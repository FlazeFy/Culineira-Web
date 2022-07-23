<style>

</style>

<div class="row py-2" id="recipe_list_holder">
    @foreach($shelf as $s)
    <li class="card border-gray p-2 border mx-2 my-2" style='min-width:250px; width:20%;'> <!--If error, change <li> to <div>-->
        <div class="row">
            <div class="col-md-10">
                <h6 class="mb-4">{{$s->item_name}}</h6>
                <div class="row">
                    <div class="col-md-9">
                        <a class="text-secondary">{{$s->item_description}}</a>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <input type="number" name="item_qty[]" value="{{$s->item_qty}}" class="form-control" style="width:70px;" min="0" required>
                            <label for="floatingInput">Qty :</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-check">
                    <input class="form-check-input" title="Select" style="cursor:pointer; height:20px; width:20px;" type="checkbox" name="shelf_id[]" value="{{$s->id}}" id="shelf_check{{$s->id}}">
                </div>
            </div>
        </div>
        <a class="fst-italic text-secondary" style="font-size:12px;">last updated: {{$s->updated_at}}</a>
    </li>
    @endforeach
</div>
