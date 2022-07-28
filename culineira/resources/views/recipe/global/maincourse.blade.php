<div class='container-fluid mb-3'>
    <h3 class="mb-2">Main Course</h3>
    <div class="fs-8" style='font-size:14px; color:#808080; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; line-clamp: 3; -webkit-box-orient: vertical;'
        ><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="row">
    @foreach($recipe as $data)
        @if(($data->recipe_type == 'Main Course')&&($data->recipe_visibility != 'Private'))
            @foreach($user as $data2)
            @if($data->user_id == $data2->id)
            <li class="card border-gray w-25 p-2 border m-3" style='min-width:250px;'>
                <img src="http://127.0.0.1:8000/storage/{{ $data->recipe_url }}?>" alt='{{$data->recipe_url}}'
                    style='margin-top:-60px; width:50%; display: block; margin-left: auto; margin-right: auto;'>
                <img src="http://127.0.0.1:8000/storage/{{ $data2->image_url }}" alt='{{ $data2->image_url }}'
                    style='border-radius:100%; margin-top:-40px; margin-left:20px; width:40px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>
                <img src="http://127.0.0.1:8000/assets/image/country/<?php echo $data->recipe_country;?>.png" alt='<?php echo $data->recipe_country.".png";?>' title='<?php echo $data->recipe_country;?>'
                    style='border-radius:100%; width:40px; margin-top:30px; margin-left:200px; position:absolute; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>
                <h5 style='font-size:16px; text-align:center;'>{{$data->recipe_name}}</h5>
                <div class='container' id='headingCard' style='padding:5px;'>
                    <div class='row' style='justify-content:center; width:110%;'>
                        <div class='col-md-5'>
                            <a style='font-size:12px; color:#5cb85c;'>{{$data->recipe_level}}</a>
                        </div>
                        <div class='col-md-5'>
                            <a style='font-size:12px;'>{{$data->recipe_type}}</a>
                        </div>
                    </div>
                </div>
                <div class='container mt-2'>
                    <div class='row' style='justify-content:center; width:110%;'>
                        <div class='col-md-3'>
                            <a style='font-size:15px; font-weight:bold; text-align:center;'>{{$data->recipe_time_spend}}</a>
                            <p style='font-size:12px;'>min</p>
                        </div>
                        <div class='col-md-3'>
                            <a style='font-size:15px; font-weight:bold; text-align:center;'>{{$data->recipe_calorie}}</a>
                            <p style='font-size:12px;'>cal</p>
                        </div>
                        <div class='col-md-4'>
                            <p style='font-size:12px; justify-content:center; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; line-clamp: 2; -webkit-box-orient: vertical;'>{{$data->recipe_main_ing}}</p>
                        </div>
                    </div>
                </div>
                <a class='btn btn-primary' href="{{ url('/detail/' . $data->id) }}"><i class="fa-solid fa-arrow-right"></i> Cook Now</a>
            </li>
            @endif
            @endforeach
        @endif
    @endforeach
    </div>
</div>
