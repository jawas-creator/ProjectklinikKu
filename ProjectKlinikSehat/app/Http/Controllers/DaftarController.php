<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use App\Http\Requests\StoreDaftarRequest;
use App\Http\Requests\UpdateDaftarRequest;
use App\Http\Requests;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['daftar'] = \App\Models\Daftar::latest()->paginate(10);
        return view('daftar_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
<<<<<<< HEAD
        $data['ListPasien'] = \App\Models\Pasien::pluck('nama', 'id');
=======
        $data['listPasien'] = \App\Models\Pasien::orderBy('nama','asc')->get();
        $data['listPoli'] = [
            'Poli Umum' => "poli Umum",
            'Poli Gigi' => "poli Gigi",
            'Poli Kandungan' => "poli Kandungan",
            'Poli Anak' => "poli Anak",
        ];
>>>>>>> f61ab34eb74f2bd97d6891ade4cdac5b2fad575c
        return view('daftar_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([
            'tanggal_daftar' => 'required',
            'pasien_id'  => 'required',
            'poli' => 'required',
            'keluhan' => 'required'
            
        ]);
        $daftar = new Daftar();
        $daftar->fill($requestData);
        $daftar->save();
        flash('Data berhasil disimpan')->succes();
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Daftar $daftar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Daftar $daftar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDaftarRequest $request, Daftar $daftar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Daftar $daftar)
    {
        //
    }
}