<table class="table table-paginate" id="example" cellspacing="0" width="100%">
    <thead>
        <tr>
        <th scope="col">Image</th>
        <th scope="col" style='width:150px;'>Name</th>
        <th scope="col" style='width:180px;'>Info</th>
        <th scope="col" class="w-25">Description</th>
        <th scope="col">Version</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
    @foreach($myrecipes as $data)
        <tr>
            <td><img src="http://127.0.0.1:8000/storage/{{ $data->recipe_url }}?>" alt='{{$data->recipe_url}}'
                style='width:80px;'></td>
            <td><h6 style='font-size:12px;'>{{$data->recipe_name}}</h6></td>
            <td>
                <h6 style='font-size:12px;'>Level : <span class='text-muted'>{{$data->recipe_level}}</span></h6>
                <h6 style='font-size:12px;'>Time Spend : <span class='text-muted'>{{$data->recipe_time_spend}} min</span></h6>
                <h6 style='font-size:12px;'>Calorie : <span class='text-muted'>{{$data->recipe_calorie}} cal</span></h6>
                <h6 style='font-size:12px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; line-clamp: 2; -webkit-box-orient: vertical;'>Main Ing : <span class='text-muted'>{{$data->recipe_main_ing}}</span></h6>
            </td>
            <td><p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; line-clamp: 4; -webkit-box-orient: vertical;"><?php echo nl2br($data->recipe_desc); ?></p></td>
            <td>
                <h6 style='font-size:12px;'>Created : <p class='text-muted'>{{$data->created_at}}</span></p>
                <h6 style='font-size:12px;'>Last Updated : <p class='text-muted'>{{$data->updated_at}}</span></p>
            </td>
            <td>
                <div class='row w-100'>
                    <div class='col-md-6'>
                        <button class='btn btn-success' data-bs-toggle="modal" data-bs-target="#editRecipe<?php echo "_".$data->id; ?>"><i class="fa-solid fa-pen-to-square"></i></button>
                    </div>
                    <div class='col-md-6'>
                        <button class='btn btn-danger' data-bs-toggle="modal" data-bs-target="#deleteRecipe<?php echo "_".$data->id; ?>"><i class="fa-solid fa-trash-can"></i></button>
                    </div>
                </div>
                <button class='btn btn-primary dropdown-toggle mt-2 w-100' type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-eye"></i> <?php echo $data->recipe_visibility; ?></button>
                <ul class="dropdown-menu p-2" aria-labelledby="dropdownMenuButton1">
                    <form action="/recipe/updateVisibility/<?php echo $data->id; ?>" method="POST">
                    @csrf
                    <fieldset>
                        <div class="form-check">
                            <input <?php if($data->recipe_visibility == "Public"){echo "checked";} ?> class="form-check-input" type="radio" name="visibility" value="Public" checked="checked">
                            <label class="form-check-label" for="flexRadioDefault1">Public</label>
                        </div>

                        <div class="form-check">
                            <input <?php if($data->recipe_visibility == "Private"){echo "checked";} ?> class="form-check-input" type="radio" name="visibility" value="Private">
                            <label class="form-check-label" for="flexRadioDefault1">Private</label>
                        </div>

                        <div class="form-check">
                            <input <?php if($data->recipe_visibility == "Restricted"){echo "checked";} ?> class="form-check-input" type="radio" name="visibility" value="Restricted">
                            <label class="form-check-label" for="flexRadioDefault1">Restricted</label>
                        </div>
                    </fieldset>
                    <button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk"></i> Save</button>
                    </form>
                </ul>
                <button class="btn btn-success mt-2 w-100" data-bs-toggle="modal" data-bs-target="#dependenciesRecipe<?php echo "_".$data->id; ?>"><i class="fa-solid fa-list-check"></i> Steps</button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
