<div class='container-fluid mb-3'>
    <h3 class="mb-2">New Recipes this week</h3>
    <div class="row" style='overflow-x: scroll; width:auto; height:140px;'><!--Row must support horizontal scroll without multiple line-->
        <div class="card border-gray" style='min-width:100px; width:120px; border:none; background:transparent;' type='button' data-bs-toggle="modal" data-bs-target="#createInstantRecipe">
            <img src="http://127.0.0.1:8000/assets/image/icon/CreateNewRecipe.png" alt='CreateNewRecipe.png'
                style='border-radius:100%; margin-top:10px; width:80px; box-shadow: rgba(0, 0, 0, 0.25) 0px 5px 15px; background:#EB7336; display: block; margin-left: auto; margin-right: auto;'>
            <img src="http://127.0.0.1:8000/assets/image/icon/Add.png" alt='Add.png' id="addRecipeButton">
            <a style='font-size:11px; white-space: nowrap;  display: block; margin-left: auto; margin-right: auto;'>New Recipe</a>
        </div>
        @foreach($recipe as $data)
            @foreach($user as $data2)
            @if($data->user_id == $data2->id)
            @if(strtotime($data->created_at) > strtotime('-7 day'))
            <div class="card border-gray" style='min-width:100px; width:120px; border:none; background:transparent; margin-top:5px;' type='button'>
                <a href="{{ url('/detail/' . $data->id) }}">
                <img src="http://127.0.0.1:8000/storage/{{ $data->recipe_url }}?>" alt='{{$data->recipe_url}}'
                    style='border-radius:100%; margin-top:-10px; width:100px; display: block; margin-left: auto; margin-right: auto;'>
                <img src="http://127.0.0.1:8000/storage/{{ $data2->image_url }}" alt='{{ $data2->image_url }}'
                    style='border-radius:100%; margin-top:-80px; width:40px; border:3px solid #eb7336; box-shadow: rgba(0, 0, 0, 0.25) 0px 5px 15px;'>
                <a style='font-size:11px; white-space: nowrap;  display: block; margin-left: auto; margin-right: auto; margin-top:-30px;'>{{$data->recipe_name}}</a>
                </a>
            </div>
            @endif
            @endif
            @endforeach
        @endforeach
    </div>
</div>
