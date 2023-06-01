<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $admin = DB::table('admins')->get();
        return view('backend.Admin.view_admin', ['admin' => $admin]);
    }

    // destroy
    // public function destroy(int $id)
    // {
    //     Konsultasi::destroy($id);
    //     return redirect('/list_konsultasi')->with('flash_message', 'Konsultasi deleted!');
    // }
}
