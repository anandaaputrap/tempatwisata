@if ($errors->any())
    <div class="alert alert-danger dark alert-dismissible fade show" role="alert" id="alert">
        <b>Terjadi Beberapa Kesalahan.</b><br>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
@endif

@if (session()->has('success'))
    <div class="alert alert-primary dark alert-dismissible fade show" role="alert" id="alert">
        <b>{{ session()->get('success') }}</b><br>
    </div>
@endif
