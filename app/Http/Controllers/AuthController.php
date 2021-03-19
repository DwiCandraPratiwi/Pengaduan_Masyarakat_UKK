<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masyarakat;
use App\Models\Petugas;
use Illuminate\Support\Facades\Hash;
use Auth;

class AuthController extends Controller
{
    public function registerView(){
        return view('auth.register');
    }

    public function prosesRegister(Request $request){  //request untuk ambil data
        Masyarakat::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'username' => $request->username, 
            'password' => Hash::make($request->password),
            'telp' => $request->telp
        ]);
        return redirect('/login');
    }

    public function loginView(){
        return view('auth.login');
    }

    public function loginProses(Request $request){
        $login = $request->only(['username', 'password']);

        $petugas = Petugas::where([
            'username' => $request->username,
            'password' => $request->password
        ])->first();

        if(Auth::guard('masyarakat')->attempt($login)){
            return redirect('/home');
        }elseif($petugas){
            Auth::guard('petugas')->login($petugas);
            $level = Auth::guard('petugas')->user()->level;
            if($level == 'petugas'){
                return 'petugas';
            }else{
                return redirect('/admin');
            }
        } else{
            return redirect('login');
        }
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
