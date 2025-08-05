<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()
                ->intended('dasbor')
                ->withSuccess('Anda telah berhasil masuk');
        }

        return redirect()
            ->route('index')
            ->withErrors('Ups! Email atau password salah');
    }

    public function logout(): RedirectResponse
    {
        Session::flush();
        Auth::logout();
        
        return redirect()
            ->route('index');
    }

    public function change_password(Request $request)
    {
        try {
            $user = User::where('id', auth()->user()->id)->firstOrFail();

            $validator = Validator::make($request->all(), [
                'old_password' => 'required|current_password',
                'new_password' => 'required',
                'repeat_new_password' => 'required|same:new_password'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }

            $user->password = Hash::make($request->new_password);
            $user->save();

            Session::flush();
            Auth::logout();

            return redirect()
                ->route('index')
                ->with('success', 'Password berhasil diubah!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->withErrors(['message' => ['Terjadi kesalahan!', $e->getMessage()]]);
        }
    }
}
