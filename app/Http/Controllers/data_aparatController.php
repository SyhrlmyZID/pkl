<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_aparat;

class data_aparatController extends Controller
{
    public function index()
    {
        $data_aparat = data_aparat::where('userId', auth()->id())->get();
        return view('data_umum.data-aparat', compact('data_aparat'));
    }

    public function create()
    {
        return view('data_umum.data-aparat');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:255',
            'tempat_tanggal_lahir' => 'required|string|max:255',
            'nik' => 'required|integer',
            'alamat' => 'required|string|max:255',
            'npwp' => 'required|string|max:255',
            'no_hp' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
        ]);

        data_aparat::create(array_merge($request->all(), ['userId' => auth()->id()]));

        return redirect()->route('data_aparat.index')
            ->with('success', 'Data umum created successfully.');
    }

    public function show(data_aparat $data_aparat)
    {
        if ($data_aparat->userId !== auth()->id()) {
            abort(403, 'Unauthorized access');
        }

        return view('data_umum.data-aparat', compact('data_aparat'));
    }

    public function edit($id)
    {
        $data_aparat = data_aparat::findOrFail($id);

        if ($data_aparat->userId !== auth()->id()) {
            abort(403, 'Unauthorized access');
        }

        return view('data_umum.edit', compact('data_aparat'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string',
            'tempat_tanggal_lahir' => 'required|string|max:255',
            'nik' => 'required|string|max:18',
            'alamat' => 'required|string',
            'npwp' => 'required|string|max:20',
            'no_hp' => 'required|string',
            'jabatan' => 'required|string',
        ]);

        $data = data_aparat::findOrFail($id);

        $data->update($request->all());

        return redirect()->route('data_aparat.index')->with('success', 'Data aparat berhasil diperbarui.');
    }

    public function destroy(data_aparat $data_aparat)
    {
        if ($data_aparat->userId !== auth()->id()) {
            abort(403, 'Unauthorized access');
        }

        $data_aparat->delete();

        return redirect()->route('data_aparat.index')
            ->with('success', 'Data Umum deleted successfully.');
    }
}
