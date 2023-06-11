@extends('template.public.app')

@section('content')
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>Login</h1>
                <ul>
                    <li class="item"><a href="index.html">Home</a></li>
                    <li class="item">
                        <a href="login.html"><i class="bx bx-chevrons-right"></i>Login</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="{{ asset('assets2') }}/img/page-title-area/login.jpg" alt="Demo Image" />
        </div>
    </div>

    <div class="authentication-section">
        <div class="container">
            <div class="main-form ptb-100">
                <form id="#authForm" action="{{ route('postLogin') }}" method="post">
                    @csrf
                    <div class="content">
                        <h3>Selamat Datang</h3>
                        <p>Silahkan Login Apabila Sudah Mempunyai Akun</p>
                    </div>
                    <div class="form-group">
                        <div class="input-icon"><i class="bx bx-at"></i></div>
                        <input type="email" class="form-control" name="email" placeholder="Email Address" required />
                    </div>
                    <div class="form-group">
                        <div class="input-icon"><i class="bx bx-key"></i></div>
                        <input type="password" name="password" class="form-control" placeholder="Masukan Password" required />
                    </div>
                    <div class="row align-items-center mb-30">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <div class="checkbox">
                                <input type="checkbox" id="remember" />
                                <label for="remember">Remember me</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-6">
                            <div class="link">
                                <a href="{{ route('register') }}">Belum Punya Akun?</a>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection
