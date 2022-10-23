<style>
    .activity-box:hover{
        background:#df4759;
        color:whitesmoke;
    }
    .activity-box:hover i, .activity-box:hover a{
        color:whitesmoke;
    }
</style>

<h3 class="mb-2">Activity</h3>
@if(count($activityId) != null)
    <form action="/profile/deleteAllActivity" method="POST">
        @csrf
        <button class="btn btn-danger m-1 position-absolute" style="right:5px; top:5px;" type="submit">Reset All</button>
    </form>
@endif
<div class="row py-2" id="recipe_list_holder">
    @foreach($activityId as $av)
        <li class="col-lg-3 col-md-4 col-sm-12 p-1" style="list-style-type: none;"> <!--If error, change <li> to <div>-->
            <div class="card activity-box w-100 p-3">
                <form action="/profile/deleteActivity/{{$av->id}}" method="POST">
                    @csrf
                    <button class="btn btn-transparent m-1 position-absolute" title="Delete activity" style="right:5px; top:5px;" type="submit"><i class="fa-solid fa-trash"></i></button>
                </form>
                <div class="row mb-2">
                    <div class="col-3">
                        <img class="img-fluid rounded-circle d-block mx-auto" src="http://127.0.0.1:8000/storage/{{ $u->image_url }}" alt='{{ $u->image_url }}'
                            style="width:60px;">
                    </div>
                    <div class="col-9">
                        <h6>
                            @if($av->username == session()->get('usernameKey'))
                                You
                            @else
                                {{$av->username}}
                            @endif
                        </h6>
                        <a>Notification ~
                            @if($av->activity_type == "group-kick")
                                group
                            @else
                                {{$av->activity_type}}
                            @endif
                        </a>
                    </div>
                </div>
                <div style="height:25px;">
                <a>
                    @if($av->username == session()->get('usernameKey'))
                        You {{$av->activity_description}}
                    @else
                        {{$av->username}} {{$av->activity_description}}
                    @endif
                </a>
                </div><br>
                <a class="fst-italic" style="font-size:12px;">on {{$av->created_at}}</a>
            </div>
        </li>
    @endforeach
    @if(count($activityId) == 0)
        <div class="container p-4 text-center">
            <img src="{{asset('assets/storyset/Empty3.png')}}" alt='empty.png' style="width:45vh;"><br>
            <h5>There's no recently activity</h5>
        </div>
    @endif
</div>
