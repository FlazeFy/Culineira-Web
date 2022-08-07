@foreach($user as $data2)
    @foreach($recipe as $data)
        @if(($data->user_id == $data2->id)&&($data2->username == session()->get('usernameKey')))
            <div class="modal fade" id="dependenciesRecipe<?php echo "_".$data->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content p-2">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Dependencies</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <section class="py-2 header">
                        <div class="container py-2">
                            <div class="row">
                                <!--Tabs nav.-->
                                <div class="nav flex-row nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link m-3 p-3 shadow active" id="v-pills-ingredients-tab" data-bs-toggle="pill" href="#v-pills-ingredients<?php echo "_".$data->id; ?>" role="tab" aria-controls="v-pills-ingredients" aria-selected="true">
                                    <span class="font-weight-bold small text-uppercase"> Ingredients</span></a>
                                    <a class="nav-link m-3 p-3 shadow" id="v-pills-steps-tab" data-bs-toggle="pill" href="#v-pills-steps<?php echo "_".$data->id; ?>" role="tab" aria-controls="v-pills-steps" aria-selected="true">
                                    <span class="font-weight-bold small text-uppercase"> Steps</span></a>
                                    <a class="nav-link m-3 p-3 shadow" id="v-pills-add-tab" data-bs-toggle="pill" href="#v-pills-add<?php echo "_".$data->id; ?>" role="tab" aria-controls="v-pills-add" aria-selected="true">
                                    <span class="font-weight-bold small text-uppercase"> Add</span></a>
                                </div>

                                <div class="tab-content" id="v-pills-tabContent-Dependencies<?php echo "_".$data->id; ?>">
                                    <!--Ingredients.-->
                                    <div class="tab-pane fade rounded show active p-2" id="v-pills-ingredients<?php echo "_".$data->id; ?>" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                        <h5>Ingredients</h5>
                                        @foreach($ingredients as $dataIng)
                                            @if($dataIng->recipe_id == $data->id)
                                                <p class="text-secondary">{{$dataIng->ingredients_vol}} ~ {{$dataIng->ingredients_name}}</p>
                                            @endif
                                        @endforeach
                                    </div>

                                    <!--Ingredients.-->
                                    <div class="tab-pane fade rounded p-2" id="v-pills-steps<?php echo "_".$data->id; ?>" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                        <h5>Steps</h5>
                                        @php($i = 1)
                                        @foreach($steps as $dataStp)
                                            @if($dataStp->recipe_id == $data->id)
                                                <p class='text-secondary'><b>{{$i}}. </b> {{$dataStp->steps_body}}</p>
                                                @php($i++)
                                            @endif
                                        @endforeach
                                    </div>

                                    <!--Add.-->
                                    <div class="tab-pane fade rounded p-2" id="v-pills-add<?php echo "_".$data->id; ?>" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                        <h5>Add Dependencies</h5>
                                        <form action="/recipe/storeDependencies" method="POST" enctype="multipart/form-data">
                                            @csrf
                                        <div class="card-body">
                                            <input class="form-control" name="recipe_id" value="<?php echo $data->id; ?>" hidden></input>
                                            <div class="row mb-4">
                                                <div class="col-md-8">
                                                    <a class="text-secondary">Next, you can make your ingredient with their value.</a>
                                                    <a class="text-secondary">Note : You can still modify this in the future. But there's only 3 changes per recipe, so make sure you make the correct one</a><br>
                                                    <a class="btn btn-primary" id="addIngModal<?php echo $data->id;?>">Add Ingredient</a>
                                                    <a class="btn btn-danger" id="removeIngModal<?php echo $data->id;?>">Reset All</a>
                                                </div>
                                                <div class="col-md-3">
                                                    <img id="frame3" src="http://127.0.0.1:8000/assets/storyset/Ingredient.png" class="img-fluid" style="width:110px;"/>
                                                </div>
                                                <div class="card-holder m-2" style="max-height: calc(70vh - 130px); overflow-x: auto;" id="ingHolderModal<?php echo $data->id;?>">

                                                    <div class="card shadow border-0 w-100 mb-2">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-11">
                                                                    <div class="row">
                                                                        <div class="col-md-7">
                                                                            <label class="form-label" for="flexCheckDefault">Ingredient Name</label>
                                                                            <input class="form-control" name="ingredients_name[]" type="text" placeholder="ex: 'Fermented Milk'" required></input>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <label class="form-label" for="flexCheckDefault">Value</label>
                                                                            <input class="form-control" name="ingredients_vol[]" type="text" placeholder="ex: '500 ml'" required></input>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col-md-3">
                                                                        <select class="form-select" name="ingredients_type[]"><option value="Required">Required</option><option value="Optional">Optional</option></select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <i class="fa-solid fa-xmark fa-2xl" style='color:#b92c3a;'></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--End of card.-->

                                                </div><!--End of item holder.-->
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-md-3">
                                                <img id="frame3" src="http://127.0.0.1:8000/assets/storyset/Steps.png" class="img-fluid" style="width:200px;"/>
                                                </div>
                                                <div class="col-md-8">
                                                    <a class="text-secondary">Now, you can add your ingredient, tips, and the steps.</a>
                                                    <a class="text-secondary">Note : You can still modify this in the future. But there's only 5 changes per recipe, so make sure you make the correct one</a><br>
                                                    <a class="btn btn-primary" id="addStepsModal<?php echo $data->id;?>">Add Steps</a>
                                                    <a class="btn btn-danger" id="removeStepsModal<?php echo $data->id;?>">Reset All</a>
                                                </div>
                                                <div class="card-holder m-2" id="stepsHolderModal<?php echo $data->id;?>">

                                                    <div class="card shadow border-0 w-100 mb-2">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-11">
                                                                    <a style="color:#EB7336;">Steps #1</a>
                                                                    <textarea class="form-control" name="steps_body[]" rows="3" required placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing... "></textarea>
                                                                    <div class="row mt-2">
                                                                        <div class="col-md-3">
                                                                            <select class='form-select' aria-label='Default select example' name='steps_type[]'>
                                                                                <option value="Required">Required</option>
                                                                                <option value="Optional">Optional</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" data-bs-toggle="collapse" href="#switchAddImgRecipe" role="button">
                                                                                <label class="form-check-label" for="flexSwitchCheckChecked">Image</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-7">
                                                                            <div class="collapse" id="switchAddImgRecipe">
                                                                                <input class="form-control" type="file" id="formFileEditStep" onchange="previewEditStep()" name="steps_image[]" accept="image/png, image/jpg, image/jpeg">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <i class="fa-solid fa-xmark fa-2xl" style='color:#b92c3a;'></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--End of card.-->

                                                </div><!--End of item holder.-->
                                            </div>
                                            <button class="btn btn-success" type="submit" value="Save"><i class="fa-solid fa-floppy-disk"></i> Save</button>

                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                </div>
            </div>
            </div>
        @endif
    @endforeach
@endforeach

