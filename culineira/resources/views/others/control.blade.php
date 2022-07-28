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
                <option value="All" selected>All</option>
                @foreach (\App\Models\search_config::all() as $item)
                    @if($item->config_type == 'type')
                    <option value="{{$item->config_value}}">{{$item->config_value}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class='col-sm-2 mt-1'>
            <select class="form-select" aria-label="Default select example">
                <option value="All" selected>All</option>
                @foreach (\App\Models\search_config::all() as $item)
                    @if($item->config_type == 'level')
                    <option value="{{$item->config_value}}">{{$item->config_value}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class='col-sm-2 mt-1'>
            <select class="form-select" aria-label="Default select example">
                <option value="All" selected>All</option>
                @foreach (\App\Models\search_config::all() as $item)
                    @if($item->config_type == 'time')
                    <option value="{{$item->config_value}}">{{$item->config_value}}</option>
                    @endif
                @endforeach
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
    var recipeName = [
        @foreach($recipe as $data)<?php echo "'"; echo $data['recipe_name']; echo "',"; ?>@endforeach
        @foreach($user as $data)<?php echo "'@"; echo $data['username']; echo "',"; ?>@endforeach
    ];
    autocomplete(document.getElementById("searchInput"), recipeName);
</script>
