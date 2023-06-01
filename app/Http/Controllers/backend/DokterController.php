<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Dokter;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DokterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dokter = DB::table('user_dokter')->get();
        return view('backend.dokter.list_dokter', ['dokter' => $dokter]);
    }

    public function create()
    {
        $spesialis = DB::table('spesialis')->get();
        $users = DB::table('users')->get();

        return view('backend.dokter.create_dokter', ['spesialis' => $spesialis, 'users' => $users]);
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'title_depan' => 'required',
            'nama_dokter' => 'required',
            'spesialis_id' => 'required',
            'img_dokter' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'alamat' => 'required',
            'no_tlp' => 'required',
            'tempat_kerja' => 'required',
            'tahun_lulus' => 'required',
            'tgl_mulai_aktif' => 'required',
            'alumni_kampus' => 'required',
            'no_reg' => 'required',
            'jenis_kelamin' => 'required',
            'status' => 'required',
        ]);

        $image = $request->file('img_dokter');
        $image->storeAs('public', $image->hashName());

        Dokter::create([
            'title_depan' => $request->title_depan,
            'nama_dokter' => $request->nama_dokter,
            'title_belakang' => $request->title_belakang,
            'spesialis_id' => $request->spesialis_id,
            'img_dokter' => $image->hashName(),
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_tlp,
            'tempat_kerja' => $request->tempat_kerja,
            'tahun_lulus' => $request->tahun_lulus,
            'tgl_mulai_aktif' => $request->tgl_mulai_aktif,
            'alumni_kampus' => $request->alumni_kampus,
            'no_reg' => $request->no_reg,
            'jenis_kelamin' => $request->jenis_kelamin,
            'status' => $request->status,
        ]);

        return redirect()->route('dokter.create')->with('success', 'Dokter berhasil ditambahkan!');
    }

    public function destroy(int $id)
    {
        Dokter::destroy($id);
        return redirect('/list_dokter')->with('flash_message', 'Dokter deleted!');
    }
}
