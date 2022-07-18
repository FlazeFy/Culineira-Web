<div class='container-fluid mb-1 bg-transparent' style='margin-top:-30px;'>
    <div class='row'>
        <div class='col-sm-4'>
            <form autocomplete="off" action="" method="POST">
            <div class="input-group mb-3">
                <span class="input-group-text"><button class="btn btn-primary p-1" style="height:30px; width:30px;"><i class="fa-solid fa-magnifying-glass fa-xs"></i></button></span>
                <input type="text" class="form-control" id="searchInput" onkeyup="searchName()" name="search" placeholder="recipe name, or main ingredients" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            </form>
        </div>
        <div class='col-sm-2 mt-1'>
            <select class="form-select" aria-label="Default select example">
                <option value="Oriental">Oriental</option>
                <option value="Middle Eastern">Middle Eastern</option>
                <option value="Continental">Continental</option>
                <option value="Indian">Indian</option>
                <option value="Chinese">Chinese</option>
                <option value="Korean & Japanese">Korean & Japanese</option>
            </select>
        </div>
        <div class='col-sm-2 mt-1'>
            <select class="form-select" aria-label="Default select example">
                <option value="Beginner">Beginner</option>
                <option value="Intermediate">Intermediate</option>
                <option value="Expert">Expert</option>
            </select>
        </div>
        <div class='col-sm-2 mt-1'>
            <select class="form-select" aria-label="Default select example">
                <option value="20">< 20 min</option>
                <option value="<45">< 45 min</option>
                <option value=">45">> 45 min</option>
            </select>
        </div>
        <div class='col-sm-2 mt-1'>
            <button class="btn btn-primary"><i class="fa-solid fa-filter"></i> Filter</button>
        </div>
    </div>
    <a class="text-secondary">Filtered by : </a>
</div>

<script>
    function searchName() {
        var input, filter, ul, li, name, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        ul = document.getElementById("recipe_list_holder");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            name = li[i].getElementsByTagName("h5")[0];
            txtValue = name.textContent || name.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
</script>
