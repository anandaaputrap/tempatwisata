@extends('template.public.app')

@section('content')
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>Detail Destinasi</h1>
                <ul>
                    <li class="item"><a href="index.html">Home</a></li>
                    <li class="item">
                        <a href="{{ route('destinasi.detail', $data->id) }}"><i class="bx bx-chevrons-right"></i>Detail Destinasi</a>
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
                            <div class="col-md-8 col-sm-12">
                                <p class="mb-30" style="text-align: justify">
                                    Keindahan air laut adalah salah satu kelebihan Pantai Huntete karena pantai ini juga
                                    menawarkan banyak hal indah lainnya. Seperti pasir putih dan garis pantai yang lebar,
                                    menjadi lokasi yang bagus untuk berjalan di pantai.
                                </p>
                            </div>
                        </div>
                        <hr />
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <a href="{{ route('survei.wisata', $data->id) }}" class="btn btn-primary">Mulai Survei</a>
                </div>
                <div class="col-lg-12 col-md-12">
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
                </div>
            </div>
        </div>
    </section>
@endsection
