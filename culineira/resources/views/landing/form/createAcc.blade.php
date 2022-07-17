<style>
    /*Autocomplete search*/
    .autocomplete {
        position: relative;
        display: inline-block;
    }

    .autocomplete-items {
        position: absolute;
        border-bottom: none;
        border-top: none;
        z-index: 99;
        /*position the autocomplete items to be the same width as the container:*/
        top: 100%;
        left: 0;
        right: 0;
        border-radius:5px;
    }

    .autocomplete-items div {
        padding: 10px;
        cursor: pointer;
        background-color: var(--background6);
        border-bottom: 1px solid transparent;
        border-radius:5px;
    }

    /*when hovering an item:*/
    .autocomplete-items div:hover {
        background-color: #EB7336;
        color: #ffffff;
    }

    /*when navigating through the items using the arrow keys:*/
    .autocomplete-active {
        background-color: #EB7336 !important;
        color: #ffffff;
    }

    .steps {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
        position: relative;
    }

    .step-button {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border: none;
        background-color: var(--prm-gray);
        transition: .4s;
    }

    .step-button[aria-expanded="true"] {
        width: 60px;
        height: 60px;
        background-color: #76568C;
        color: #fff;
    }

    .done {
        background-color: #76568C;
        color: #fff;
    }

    .step-item {
        z-index: 10;
        text-align: center;
    }

    #progress {
    -webkit-appearance:none;
        position: absolute;
        width: 95%;
        z-index: 5;
        height: 10px;
        margin-left: 18px;
        margin-bottom: 18px;
    }

    /* to customize progress bar */
    #progress::-webkit-progress-value {
        background-color: #76568C;
        transition: .5s ease;
    }

    #progress::-webkit-progress-bar {
        background-color: var(--prm-gray);

    }

    .dropdown-menu{
        background: var(--background4);
        border: 2px solid var(--background7);
    }
    .dropdown-item .btn.btn-light{
        color: var(--text);
    }

    .form-control{
        background: var(--background3);
        border-color: #CED4DA;
        color: var(--text);
    }
    .form-select{
        background: var(--background3);
        border-color: #CED4DA;
        color: var(--text);
    }
</style>

<div class="accordion" id="accordionExample">
    <div class="steps">
        <progress id="progress" value=0 max=100 ></progress>
        <div class="step-item">
            <button class="step-button text-center" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">1</button>
            <div class="step-title">Profile</div>
        </div>
        <div class="step-item">
            <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">2</button>
            <div class="step-title">Image</div>
        </div>
        <div class="step-item">
            <button class="step-button text-center collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">3</button>
            <div class="step-title">Validation</div>
        </div>
    </div>

    <form action="/create" method="POST" autocomplete="off" enctype="multipart/form-data">
        @csrf
        <div class="card border-0 bg-transparent">
            <div id="headingOne"></div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="card-body">
                    <a class="text-white">Username</a>
                    <input class="form-control" type="text" name="username"></input>
                    <a class="text-white">Email</a>
                    <input class="form-control" type="email" name="email"></input>
                    <a class="text-white">Password</a>
                    <input class="form-control" type="password" name="password"></input>
                    <a class="text-white">Country</a>
                    <div class="autocomplete w-100">
                        <input class="form-control" type="text" id="searchInput" name="country"></input>
                    </div>
                    <a class="text-white">Description</a>
                    <textarea class="form-control" rows="4" aria-label="With textarea" name="description" placeholder="tell others about yourselft..."></textarea>
                    <!--Steps control-->
                    <div class="row mt-3">
                        <div class="col-md-7">
                        </div>
                        <div class="col-md-5">
                            <a class="btn btn-success w-100" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo">Next <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--End of steps 1-->

        <div class="card border-0 bg-transparent">
            <div id="headingOne"></div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <select class="form-select mb-2" aria-label="Default select example" id="recipe_type">
                                <option value="Oriental">Oriental</option>
                                <option value="Middle Eastern">Middle Eastern</option>
                                <option value="Continental">Continental</option>
                                <option value="Indian">Indian</option>
                                <option value="Chinese">Chinese</option>
                                <option value="Korean & Japanese">Korean & Japanese</option>
                                <option value="Main Course">Main Course</option>
                                <option value="Appetizer">Appetizer</option>
                                <option value="Desserts">Desserts</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <a class="btn btn-success" id="add_preferred_recipe"><i class="fa-solid fa-plus"></i> Add</a>
                        </div>
                    </div>
                    <div class="container-fluid bg-transparent rounded mb-4" style="border:2px solid white;">
                        <a class="text-white">Preferred Recipe</a>
                        <div class="row" id="data_preferred_recipe">

                        </div>
                    </div>
                    <a class="text-white">Image</a>
                    <input class="form-control" type="file" id="formFileCreateAcc" onchange="previewCreateAcc()" name="image_url" accept="image/png, image/jpg, image/jpeg">
                    <label class="form-label">Preview</label>
                    <div class="row">
                        <div class="col-md-6">
                            <img id="frame" src="http://127.0.0.1:8000/assets/NoImage.png" class="img-fluid" style="width:150px; border-radius:100%; background:white;"/>
                        </div>
                        <div class="col-md-6">
                            <a onclick="clearImageCreateAcc()" class="btn btn-danger mt-3 w-100"><i class="fa-solid fa-trash"></i> Reset</a>
                        </div>
                    </div>
                    <!--Steps control-->
                    <div class="row mt-3">
                        <div class="col-md-5">
                            <a class="btn btn-success w-100" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne"><i class="fa-solid fa-arrow-left"></i> Previous</a>
                        </div>
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-5">
                            <a class="btn btn-success w-100" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree">Next <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--End of steps 2-->

        <div class="card border-0 bg-transparent">
            <div id="headingOne"></div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="http://127.0.0.1:8000/assets/storyset/Validation.png" style="width:100px;"/>
                        </div>
                        <div class="col-md-9">
                            <p class="text-white">We have sent a verification code to your email. Please fill out the following form using that code.</p>
                        </div>
                    </div>
                    <!--Steps control-->
                    <div class="row mt-3">
                        <div class="col-md-5">
                            <a class="btn btn-success w-100" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo"><i class="fa-solid fa-arrow-left"></i> Previous</a>
                        </div>
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-5">
                            <button class="btn btn-success w-100 border-0" style="background:#76568C;" type="submit">Submit <i class="fa-solid fa-arrow-up"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--End of steps 3-->
    </form>
</div>

<script>
    //Image upload preview.
    function previewCreateAcc() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }
    function clearImageCreateAcc() {
        document.getElementById('formFileCreateAcc').value = null;
        frame.src = "http://127.0.0.1:8000/assets/NoImage.png";
    }

    //Search input.
    function autocomplete(inp, arr) {
        var currentFocus;

        inp.addEventListener("input", function(e) {
            var a, b, i, val = this.value;
            closeAllLists();
            if (!val) { return false;}
            currentFocus = -1;
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");
            this.parentNode.appendChild(a);
            for (i = 0; i < arr.length; i++) {
                if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                    b = document.createElement("DIV");
                    b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                    b.innerHTML += arr[i].substr(val.length);
                    b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                    b.addEventListener("click", function(e) {
                        inp.value = this.getElementsByTagName("input")[0].value;
                        closeAllLists();
                    });
                    a.appendChild(b);
                }
            }
        });
        inp.addEventListener("keydown", function(e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
                currentFocus++;
                addActive(x);
            } else if (e.keyCode == 38) {
                currentFocus--;
                addActive(x);
            } else if (e.keyCode == 13) {
                e.preventDefault();
                if (currentFocus > -1) {
                    if (x) x[currentFocus].click();
                }
            }
        });
        function addActive(x) {
            if (!x) return false;
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            x[currentFocus].classList.add("autocomplete-active");
        }
        function removeActive(x) {
            for (var i = 0; i < x.length; i++) {
            x[i].classList.remove("autocomplete-active");
            }
        }
        function closeAllLists(elmnt) {
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
            if (elmnt != x[i] && elmnt != inp) {
                x[i].parentNode.removeChild(x[i]);
            }
            }
        }
        document.addEventListener("click", function (e) {
            closeAllLists(e.target);
        });
    }
    var country = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
    autocomplete(document.getElementById("searchInput"), country);

    //Stepper Create Recipe
    const stepButtons = document.querySelectorAll('.step-button');
    const progress = document.querySelector('#progress');

    Array.from(stepButtons).forEach((button,index) => {
        button.addEventListener('click', () => {
            progress.setAttribute('value', index * 100 /(stepButtons.length - 1) );//there are 3 buttons. 2 spaces.

            stepButtons.forEach((item, secindex)=>{
                if(index > secindex){
                    item.classList.add('done');
                }
                if(index < secindex){
                    item.classList.remove('done');
                }
            })
        })
    });
</script>

<script>
    $(document).ready(function () {
        //Add preferred recipe.
        i = 1;
        $("#add_preferred_recipe").on('click', function () {
            if(i <= 3){
                var rcp = $("#recipe_type").val();
                $('#data_preferred_recipe').append(
                    '<div class="card border-0 rounded m-1 p-2 text-white text-center" style="background: rgba(25, 135, 84, 0.4); width:30%;"><input name="recipe_type_preferred[]" class="form-control" hidden value="'+ rcp +'">'+ rcp +'</div>');
                i++;
            }
        })
    });
</script>
