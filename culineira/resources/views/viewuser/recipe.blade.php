<div class="container-fluid h-100 rounded border-gray border p-2">
    <h6 class="d-flex align-items-center mb-3">Recipes</h6>
    <table class="table table-paginate" id="recipeTable" cellspacing="0" width="100%">
        <thead>
            <tr>
            <th scope="col">Image</th>
            <th scope="col">Name & Main Ingredients</th>
            </tr>
        </thead>
        <tbody>
            <!--Public Recipe List-->
            @foreach($recipeId as $r)
                <tr class='clickable-row'>
                    <td style='width:60px;'> <img class="rounded img-fluid d-block mx-auto" src="http://127.0.0.1:8000/storage/{{ $r->recipe_url }}" alt='{{ $r->recipe_url }}'></td>
                    <td>
                        <a class="text-primary fw-normal">{{$r->recipe_name}}</a><br>
                        <a class="text-secondary fw-normal">{{$r->recipe_main_ing}}</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
