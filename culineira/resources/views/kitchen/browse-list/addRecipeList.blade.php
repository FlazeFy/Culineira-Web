<div class="modal fade" id="addRecipeList" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <form action="/kitchen/browse-list/addRecipeToList/{{$data->id}}" method="POST">
    @csrf
    <div class="modal-content">
    <div class="modal-header">
        <input hidden name="list_name" value="{{$data->list_name}}">
        <h5 class="modal-title" id="exampleModalLabel">{{$data->list_name}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div id="recipe_list_add_holder">
        @foreach($recipe as $r)
            <div class="card mb-2 rounded w-100 shadow p-3">
                <div class='row'>
                    <div class='col-md-3'>
                        <img src="http://127.0.0.1:8000/storage/{{ $r->recipe_url }}?>" alt='{{$r->recipe_name}}'
                            class='rounded img-fluid'>
                    </div>
                    <div class='col-md-7'>
                        <h6>{{$r->recipe_name}}</h6>
                        <a>{{$r->recipe_type}}</a><br>
                        <a>{{$r->recipe_main_ing}}</a>
                    </div>
                    <div class='col-md-1 h-40 mt-1 pt-2 pb-2'>
                        <div class="form-check">
                            <input class="form-check-input" name="recipe_id[]" title="Select" style="cursor:pointer; height:25px; width:25px;" type="checkbox" value="{{$r->id}}">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> Add To List</button>
    </div>
    </form>
    </div>
</div>
</div>
