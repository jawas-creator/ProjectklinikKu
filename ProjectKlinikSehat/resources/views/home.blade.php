@extends('layouts.app_modern')

@section('content')
<style>
    body {
        background-color: #e6f2f0; /* warna hijau muda soft */
    }
    .card-header {
        background-color: #008080;
        color: white;
        font-weight: bold;
        font-size: 1.2rem;
    }
    .dashboard-title {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 20px;
        color: #006666;
    }
    .feature-box {
        background-color: #ffffff;
        border: 1px solid #cce0e0;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 0px 8px rgba(0, 128, 128, 0.1);
        text-align: center;
    }
    .feature-box h5 {
        color: #009999;
        font-weight: bold;
    }
    .feature-box p {
        color: #666666;
    }
</style>

<div class="container py-4">
    <div class="dashboard-title text-center">
        Selamat Datang di Sistem Klinik Sehat
    </div>

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="row mb-4">
        <div class="col-md-4">
            <div class="feature-box">
                <h5>Total Pasien</h5>
                <p>124 Orang</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-box">
                <h5>Jadwal Hari Ini</h5>
                <p>3 Dokter Praktik</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-box">
                <h5>Antrian Aktif</h5>
                <p>8 Pasien</p>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">Informasi Umum Klinik</div>
        <div class="card-body">
            <p>Klinik Sehat menyediakan layanan kesehatan umum, konsultasi dokter, dan layanan laboratorium. Kami berkomitmen memberikan pelayanan terbaik untuk pasien.</p>
            <ul>
                <li>Jam Buka: Senin - Sabtu (08.00 - 17.00)</li>
                <li>Alamat: Jl. Kesehatan No. 10, Kota Sehat</li>
                <li>Kontak: 0812-3456-7890</li>
            </ul>
        </div>
    </div>
</div>
@endsection
