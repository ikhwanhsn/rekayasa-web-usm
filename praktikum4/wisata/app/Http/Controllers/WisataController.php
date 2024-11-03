<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use Illuminate\Support\Facades\Validator;

class WisataController extends Controller
{
    // Menampilkan semua data wisata
    public function showAll()
    {
        return response()->json(Wisata::all());
    }

    // Menampilkan satu data wisata berdasarkan ID
    public function showOne($id)
    {
        return response()->json(Wisata::find($id));
    }

    // Membuat data wisata baru
    public function create(Request $request)
    {
        $wisata = Wisata::create($request->all());

        return response()->json($wisata, 201);
    }

    // Mengupdate data wisata berdasarkan ID
    public function update($id, Request $request)
    {
        $wisata = Wisata::findOrFail($id);
        $wisata->update($request->all());

        return response()->json($wisata, 200);
    }


    // Menghapus data wisata berdasarkan ID
    public function delete($id)
    {
        Wisata::findOrFail($id)->delete();

        return response('Deleted Successfully', 200);
    }
}
