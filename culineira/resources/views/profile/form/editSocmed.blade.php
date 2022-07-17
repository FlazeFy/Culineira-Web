<style>

</style>

<ul class="list-group list-group-flush">
    @foreach($socmedId as $s)
    <form action="/profile/updateSocmed/<?php echo $s->id; ?>" method="POST">
        @csrf
        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-0 bg-transparent">
            <h6 class="mb-2"><i class="fa-brands fa-facebook fa-lg"></i> Facebook</h6>
            <input class="form-control" name="socmed_facebook" value="{{$s->socmed_facebook}}" placeholder="{{$s->socmed_facebook}}">
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-0 bg-transparent">
            <h6 class="mb-2"><i class="fa-brands fa-youtube fa-lg"></i> Youtube</h6>
            <input class="form-control" name="socmed_youtube" value="{{$s->socmed_youtube}}" placeholder="{{$s->socmed_youtube}}">
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-0 bg-transparent">
            <h6 class="mb-2"><i class="fa-brands fa-tiktok fa-lg"></i> TikTok</h6>
            <input class="form-control" name="socmed_tiktok" value="{{$s->socmed_tiktok}}" placeholder="{{$s->socmed_tiktok}}">
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-0 bg-transparent">
            <h6 class="mb-2"><i class="fa-brands fa-instagram fa-lg"></i> Instagram</h6>
            <input class="form-control" name="socmed_instagram" value="{{$s->socmed_instagram}}" placeholder="{{$s->socmed_instagram}}">
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-0 bg-transparent">
            <h6 class="mb-2"><i class="fa-brands fa-linkedin fa-lg"></i> LinkedIn</h6>
            <input class="form-control" name="socmed_linkedin" value="{{$s->socmed_linkedin}}" placeholder="{{$s->socmed_linkedin}}">
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-0 bg-transparent">
            <button type="submit" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> Update</button>
        </li>
    </form>
    @endforeach
</ul>
