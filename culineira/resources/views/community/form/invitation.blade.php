<style>
    #userDesc{
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        line-clamp: 2;
        -webkit-box-orient: vertical;
    }
</style>

@foreach($groupId as $g)
    @if($g->id == session()->get('groupKey'))
        @if((($g->groups_type == "Private")&&(($me == "founder")||($me == "admin")))||($g->groups_type == "Public"))
        <div class="modal fade" id="invitation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{$g->groups_name}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md">
                                <h5>To My Following</h5>
                                <div id="follower_holder">
                                @foreach($following as $flw)
                                    @foreach($user as $u)
                                        @if($u->id == $flw->user_id_2)
                                        <div class="card border-gray py-2 px-3 my-1 rounded">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <img class="img logo rounded-circle" src="http://127.0.0.1:8000/storage/{{$u->image_url}}" alt='{{$u->image_url}}' class="rounded-circle mr-1"
                                                        style='display: block; margin-left: auto; margin-right: auto; width:40px;'>
                                                </div>
                                                <div class="col-md-8">
                                                    <h6>{{$u->username}}</h6>
                                                    <a id="userDesc">{{$u->description}}</a>
                                                </div>
                                                <div class="col-md-2">
                                                    @php($wait = false)
                                                    @php($joined = false)
                                                    @foreach($invitWait as $iw)
                                                        @if($iw->users_id_2 == $u->id)
                                                            <form action="/community/uninvite/{{$iw->id}}" method="POST">
                                                                @csrf
                                                                <input hidden name="username" value="{{$u->username}}">
                                                                <button type="submit" class="btn btn-danger mx-1" title="UnSend Invitation"><i class="fa-solid fa-xmark fa-xl"></i></button>
                                                            </form>
                                                            @php($wait = true)
                                                        @endif
                                                    @endforeach
                                                    @if(!$wait)
                                                        @foreach($member as $m)
                                                            @if($m->id_user == $u->id)
                                                                <button class="btn btn-transparent mx-1" title="Already Join" style="color:#EB7336;"><i class="fa-solid fa-check fa-lg"></i></button>
                                                                @php($joined = true)
                                                            @endif
                                                        @endforeach
                                                        @if(!$joined)
                                                            <form action="/community/invite/{{$flw->user_id_2}}" method="POST">
                                                                @csrf
                                                                <input hidden name="username" value="{{$u->username}}">
                                                                <button type="submit" class="btn btn-success mx-1" title="Send Invitation"><i class="fa-solid fa-envelope"></i></button>
                                                            </form>
                                                        @endif
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
                                @endforeach
                                </div>
                            </div>
                            <div class="col-md">
                                <h5>To My Followers</h5>
                                <div id="follower_holder">
                                @foreach($followers as $flr)
                                    @foreach($user as $u2)
                                        @if($u2->id == $flr->user_id_1)
                                        <div class="card border-gray py-2 px-3 my-1 rounded">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <img class="img logo rounded-circle" src="http://127.0.0.1:8000/storage/{{$u2->image_url}}" alt='{{$u2->image_url}}' class="rounded-circle mr-1"
                                                        style='display: block; margin-left: auto; margin-right: auto; width:40px;'>
                                                </div>
                                                <div class="col-md-8">
                                                    <h6>{{$u2->username}}</h6>
                                                    <a id="userDesc">{{$u2->description}}</a>
                                                </div>
                                                <div class="col-md-2">
                                                    @php($wait = false)
                                                    @php($joined = false)
                                                    @foreach($invitWait as $iw2)
                                                        @if($iw2->users_id_2 == $u2->id)
                                                            <form action="/community/uninvite/{{$iw2->id}}" method="POST">
                                                                @csrf
                                                                <input hidden name="username" value="{{$u2->username}}">
                                                                <button type="submit" class="btn btn-danger mx-1" title="UnSend Invitation"><i class="fa-solid fa-xmark fa-xl"></i></button>
                                                            </form>
                                                            @php($wait = true)
                                                        @endif
                                                    @endforeach
                                                    @if(!$wait)
                                                        @foreach($member as $m)
                                                            @if($m->id_user == $u2->id)
                                                                <button class="btn btn-transparent mx-1" title="Already Join" style="color:#EB7336;"><i class="fa-solid fa-check fa-lg"></i></button>
                                                                @php($joined = true)
                                                            @endif
                                                        @endforeach
                                                        @if(!$joined)
                                                            <form action="/community/invite/{{$flr->user_id_1}}" method="POST">
                                                                @csrf
                                                                <input hidden name="username" value="{{$u2->username}}">
                                                                <button type="submit" class="btn btn-success mx-1" title="Send Invitation"><i class="fa-solid fa-envelope"></i></button>
                                                            </form>
                                                        @endif
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="modal fade" id="invitation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{$g->groups_name}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <a><i class="fa-solid fa-circle-info"></i> Because you're now a member. You cant use this feature in private group</a>
                    </div>
                </div>
            </div>
        </div>
        @endif
    @endif
@endforeach
