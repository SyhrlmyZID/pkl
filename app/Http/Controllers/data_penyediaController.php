<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_penyedia;

class data_penyediaController extends Controller
{
        public function index()
        {
            $data_penyedia = data_penyedia::where('userId', auth()->id())->get();
            return view('data_umum.data_penyedia.index', compact('data_penyedia'));
        }
    
        public function create()
        {
            return view('data_umum.data_penyedia.index');
        }
    
        public function store(Request $request)
        {
            $request->validate([
                'nama' => 'required|',
                'jenis_kelamin' => 'required|',
                'tempat_tanggal_lahir' => 'required|',
                'nik' => 'required|',
                'alamat' => 'required|',
                'nama_perusahaan' => 'required|',
                'alamat_perusahaan' => 'required|',
                'no_hp' => 'required|',
                'npwp' => 'required|',
                'nib' => 'required|',
 
            ]);
    
            data_penyedia::create(array_merge($request->all(), ['userId' => auth()->id()]));
    
            return redirect()->route('data_penyedia.index')
                ->with('success', 'Data umum created successfully.');
        }
    
        public function show(data_penyedia $data_penyedia)
        {
            if ($data_penyedia->userId !== auth()->id()) {
                abort(403, 'Unauthorized access');
            }
    
            return view('data_umum.data_penyedia.index', compact('data_penyedia'));
        }
    
        public function edit($id)
        {
            $data_penyedia = data_penyedia::findOrFail($id);
    
            if ($data_penyedia->userId !== auth()->id()) {
                abort(403, 'Unauthorized access');
            }
    
            return view('data_umum.data_penyedia.edit', compact('data_penyedia'));
        }
    
        public function update(Request $request, $id)
        {
            $request->validate([
                
            ]);
    
            $data = data_penyedia::findOrFail($id);
    
            $data->update($request->all());
    
            return redirect()->route('data_penyedia.index')->with('success', 'Data aparat berhasil diperbarui.');
        }
    
        public function destroy(data_penyedia $data_penyedia)
        {
            if ($data_penyedia->userId !== auth()->id()) {
                abort(403, 'Unauthorized access');
            }
    
            $data_penyedia->delete();
    
            return redirect()->route('data_penyedia.index')
                ->with('success', 'Data Umum deleted successfully.');
        }
    }
    

