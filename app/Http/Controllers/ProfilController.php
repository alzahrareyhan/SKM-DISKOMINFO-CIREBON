<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class ProfilController extends Controller
{
    public function index(): View
    {
        return view('pages.dashboard.profil.index');
    }

    public function update(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:50',
                'email' => 'required|email|max:50'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }

            User::where('email', $request->email)->update($request->only('name', 'email'));

            return redirect()
                ->route('profil.index')
                ->with('success', 'Profil berhasil disimpan!');
            } catch (\Throwable $th) {
                return redirect()
                    ->back()
                    ->withInput()
                    ->withErrors(['message' => ['Terjadi kesalahan!', $th->getMessage()]]);
            }
    }
}
