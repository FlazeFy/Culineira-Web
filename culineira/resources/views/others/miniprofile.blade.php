@foreach($user as $data)
    @if($data->username == session()->get('usernameKey'))
    <div class='container-fluid p-2 pt-3 rounded-3' title='Click to open profile' type='button'>
        <a href="{{ url('/profile') }}">
        <img class="img logo rounded-circle mb-3" src="http://127.0.0.1:8000/storage/{{ $data->image_url }}" alt='{{ $data->image_url }}'
        style='display: block; margin-left: auto; margin-right: auto;'>
        <h5 class="text-center" style='color:color:#2F4858;'>@<span>{{$data->username}}</span></h5>
        <div class='row' style='justify-content:center;'>
            <div class='col-md-3'>
                <a style='font-size:15px; font-weight:bold; text-align:center;'>{{@count($following)}}</a>
                <a style='font-size:12px;'>Following</a>
            </div>
            <div class='col-md-3'>
                <a style='font-size:15px; font-weight:bold; text-align:center;'>{{@count($followers)}}</a>
                <a style='font-size:12px;'>Followers</a>
            </div>
            <div class='col-md-3'>
                <a style='font-size:15px; font-weight:bold; text-align:center;'>{{@count($myrecipes)}}</a>
                <a style='font-size:12px;'>Recipes</a>
            </div>
        </div>
        </a>
    </div>
    @endif
@endforeach
