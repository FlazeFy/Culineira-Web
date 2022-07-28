<div class="modal fade" id="createInstantRecipe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content p-2">
            <form action="/recipe/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <div class="row">
                        <div class="col-md-4">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Recipe</h5>
                        </div>
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
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                            <input class="form-control" type="file" id="formFile" onchange="preview()" name="recipe_image" accept="image/png, image/jpg, image/jpeg" required>
                        </div>
                        <div class="col-md-6 p-2">
                            <label class="form-label">Main Ingredients <i class="fa-solid fa-circle-question" type="button"></i></label>
                            <textarea class="form-control" rows="3" name="recipe_main_ing" placeholder="Beef, Tomato, ..."></textarea>
                            <label class="form-label">Preview</label>
                            <div class="row">
                                <div class="col-md-7">
                                    <img id="frame" src="http://127.0.0.1:8000/assets/NoImage.png" class="img-fluid" style="width:200px; border-radius:100%; border:3px solid #EB7736;"/>
                                </div>
                                <div class="col-md-5">
                                    <label class="form-label">Visibility <i class="fa-solid fa-circle-question" type="button"></i></label>
                                    <select class="form-select" name="recipe_visibility" required>
                                        <option selected value="Public">Public</option>
                                        <option value="Private">Private</option>
                                        <option value="Restricted">Restricted</option>
                                    </select>
                                    <a onclick="clearImage()" class="btn btn-danger mt-3 w-100"><i class="fa-solid fa-trash"></i> Reset</a>
                                    <button class="btn btn-success mt-2 w-100" type="submit" value="Save"><i class="fa-solid fa-plus"></i> Post </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
