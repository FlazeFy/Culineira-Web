<div class="row py-4" id="recipe_list_holder">
    @foreach($recipeInList as $rl)
        @foreach($user as $data2)
            @if($rl->user_id == $data2->id)
            <li class="card border-gray w-25 p-2 border mx-2 my-3" style='min-width:250px;'> <!--If error, change <li> to <div>-->
                <div class="form-check">
                    <input class="form-check-input" title="Select" style="cursor:pointer; height:20px; width:20px; float:right; display:block;" type="checkbox" name="recipe_id[]" value="{{$rl->recipe_id}}" id="recipe_check{{$rl->recipe_id}}">
                </div>
                <img src="http://127.0.0.1:8000/storage/{{ $rl->recipe_url }}?>" alt='{{$rl->recipe_url}}'
                    style='margin-top:-60px; width:50%; display: block; margin-left: auto; margin-right: auto;'>
                <img src="http://127.0.0.1:8000/storage/{{ $data2->image_url }}" alt='{{ $data2->image_url }}'
                    style='border-radius:100%; margin-top:-50px; margin-left:10px; width:40px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>
                <img src="http://127.0.0.1:8000/assets/image/country/<?php echo $rl->recipe_country;?>.png" alt='<?php echo $rl->recipe_country.".png";?>' title='<?php echo $rl->recipe_country;?>'
                    style='border-radius:100%; width:40px; margin-top:32px; margin-left:180px; position:absolute; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>
                <h5 style='font-size:16px; text-align:center;'>{{$rl->recipe_name}}</h5>
                <div class='container' id='headingCard' style='padding:5px;'>
                    <div class='row' style='justify-content:center; width:110%;'>
                        <div class='col-md-5'>
                            <a style='font-size:12px; color:#5cb85c;'>{{$rl->recipe_level}}</a>
                        </div>
                        <div class='col-md-5'>
                            <a style='font-size:12px;'>{{$rl->recipe_type}}</a>
                        </div>
                    </div>
                </div>
                <div class='row mt-2' style='justify-content:center; width:110%;'>
                    <div class='col-md-3'>
                        <a style='font-size:14px; font-weight:bold; text-align:center;'>{{$rl->recipe_time_spend}}</a>
                        <p style='font-size:11px;'>min</p>
                    </div>
                    <div class='col-md-3'>
                        <a style='font-size:14px; font-weight:bold; text-align:center;'>{{$rl->recipe_calorie}}</a>
                        <p style='font-size:11px;'>cal</p>
                    </div>
                    <div class='col-md-4'>
                        <p id="main_ing" style='font-size:11px; justify-content:center; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; line-clamp: 2; -webkit-box-orient: vertical;'>{{$rl->recipe_main_ing}}</p>
                    </div>
                </div>
                <a class='btn btn-primary' href="{{ url('/detail/' . $rl->recipe_id) }}"><i class="fa-solid fa-arrow-right"></i> Cook Now</a>
            </li>
            @endif
        @endforeach
    @endforeach
</div><!--End of recipe list holder.-->
