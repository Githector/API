<?php

namespace App\Http\Controllers;

use App\Models\Mp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MpController extends Controller
{
    public function index()
    {
        $mps = Mp::all();
        return response()->json(
            [
            'status' => 'true',
            'mp' => $mps
            ]
        );
    }

    public function get($id)
    {
        $mp = Mp::find($id);
        return response()->json([
            'status' => 'true',
            'mp' => $mp
        ]);

    }

    public function store2(Request $request)
    {
        $mp = $request->getContent();
        //$mp = Mp::create(json_decode($request->getContent(), true));
        return response()->json(json_encode($mp));
    }

    public function store(Request $request)
{
    // Obtener y decodificar el contenido JSON de la solicitud
    $mp = json_decode($request->getContent(), true); //false retorna un objecte, true retorna un array
    
    if (json_last_error() == JSON_ERROR_NONE) {
        Mp::create($mp);
        return response()->json([
            'status' => 'success',
            'message' => 'JSON received successfully',
            'data' => $mp,
        ]);
    } else {
        return response()->json([
            'status' => 'error',
            'message' => 'Invalid JSON format',
        ], 400);
    }
}

    public function update(Request $request, $id)
    {
        $mp = Mp::find($id);
        $mp->update($request->all());
        return response()->json(
            [
            'status' => 'true',
            'message' => 'MP updated successfully',
            'mp' => $mp
            ]
        );
    }

    public function delete($id)
    {
        $mp = Mp::find($id);
        $mp->delete();
        return response()->json(
            [
            'status' => 'true',
            'message' => 'MP deleted successfully',
            '$mp' => '$mp'
            ]
        );
    }

    public function show($id)
    {
        $mp = Mp::find($id);
        return response()->json(
            [
            'status' => 'true',
            'message' => 'MP show successfully',
            '$mp' => '$mp'
            ]
        );
    }

    public function getToken(Request $request)
    {
    $userReceived = json_decode($request->getContent(), true); //false retorna un objecte, true retorna un array
    
    if (json_last_error() == JSON_ERROR_NONE) {
        if(Auth::attempt(['email' => $userReceived['email'], 'password' => $userReceived['password']])){
            $token = Auth::user()->createToken('auth_token')->plainTextToken;
            return response()->json([
                'status' => 'success',
                'message' => 'JSON received successfully',
                'data' => $token,
            ]);
        }else{
            return response()->json([
                'status' => 'NotAllowed',
                'message' => 'User not allowed'
            ]);
    }
    } else {
        return response()->json([
            'status' => 'error',
            'message' => 'Invalid JSON format',
        ], 400);
    }   
    }


}
