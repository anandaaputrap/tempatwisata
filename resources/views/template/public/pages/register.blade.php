@extends('template.public.app')

@section('content')
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>Daftar Akun</h1>
                <ul>
                    <li class="item"><a href="index.html">Home</a></li>
                    <li class="item">
                        <a href="register.html"><i class="bx bx-chevrons-right"></i>Register</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="{{ asset('assets2') }}/img/page-title-area/register.jpg" alt="Demo Image" />
        </div>
    </div>

    <div class="authentication-section">
        <div class="container">
            <div class="main-form ptb-100">
                <form id="#authForm">
                    <div class="content">
                        <h3>Buat Akun</h3>
                        <p>Silahkan Daftar Akun Terlebih Dahulu</p>
                    </div>
                    <div class="form-group">
                        <div class="input-icon"><i class="bx bx-user"></i></div>
                        <input type="text" class="form-control" placeholder="Username" required />
                    </div>
                    <div class="form-group">
                        <div class="input-icon"><i class="bx bx-at"></i></div>
                        <input type="text" class="form-control" placeholder="Email Address" required />
                    </div>
                    <div class="form-group">
                        <div class="input-icon"><i class="bx bx-show"></i></div>
                        <input type="password" class="form-control" placeholder="Password" required />
                    </div>
                    <div class="row align-items-start mb-30">
                        <div class="col-lg-12">
                            <div class="checkbox">
                                <input type="checkbox" id="agreement" />
                                <label for="agreement">Saya Setuju Dengan
                                    <a href="terms-of-service.html">Terms of Services</a> and
                                    <a href="privacy-policy.html">Privacy Policy</a></label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn-primary">Daftar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
