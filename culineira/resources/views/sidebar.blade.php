<nav id="sidebar">
    <div class="p-4 pt-2">
        <img class="w-100" src="{{asset('assets/Culineira_FullLogo.png')}}" alt='logo'
            style='display: block; margin-left: auto; margin-right: auto;'>

        <!--Profil section.-->
        @include('others.miniprofile')

        <!--Main Navbar.-->
        <ul class="list-unstyled components mb-3">
            <li class="<?php if(session()->get('active_nav') == "recipe"){ echo "active"; }?>">
                <a href="{{ url('/recipe') }}"><i class="fa-solid fa-book"></i> Recipes</a>
            </li>
            <li class="<?php if(session()->get('active_nav') == "kitchen"){ echo "active"; }?>">
                <a href="{{ url('/kitchen') }}"><i class="fa-solid fa-kitchen-set"></i> My Kitchen</a>
            </li>
            <li class="<?php if(session()->get('active_nav') == "community"){ echo "active"; }?>">
                <a href="{{ url('/community') }}"><i class="fa-solid fa-people-group"></i> Community</a>
            </li>
            <li class="<?php if(session()->get('active_nav') == "global"){ echo "active"; }?>">
                <a href="{{ url('/global') }}"><i class="fa-solid fa-earth-americas"></i> Global</a>
            </li>
        </ul>
        <button class="btn btn-danger" style='margin-top:-10px;' onclick="location.href='{{ url('/') }}'">Sign-Out</button>
        <button class="btn btn-primary" style='margin-top:-10px;' id="theme-toggle"><span id="theme"></span> Mode</button>
    </div>
</nav>