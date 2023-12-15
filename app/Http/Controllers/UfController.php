<?php

namespace App\Http\Controllers;

use App\Models\Uf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UfController extends Controller
{
    public function index()
    {
        $ufs = Uf::all();
        return response()->json([
            'status' => 'true',
            'uf' => $ufs
        ]);
    }

    public function get($id)
    {
        $uf = Uf::find($id);
        return response()->json([
            'status' => 'true',
            'uf' => $uf
        ]);
    }

    public function store(Request $request)
    {
        $uf = Uf::create($request->all());
        return response()->json([
            'status' => 'true',
            'message' => 'UF created successfully',
            'uf' => $uf
        ]);
    }

    public function update(Request $request, $id)
    {
        $uf = Uf::find($id);
        $uf->update($request->all());
        return response()->json([
            'status' => 'true',
            'message' => 'UF updated successfully',
            'uf' => $uf
        ]);
    }

    public function delete($id)
    {
        $uf = Uf::find($id);
        $uf->delete();
        return response()->json([
            'status' => 'true',
            'message' => 'UF deleted successfully',
            'uf' => $uf
        ]);
    }
}
