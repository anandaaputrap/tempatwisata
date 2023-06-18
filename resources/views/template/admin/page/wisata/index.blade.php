@extends('template.admin.app')

@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Wisata</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="display" id="basic-1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Tempat</th>
                                <th>Foto</th>
                                <th>Alamat</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_tempat }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/' . $item->foto) }}" alt=""
                                            style="width: auto;height:120px;">
                                    </td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ status($item->status) }}</td>
                                    <td>
                                        <div class="col-auto m-0 row">
                                            <div class="col-auto g-1">
                                                <a href="{{ route('wisata.edit', $item->id) }}" class="btn btn-warning"
                                                    target="_blank"><span class="fa fa-pencil"></span></a>
                                            </div>
                                            <div class="col-auto g-1">
                                                <form action="{{ route('wisata.destroy', $item->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    @if ($item->status == 'Active')
                                                        <button type="submit" class="btn btn-primary"><span
                                                                class="fa fa-toggle-on"></span></button>
                                                    @else
                                                        <button type="submit" class="btn btn-danger"><span
                                                                class="fa fa-toggle-off"></span></button>
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
