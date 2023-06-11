@extends('template.admin.app')

@section('content')
<div class="edit-profile">
    <div class="row">
        <div class="card col-xl-12">
            @if (Route::is('create.detail.fasilitas'))
                <form action="{{ route('post.detail.fasilitas') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="kriteria_fasilitas_id" value="{{ $id }}" placeholder="Nama fasilitas" />
                    <div class="card-header pb-0">
                        <h4 class="card-title mb-0">Tambah Detail Kriteria Fasilitas</h4>
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
                                    <label class="form-label">Jawaban A</label>
                                    <input class="form-control" type="text" name="jawaban_a"
                                        placeholder="Jawaban A" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Jawaban B</label>
                                    <input class="form-control" type="text" name="jawaban_b"
                                        placeholder="Jawaban B" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Jawaban C</label>
                                    <input class="form-control" type="text" name="jawaban_c"
                                        placeholder="Jawaban C" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Jawaban D</label>
                                    <input class="form-control" type="text" name="jawaban_d"
                                        placeholder="Jawaban D" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Jawaban E</label>
                                    <input class="form-control" type="text" name="jawaban_e"
                                        placeholder="Jawaban E" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary" type="submit">Tambah</button>
                    </div>
                </form>
            @else
                <form action="{{ route('update.detail.fasilitas', $data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header pb-0">
                        <h4 class="card-title mb-0">Edit Detail Kriteria Fasilitas</h4>
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
                                    <label class="form-label">Jawaban A</label>
                                    <input class="form-control" type="text" value="{{ $data->jawaban_a }}" name="jawaban_a"
                                        placeholder="Jawaban A" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Jawaban B</label>
                                    <input class="form-control" type="text" value="{{ $data->jawaban_b }}" name="jawaban_b"
                                        placeholder="Jawaban B" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Jawaban C</label>
                                    <input class="form-control" type="text" value="{{ $data->jawaban_c }}" name="jawaban_c"
                                        placeholder="Jawaban C" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Jawaban D</label>
                                    <input class="form-control" type="text" value="{{ $data->jawaban_d }}" name="jawaban_d"
                                        placeholder="Jawaban D" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Jawaban E</label>
                                    <input class="form-control" type="text" value="{{ $data->jawaban_e }}" name="jawaban_e"
                                        placeholder="Jawaban E" />
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