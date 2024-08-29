<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_tpk;

class data_tpkController extends Controller
{
    public function index()
    {
        $data_tpk = data_tpk::where('userId', auth()->id())->get();
        return view('data_umum.data_tpk.index', compact('data_tpk'));
    }

    public function create()
    {
        return view('data_umum.data_tpk.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|',
            'jenis_kelamin' => 'required|',
            'tempat_tanggal_lahir' => 'required|',
            'alamat' => 'required|',
            'nik' => 'required|',
            'no_hp' => 'required|',
            'no_sk_desa' => 'required|',
            'tanggal_sk_desa' => 'required|',
            'jabatan' => 'required|'
        ]);

        data_tpk::create(array_merge($request->all(), ['userId' => auth()->id()]));

        return redirect()->route('data_tpk.index')
            ->with('success', 'Data umum created successfully.');
    }

    public function show(data_tpk $data_tpk)
    {
        if ($data_tpk->userId !== auth()->id()) {
            abort(403, 'Unauthorized access');
        }

        return view('data_umum.data_tpk.index', compact('data_tpk'));
    }

    public function edit($id)
    {
        $data_tpk = data_tpk::findOrFail($id);

        if ($data_tpk->userId !== auth()->id()) {
            abort(403, 'Unauthorized access');
        }

        return view('data_umum.data_tpk.edit', compact('data_tpk'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'jenis_kelamin' => 'required|string',
            'tempat_tanggal_lahir' => 'required|max:255',
            'alamat' => 'required|string',
            'nik' => 'required|max:18',
            'no_hp' => 'required|string',
            'no_sk_desa' => 'required|max:255',
            'tanggal_sk_desa' => 'required|date',
            'jabatan' => 'required|string'
        ]);

        $data = data_tpk::findOrFail($id);

        $data->update($request->all());

        return redirect()->route('data_tpk.index')->with('success', 'Data aparat berhasil diperbarui.');
    }

    public function destroy(data_tpk $data_tpk)
    {
        if ($data_tpk->userId !== auth()->id()) {
            abort(403, 'Unauthorized access');
        }

        $data_tpk->delete();

        return redirect()->route('data_tpk.index')
            ->with('success', 'Data Umum deleted successfully.');
    }
}
