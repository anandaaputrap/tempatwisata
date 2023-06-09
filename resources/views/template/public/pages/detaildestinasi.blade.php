@extends('template.public.app')

@section('content')
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>Detail Destinasi</h1>
                <ul>
                    <li class="item"><a href="index.html">Home</a></li>
                    <li class="item">
                        <a href="{{ route('destinasi.detail', $data->id) }}"><i class="bx bx-chevrons-right"></i>Detail
                            Destinasi</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="{{ asset('assets2') }}/img/page-title-area/destination-details.jpg" alt="Demo Image" />
        </div>
    </div>

    <section class="destinations-details-section pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>{{ $data->nama_tempat }}</h2>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="destination-details-desc mb-30">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-sm-12">
                                <div class="image mb-30">
                                    <img src="{{ asset('uploads/' . $data->foto) }}" alt="Demo Image" />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="image mb-30">
                                    <img src="{{ asset('uploads/' . $data->foto) }}" alt="Demo Image" />
                                </div>
                            </div>
                        </div>
                        <div class="content mb-20">
                            <h3>{{ $data->alamat }}</h3>
                            <p>
                                {!! $data->deskripsi !!}
                            </p>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-4 col-sm-12">
                                <div class="image mb-30">
                                    <img src="{{ asset('uploads/' . $data->foto) }}" alt="Demo Image" />
                                </div>
                            </div>
                        </div>
                        <hr />
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <a href="{{ route('survei.wisata', $data->id) }}" class="btn btn-primary">Mulai Survei</a>
                </div>

                {{-- <div class="col-lg-12 col-md-12">
                    <aside class="widget-area">
                        <div class="widget widget-video mb-30">
                            <div class="video-image">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3969.6763493897834!2d124.00058666933982!3d-5.7596345440818695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da70fc683b6a6e1%3A0x7a90816d239c41c6!2sPantai%20Huntete!5e0!3m2!1sen!2sid!4v1686471629756!5m2!1sen!2sid"
                                    width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </aside>
                </div> --}}
            </div>
        </div>
    </section>
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
                        @foreach ($hitungan as $item)
                            <div class="slider-item">
                                {{-- <div class="client-img">
                                    <img src="{{ asset('assets2') }}/img/logowakatobi.png" alt="client-1" width="20" />
                                </div> --}}
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
@endsection
