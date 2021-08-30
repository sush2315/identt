<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialConnection;

class SocialConnectionController extends Controller
{
    
    public function index()
    {
        $social = SocialConnection::all();

        return response()->json([
            'status' => 200,
            'social' => $social,
        ]);
    }
    public function edit($id)
    {
        $social = SocialConnection::find($id);

        return response()->json([
            'status' => 200,
            'social' => $social,
        ]);
    }

    public function delete($id)
    {
        $social = SocialConnection::find($id);
        $social-> delete();
        return response()->json([
            'status' => 200,
            'message' => 'deleted',
        ]);
    }

    public function store(Request $request)
    {
        $socialconnection = new SocialConnection;
        $socialconnection->Facebook = $request->input('Facebook');
        $socialconnection->FacebookID = $request->input('FacebookID');
        $socialconnection->LinkedinID = $request->input('LinkedinID');
        $socialconnection->Linkedinurl = $request->input('Linkedinurl');
        $socialconnection->Blog = $request->input('Blog');
        $socialconnection->Work = $request->input('Work');
        $socialconnection->Github = $request->input('Github');
        $socialconnection->Linkedin = $request->input('Linkedin');
        $socialconnection->Other = $request->input('Other');
        
        $socialconnection->save();

        return response()->json([
            'status' => 200,
            'message' => 'info added',
        ]);
    }
}
