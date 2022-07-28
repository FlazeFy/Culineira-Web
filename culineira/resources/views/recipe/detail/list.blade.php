<button class="btn btn-primary w-100 border-2" style="background:#B35387; border-color:#B35387;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-paperclip"></i></button>
<ul class="dropdown-menu p-2" aria-labelledby="dropdownMenuButton1">
    @php($count = 0)
        @foreach($list as $ls)
        <form action="/detail/updateList/<?php echo $data->id; ?>" method="POST">
        @csrf
        @foreach($listRel as $lsr)
            @if($lsr->list_id == $ls->id)
                @php($count++)
            @endif
        @endforeach
        @if($count == 0)
            <li><input hidden name="list_name" value="{{$ls->list_name}}"><button class="dropdown-item" type="submit">{{$ls->list_name}}</button></li>
        @else
            <li><input hidden name="list_name" value="{{$ls->list_name}}"><button class="dropdown-item" type="submit"><i class="fa-solid fa-check" style="color:green;"></i> {{$ls->list_name}}</button></li>
        @endif
        </form>
        @php($count = 0)
    @endforeach
</ul>
