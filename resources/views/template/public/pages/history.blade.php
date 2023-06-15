@extends('template.public.app')

@section('content')
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>History Penilaian</h1>
                <ul>
                    <li class="item"><a href="index.html">Home</a></li>
                    <li class="item">
                        <a href="testimonials.html"><i class="bx bx-chevrons-right"></i>History Penilaian</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="{{ asset('assets2') }}/img/page-title-area/testimonial.jpg" alt="Demo Image" />
        </div>
    </div>

    @if ($data != null)       
        <section id="testimonial" class="testimonial-section ptb-100 bg-light">
            <div class="container">
                <div class="section-title">
                    <h2>Terimakasih Atas Penilaiannya</h2>
                    <p>
                        Kami harap dengan penilaian anda dapat membuat tempat wisata di Wakatobi semakin berkembang
                        semakin baik kedepannya.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <div class="testimonial-slider owl-carousel">
                            @foreach ($data as $item)
                                <div class="slider-item">
                                    <div class="client-img">
                                        <img src="{{ asset('assets2') }}/img/client1.jpg" alt="client-1" />
                                    </div>
                                    <div class="content">
                                        <div class="client-info">
                                            <h3>{{ $item->user->nama }}</h3>
                                            <span>{{ $item->wisata->nama_tempat }}</span>
                                        </div>
                                        <div class="quote">
                                            <i class="bx bxs-quote-left"></i>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Nilai Fasilitas</th>
                                                        <th>Nilai Harga Tiket</th>
                                                        <th>Nilai Pelayanan</th>
                                                        <th>Nilai Jarak</th>
                                                        <th>Nilai Suasana</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ $item->fasilitas }}</td>
                                                        <td>{{ $item->harga_tiket }}</td>
                                                        <td>{{ $item->pelayanan }}</td>
                                                        <td>{{ $item->jarak }}</td>
                                                        <td>{{ $item->suasana }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape">
                <img src="{{ asset('assets2') }}/img/shape1.png" alt="Background Shape" />
            </div>
        </section>
    @else    
        <section id="testimonial" class="testimonial-section ptb-100 bg-light">
            <div class="container">
                <div class="section-title">
                    <h2>Yahhh anda belum melakukan survei</h2>
                    <p>
                        silahkan melakukan survei terlebih dahulu.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <div class="card">
                            <a href="{{ route('destinasi') }}" type="submit" class="btn-primary">
                                Nilai
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape">
                <img src="{{ asset('assets2') }}/img/shape1.png" alt="Background Shape" />
            </div>
        </section>
    @endif
@endsection
