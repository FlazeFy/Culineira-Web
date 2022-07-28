<div class="accordion" id="accordionExample">
    <div class="steps">
        <progress id="progress" value=0 max=100 ></progress>
        <div class="step-item">
            <button class="step-button text-center" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">1</button>
            <div class="step-title">Preparation</div>
        </div>
        <div class="step-item">
            <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">2</button>
            <div class="step-title">Recipe Overview</div>
        </div>
        <div class="step-item">
            <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">3</button>
            <div class="step-title">Dependencies</div>
        </div>
        <div class="step-item">
            <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">4
            </button>
            <div class="step-title">Finalization</div>
        </div>
    </div>
    <form action="/recipe/storeFull" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="card border-0">
        <div id="headingOne">
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
            data-bs-parent="#accordionExample">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-md-3">
                    <img id="frame3" src="http://127.0.0.1:8000/assets/storyset/Preparation.png" class="img-fluid" style="width:200px;"/>
                    </div>
                    <div class="col-md-8">
                        <a class="text-secondary">Welcome to create recipes. In this feature you can make your own recipe with your creativity. With dependencies, you recipes can track organize and make it easier for others to learn your recipes.</a><br>
                        <a class="text-secondary">Before that, please read and accept this terms and condition :</a>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" required>
                            <label class="form-check-label" for="flexCheckDefault">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </label>
                        </div>
                    </div>
                </div>
                <!--Steps control-->
                <div class="row mb-2">
                    <div class="col-md-9">
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-primary w-100" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo">Next <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card border-0">
        <div  id="headingTwo"></div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-md-3">
                    <img id="frame3" src="http://127.0.0.1:8000/assets/storyset/Overview.png" class="img-fluid" style="width:200px;"/>
                    </div>
                    <div class="col-md-8">
                        <a class="text-secondary">In this steps. You must define your recipe overview such as recipe name, type, country, time spend & calorie, main ingredients, short description, visibility, and of course your recipe photo.</a>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <select class="form-select" name="recipe_type" required>
                                <option selected value="Main Course">Main Course</option>
                                <option value="Appetizer">Appetizer</option>
                                <option value="Desserts">Desserts</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" name="recipe_country" type="text" placeholder="Indonesia" required></input>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-1 pt-2">
                            <label class="form-label">Name</label>
                        </div>
                        <div class="col-md-4 m-1">
                            <input class="form-control" name="recipe_name" type="text" placeholder="Pizza" required></input>
                        </div>
                        <div class="col-md-1 pt-2">
                            <label class="form-label">Level</label>
                        </div>
                        <div class="col-md-3 m-1">
                            <select class="form-select" name="recipe_level" required>
                                <option selected value="Beginner">Beginner</option>
                                <option value="Intermediate">Intermediate</option>
                                <option value="Expert">Expert</option>
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
                                        <input class="form-control" type="number" name="recipe_time_spend" placeholder="30" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label pt-2">Minutes</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" type="number" name="recipe_calorie" placeholder="150" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label pt-2">Cal</label>
                                    </div>
                                </div>
                            </div>
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="recipe_desc" rows="5" required placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing... "></textarea>
                            <label class="form-label mt-2">Image <i class="fa-solid fa-circle-question" type="button"></i></label>
                            <input class="form-control" type="file" id="formFileFull" onchange="previewFull()" name="recipe_image" accept="image/png, image/jpg, image/jpeg" required>
                        </div>
                        <div class="col-md-6 p-2">
                            <label class="form-label">Main Ingredients <i class="fa-solid fa-circle-question" type="button"></i></label>
                            <textarea class="form-control" rows="3" name="recipe_main_ing" placeholder="Beef, Tomato, ..."></textarea>
                            <label class="form-label">Preview</label>
                            <div class="row">
                                <div class="col-md-7">
                                    <img id="frameFull" src="http://127.0.0.1:8000/assets/NoImage.png" class="img-fluid" style="width:200px; border-radius:100%; border:3px solid #EB7736;"/>
                                </div>
                                <div class="col-md-5">
                                    <label class="form-label">Visibility <i class="fa-solid fa-circle-question" type="button"></i></label>
                                    <select class="form-select" name="recipe_visibility" required>
                                        <option selected value="Public">Public</option>
                                        <option value="Private">Private</option>
                                        <option value="Restricted">Restricted</option>
                                    </select>
                                    <a onclick="clearImageFull()" class="btn btn-danger mt-3 w-100"><i class="fa-solid fa-trash"></i> Reset</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <!--Steps control-->
                <div class="row mb-2">
                    <div class="col-md-3">
                        <a class="btn btn-primary w-100" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne"><i class="fa-solid fa-arrow-left"></i> Previous</a>
                    </div>
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-primary w-100" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree">Next <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card border-0">
        <div  id="headingThree"></div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
            data-bs-parent="#accordionExample">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-8">
                        <a class="text-secondary">Next, you can make your ingredient with their value.</a>
                        <a class="text-secondary">Note : You can still modify this in the future. But there's only 3 changes per recipe, so make sure you make the correct one</a><br>
                        <a class="btn btn-primary" id="addIng">Add Ingredient</a>
                        <a class="btn btn-danger" id="removeIng">Reset All</a>
                    </div>
                    <div class="col-md-3">
                        <img id="frame3" src="http://127.0.0.1:8000/assets/storyset/Ingredient.png" class="img-fluid" style="width:150px;"/>
                    </div>
                    <div class="card-holder m-2" style="max-height: calc(70vh - 130px); overflow-x: auto;" id="ingHolder">

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
                        <a class="btn btn-primary" id="addSteps">Add Steps</a>
                        <a class="btn btn-danger" id="removeSteps">Reset All</a>
                    </div>
                    <div class="card-holder m-2" id="stepsHolder">

                        <div class="card shadow border-0 w-100 mb-2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-11">
                                        <a style="color:#EB7336;">Steps #1</a>
                                        <textarea class="form-control" name="steps_body[]" rows="3" required placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing... "></textarea>
                                        <div class="row mt-2">
                                            <div class="col-md-3">
                                                <select class="form-select" name="steps_type[]"><option value="Required">Required</option><option value="Optional">Optional</option></select>
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
                <!--Steps control-->
                <div class="row mb-2">
                    <div class="col-md-3">
                        <a class="btn btn-primary w-100" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo"><i class="fa-solid fa-arrow-left"></i> Previous</a>
                    </div>
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-primary w-100" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour">Next <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card border-0">
        <div  id="headingFour"></div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
            data-bs-parent="#accordionExample">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-md-3">
                        <img src="http://127.0.0.1:8000/assets/storyset/Finalization.png" class="img-fluid" style="width:200px;"/>
                    </div>
                    <div class="col-md-8">
                        <a class="text-secondary">Finaly, after all of that. Now you can publish your recipe. And also you can add your video toturial if you want too.</a>
                        <br>
                        <label class="form-label mt-2">Video (Optional) <i class="fa-solid fa-circle-question" type="button"></i></label>
                        <input class="form-control" type="file" id="formFileVideo" name="recipe_video" accept="video/mp4">
                    </div>
                </div>
                <div class="container-fluid shadow p-3 mb-3">
                    <div class="container rounded" style="border:3px solid #EB7736;">
                        <video controls class="rounded w-100" alt="video" >
                            <source id="frameVideo" src="2">
                        </video>
                    </div>
                    <div class="row my-2">
                        <div class="col-md-3">
                            <a class="btn btn-danger w-100" onclick="clearVideo()">Reset</a>
                        </div>
                    </div>
                </div>
                <!--Steps control-->
                <div class="row mb-2">
                    <div class="col-md-3">
                        <a class="btn btn-primary w-100" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree"><i class="fa-solid fa-arrow-left"></i> Previous</a>
                    </div>
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-success w-100" type="submit">Upload <i class="fa-solid fa-arrow-up"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
