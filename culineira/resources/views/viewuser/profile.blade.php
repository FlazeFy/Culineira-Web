<div class="card-body">
    <div class="d-flex flex-column align-items-center text-center">
        <img id="frame" class="img logo rounded-circle shadow" src="http://127.0.0.1:8000/storage/{{ $u->image_url }}" alt='{{ $u->image_url }}'
            style='display: block; margin-left: auto; margin-right: auto; width:200px;'>
        <div class="mb-1">
            <h4>{{$u->username}}</h4>
            <p class="text-secondary mb-1"><i class="fa-solid fa-location-dot"></i> {{$u->country}}</p>
            <p class="text-muted font-size-sm">{{$u->description}}</p>
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
        </div>
        @php($i = 0)
        @foreach($following as $fsw)
            @if($fsw->user_id_2 == $u->id)
                <form action="/community/view/unfollow/{{$fsw->id}}" method="POST">
                    @csrf
                    <input hidden name="username" value="{{$u->username}}">
                    <button class="btn btn-primary w-100 border-0" type="submit" style="background:#EB7336;"><i class="fa-solid fa-check"></i> UnFollow</button>
                </form>
                @php($i++)
            @endif
        @endforeach
        @if($i == 0)
            <form action="/community/view/follow/{{$u->id}}" method="POST">
                @csrf
                <input hidden name="username" value="{{$u->username}}">
                <button class="btn btn-primary bg-transparent w-100" type="submit" style="color:#EB7336;">Follow</button>
            </form>
        @endif
    </div>
</div>
