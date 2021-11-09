<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;
use Illuminate\Support\Facades\Hash;

class KelolaUserController extends Controller
{
    public function __construct() {
        $this->User = new User();
        $this->middleware('auth');
    }
    
    public function index() {
        $kelolaUser = User::all();
        $data = [
            'kelolauser' => $kelolaUser,
        ];
        return view('v_user', $data);
    }

    public function add() {
        return view('v_adduser');
    }

    public function insert() {
        // Request()->validate([
        //     'name' => 'required', 
        //     'email' => 'required|unique:users, email|email|',
        //     'password' => 'required|min:8|confirmed',
        //     'level_id' => 'required',
        // ],
        // [
        //     'name.required' => 'wajib diisi !',

        //     'email.required' => 'wajib diisi !',
        //     'email.unique' => 'email sudah terdaftar',

        //     'password.required' => 'wajib diisi !',
        //     'password.min' => 'minimal 8 karakter',

        //     'level_id.required' => 'pilih salah satu !',
        // ]);

        // $data = [
        //     'name' => Request()->name,
        //     'email' => Request()->email,
        //     'password' => Hash::make(Request()->password),
        //     'level_id' => Request()->level_id,
        // ];

        // $this->User->addData($data);
        // return redirect()->route('user')->with('pesan', 'User berhasil ditambahkan !');

        return request()->all();
    }
}
