<style>
    #communityBox{
        width:30%;
        background-position: center;
        background-repeat:no-repeat;
        position: relative;
        background-size: cover;
        background-color: black;
    }
    #communityTitle{
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        line-clamp: 1;
        -webkit-box-orient: vertical;
    }
    #community-holder{
        display: flex;
        flex-direction: row;
        max-height: 400px;
        overflow-y: scroll;
    }
</style>

<h6 class="d-flex align-items-center mb-3">Community</h6>
<div class="row m-1" id="community-holder">

    @foreach($groupId as $g)
    <div class="container rounded h-50 m-2 p-2" id="communityBox"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url('http://127.0.0.1:8000/storage/{{$g->groups_image}}');">
        <a type="button" class="w-100 h-100" title="See Comunity">
        <div class="d-flex justify-content-between">
            <div class="d-flex flex-row align-items-center">
                <div class="ms-2 c-details">
                    <h6 class="mb-0 text-white" id="communityTitle">{{$g->groups_name}}</h6>
                    <span class="text-white" style="font-size:12px;">{{$g->created_at}}</span>
                </div>
            </div>
            <div class="badge">{{$g->groups_type}}</div>
        </div>
        <div class="mt-5">
            @foreach($user as $u2)
                @if($u2->id == $g->founder_id)
                    <h6 class="heading text-white"><i class="fa-solid fa-user"></i> {{$u2->username}}</h6>
                @endif
            @endforeach
            <div class="mt-1 text-white">32 Member</div>
        </div>
        </a>
    </div>
    @endforeach

</div>
