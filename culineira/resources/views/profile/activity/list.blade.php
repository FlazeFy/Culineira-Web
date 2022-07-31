<style>

</style>

<h3 class="mb-2">Activity</h3>
<div class="row py-2" id="recipe_list_holder">
    @foreach($activityId as $av)
    <li class="card border-gray p-2 border mx-2 my-2" style='min-width:250px; width:20%;'> <!--If error, change <li> to <div>-->
        <div class="row">
            <div class="col-md-3">
                <img class="img-fluid rounded-circle d-block mx-auto" src="http://127.0.0.1:8000/storage/{{ $u->image_url }}" alt='{{ $u->image_url }}'
                    style="width:80px;">
            </div>
            <div class="col-md-9">
                <h6>
                    @if($av->username == session()->get('usernameKey'))
                        You
                    @else
                        {{$av->username}}
                    @endif
                </h6>
                <a class="text-secondary">Notification ~
                    @if($av->activity_type == "group-kick")
                        group
                    @else
                        {{$av->activity_type}}
                    @endif
                </a>
            </div>
        </div>
        <a>
            @if($av->username == session()->get('usernameKey'))
                You {{$av->activity_description}}
            @else
                {{$av->username}} {{$av->activity_description}}
            @endif
        </a><br>
        <a class="fst-italic text-secondary" style="font-size:12px;">on {{$av->created_at}}</a>
    </li>
    @endforeach
</div>
