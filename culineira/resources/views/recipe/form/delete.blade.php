@foreach($user as $data2)
    @foreach($recipe as $data)
        @if(($data->user_id == $data2->id)&&($data2->username == session()->get('usernameKey')))
            <div class="modal fade" id="deleteRecipe<?php echo "_".$data->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/recipe/destroy/<?php echo $data->id; ?>" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h6 class="text-center">Are you sure want to delete this recipe?<h6>
                            <div class="row w-100 mb-2">
                                <div class="col-md-3"></div>
                                <div class="col-md-5">
                                    <input hidden class="form-control" name="recipe_name" type="text" value="<?php echo $data->recipe_name; ?>"></input>
                                    <input required class="form-control" name="validation" type="text" placeholder="'pizza'"></input>
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
            @endif
    @endforeach
@endforeach
