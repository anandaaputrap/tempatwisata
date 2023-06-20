@extends('template.admin.app')

@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9">
                        <h5>Data Penilaian</h5>
                    </div>
                </div>
            </div>
            @if ($data != null)
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="basic-4">
                            <thead>
                                <tr>
                                    <th>Wisata</th>
                                    <th>Tiket</th>
                                    <th>Fasilitas</th>
                                    <th>Jarak</th>
                                    <th>Pelayanan</th>
                                    <th>Suasana</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $item->wisata->nama_tempat }}</td>    
                                        <td>{{ $item->harga_tiket }}</td>    
                                        <td>{{ $item->fasilitas }}</td>    
                                        <td>{{ $item->jarak }}</td>    
                                        <td>{{ $item->pelayanan }}</td>    
                                        <td>{{ $item->suasana }}</td> 
                                        <td>{{ $item->total }}</td> 
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9">
                        <h5>Bobot Keinginan</h5>
                    </div>
                </div>
            </div>
            @if ($data != null)
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="basic-3">
                            <thead>
                                <tr>
                                    <th>Wisata</th>
                                    <th>C1</th>
                                    <th>C2</th>
                                    <th>C3</th>
                                    <th>C4</th>
                                    <th>C5</th>
                                    <th>WJ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bobot as $item)
                                    <tr>
                                        <td>{{ $item->header->wisata->nama_tempat }}</td>
                                        <td>{{ $item->c1 }}</td>
                                        <td>{{ $item->c2 }}</td>
                                        <td>{{ $item->c3 }}</td>
                                        <td>{{ $item->c4 }}</td>
                                        <td>{{ $item->c5 }}</td>
                                        <td>{{ $item->wj }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>


    <div class="col-sm-12 mt-3">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9">
                        <h5>Perhitungan Vektor S</h5>
                    </div>
                </div>
            </div>
            @if ($data != null)
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <th>Wisata</th>
                                    <th>Vektor S</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $item->wisata->nama_tempat }}</td>
                                        <td>{{ $item->bobotKeinginan->vektor_s }} </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>


    <div class="col-sm-12 mt-3">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9">
                        <h5>Perhitungan Vektor V</h5>
                    </div>
                </div>
            </div>
            @if ($data != null)
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="basic-2">
                            <thead>
                                <tr>
                                    <th>Wisata</th>
                                    <th>Vektor V</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $total = 0;
                                @endphp
                                @foreach ($data->sortBy($total) as $item)
                                    @php
                                        $total += pow($item->harga_tiket, $item->bobotKeinginan->c1) * pow($item->jarak, $item->bobotKeinginan->c2) * pow($item->fasilitas, $item->bobotKeinginan->c3) * pow($item->pelayanan, $item->bobotKeinginan->c4) * pow($item->suasana, $item->bobotKeinginan->c5);
                                    @endphp
                                    <tr>
                                        <td>{{ $item->wisata->nama_tempat }}</td>
                                        <td>
                                            {{ (pow($item->harga_tiket, $item->bobotKeinginan->c1) * pow($item->jarak, $item->bobotKeinginan->c2) * pow($item->fasilitas, $item->bobotKeinginan->c3) * pow($item->pelayanan, $item->bobotKeinginan->c4) * pow($item->suasana, $item->bobotKeinginan->c5)) / $total }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
