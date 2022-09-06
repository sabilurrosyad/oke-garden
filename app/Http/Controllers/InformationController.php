<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;

class InformationController extends Controller
{
    public function index()
    {
        $data = Information::all();
        return view('information.home', compact('data'));
    }

    public function defaultPage()
    {
        $data = Information::all();
        return view('information.default', compact('data'));
    }

    public function tambahpengguna()
    {
        return view('information.insert');
    }

    public function insertdata(Request $request)
    {
        Information::create($request->all());
        return redirect()->route('home1')->with('success', 'data berhasil ditambahkan');
    }

    public function detailData($id)
    {
        $data = Information::find($id);

        return view('information.detail', compact('data'));
    }

    public function tampilkandata($id)
    {
        $data = Information::find($id);

        return view('information.showdata', compact('data'));
    }

    public function updatedata(Request $request, $id)
    {
        $data = Information::find($id);
        $data->update($request->all());
        return redirect()->route('home1')->with('success', 'data berhasil diupdate');
    }

    public function deletedata($id)
    {
        $data = Information::find($id);
        $data->delete();
        return redirect()->route('home1')->with('success', 'data berhasil dihapus');
    }
}
