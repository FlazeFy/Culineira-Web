<div class="row">
    @foreach($favorite as $fvt)
        <li class="card border-gray w-25 p-2 border m-3" style='min-width:250px;'>
            <img src="http://127.0.0.1:8000/storage/{{ $fvt->recipe_url }}?>" alt='{{$fvt->recipe_url}}'
                style='margin-top:-60px; width:50%; display: block; margin-left: auto; margin-right: auto;'>
            <img src="http://127.0.0.1:8000/storage/{{ $fvt->user_image }}" alt='{{ $fvt->user_image }}'
                style='border-radius:100%; margin-top:-40px; margin-left:20px; width:40px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>
            <img src="http://127.0.0.1:8000/assets/image/country/{{$fvt->recipe_country}}.png" alt='{{$fvt->recipe_country}}.png";?>' title='{{$fvt->recipe_country}}'
                style='border-radius:100%; width:40px; margin-top:30px; margin-left:200px; position:absolute; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>
            <h5 style='font-size:16px; text-align:center;'>{{$fvt->recipe_name}}</h5>
            <div class='container' id='headingCard' style='padding:5px;'>
                <div class='row' style='justify-content:center; width:110%;'>
                    <div class='col-md-5'>
                        <a style='font-size:12px; color:#5cb85c;'>{{$fvt->recipe_level}}</a>
                    </div>
                    <div class='col-md-5'>
                        <a style='font-size:12px;'>{{$fvt->recipe_type}}</a>
                    </div>
                </div>
            </div>
            <div class='container mt-2'>
                <div class='row' style='justify-content:center; width:110%;'>
                    <div class='col-md-3'>
                        <a style='font-size:15px; font-weight:bold; text-align:center;'>{{$fvt->recipe_time_spend}}</a>
                        <p style='font-size:12px;'>min</p>
                    </div>
                    <div class='col-md-3'>
                        <a style='font-size:15px; font-weight:bold; text-align:center;'>{{$fvt->recipe_calorie}}</a>
                        <p style='font-size:12px;'>cal</p>
                    </div>
                    <div class='col-md-4'>
                        <p style='font-size:12px; justify-content:center; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; line-clamp: 2; -webkit-box-orient: vertical;'>{{$fvt->recipe_main_ing}}</p>
                    </div>
                </div>
            </div>
            <a class='btn btn-primary' href="{{ url('/detail/' . $fvt->id) }}"><i class="fa-solid fa-arrow-right"></i> Cook Now</a>
        </li>
    @endforeach
</div>