<div class="main-navigation" id="mainmenu-area">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary main-nav navbar-togglable rounded-radius">

            <a class="navbar-brand d-lg-none d-block" href="index.html">
                <h4 class="h3 mb-0">Rappo</h4>
            </a>
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>

            <!-- Collapse -->
            <div class="collapse navbar-collapse has-dropdown" id="navbarCollapse">
                <!-- Links -->
                <ul class="navbar-nav ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#!" id="navbarWelcome" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Home
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarWelcome">
                            <li><a class="dropdown-item" href="index.html">Home-1</a></li>
                            <li><a class="dropdown-item" href="index-2.html">Home-2</a></li>
                            <li><a class="dropdown-item" href="index-3.html">Home-3</a></li>
                            <li><a class="dropdown-item" href="index-4.html">Home-4</a></li>

                            <li class="dropdown dropdown-submenu dropright">
                                <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>

                                <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                                    <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                                    <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                                </ul>
                            </li>

                            <li class="dropdown dropdown-submenu dropleft">
                                <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>

                                <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                                    <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                                    <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a href="about.html" class="nav-link js-scroll-trigger">
                            About
                        </a>
                    </li>

                </ul>

                <ul class="ml-lg-auto list-unstyled m-0">
                    @auth
                        <li>
                            <form action="{{ url('/logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-white btn-circled">登出</button>
                            </form>
                        </li>
                    @else
                        <li>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ url('/login') }}" class="btn btn-white btn-circled">登入</a>
                                <a href="{{ url('/register') }}" class="btn btn-white btn-circled">註冊</a>
                            </div>
                        </li>
                    @endauth
                </ul>

            </div> <!-- / .navbar-collapse -->
        </nav>
    </div> <!-- / .container -->
</div>
