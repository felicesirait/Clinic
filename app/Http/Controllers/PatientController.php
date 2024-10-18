<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function store(Request $request)
    {
        // Validate and save the patient data
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string',
            'alamat' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:15',
            'usia' => 'required|integer',
            'email' => 'required|email|max:255',
            'nik' => 'required|string|max:16',
            'jenis_poli' => 'required|string',
            'keluhan' => 'required|string',
            'tanggal_kunjungan' => 'required|date',
            'jam_kunjungan' => 'required',
            'pilihan_dokter' => 'required|string|max:255',
        ]);

        Patient::create($request->all());

        // Redirect to the Reka Medis view
        return redirect()->route('reka medic');
    }

    public function rekaMedic()
    {
        $patients = Patient::all();
        return view('reka medic', compact('patients'));
    }
}