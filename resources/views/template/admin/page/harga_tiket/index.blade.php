@extends('template.admin.app')

@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9">
                        <h5>Kriteria Harga Tiket</h5>
                    </div>
                    <div class="col-3 text-end">
                        @if ($data == null)    
                        <a href="{{ route('kriteria-harga-tiket.create') }}" class="btn btn-primary" target="_blank"><span class="fa fa-plus"></span></a>
                        @else
                        <a href="{{ route('kriteria-harga-tiket.edit', $data['id']) }}" class="btn btn-warning" target="_blank"><span class="fa fa-pencil"></span></a>                         
                        @endif
                    </div>
                </div>
            </div>
            @if ($data != null)  
            <div class="card-body">
                <div class="table-responsive">
                    <table class="display" id="basic-1">
                        <thead>
                            <tr>
                                <th>Jawaban</th>
                                <th>Jawaban</th>
                                <th>Jawaban</th>
                                <th>Jawaban</th>
                                <th>Jawaban</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>{{ $data['jawaban_a'] }}</td>
                            <td>{{ $data['jawaban_b'] }}</td>
                            <td>{{ $data['jawaban_c'] }}</td>
                            <td>{{ $data['jawaban_d'] }}</td>
                            <td>{{ $data['jawaban_e'] }}</td>
                        </tbody>
                    </table>
                </div>
            </div>
            @endif
        </div>
    </div>
@endsection
