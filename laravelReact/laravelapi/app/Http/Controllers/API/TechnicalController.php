<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Technical;

class TechnicalController extends Controller
{
    public function index()
    {
        $technical = Technical::all();

        return response()->json([
            'status' => 200,
            'technical' => $technical,
        ]);
    }
    public function edit($id)
    {
        $technical = Technical::find($id);

        return response()->json([
            'status' => 200,
            'technical' => $technical,
        ]);
    }

    public function delete($id)
    {
        $technical = Technical::find($id);
        $technical-> delete();
        return response()->json([
            'status' => 200,
            'message' => 'deleted',
        ]);
    }

    public function store(Request $request)
    {
        $technical = new Technical;
        $technical->Certificate = $request->input('Certificate');
        $technical->Organization = $request->input('Organization');
        $technical->CredentialID = $request->input('CredentialID');
        $technical->Credentialurl = $request->input('Credentialurl');
        $technical->Issued = $request->input('Issued');
        $technical->Expiration = $request->input('Expiration');

        $technical->save();

        return response()->json([
            'status' => 200,
            'message' => 'info added',
        ]);
    }
}
