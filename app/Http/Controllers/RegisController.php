<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Requests\regis;
use App\Http\Requests\login;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisController extends Controller
{

    public function prosesRegis(regis $request){
        $validateRegis = $request->validate([
            'username' => 'required|unique:users|min:3|max:25',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|',
            'password_confirm' => 'required|same:password'
        ]);

        $validateRegis['password'] = bcrypt($validateRegis['password']);

        $validateRegis['password_confirm'] = bcrypt($validateRegis['password_confirm']);
        
        User::create($validateRegis);

        $request->session()->flash('success','Silahkan Login');

        return view("/registrasi");
    }

    public function index() {
        $users = User::all();
        return view('akun', compact('users'));
    }

    public function show($akun)
    {   
        
        $users = User::find($akun);
        return view('akun',['users' => $users]);
    }

    public function edit($id)
    {
        $res = User::find($id);
        return view('akun.edit',compact('res'));
    }

    public function update(request $request){
        $rules = [
            'username' => 'required',
            'email' => 'required',
            'nomor_hp' => 'required|min:8|max:13',
            'jenis_kelamin' => 'required|in:P,L',

        ];

        
        $validateData = $request->validate($rules);
        $validateData['id'] = auth()->user()->id;
        User::where('id',auth()->user()->id)->update($validateData);
        
        return redirect('akun/'.auth()->user()->id)->with('pesan','Akun Berhasil Di Update');
    }

    public function destroy($id)
    {
        $res = user::find($id);
        $res->delete();
        return redirect('/index');
    }


public function authenticate(request $request){
    $credentials = $request->validate([
        'email' => 'required|email:dns',
        'password' => 'required'
    ]);

    if(Auth::attempt($credentials)){
        $request->session()->regenerate();
        return redirect()->intended('/index');
    } 
    
        return back()->with('loginError','Login Gagal');
    }

    public function logout(){
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->intended('/index');
    }
}
