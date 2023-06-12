@extends('template.public.app')

@section('content')
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>Survei Destinasi</h1>
                <ul>
                    <li class="item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="item">
                        <a href="{{ route('destinasi.detail', $data->id) }}"><i class="bx bx-chevrons-right"></i>Detail Destinasi</a>
                    </li>
                    <li class="item">
                        <a href=""><i class="bx bx-chevrons-right"></i>Survei Destinasi Wisata</a>
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
                <div class="col-lg-12 col-md-12">
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
                        <div class="col-lg-12">
                            <div class="booking-form">
                                <form action="{{ route('survei.wisata.post') }}" method="POST">
                                    <input type="hidden" name="id_wisata" value="{{ $data->id }}">
                                    <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                                    @csrf
                                    <div class="content mt-3 mb-3">
                                        <h3>Harga Tiket</h3>
                                        <div class="row align-items-center">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" value="a" type="radio" name="tiketJawaban" id="tiketJawaban2">
                                                        <label class="form-check-label" for="tiketJawaban2">
                                                          {{ $kriteriaTiket->jawaban_a }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input"  value="b" type="radio" name="tiketJawaban" id="tiketJawaban2">
                                                        <label class="form-check-label" for="tiketJawaban2">
                                                          {{ $kriteriaTiket->jawaban_b }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input"  value="c" type="radio" name="tiketJawaban" id="tiketJawaban2">
                                                        <label class="form-check-label" for="tiketJawaban2">
                                                          {{ $kriteriaTiket->jawaban_c }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input"  value="d" type="radio" name="tiketJawaban" id="tiketJawaban2">
                                                        <label class="form-check-label" for="tiketJawaban2">
                                                          {{ $kriteriaTiket->jawaban_d }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input"  value="e" type="radio" name="tiketJawaban" id="tiketJawaban2">
                                                        <label class="form-check-label" for="tiketJawaban2">
                                                          {{ $kriteriaTiket->jawaban_e }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content mt-3 mb-3">
                                        <h3>Jarak</h3>
                                        <div class="row align-items-center">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" value="a" type="radio" name="tiketJawaban" id="tiketJawaban2">
                                                        <label class="form-check-label" for="tiketJawaban2">
                                                          {{ $kriteriaJarak->jawaban_a }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input"  value="b" type="radio" name="tiketJawaban" id="tiketJawaban2">
                                                        <label class="form-check-label" for="tiketJawaban2">
                                                          {{ $kriteriaJarak->jawaban_b }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input"  value="c" type="radio" name="tiketJawaban" id="tiketJawaban2">
                                                        <label class="form-check-label" for="tiketJawaban2">
                                                          {{ $kriteriaJarak->jawaban_c }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input"  value="d" type="radio" name="tiketJawaban" id="tiketJawaban2">
                                                        <label class="form-check-label" for="tiketJawaban2">
                                                          {{ $kriteriaJarak->jawaban_d }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input"  value="e" type="radio" name="tiketJawaban" id="tiketJawaban2">
                                                        <label class="form-check-label" for="tiketJawaban2">
                                                          {{ $kriteriaJarak->jawaban_e }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content mt-3 mb-3">
                                        <h3>Pelayanan</h3>
                                        <div class="row align-items-center">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" value="a" type="radio" name="tiketJawaban" id="tiketJawaban2">
                                                        <label class="form-check-label" for="tiketJawaban2">
                                                          {{ $kriteriaPelayanan->jawaban_a }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input"  value="b" type="radio" name="tiketJawaban" id="tiketJawaban2">
                                                        <label class="form-check-label" for="tiketJawaban2">
                                                          {{ $kriteriaPelayanan->jawaban_b }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input"  value="c" type="radio" name="tiketJawaban" id="tiketJawaban2">
                                                        <label class="form-check-label" for="tiketJawaban2">
                                                          {{ $kriteriaPelayanan->jawaban_c }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input"  value="d" type="radio" name="tiketJawaban" id="tiketJawaban2">
                                                        <label class="form-check-label" for="tiketJawaban2">
                                                          {{ $kriteriaPelayanan->jawaban_d }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input"  value="e" type="radio" name="tiketJawaban" id="tiketJawaban2">
                                                        <label class="form-check-label" for="tiketJawaban2">
                                                          {{ $kriteriaPelayanan->jawaban_e }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content mt-3 mb-3">
                                        <h3>Suasana</h3>
                                        <div class="row align-items-center">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" value="a" type="radio" name="tiketJawaban" id="tiketJawaban2">
                                                        <label class="form-check-label" for="tiketJawaban2">
                                                          {{ $kriteriaSuasana->jawaban_a }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input"  value="b" type="radio" name="tiketJawaban" id="tiketJawaban2">
                                                        <label class="form-check-label" for="tiketJawaban2">
                                                          {{ $kriteriaSuasana->jawaban_b }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input"  value="c" type="radio" name="tiketJawaban" id="tiketJawaban2">
                                                        <label class="form-check-label" for="tiketJawaban2">
                                                          {{ $kriteriaSuasana->jawaban_c }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input"  value="d" type="radio" name="tiketJawaban" id="tiketJawaban2">
                                                        <label class="form-check-label" for="tiketJawaban2">
                                                          {{ $kriteriaSuasana->jawaban_d }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input"  value="e" type="radio" name="tiketJawaban" id="tiketJawaban2">
                                                        <label class="form-check-label" for="tiketJawaban2">
                                                          {{ $kriteriaSuasana->jawaban_e }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content mt-3 mb-3">
                                        <h3>Fasilitas</h3>
                                        @foreach ($kriteriaFasilitas as $item)
                                        <div class="row align-items-center mt-2">
                                            <div class="content">
                                                <h4>{{ $item->fasilitas }} = ( {{$item->indikator}} )</h4>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" value="a" type="radio" name="tiketJawaban" id="tiketJawaban2">
                                                        <label class="form-check-label" for="tiketJawaban2">
                                                          {{ $item->jawaban_a }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input"  value="b" type="radio" name="tiketJawaban" id="tiketJawaban2">
                                                        <label class="form-check-label" for="tiketJawaban2">
                                                          {{ $item->jawaban_b }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input"  value="c" type="radio" name="tiketJawaban" id="tiketJawaban2">
                                                        <label class="form-check-label" for="tiketJawaban2">
                                                          {{ $item->jawaban_c }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input"  value="d" type="radio" name="tiketJawaban" id="tiketJawaban2">
                                                        <label class="form-check-label" for="tiketJawaban2">
                                                          {{ $item->jawaban_d }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input"  value="e" type="radio" name="tiketJawaban" id="tiketJawaban2">
                                                        <label class="form-check-label" for="tiketJawaban2">
                                                          {{ $item->jawaban_e }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <button type="submit" class="btn-primary">
                                        Update
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
