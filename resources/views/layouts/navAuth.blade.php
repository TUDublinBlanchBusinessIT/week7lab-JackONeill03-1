<ul class="nav navbar-nav pull-right">
    @if(Auth::guest())
    <li class= "nav-item">
        <a class="nav-link" href="{{route ('register')}}">Register
            <span class="glyphicon glyphicon-pencil"></span>
        </a>
    </li>
    <li class= "nav-item">
        <a class="nav-link" href="{{route ('login')}}">Login
            <span class="glyphicon glyphicon-log-in"></span>
        </a>
    </li>
    @else
    <li class= "nav-item">
        <a class="nav-link" href="{{route('logout')}}">Logoff
            <span class="glyphicon glyphicon-log-out"></span>
        </a>
    </li>
    @endif
</ul>