@foreach($user as $data2)
    @foreach($recipe as $data)
        @if(($data->user_id == $data2->id)&&($data2->username == session()->get('usernameKey')))
            <div class="modal fade" id="editRecipe<?php echo "_".$data->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content p-2">
                <form action="/recipe/update/<?php echo $data->id; ?>" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <div class="row">
                        <div class="col-md-4">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Recipe</h5>
                        </div>
                        <div class="col-md-4 mb-2">
                            <select class="form-select" name="recipe_type" required>
                                <option <?php if($data->recipe_type == "Main Course"){echo" selected ";} ?> value="Main Course">Main Course</option>
                                <option <?php if($data->recipe_type == "Appetizer"){echo" selected ";} ?> value="Appetizer">Appetizer</option>
                                <option <?php if($data->recipe_type == "Desserts"){echo" selected ";} ?> value="Desserts">Desserts</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" name="recipe_country" type="text" value="<?php echo $data->recipe_country; ?>" required></input>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-1 pt-2">
                            <label class="form-label">Name</label>
                        </div>
                        <div class="col-md-4 m-1">
                            <input class="form-control" disabled name="recipe_name" type="text" value="<?php echo $data->recipe_name; ?>" required></input>
                        </div>
                        <div class="col-md-1 pt-2">
                            <label class="form-label">Level</label>
                        </div>
                        <div class="col-md-3 m-1">
                            <select class="form-select" name="recipe_level" required>
                                <option <?php if($data->recipe_level == "Beginner"){echo" selected ";} ?> value="Beginner">Beginner</option>
                                <option <?php if($data->recipe_level == "Intermediate"){echo" selected ";} ?> value="Intermediate">Intermediate</option>
                                <option <?php if($data->recipe_level == "Expert"){echo" selected ";} ?> value="Expert">Expert</option>
                            </select>
                        </div>
                        <div class="col-md-2 pt-2">
                            <div class="form-check">
                                <!--name="recipe_halal"-->
                                <input class="form-check-input" type="checkbox" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Halal
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 p-2">
                            <div class="container-fluid p-0">
                                <label class="form-label" name="recipe_time_spend">Time Spend / Calorie <i class="fa-solid fa-circle-question" type="button"></i></label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input class="form-control" type="number" name="recipe_time_spend" value="<?php echo $data->recipe_time_spend; ?>" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label pt-2">Minutes</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" type="number" name="recipe_calorie" value="<?php echo $data->recipe_calorie; ?>" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label pt-2">Cal</label>
                                    </div>
                                </div>
                            </div>
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="recipe_desc" rows="5" required><?php echo $data->recipe_desc; ?></textarea>
                            <label class="form-label mt-2">Image <i class="fa-solid fa-circle-question" type="button"></i></label>
                            <input class="form-control" type="file" id="formFileEdit<?php echo $data->id; ?>" onchange="previewEdit<?php echo $data->id; ?>()" name="recipe_url" accept="image/png, image/jpg, image/jpeg">
                        </div>
                        <div class="col-md-6 p-2">
                            <label class="form-label">Main Ingredients <i class="fa-solid fa-circle-question" type="button"></i></label>
                            <textarea class="form-control" rows="3" name="recipe_main_ing"><?php echo $data->recipe_main_ing; ?></textarea>
                            <label class="form-label">Preview</label>
                            <div class="row">
                                <div class="col-md-7">
                                    <img id="frameEdit<?php echo $data->id; ?>" src="http://127.0.0.1:8000/storage/{{ $data->recipe_url }}?>" class="img-fluid" style="width:200px; border-radius:100%; border:3px solid #EB7736;"/>
                                </div>
                                <div class="col-md-5">
                                    <a onclick="clearImageEdit<?php echo $data->id; ?>()" class="btn btn-danger mt-3 w-100"><i class="fa-solid fa-trash"></i> Reset</a>
                                    <button class="btn btn-success mt-2 w-100" type="submit" value="Save"><i class="fa-solid fa-floppy-disk"></i> Save </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                </div>
            </div>
            </div>
        @endif
    @endforeach
@endforeach
