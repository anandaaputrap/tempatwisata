@extends('template.admin.app')

@section('content')
<div class="edit-profile">
    <div class="row">
        <div class="card col-xl-12">
            @if (Route::is('kriteria-harga-tiket.create'))
                <form action="{{ route('kriteria-harga-tiket.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header pb-0">
                        <h4 class="card-title mb-0">Tambah Kriteria Harga Tiket</h4>
                        <div class="card-options">
                            <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i
                                    class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#"
                                data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Harga</label>
                                    <input class="form-control" type="text" name="harga"
                                        placeholder="Harga" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Kategori</label>
                                    <input class="form-control" type="text" name="kategori"
                                        placeholder="Kategori" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Bobot</label>
                                    <input class="form-control" type="text" name="bobot"
                                        placeholder="Bobot" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary" type="submit">Tambah</button>
                    </div>
                </form>
            @else
                <form action="{{ route('kriteria-harga-tiket.update', $data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-header pb-0">
                        <h4 class="card-title mb-0">Edit Kriteria Harga Tiket</h4>
                        <div class="card-options">
                            <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i
                                    class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#"
                                data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Harga</label>
                                    <input class="form-control" type="text" value="{{ $data->harga }}" name="harga"
                                        placeholder="Harga" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Kategori</label>
                                    <input class="form-control" type="text" value="{{ $data->kategori }}" name="kategori"
                                        placeholder="Kategori" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Bobot</label>
                                    <input class="form-control" type="text" value="{{ $data->bobot }}" name="bobot"
                                        placeholder="Bobot" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary" type="submit">
                            Update
                        </button>
                    </div>
                </form>
            @endif
        </div>
    </div>
</div>
@endsection