<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;
use App\Models\Pesan;

class HomeController extends Controller
{
    public function index() {
        $motor = Motor::latest()->get();

        return view('frontend.homepage', compact('motor'));
    }

    public function contact() {
        return view('frontend.contact');
    }

    public function contactStore(Request $request) {
        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'judul' => 'required',
            'pesan' => 'required'
        ]);

        Pesan::create($data);

        return redirect()->back()->with([
            'message' => 'Pesan Berhasil Terkirim',
            'alert-type' => 'success'
        ]);
    }

    public function detail(Motor $motor) {
        return view('frontend.detail', compact('motor'));
    }
}
