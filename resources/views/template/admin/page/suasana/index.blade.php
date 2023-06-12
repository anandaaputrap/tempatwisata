@extends('template.admin.app')

@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9">
                        <h5>Kriteria Suasana</h5>
                    </div>
                    <div class="col-3 text-end">
                        <a href="{{ route('kriteria-suasana.create') }}" class="btn btn-primary" target="_blank"><span class="fa fa-plus"></span></a>
                    </div>
                </div>
            </div>
            @if ($data != null)  
            <div class="card-body">
                <div class="table-responsive">
                    <table class="display" id="basic-1">
                        <thead>
                            <tr>
                                <th>Suasana</th>
                                <th>Bobot</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->suasana }}</td>    
                                <td>{{ $item->bobot }}</td>    
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
