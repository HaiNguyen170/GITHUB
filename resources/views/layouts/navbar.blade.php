<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="{{url('/')}}">HAINTT</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">

            <li class="nav-item ">
                <a class="nav-link" href="{{route('create')}}">Create student</a>
            </li>

        </ul>
        <ul class="navbar-nav">

            <li class="nav-item ">
                <a class="nav-link" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('register')}}">Register</a>
            </li>

        </ul>

    </div>
</nav>
<br>
