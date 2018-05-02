<div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">Contact</a>
        </li>
        @if(Auth::check())
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
            </li>
            <li class="nav-item">
                <form method="POST" id="logout-form" action="{{route('logout')}}">@csrf</form>
                <a class="nav-link" href="javascript:void(0);" onclick="document.getElementById('logout-form').submit()">Logout</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}">Register</a>
            </li>
        @endif
    </ul>
</div>