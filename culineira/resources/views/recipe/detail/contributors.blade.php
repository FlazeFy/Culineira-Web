<div class="row" style='height:90px;'>
@foreach($user as $data2)
    @if($data->user_id == $data2->id)
    <div class="card border-gray m-2" style='min-width:40px; width:40px; border:none; background:transparent; margin-top:5px;' type='button'>
        <a href="">
        <img class="img logo rounded-circle mb-3" src="http://127.0.0.1:8000/storage/{{ $data2->image_url }}" alt='{{ $data2->image_url }}'  class="rounded-circle mr-1"
            style='display: block; margin-left: auto; margin-right: auto; width:40px;'>
        <a style='font-size:11px; white-space: nowrap;  display: block; margin-left: auto; margin-right: auto; margin-top:-10px;' id="recipe_maker">{{$data2->username}}</a>
        </a>
    </div>
    @endif
@endforeach
</div>
