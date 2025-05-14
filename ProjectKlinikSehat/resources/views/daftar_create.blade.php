@extends('layouts.app-modern',['title' => 'Pendaftaran Peserta'])
@section('content')
<div class="card">
    <div class="card-header">
        Form Pendaftaran Pasien
    </div> <!-- penutup tag card-header -->

    <div class="card-body">
        <form action="/daftar" method="POST">
            @csrf
            <div class="form-group mt-3">
                <label for="tanggal_daftar">Tanggal Daftar</label>
                <input type="date" name="tanggal_daftar" class="form-control" 
                       value="{{ old('tanggal_daftar') ?? date('Y-m-d') }}">
                <span class="text-danger">{{ $errors->first('tanggal_daftar') }}</span>
            </div>
        </form>
    </div>
</div>

@endsection