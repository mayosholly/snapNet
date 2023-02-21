<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdminLoginRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminLoginController extends Controller
{
    public function getAdminLogin()
    {
        return view('admin/login');
    }

    public function postAdminLogin(StoreAdminLoginRequest $request)
    {
        $admin = Admin::where('email', $request->email)->first();
        if ($admin) {
            if (Hash::check($request->password, $admin->password)) {
                $request->session()->put('loginId', $admin->id);
                return redirect(route('index.adminDashboard'));
            } else {
                return back()->with('fail', 'Password is not Correct');
            }
        } else {
            return back()->with('fail', 'Email not Registered');
        }
    }



    public function adminLogout()
    {
        if (session()->has('loginId')) {
            session()->pull('loginId');
            return redirect('admin/login');
        }
    }
}
