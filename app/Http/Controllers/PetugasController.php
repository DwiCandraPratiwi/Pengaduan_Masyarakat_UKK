<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;
use DB;

class PetugasController extends Controller
{
    public function adminHome(){
        return view('admin.dashboard');
    }

    public function index(){
        $petugas = DB::select('call listPetugas');
        return view('admin.petugas.index', compact('petugas'));
    }

    public function create(){
        return view('admin.petugas.create');
    }

    public function edit($id){
        $petugas = DB::select('call editPetugas(?)',array($id));
        return view('admin.petugas.edit', compact('petugas'));
    }

    public function store(Request $request){
        $nama = $request->nama;
        $username = $request->username;
        $password = $request->password;
        $telp = $request->telp;
        $level = $request->level;

        DB::select('call editPetugas(?, ?, ?, ?, ?, ?)',array($nik, $nama, $username, $password, $telp, $level));

        return redirect('/admin/petugas');
    }
    
    public function update(Request $request,$id){

        $nama = $request->nama;
        $username = $request->username;
        $password = $request->password;
        $telp = $request->telp;
        $level = $request->level;

        DB::select('call updatePetugas( ?, ?, ?, ?, ?, ?)',array($id, $nama, $username, $password, $telp, $level));

        return redirect('/admin/petugas');
    }

    public function destroy($id){
        DB::select('call deletePetugas(?)',array($id));
        return redirect('/admin/petugas');
    }


}
