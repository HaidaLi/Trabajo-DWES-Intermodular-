<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Token;
use Illuminate\Http\Request;

class TokenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $token = Token::get();
        return $token;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $token = new Token();
        $token->token = $request->token;
        $token->save();
        return response()->json($token,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Token $token)
    {
        return response()->json($token,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Token $token)
    {
        $token->update($request->all());
        return response()->json($token, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Token $token)
    {
        $token->delete();
        return response()->json($token);
    }
}
