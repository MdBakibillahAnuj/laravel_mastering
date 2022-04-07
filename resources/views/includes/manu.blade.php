<nav class="navbar navbar-expand-sm bg-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon">x</span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ml-auto">
                <li class="navbar-item"><a href="{{route('home')}}" class="nav-link">Home</a></li>
                <li class="navbar-item"><a href="{{ url('/full-name') }}" class="nav-link">Full Name</a></li>
                <li class="navbar-item"><a href="{{ route('calculator') }}" class="nav-link">Calculator</a></li>
            </ul>
        </div>
    </div>
</nav>
