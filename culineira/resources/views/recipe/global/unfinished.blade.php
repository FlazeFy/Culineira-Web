@php($unfinished=0)
@foreach($recipe as $data)
    @foreach($user as $data2)
        @if(($data->user_id == $data2->id)&&($data2->username == session()->get('usernameKey')))
            @php($a=0)
            @php($b=0)
            @php($id=1)
            @if($data->user_id == $id)
                @foreach($ingredients as $ing)
                    @if($ing->recipe_id == $data->id)
                        @php($a++)
                    @endif
                @endforeach
                @foreach($steps as $stp)
                    @if($stp->recipe_id == $data->id)
                        @php($b++)
                    @endif
                @endforeach
                @if(($a == 0)||($b == 0))
                    @php($unfinished++)
                @endif
            @endif
        @endif
    @endforeach
@endforeach
@if($unfinished > 0)
    <div class='container-fluid mb-3 p-2' style='background: rgba(255, 0, 0, 0.2);'>
        <h5 class="mb-1">You have unfinished recipe <i class="fa-solid fa-circle-exclamation" type="button" data-bs-toggle="popover" title="Warning !" data-bs-content="Your unfinished recipe will be automaticly delete after a week since it was created"></i></h5>
        <button class="btn btn-link text-decoration-none" id="unfinishedRecipe" data-bs-toggle="collapse" data-bs-target="#collapseUnfinished">
            <a class="text-secondary" id="unfinishedButtonText">Show Recipe</a> <i class="fa-solid fa-circle-chevron-down text-secondary" id="dropIcon"></i></button>
        <div class="collapse" id="collapseUnfinished">
            <div class="row" style='overflow-x: scroll; width:auto; height:130px;'>
                @foreach($recipe as $data)
                    @php($i=0)
                    @php($j=0)
                    @if($data->user_id == $id)
                        @foreach($ingredients as $ing)
                            @if($ing->recipe_id == $data->id)
                                @php($i++)
                            @endif
                        @endforeach
                        @foreach($steps as $stp)
                            @if($stp->recipe_id == $data->id)
                                @php($j++)
                            @endif
                        @endforeach
                        @if(($i == 0)||($j == 0))
                        <div class="card border-gray" style='min-width:100px; width:120px; border:none; background:transparent;' type='button' data-bs-toggle="modal" data-bs-target="#dependenciesRecipe<?php echo "_".$data->id; ?>">
                            <img src="http://127.0.0.1:8000/storage/{{ $data->recipe_url }}?>" alt='{{$data->recipe_url}}'
                                style='border-radius:100%; margin-top:-10px; width:100px; display: block; margin-left: auto; margin-right: auto;'>
                            <img src="http://127.0.0.1:8000/assets/image/icon/Continue.png" alt='Add.png' id="addRecipeButton" style='padding:5px;'>
                            <a style='font-size:11px; white-space: nowrap;  display: block; margin-left: auto; margin-right: auto;'>{{$data->recipe_name}}</a>
                        </div>
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endif
