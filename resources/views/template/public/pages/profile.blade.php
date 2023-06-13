@extends('template.public.app')

@section('content')
    <section class="booking-section ptb-100 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="booking-form">
                        <form action="{{ route('edit.profile') }}" method="POST">
                            <input type="hidden" name="id" value="{{ $data->id }}">
                            @csrf
                            <div class="content">
                                <h3>Data Diri</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="nama" value="{{ $data->nama }}"
                                                class="form-control" required placeholder="Nama Anda" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" value="{{ $data->email }}"
                                                class="form-control" readonly placeholder="Email anda" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="number" name="no_hp" value="{{ $data->no_hp }}"
                                                class="form-control" required placeholder="Nomor Hp anda" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="form-control" name="gender">
                                                <option data-display="Pilih Jenis Kelamin">Pilih Jenis Kelamin</option>
                                                <option value="Laki"
                                                    {{ old('gender', $data->gender) == 'Laki' ? 'selected' : null }}>
                                                    Laki-Laki
                                                </option>
                                                <option value="Perempuan"
                                                    {{ old('gender', $data->gender) == 'Perempuan' ? 'selected' : null }}>
                                                    Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn-primary">
                                Update
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
