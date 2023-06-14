@extends('template.public.app')

@section('content')
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>Survei Destinasi</h1>
                <ul>
                    <li class="item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="item">
                        <a href="{{ route('destinasi.detail', $data->id) }}"><i class="bx bx-chevrons-right"></i>Detail
                            Destinasi</a>
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
                                    <input type="hidden" name="wisata_id" value="{{ $data->id }}">
                                    <input type="hidden" name="created_by" value="{{ Auth::user()->id }}">
                                    @csrf
                                    <div class="content mt-3 mb-3">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tr>
                                                    <th colspan="1">
                                                        Harga Tiket :
                                                    </th>
                                                    <td colspan="4">
                                                        <div class="form-control">
                                                            @foreach ($kriteriaTiket as $item)
                                                                <input class="form-check-input" value="{{ $item->bobot }}"
                                                                    type="radio" name="harga_tiket" id="tiketJawaban2">
                                                                <label class="form-check-label" for="tiketJawaban2">
                                                                    {{ $item->harga }}
                                                                </label>
                                                            @endforeach
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th colspan="1">
                                                        Jarak :
                                                    </th>
                                                    <td colspan="4">
                                                        <div class="form-control">
                                                            @foreach ($kriteriaJarak as $item)
                                                                <input class="form-check-input" value="{{ $item->bobot }}"
                                                                    type="radio" name="harga_tiket" id="tiketJawaban2">
                                                                <label class="form-check-label" for="tiketJawaban2">
                                                                    {{ $item->jarak }}
                                                                </label>
                                                            @endforeach
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th colspan="1">
                                                        Pelayanan :
                                                    </th>
                                                    <td colspan="4">
                                                        <div class="form-control">
                                                            @foreach ($kriteriaPelayanan as $item)
                                                                <input class="form-check-input" value="{{ $item->bobot }}"
                                                                    type="radio" name="harga_tiket" id="tiketJawaban2">
                                                                <label class="form-check-label" for="tiketJawaban2">
                                                                    {{ $item->pelayanan }}
                                                                </label>
                                                            @endforeach
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th colspan="1">
                                                        Suasana :
                                                    </th>
                                                    <td colspan="4">
                                                        <div class="form-control">
                                                            @foreach ($kriteriaSuasana as $item)
                                                                <input class="form-check-input" value="{{ $item->bobot }}"
                                                                    type="radio" name="harga_tiket" id="tiketJawaban2">
                                                                <label class="form-check-label" for="tiketJawaban2">
                                                                    {{ $item->suasana }}
                                                                </label>
                                                            @endforeach
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th colspan="1">
                                                        Fasilitas :
                                                    </th>
                                                    <td colspan="4">
                                                        <div class="form-control">
                                                            @foreach ($kriteriaFasilitas as $item)
                                                                <input class="form-check-input" value="{{ $item->bobot }}"
                                                                    type="radio" name="harga_tiket" id="tiketJawaban2">
                                                                <label class="form-check-label" for="tiketJawaban2">
                                                                    {{ $item->keterangan }}
                                                                </label>
                                                            @endforeach
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <button type="submit" class="btn-primary">
                                            Submit
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
