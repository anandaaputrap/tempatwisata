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
                <form id="#authForm" action="{{ route('postotp') }}" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                    <input type="hidden" name="status" value="Aktivasi" />
                    <div class="content">
                        <h3>Selamat Datang</h3>
                        <p>Silahkan Cek Email anda untuk mendapatkan kode</p>
                    </div>
                    <div class="form-group">
                        <div class="input-icon"><i class="bx bx-at"></i></div>
                        <input type="text" class="form-control" name="otp" placeholder="Masukan Kode OTP" required />
                    </div>
                    <button type="submit" class="btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
