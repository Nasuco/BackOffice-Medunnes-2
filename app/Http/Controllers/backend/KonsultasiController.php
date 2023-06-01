<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Konsultasi;

class KonsultasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $konsultasi = DB::table('konsultasi')->get();
        return view('backend.konsultasi.list_konsultasi', ['konsultasi' => $konsultasi]);
    }

    // destroy
    public function destroy(int $id)
    {
        Konsultasi::destroy($id);
        return redirect('/list_konsultasi')->with('flash_message', 'Konsultasi deleted!');
    }
}
