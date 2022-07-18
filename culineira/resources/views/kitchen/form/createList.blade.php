<div class="modal fade" id="createList" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <form action="/kitchen/addNewList" method="POST">
    @csrf
    <div class="modal-header">
        <div class='row'>
            <div class='col-md-2'>
                <a type="button" title="Stared"><i class="fa-regular fa-star fa-lg"></i></a>
            </div>
            <div class='col-md-10'>
                <input class="form-control" name="list_name" placeholder="List Name" required>
            </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <textarea class="form-control" name="list_description" rows="3" required placeholder="Lorem ipsum dolor sit amet"></textarea>
        <a class="btn btn-primary mt-2" data-bs-toggle="collapse" href="#createListWRecipe" aria-controls="collapseExample">Add With Recipe <b>(Optional)</b></a>
        <div class="collapse mt-3" id="createListWRecipe">
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
        <button type="submit" class="btn btn-success">Create List</button>
    </div>
    </form>
    </div>
</div>
</div>
