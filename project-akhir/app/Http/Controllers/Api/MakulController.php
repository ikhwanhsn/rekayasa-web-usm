<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Makul;
use Illuminate\Http\Request;

class MakulController extends Controller
{
    public function create(Request $request) {
        $makul = Makul::create($request->all());
        return response()->json($makul);
    }

    public function read() {
        return response()->json(Makul::all());
    }

    public function update(Request $request, $id) {
        $makul = Makul::findOrFail($id);
        $makul->update($request->all());
        return response()->json($makul);
    }

    public function delete($id) {
        $makul = Makul::findOrFail($id);
        $makul->delete();
        return response()->json(['message' => 'Makul deleted successfully']);
    }
}
