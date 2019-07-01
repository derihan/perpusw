<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

class adminController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->input();
            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'admin' => '1' ])){
				return redirect('admin/dashboard');
            } else {
                return redirect('/admin')->with('flash_message_error','Sepertinya Username atau Password Kamu Salah Ya!');
            }
        }
        return view('admin.admin_login');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function data_buku()
    {
        return view('admin.masterData.data_buku');
    }

    public function logout()
    {
        Session::flush();
        return redirect('/admin')->with('flash_message_success','Kamu Berhasil Logout Ya');
    }
}
