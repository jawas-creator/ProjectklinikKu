@extends('layouts.app_modern',['title' => 'Data Pasien'])
@section('content')
<style>
    body {
        background-color: #f0f8ff;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .card {
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 128, 128, 0.15);
        border: none;
        background-color: #ffffff;
    }

    .card-header {
        background-color: #66cdaa;  /* Warna hijau lebih adem seperti klinik */
        color: white;
        font-weight: bold;
        font-size: 1.3rem;
        border-radius: 12px 12px 0 0;
    }

    .table {
        margin-top: 20px;
        border-collapse: collapse;
        width: 100%;
    }

    .table th, .table td {
        text-align: center;
        padding: 12px;
        border: 1px solid #ddd;
    }

    .table th {
        background-color: #66cdaa; /* Warna hijau lebih adem */
        color: white;
        font-weight: bold;
    }

    .table td {
        background-color: #f9f9f9;
    }

    .table tbody tr:nth-child(odd) td {
        background-color: #e9f7f5;
    }

    .table tbody tr:hover {
        background-color: #d6f7f2;
    }

    .btn-primary {
        background-color: #66cdaa;  /* Warna hijau yang lebih adem */
        border-color: #66cdaa;
    }

    .btn-primary:hover {
        background-color: #50a58a; /* Sedikit lebih gelap saat hover */
        border-color: #50a58a;
    }

    .btn-warning {
        background-color: #ffc107;
        border-color: #e0a800;
    }

    .btn-warning:hover {
        background-color: #e0a800;
        border-color: #d39e00;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }

    .pagination {
        justify-content: center;
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
        border-radius: 6px;
        padding: 10px;
        margin-top: 15px;
    }

    /* Styling untuk tombol agar rapi dan sejajar */
    .btn-sm {
        padding: 6px 12px;
        margin: 0 5px;
    }

    .btn-group {
        display: flex;
        justify-content: center;
    }

    /* Meningkatkan jarak antar elemen dalam tabel dan tombol */
    .table td {
        padding: 10px 15px;
    }

    /* Menjaga agar tanggal tidak terpotong atau kebawah */
    .table td:nth-child(4) {
        white-space: nowrap;  /* Agar tanggal tetap dalam satu baris */
    }
</style>
    <div class="card">
    <h3 class="card-header">Data Pasien</h3>
        <div class="card-body">
            <a href="/pasien/create" class="btn btn-primary">Tambah Data</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Pasien</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Jenis Kelamin</th>
                        <th>Tgl Buat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pasien as $item )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->no_pasien }}</td>
                            <td>
                            @if ($item->foto)
                                 
                            <a href="{{ Storage::url($item->foto) }}" target="blank">
                                <img src="{{ Storage::url($item->foto) }}" width="50">
                            </a>
                            @endif
                            </td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->umur }}</td>
                            <td>{{ $item->jenis_kelamin }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <a href="/pasien/{{ $item->id }}/edit" class="btn btn-warning btn-sm" >Edit</a>
                                <form action="/pasien/{{ $item->id }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Anda Yakin?')">
                                        Hapus
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $pasien->links() !!}
        </div>
    </div>
@endsection