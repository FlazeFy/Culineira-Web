<form action="/detail/likes/<?php echo $data->id;?>" method="POST" >
    @csrf
    @php($l=0)
    @foreach($likesUser as $like)
        @php($l++)
    @endforeach
    @if($l > 0)
        <button class="btn btn-primary w-100 bg-transparent border-2" title="Dislike this recipe" type="submit"><i class="fa-solid fa-heart" style="color:#DE5667;"></i></button>
    @else
        <button class="btn btn-primary w-100 bg-transparent border-2" title="Like this recipe" type="submit"><i class="fa-regular fa-heart" style="color:#DE5667;"></i></button>
    @endif
</form>
