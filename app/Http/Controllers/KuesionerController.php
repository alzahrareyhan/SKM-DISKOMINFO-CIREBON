<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKuesionerRequest;
use App\Http\Requests\UpdateKuesionerRequest;
use App\Models\Kuesioner;
use App\Models\Unsur;
use Illuminate\Http\Request;

class KuesionerController extends Controller
{
    public function index()
    {
        $kuesioner = Kuesioner::latest()->paginate(5);
        return view('pages.dashboard.kuesioner.index', compact('kuesioner'));
    }

    public function create()
    {
        $unsurs = Unsur::all();

        return view('pages.dashboard.kuesioner.create', compact('unsurs'));
    }

    public function store(StoreKuesionerRequest $request)
    {
        try {
            Kuesioner::create($request->only('question', 'unsur_id'));
            return redirect()
                ->route('kuesioner.index')
                ->with('success', 'Data berhasil disimpan!');
        } catch (\Throwable $th) {
            return redirect()->back()
                ->withErrors(['message' => ['Terjadi kesalahan saat menyimpan data!', $th->getMessage()]]);
        }
    }

    public function edit(Kuesioner $kuesioner)
    {
        try {
            $unsurs = Unsur::all();

            return view('pages.dashboard.kuesioner.edit', compact('kuesioner', 'unsurs'));
        } catch (\Throwable $th) {
            return redirect()->back()
                ->withErrors(['message' => ['Terjadi kesalahan saat mengambil data!', $th->getMessage()]]);
        }
    }

    public function update(UpdateKuesionerRequest $request, Kuesioner $kuesioner)
    {
        try {
            $kuesioner->question = $request->question;
            $kuesioner->unsur_id = $request->unsur_id;
            $kuesioner->update();
            return redirect()->route('kuesioner.index', $kuesioner->uuid)->with('success', 'Data berhasil diedit!');
        } catch (\Throwable $th) {
            return redirect()->back()
                ->withErrors(['message' => ['Terjadi kesalahan saat mengedit data!', $th->getMessage()]]);
        }
    }

    public function destroy(Kuesioner $kuesioner)
    {
        try {
            Kuesioner::destroy($kuesioner->id);
            return redirect()->route('kuesioner.index')->with('success', 'Data berhasil dihapus!');
        } catch (\Throwable $th) {
            return redirect()->back()
                ->withErrors(['message' => ['Terjadi kesalahan saat menghapus data!', $th->getMessage()]]);
        }
    }

    public function checks(Request $request)
    {
        try {
            $action = $request->action;
            $checks = $request->checks;

            if ($action == 'delete') {
                Kuesioner::whereIn('uuid', $checks)->delete();
            }

            return redirect()
                ->back()
                ->with('success', 'Data berhasil dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()
                ->withErrors(['message' => ['Terjadi kesalahan saat menghapus data', $th->getMessage()]]);
        }
    }
}