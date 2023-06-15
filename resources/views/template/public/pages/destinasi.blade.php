@extends('template.public.app')

@section('content')
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>Destinasi</h1>
                <ul>
                    <li class="item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="item">
                        <a href="{{ route('destinasi') }}"><i class="bx bx-chevrons-right"></i>Destinasi</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="{{ asset('assets2') }}/img/page-title-area/destinations.jpg" alt="Demo Image"/>
        </div>
    </div>

    <section id="top-destination" class="top-destination-section pt-100 pb-70 bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Destinasi Terbaik</h2>
                <p>
                    Perjalanan telah membantu kita memahami arti hidup dan membantu kita menjadi orang yang lebih baik.
                    Setiap kali kita bepergian, kita melihat dunia dengan mata baru.
                </p>
            </div>
            <div class="row">
                @foreach ($data as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="item-single mb-30">
                            <div class="image">
                                <img src="{{ asset('uploads/' . $item->foto) }}" alt="Demo Image" style="width: auto;height:252px;" />
                            </div>
                            <div class="content">
                                <span class="location"><i class="bx bx-map"></i>{{ $item->alamat }}</span>
                                <h3>
                                    <a href="{{ route('destinasi.detail', $item->id) }}">{{ $item->nama_tempat }}</a>
                                </h3>
                                <div class="review">
                                    <i class="bx bx-smile"></i>
                                    <span>{{ $item->hitung->count() }}</span>
                                    <span>Total Survei</span>
                                </div>
                                <p>
                                    {!! Str::words($item->deskripsi , 20, ' ...') !!}
                                </p>
                                <hr />
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="features-section pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="item-single mb-30">
                        <i class="bx bx-wink-smile"></i>
                        <h3><a href="#">Kenyamanan</a></h3>
                        <p>
                            Menyediakan tempat tinggal yang nyaman selama berlibur.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item-single mb-30">
                        <i class="bx bxs-key"></i>
                        <h3><a href="#">Keamanan</a></h3>
                        <p>
                            Menyediakan suasana yang sangat aman selama berpergian.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 m-auto">
                    <div class="item-single mb-30">
                        <i class="bx bx-happy-beaming"></i>
                        <h3><a href="#">Keindahan</a></h3>
                        <p>
                            Memberikan keindahan alam yang melimpah untuk dilihat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="destination" class="destination-section ptb-100 bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Destinasi Terbaik</h2>
                <p>
                    Perjalanan telah membantu kita memahami arti hidup dan membantu kita menjadi orang yang lebih baik.
                    Setiap kali kita bepergian, kita melihat dunia dengan mata baru.
                </p>
            </div>
            <div class="row">
                <div class="col-md-8 m-auto">
                    <div class="filter-group">
                        <ul id="control" class="list-control">
                            <li data-filter="1" class="active">Fasilitas Lengkap</li>
                            <li data-filter="2">Harga Tiket</li>
                            <li data-filter="3">Jarak</li>
                            <li data-filter="4">Suasana</li>
                            <li data-filter="5">Pelayanan</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row filtr-container">
                @foreach ($data1 as $item)
                    <div class="col-lg-4 col-md-6 filtr-item" data-category="1" data-sort="value">
                        <div class="item-single mb-30">
                            <div class="image">
                                <img src="{{ asset('uploads/' . $item->wisata->foto) }}" alt="Demo Image" style="width: auto;height:252px;" />
                            </div>
                            <div class="content">
                                <span class="location"><i class="bx bx-map"></i>{{ $item->wisata->alamat }}</span>
                                <h3>
                                    <a href="{{ route('destinasi.detail', $item->wisata_id) }}">{{ $item->wisata->nama_tempat }}</a>
                                </h3>
                                <p>
                                    {!! Str::words($item->wisata->deskripsi , 20, ' ...') !!}
                                </p>
                                <hr />
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach ($data2 as $item)
                    <div class="col-lg-4 col-md-6 filtr-item" data-category="2" data-sort="value">
                        <div class="item-single mb-30">
                            <div class="image">
                                <img src="{{ asset('uploads/' . $item->wisata->foto) }}" alt="Demo Image" style="width: auto;height:252px;" />
                            </div>
                            <div class="content">
                                <span class="location"><i class="bx bx-map"></i>{{ $item->wisata->alamat }}</span>
                                <h3>
                                    <a href="{{ route('destinasi.detail', $item->wisata_id) }}">{{ $item->wisata->nama_tempat }}</a>
                                </h3>
                                <p>
                                    {!! Str::words($item->wisata->deskripsi , 20, ' ...') !!}
                                </p>
                                <hr />
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach ($data3 as $item)
                    <div class="col-lg-4 col-md-6 filtr-item" data-category="3" data-sort="value">
                        <div class="item-single mb-30">
                            <div class="image">
                                <img src="{{ asset('uploads/' . $item->wisata->foto) }}" alt="Demo Image" style="width: auto;height:252px;" />
                            </div>
                            <div class="content">
                                <span class="location"><i class="bx bx-map"></i>{{ $item->wisata->alamat }}</span>
                                <h3>
                                    <a href="{{ route('destinasi.detail', $item->wisata_id) }}">{{ $item->wisata->nama_tempat }}</a>
                                </h3>
                                <p>
                                    {!! Str::words($item->wisata->deskripsi , 20, ' ...') !!}
                                </p>
                                <hr />
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach ($data4 as $item)
                    <div class="col-lg-4 col-md-6 filtr-item" data-category="4" data-sort="value">
                        <div class="item-single mb-30">
                            <div class="image">
                                <img src="{{ asset('uploads/' . $item->wisata->foto) }}" alt="Demo Image" style="width: auto;height:252px;" />
                            </div>
                            <div class="content">
                                <span class="location"><i class="bx bx-map"></i>{{ $item->wisata->alamat }}</span>
                                <h3>
                                    <a href="{{ route('destinasi.detail', $item->wisata_id) }}">{{ $item->wisata->nama_tempat }}</a>
                                </h3>
                                <p>
                                    {!! Str::words($item->wisata->deskripsi , 20, ' ...') !!}
                                </p>
                                <hr />
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach ($data5 as $item)
                    <div class="col-lg-4 col-md-6 filtr-item" data-category="5" data-sort="value">
                        <div class="item-single mb-30">
                            <div class="image">
                                <img src="{{ asset('uploads/' . $item->wisata->foto) }}" alt="Demo Image" style="width: auto;height:252px;" />
                            </div>
                            <div class="content">
                                <span class="location"><i class="bx bx-map"></i>{{ $item->wisata->alamat }}</span>
                                <h3>
                                    <a href="{{ route('destinasi.detail', $item->wisata_id) }}">{{ $item->wisata->nama_tempat }}</a>
                                </h3>
                                <p>
                                    {!! Str::words($item->wisata->deskripsi , 20, ' ...') !!}
                                </p>
                                <hr />
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="pagination text-center">
                        <span class="page-numbers current" aria-current="page">1</span>
                        <a href="#" class="page-numbers">2</a>
                        <a href="#" class="page-numbers">3</a>
                        <a href="#" class="page-numbers">Next</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
@endsection
