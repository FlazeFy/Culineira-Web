<div class="container-fluid mb-2">
    <b>Required</b><br>
    @php($i=1)
    @foreach($ingredients as $ing)
        @if(($ing->recipe_id == $data->id)&&($ing->ingredients_type == "Required"))
            <a style="font-size:12px;">{{$ing->ingredients_vol}} ~ {{$ing->ingredients_name}}</a><br>
            @php($i++)
        @endif
    @endforeach

    <br><b>Optional</b><br>
    @php($i=1)
    @foreach($ingredients as $ing)
        @if(($ing->recipe_id == $data->id)&&($ing->ingredients_type == "Optional"))
            <a style="font-size:12px;">{{$ing->ingredients_vol}} ~ {{$ing->ingredients_name}}</a><br>
            @php($i++)
        @endif
    @endforeach
</div>
