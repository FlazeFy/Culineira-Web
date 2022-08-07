<ul class="list-group list-group-flush">
    @foreach($socmedId as $s)
        @csrf
        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-0 bg-transparent">
            <h6 class="mb-2"><i class="fa-brands fa-facebook fa-lg"></i> Facebook</h6>
            <h6>{{$s->socmed_facebook}}</h6>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-0 bg-transparent">
            <h6 class="mb-2"><i class="fa-brands fa-youtube fa-lg"></i> Youtube</h6>
            <h6>{{$s->socmed_youtube}}</h6>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-0 bg-transparent">
            <h6 class="mb-2"><i class="fa-brands fa-tiktok fa-lg"></i> TikTok</h6>
            <h6>{{$s->socmed_tiktok}}</h6>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-0 bg-transparent">
            <h6 class="mb-2"><i class="fa-brands fa-instagram fa-lg"></i> Instagram</h6>
            <h6>{{$s->socmed_instagram}}</h6>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-0 bg-transparent">
            <h6 class="mb-2"><i class="fa-brands fa-linkedin fa-lg"></i> LinkedIn</h6>
            <h6>{{$s->socmed_linkedin}}</h6>
        </li>
    @endforeach
</ul>
