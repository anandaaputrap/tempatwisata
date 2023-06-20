@extends('template.admin.app')

@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9">
                        <h5>Kriteria Pelayanan</h5>
                    </div>
                    <div class="col-3 text-end">
                        <a href="{{ route('kriteria-pelayanan.create') }}" class="btn btn-primary" target="_blank"><span class="fa fa-plus"></span></a>
                    </div>
                </div>
            </div>
            @if ($data != null)  
            <div class="card-body">
                <div class="table-responsive">
                    <table class="display" id="basic-1">
                        <thead>
                            <tr>
                                <th>Pelayanan</th>
                                <th>Bobot</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->pelayanan }}</td>    
                                <td>{{ $item->bobot }}</td> 
                                <td>
                                    <div class="col-auto m-0 row">
                                        <div class="col-auto g-1">
                                            <a href="{{ route('kriteria-pelayanan.edit', $item->id) }}"
                                                class="btn btn-warning" target="_blank"><span
                                                    class="fa fa-pencil"></span></a>
                                        </div>
                                    </div>
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
