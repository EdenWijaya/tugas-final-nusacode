<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index() {
        $pesan = Pesan::latest()->get();

        return view('admin.pesan.index', compact('pesan'));
    }

    public function destroy(Pesan $pesan) {
        $pesan->delete();

        return redirect()->back()->with([
            'message' => 'Data Pesan Berhasil Dihapus',
            'alert-type' => 'info'
        ]);
    }
}
