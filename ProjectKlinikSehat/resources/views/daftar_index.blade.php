@extends('layouts.app_modern',['title' => 'Data Pendaftaran'])

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
            background-color: #20c997;
            color: white;
            font-weight: bold;
            font-size: 1.3rem;
            border-radius: 12px 12px 0 0;
        }

        .table {
            margin-top: 20px;
        }

        .table th {
            background-color: #e6f9f7;
            color: #00796b;
            font-weight: 600;
        }

        .table td {
            vertical-align: middle;
        }

        .btn-primary {
            background-color: #00796b;
            border-color: #00796b;
        }

        .btn-primary:hover {
            background-color: #005f56;
            border-color: #005f56;
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
    </style>

    <div class="card">
        <h3 class="card-header">Data Pendaftaran</h3>
        <div class="card-body">
            <a href="/daftar/create" class="btn btn-primary mb-3">Tambah Data</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Daftar</th>
                        <th>Poli</th>
                        <th>Keluhan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($daftar as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->pasien->nama }}</td>
                            <td>{{ $item->pasien->jenis_kelamin }}</td>
                            <td>{{ $item->tanggal_daftar }}</td>
                            <td>{{ $item->poli }}</td>
                            <td>{{ $item->keluhan }}</td>
                            <td>
                                <a href="/pasien/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                <form action="/pasien/{{ $item->id }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $daftar->links() !!}
        </div>
    </div>
@endsection
