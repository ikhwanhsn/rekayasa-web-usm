<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function create(Request $request) {
        $dosen = Dosen::create($request->all());
        return response()->json($dosen);
    }

    public function read() {
        return response()->json(Dosen::all());
    }

    public function update(Request $request, $id) {
        $dosen = Dosen::findOrFail($id);
        $dosen->update($request->all());
        return response()->json($dosen);
    }

    public function delete($id) {
        $dosen = Dosen::findOrFail($id);
        $dosen->delete();
        return response()->json(['message' => 'Dosen deleted successfully']);
    }
}
