<?php
// app/Http/Controllers/AdminController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'nik' => 'required|string|max:255',
            'jenis_poli' => 'required|string|max:255',
        ]);

        Admin::create([
            'email' => $request->email,
            'nik' => $request->nik,
            'jenis_poli' => $request->jenis_poli,
        ]);

        return redirect()->back()->with('success', 'Data has been saved successfully.');
    }
}