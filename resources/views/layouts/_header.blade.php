<header>
    <nav class="navbar fixed-top navbar-dark bg-dark navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <a href="/" id="logo">Sample App</a>
            </div>
            <nav>
                <ul class="navbar-nav mr-auto">
                    @if (Auth::check())
                        <li>
                            <a href="#">Users List</a>
                        </li>
                        <li>
                            <div class="dropdown">
                                <a href="#" class="btn dropdown-toggle" id="dropdownBtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
    
                                <ul class="dropdown-menu" aria-labelledby="dropdownBtn">
                                    <li class="dropdown-item">
                                        <a href="{{ route('users.show', Auth::user()->id) }}">
                                            User details
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="#">Edit Info</a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li class="dropdown-item">
                                        <a href="#" id="logout">
                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-block btn-danger" type="submit" name="button">Logout</button>
                                            </form>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('help') }}">Help</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('signup') }}">Sign in</a></li>    
                    @endif

                </ul>
            </nav>
        </div>
    </nav>
</header>