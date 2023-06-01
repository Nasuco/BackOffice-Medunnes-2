<?php

namespace App\Http\Controllers\backend;

use App\Models\Pasien;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PasienController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    // get data user_pasien
    public function index()
    {
        $pasien = DB::table('user_pasien')->get();
        return view('backend.pasien.list_pasien', ['pasien' => $pasien]);
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $pasien = Pasien::where('nama_pasien', 'like', '%' . $keyword . '%')->paginate(15);

        return view('backend.pasien.list_pasien', ['pasien' => $pasien]);
    }
}
