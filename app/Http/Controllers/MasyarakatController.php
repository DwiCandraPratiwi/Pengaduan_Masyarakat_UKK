<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masyarakat;
use Illuminate\Support\Facades\Hash;
use Auth;

class MasyarakatController extends Controller
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
        if(Auth::guard('masyarakat')->attempt($login)){
            return redirect('home');
        }else{
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
