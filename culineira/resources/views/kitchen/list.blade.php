<style>

</style>

<div class="scrolling-wrapper">
    @foreach($list as $l)
    <div class="card border-gray p-2 border m-2" style='width:260px; height:410px;' id="list_box{{$l->id}}">
        <div class='row' style='justify-content:center; width:110%;'>
            <div class='col-md-2'>
                @if($l->list_status == "null")
                    <a type="button" title="Stared"><i class="fa-regular fa-star fa-lg"></i></a>
                @else
                    <a type="button" title="UnStared"><i class="fa-solid fa-star fa-lg" style="color:#FED201;"></i></a>
                @endif
            </div>
            <div class='col-md-8'>
                <h5 id='list_title'>{{$l->list_name}}</h5>
            </div>
            <div class='col-md-2'>
                <div class="form-check">
                    <input class="form-check-input" title="Select" style="cursor:pointer; height:20px; width:20px;" type="checkbox" name="list_id[]" value="{{$l->id}}" id="list_check{{$l->id}}">
                </div>
            </div>
        </div>
        <div class='container'>
            <div class='row' style='justify-content:center; width:110%;'>
                <div class='col-md'>
                    <b style='font-size:13px; text-align:center;'>Recipe</b><br>
                    <a style='font-size:11px;'>
                    @php($countR = 0)
                    @foreach($recipeInList as $rl)
                        @if($rl->list_id == $l->id)
                            @php($countR++)
                        @endif
                    @endforeach
                    {{$countR}}
                    </a>
                </div>
                <div class='col-md'>
                    <b style='font-size:13px; text-align:center;'>Updated At</b><br>
                    <a style='font-size:11px;'>{{$l->updated_at}}</a>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="height:15%;">
            <p id='list_desc'>{{$l->list_description}}</p>
        </div>
        <div class="p-1" id="recipe_list_holder">
            @foreach($recipeInList as $rl)
                @if($rl->list_id == $l->id)
                    <div class='container mb-2 p-1' type="button" id='headingCard{{$l->id}}'>
                        <div class='row w-100' style='justify-content:center;'>
                            <div class='col-md-7' style='overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; line-clamp: 1; -webkit-box-orient: vertical;'>
                                <a style='font-size:12px;'> {{$rl->recipe_name}}</a>
                            </div>
                            <div class='col-md-5'>
                                <a style='font-size:12px; white-space:nowrap;'> {{$rl->recipe_type}}</a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div><!--End of recipe list holder.-->
        <a class="btn btn-success my-2" id="add_recipe_list" data-bs-toggle="modal" data-bs-target="#addRecipeList{{$l->id}}"><i class="fa-solid fa-plus"></i> Add Recipe</a>
        <a class='btn btn-primary' href="{{ url('/kitchen/browse-list/' . $l->id) }}"><i class="fa-solid fa-arrow-right"></i> Browse</a>
    </div><!--End of list card.-->
    @endforeach
</div>

<script>
    $(document).ready(function(){
        <?php
            foreach($list as $l){
                echo"
                    $('#list_check".$l->id."').click(function(){
                        if($('#list_check".$l->id."').is(':checked')){
                            $('#list_box".$l->id."').css({'background-color': '#EB7336', 'color': 'white'});
                            $('#list_box".$l->id." p').css({'color': 'white'});
                            $('#list_box".$l->id." #list_title').css({'color': 'white'});
                            $('#list_check".$l->id."').attr('title', 'UnSelect');
                            $('#headingCard".$l->id."').css({'background-color': '#262728'});
                        } else {
                            $('#list_box".$l->id."').css({'background-color': 'white', 'color': '#212121'});
                            $('#list_box".$l->id." p').css({'color': '#212121'});
                            $('#list_box".$l->id." #list_title').css({'color': '#212121'});
                            $('#list_check".$l->id."').attr('title', 'Select');
                            $('#headingCard".$l->id."').css({'background-color': '#F0F0F0'});
                        }
                    });
                ";
            }
        ?>
    });
</script>
