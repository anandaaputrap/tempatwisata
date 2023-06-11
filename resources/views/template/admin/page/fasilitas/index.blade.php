@extends('template.admin.app')

@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9">
                        <h5>Kriteria Fasilitas</h5>
                    </div>
                    <div class="col-3 text-end">
                        <a href="{{ route('kriteria-fasilitas.create') }}" class="btn btn-warning" target="_blank"><span class="fa fa-plus"></span></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="display" id="basic-1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Fasilitas</th>
                                <th>Detail</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>    
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->fasilitas }}</td>
                                <td>
                                    @if ($item->detail->isEmpty())
                                    <a href="{{ route('create.detail.fasilitas', $item->id) }}" class="btn btn-warning" target="_blank">Tambah Detail</a>
                                    @else
                                    <a href="{{ route('edit.detail.fasilitas', $item->id) }}" class="btn btn-primary" target="_blank">Edit Detail</a>
                                    @endif
                                </td>
                                <td>{{ status($item->status) }}</td>
                                <td>
                                    <div class="col-auto m-0 row">
                                        <div class="col-auto g-1">
                                            <a href="{{ route('kriteria-fasilitas.edit', $item->id) }}"
                                                class="btn btn-warning" target="_blank"><span class="fa fa-pencil"></span></a>
                                        </div>
                                        <div class="col-auto g-1">
                                            <form action="{{ route('kriteria-fasilitas.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                                @if ($item->status == 'Active')
                                                    <button type="submit" class="btn btn-primary"><span class="fa fa-toggle-on"></span></button>
                                                @else
                                                    <button type="submit" class="btn btn-danger"><span class="fa fa-toggle-off"></span></button>
                                                @endif
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
