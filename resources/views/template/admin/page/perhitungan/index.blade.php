@extends('template.admin.app')

@section('content')
    <div class="col-sm-12">
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
                                <th>Tiket</th>
                                <th>Fasilitas</th>
                                <th>Jarak</th>
                                <th>Pelayanan</th>
                                <th>Suasana</th>
                                <th>Hasil</th>
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
                                <td>   
                                {{ (pow($item->harga_tiket, 0.2)) * (pow($item->fasilitas, 0.2)) * (pow($item->jarak, 0.2)) * (pow($item->pelayanan, 0.2)) * (pow($item->suasana, 0.2)) }}
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
                                <th>Tiket</th>
                                <th>Fasilitas</th>
                                <th>Jarak</th>
                                <th>Pelayanan</th>
                                <th>Suasana</th>
                                <th>Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $total = 0;
                            @endphp
                            @foreach ($data->sortBy($total) as $item)
                            @php
                            $total += (pow($item->harga_tiket, 0.2)) * (pow($item->fasilitas, 0.2)) * (pow($item->jarak, 0.2)) * (pow($item->pelayanan, 0.2)) * (pow($item->suasana, 0.2));
                            @endphp
                            <tr>
                                <td>{{ $item->wisata->nama_tempat }}</td>    
                                <td>{{ $item->harga_tiket }}</td>    
                                <td>{{ $item->fasilitas }}</td>    
                                <td>{{ $item->jarak }}</td>    
                                <td>{{ $item->pelayanan }}</td>    
                                <td>{{ $item->suasana }}</td>    
                                <td>   
                                {{ (pow($item->harga_tiket, 0.2)) * (pow($item->fasilitas, 0.2)) * (pow($item->jarak, 0.2)) * (pow($item->pelayanan, 0.2)) * (pow($item->suasana, 0.2)) / $total }}
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
