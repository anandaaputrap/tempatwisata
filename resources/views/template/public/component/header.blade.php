<div class="main-navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets2') }}/img/logowakatobi.png" class="logo1" alt="Logo"
                            width="40" />
                        <img src="{{ asset('assets2') }}/img/logowakatobi.png" class="logo2" alt="Logo"
                            width="40" />
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('assets2') }}/img/logowakatobi.png" class="logo1" alt="Logo"
                        width="40" />
                    <img src="{{ asset('assets2') }}/img/logowakatobi.png" class="logo2" alt="Logo"
                        width="40" />
                </a>
                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link toggle {{ Request::is('home') ? 'active' : '' }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('destinasi') }}"
                                class="nav-link toggle {{ Request::is('destinasi') ? 'active' : '' }}">Destinasi</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="btn-secondary">
                                Login <i class="bx bx-log-in-circle"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
