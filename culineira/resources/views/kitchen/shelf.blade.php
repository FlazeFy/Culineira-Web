<style>

</style>

<div class="row py-1" id="shelf_holder">
    @foreach($shelf as $s)
    <li class="card border-gray p-2 border mx-2 my-2" style='min-width:250px; width:250px; height:150px;' id="shelf_box{{$s->id}}"> <!--If error, change <li> to <div>-->
        <div class="row">
            <div class="col-md-9">
                <h6 class="mb-4">{{$s->item_name}}</h6>
                <div class="row">
                    <div class="col-md-9">
                        <a>{{$s->item_description}}</a>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <input type="number" name="item_qty[]" value="{{$s->item_qty}}" class="form-control" style="width:70px;" min="0" required>
                            <label for="floatingInput">Qty :</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
                <a title="Edit Item" data-bs-toggle="modal" data-bs-target="#updateItem-{{$s->id}}"><i class="fa-solid fa-pen-to-square"></i></a>
            </div>
            <div class="col-md-1">
                <div class="form-check">
                    <input class="form-check-input" title="Select" style="cursor:pointer; height:20px; width:20px;" type="checkbox" name="shelf_id[]" value="{{$s->id}}" id="shelf_check{{$s->id}}">
                </div>
            </div>
        </div>
        <a class="fst-italic" style="font-size:12px;">last updated: {{$s->updated_at}}</a>
    </li>
    @endforeach

    @if(@count($shelf) == 0)
        <img class="d-block mx-auto mt-4" src="{{asset('assets/storyset/Empty.png')}}" style="width:280px;">
        <h2 class="text-center mx-3" style="color:#Eb7336;">Shelf is empty</h2>
        <h6 class="text-center mx-3">You haven't create any item yet</h6>
    @endif
</div>

<script>
    $(document).ready(function(){
        <?php
            foreach($shelf as $s){
                echo"
                    $('#shelf_check".$s->id."').click(function(){
                        if($('#shelf_check".$s->id."').is(':checked')){
                            $('#shelf_box".$s->id."').css({'background-color': '#EB7336', 'color': 'white'});
                            $('#shelf_box".$s->id." a').css({'color': 'white'});
                            $('#shelf_box".$s->id." label').css({'color': '#212121'});
                            $('#shelf_check".$s->id."').attr('title', 'UnSelect');
                        } else {
                            $('#shelf_box".$s->id."').css({'background-color': 'white', 'color': '#212121'});
                            $('#shelf_box".$s->id." a').css({'color': '#212121'});
                            $('#shelf_check".$s->id."').attr('title', 'Select');
                        }
                    });
                ";
            }
        ?>
    });
</script>

