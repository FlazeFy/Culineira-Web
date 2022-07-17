<div class="container-fluid h-100 rounded border-gray border p-2">
    <h6 class="d-flex align-items-center mb-3">Classroom</h6>
    <table class="table table-paginate" id="classTable" cellspacing="0" width="100%">
        <thead>
            <tr>
            <th scope="col">Image</th>
            <th scope="col">Class Name & Type</th>
            <th scope="col">Recipes</th>
            </tr>
        </thead>
        <tbody>
            <!--Classroom List-->
            @foreach($classId as $c)
                <tr class='clickable-row'>
                    <td style='width:60px;'> <img class="rounded img-fluid d-block mx-auto" src="http://127.0.0.1:8000/storage/{{ $c->classroom_image }}" alt='{{ $c->classroom_image }}'></td>
                    <td>
                        <a class="text-primary fw-normal">{{$c->classroom_name}}</a><br>
                        <a class="text-secondary fw-normal">{{$c->classroom_type}}</a>
                    </td>
                    <td><a class="text-primary fw-normal">10 Recipes</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
