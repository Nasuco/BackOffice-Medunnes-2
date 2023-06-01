<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Spesialis;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class SpesialisController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $spesialis = DB::table('spesialis')->get();
        return view('backend.spesialis.list_spesialis', ['spesialis' => $spesialis]);
    }

    // create spesialis
    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('backend.spesialis.create_spesialis');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nama_spesialis' => 'required',
            'img_spesialis'     => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        //upload image
        $image = $request->file('img_spesialis');
        $image->storeAs('public', $image->hashName());

        //create post
        Spesialis::create([
            'nama_spesialis' => $request->nama_spesialis,
            'img_spesialis'     => $image->hashName()
        ]);

        //redirect to index
        return redirect()->route('spesialis.store')->with(['success' => 'Data Berhasil Disimpan!']);
    }

}
