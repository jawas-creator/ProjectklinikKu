@extends('layouts.app_modern',['title' => 'Data Pasien'])
@section('content')
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