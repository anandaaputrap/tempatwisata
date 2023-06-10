@extends('template.public.app')

@section('content')
    <div id="home" class="home-banner-area home-style-two">
        <div class="container-fluid p-0">
            <div class="banner-slider-two owl-carousel">
                <div class="slider-item">
                    <div class="row">
                        <div class="col-lg-5 align-self-end">
                            <div class="banner-image">
                                <img src="{{ asset('assets2') }}/img/banner/banner1.png" alt="Demo Image" />
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-content">
                                {{-- <span class="sub-title">Amazing Places</span> --}}
                                <h1>Jelajahi <span>Wakatobi</span> Kemanapun Yang Anda Mau</h1>
                                <p>
                                    Jelajahi Wakatobi Sepuas Yang Anda Inginkan dan Dapatkan Pengalaman
                                    Yang Tak Terlupakan
                                </p>
                                <a href="destinations.html" class="btn-primary">Destinasi</a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-shape">
                        <img src="{{ asset('assets2') }}/img/banner/banner-bg.png" alt="Demo Image" />
                    </div>
                </div>
                <div class="slider-item">
                    <div class="row">
                        <div class="col-lg-5 align-self-end">
                            <div class="banner-image">
                                <img src="{{ asset('assets2') }}/img/banner/banner2.png" alt="Demo Image" />
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-content">
                                {{-- <span class="sub-title">Amazing Places</span> --}}
                                <h1>Jelajahi <span>Wakatobi</span> Kemanapun Yang Anda Mau</h1>
                                <p>
                                    Jelajahi Wakatobi Sepuas Yang Anda Inginkan dan Dapatkan Pengalaman
                                    Yang Tak Terlupakan
                                </p>
                                <a href="destinations.html" class="btn-primary">Destinasi</a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-shape">
                        <img src="{{ asset('assets2') }}/img/banner/banner-bg.png" alt="Demo Image" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="about" class="about-section about-style-two pt-100 pb-70 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content mb-30">
                        <h2>Tentang Wakatobi</h2>
                        <h6 style="text-align: justify">
                            Wakatobi merupakan nama kawasan taman nasional yang ditetapkan
                            pada tahun 1996, dengan total area sekitar 1,39 juta hektar, menyangkut keanekaragaman
                            hayati laut, skala dan kondisi karang yang menempati salah satu posisi
                            prioritas tertinggi dari konservasi laut di Indonesia. Komoditi unggulan
                            Kabupaten Wakatobi yaitu sektor perkebunan, pertanian dan jasa.
                            Sektor Perkebunan komoditi unggulannya adalah Kakao, Kopi, Kelapa, Cengkeh, Jambu Mete, dan
                            Pala.
                            Sub sektor Pertanian komoditi yang diunggulkan berupa Jagung dan Ubi Kayu. Sub sektor jasa
                            yaitu Pariwisata.
                        </h6>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="content-list">
                                    <i class="bx bx-check-shield"></i>
                                    <h6>Keamanan Pariwisata</h6>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content-list">
                                    <i class="bx bx-donate-heart"></i>
                                    <h6>Harga Terjangkau</h6>
                                </div>
                            </div>
                        </div>
                        <div class="about-btn">
                            <a href="contact.html" class="btn-primary">Hubungi Kami</a>
                            <a href="about-us.html" class="btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="video-content mb-30">
                        <div class="video-image">
                            <img src="{{ asset('assets2') }}/img/wakatobibg.jpg" alt="video" />
                        </div>
                        <a href="https://www.youtube.com/watch?v=3iG2zwMdRjc" class="youtube-popup video-btn">
                            <i class="bx bx-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape shape-1">
            <img src="{{ asset('assets2') }}/img/shape1.png" alt="Background Shape" />
        </div>
        <div class="shape shape-2">
            <img src="{{ asset('assets2') }}/img/shape2.png" alt="Background Shape" />
        </div>
    </section>
@endsection
