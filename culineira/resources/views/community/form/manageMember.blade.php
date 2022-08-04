@foreach($groupId as $g)
    @if($g->id == session()->get('groupKey'))
    <div class="modal fade" id="manageMember" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{$g->groups_name}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>Manage Member</h6>
                    <div class="row">
                        <!--Manage based role-->
                        @foreach($member as $m)
                            <div class="card border-gray m-1 p-2" style="width:23%;" type='button'>
                                <img class="img logo rounded-circle mx-auto d-block w-100" src="http://127.0.0.1:8000/storage/{{$m->image_url}}" alt='{{$m->image_url}}' title="{{$m->username}}">
                                <a class="text-center">@
                                    <span>
                                        @if($m->username == session()->get('usernameKey'))
                                            You-{{$m->role}}
                                        @else
                                            {{$m->username}}-{{$m->role}}
                                        @endif
                                    </span>
                                </a>
                                <a class="text-center" style="font-size:11px;">Joined at {{date('d/m/y', strtotime($m->joined_at))}}</a>
                                <div class="row mt-1"  style="width:105%;">
                                    @if($m->username != session()->get('usernameKey'))
                                        @if($me == "founder")
                                            <div class="col-md-6">
                                                <form action="community/promote/{{$m->id_rel}}" method="POST">
                                                    @csrf
                                                    <input hidden value="{{$m->role}}" name="role0">
                                                    <input hidden value="{{$me}}" name="role1">
                                                    <input hidden value="{{$m->id_user}}" name="id_member">
                                                    <button class="btn btn-success m-1" type="submit" style="font-size:12px;">Promote</button>
                                                </form>
                                            </div>
                                            @if($m->role == "member")
                                            <div class="col-md-5">
                                                <form action="community/kick/{{$m->id_rel}}" method="POST">
                                                    @csrf
                                                    <input hidden value="{{$m->role}}" name="role0">
                                                    <input hidden value="{{$me}}" name="role1">
                                                    <input hidden value="{{$m->id_user}}" name="id_member">
                                                    <button class="btn btn-danger m-1" style="font-size:12px;">Kick</button>
                                                </form>
                                            </div>
                                            @else
                                            <div class="col-md-5">
                                                <form action="community/demote/{{$m->id_rel}}" method="POST">
                                                    @csrf
                                                    <input hidden value="{{$m->role}}" name="role0">
                                                    <input hidden value="{{$me}}" name="role1">
                                                    <input hidden value="{{$m->id_user}}" name="id_member">
                                                    <button class="btn btn-danger m-1" style="font-size:12px;">Demote</button>
                                                </form>
                                            </div>
                                            @endif
                                        @elseif($me == "admin")
                                            @if(($m->role != "founder")&&($m->role != "admin"))
                                            <div class="col-md-6">
                                                <form action="community/promote/{{$m->id_rel}}" method="POST">
                                                    @csrf
                                                    <input hidden value="{{$m->role}}" name="role0">
                                                    <input hidden value="{{$me}}" name="role1">
                                                    <input hidden value="{{$m->id_user}}" name="id_member">
                                                    <button class="btn btn-success m-1" type="submit" style="font-size:12px;">Promote</button>
                                                </form>
                                            </div>
                                            <div class="col-md-5">
                                                <form action="community/demote/{{$m->id_rel}}" method="POST">
                                                    @csrf
                                                    <input hidden value="{{$m->role}}" name="role0">
                                                    <input hidden value="{{$me}}" name="role1">
                                                    <input hidden value="{{$m->id_user}}" name="id_member">
                                                    <button class="btn btn-danger m-1" style="font-size:12px;">Demote</button>
                                                </form>
                                            </div>
                                            @endif
                                        @else
                                            <div class="col">
                                                <a style="font-size:10px;">Because you're now a member. You cant use this feature</a>
                                            </div>
                                        @endif
                                    @else
                                        @if(count($member) != 1)
                                            <div class="col">
                                                <form action="community/leave/{{$m->id_rel}}" method="POST">
                                                    @csrf
                                                    <button class="btn btn-danger m-1 w-100" type="submit" style="font-size:12px;">Leave Group</button>
                                                </form>
                                            </div>
                                        @else
                                            <!--If only one member left in group-->
                                            <form action="/community/deleteGroup" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-danger m-1 w-100" style="font-size:12px;"><i class="fa-solid fa-triangle-exclamation"></i> Delete Group</button>
                                            </form>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@endforeach
