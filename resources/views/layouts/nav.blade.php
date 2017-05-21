<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Superstore</a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item active btn btn-info btn-lg">

                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>

            </li>

            <li>
                <a href="/checkout" class="btn btn-info btn-lg">
                    <i class="fa fa-shopping-basket" aria-hidden="true"></i> Shopping Cart
                </a>

            </li>


            <!-- Authentication Links -->
        @if (Auth::guest())

            <!-- Trigger the modal with a button -->
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#login">

                    Login

                </button>

                <!-- Trigger the modal with a button -->
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#register">

                    Register

                </button>


            @else
                <li class="dropdown">
                    <a href="#" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif

        </ul>
    </div>
</nav>
@include('layouts.dialogs.dialogs')
@yield('login_dialog')
@yield('register_dialog')