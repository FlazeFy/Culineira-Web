<style>

</style>

<div class="container bg-transparent py-4" style="margin-top:15%;">
    <h2 class="text-dark text-center mt-5">THEIR EXPERIENCE</h2></header>
    <div class="row">
        @php($i = 1)
        @foreach($review as $rev)
            @if($i != 2)
            <div class="card border-0 bg-transparent mx-5 p-3 w-25">
                <img class="rounded-circle img-fluid rounded shadow w-75 mx-auto d-block" src="http://127.0.0.1:8000/assets/image/users/user_<?php echo $rev->username;?>.jpg" alt='user_<?php echo $rev->username; ?>.jpg'>
                <h4 class="text-center fw-bold">@ {{$rev->username}}</h4>
                <a class="text-center">"{{$rev->body}}"</a>
                <a class="text-center fst-italic fw-bold mt-2">joined since <?php echo date('F, Y', strtotime($rev->joined)); ?></a>
            </div>
            @else
            <div class="card border-0 bg-transparent mt-5 mx-5 p-3 w-25">
                <img class="rounded-circle img-fluid rounded shadow w-75 mx-auto d-block" src="http://127.0.0.1:8000/assets/image/users/user_<?php echo $rev->username;?>.jpg" alt='user_<?php echo $rev->username; ?>.jpg'>
                <h4 class="text-center fw-bold">@ {{$rev->username}}</h4>
                <a class="text-center">"{{$rev->body}}"</a>
                <a class="text-center fst-italic fw-bold mt-2">joined since <?php echo date('F, Y', strtotime($rev->joined)); ?></a>
            </div>
            @endif
            @php($i++)
        @endforeach
    </div>
</div>
