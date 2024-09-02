<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Motor;
use App\Http\Requests\Admin\MotorStoreRequest;
use App\Http\Requests\Admin\MotorUpdateRequest;
use Illuminate\Support\Str;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motor = Motor::latest()->get();
        
        return view('admin.motor.index', compact('motor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.motor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MotorStoreRequest $request)
    {
        // Validasi sudah ditangani oleh MotorStoreRequest
        $gambar = $request->file('gambar')->store('assets/motor', 'public');
        $slug = Str::slug($request->nama_motor, '-');
        
        // Simpan data motor
        Motor::create($request->except('gambar') + ['gambar' => $gambar, 'slug' => $slug]);

        return redirect()->route('motor.index')->with([
            'message' => 'Data Berhasil Ditambahkan',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Motor $motor)
    {
        return view('admin.motor.edit', compact('motor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MotorUpdateRequest $request,Motor $motor)
    {
        if($request->validated()) {
            $slug = Str::slug($request->nama_motor, '-');
            $motor->update($request->validated() + ['slug' => $slug]);
        }

        return redirect()->route('motor.index')->with([
            'message' => 'Perubahan Berhasil Disimpan',
            'alert-type' => 'info'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Motor $motor)
    {
        if($motor->gambar) {
            unlink('Storage/'. $motor->gambar);
        }

        $motor->delete();

        return redirect()->back()->with([
            'message' => 'Data Berhasil Dihapus',
            'alert-type' => 'info'
        ]);
    }

    public function updateImage(Request $request, $motorId) {
        $request->validate([
            'gambar' => 'required|image'
        ]);
    
        $motor = Motor::findOrFail($motorId);
        if($request->gambar) {
            // Hapus gambar lama
            if (file_exists(storage_path('app/public/' . $motor->gambar))) {
                unlink(storage_path('app/public/' . $motor->gambar));
            }
            
            // Simpan gambar baru
            $gambar = $request->file('gambar')->store('assets/motor', 'public');
    
            // Update data motor dengan gambar baru
            $motor->update([
                'gambar' => $gambar
            ]);
        }
    
        return redirect()->back()->with([
            'message' => 'Gambar Berhasil Diedit',
            'alert-type' => 'info'
        ]);
    }
    
}

