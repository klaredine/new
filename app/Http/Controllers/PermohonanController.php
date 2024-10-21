<?php

namespace App\Http\Controllers;

use App\Models\Permohonan;
use Illuminate\Http\Request;
use PDF;

class PermohonanController extends Controller
{
    public function index()
    {
        $permohonans = Permohonan::all();
        return view('permohonan.index', compact('permohonans'));
    }

    public function create()
    {
        return view('permohonan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'pangkat_gol' => 'required',
            'jabatan' => 'required',
            'unit_kerja' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
            'alasan' => 'required',
        ]);

        Permohonan::create($request->all());

        return redirect()->route('permohonan.index')
                         ->with('success', 'Permohonan created successfully.');
    }

    public function edit($id)
    {
        $permohonan = Permohonan::findOrFail($id);
        return view('permohonan.edit', compact('permohonan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'pangkat_gol' => 'required',
            'jabatan' => 'required',
            'unit_kerja' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
            'alasan' => 'required',
        ]);

        $permohonan = Permohonan::findOrFail($id);
        $permohonan->update($request->all());

        return redirect()->route('permohonan.index')
                         ->with('success', 'Permohonan updated successfully.');
    }

    public function destroy($id)
    {
        $permohonan = Permohonan::findOrFail($id);
        $permohonan->delete();

        return redirect()->route('permohonan.index')
                         ->with('success', 'Permohonan deleted successfully.');
    }

    public function show($id)
    {
        $permohonan = Permohonan::findOrFail($id);
        return view('permohonan.show', compact('permohonan'));
    }

    public function print($id)
    {
        $permohonan = Permohonan::findOrFail($id);
        $pdf = PDF::loadView('permohonan.print', compact('permohonan'));
        return $pdf->download('permohonan_'.$id.'.pdf');
    }

 }
