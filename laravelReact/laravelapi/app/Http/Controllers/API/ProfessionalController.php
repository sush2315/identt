<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Professional;

class ProfessionalController extends Controller
{
    
    public function index()
    {
        $professional = Professional::all();

        return response()->json([
            'status' => 200,
            'professional' => $professional,
        ]);
    }
    public function edit($id)
    {
        $professional = Professional::find($id);

        return response()->json([
            'status' => 200,
            'professional' => $professional,
        ]);
    }

    public function delete($id)
    {
        $professional = Professional::find($id);
        $professional-> delete();
        return response()->json([
            'status' => 200,
            'message' => 'deleted',
        ]);
    }
    public function store(Request $request)
    {
        $professional = new Professional;
        $professional->CompanyName = $request->input('CompanyName');
        $professional->url = $request->input('url');
        $professional->CurrentDesignation = $request->input('CurrentDesignation');
        $professional->Annual = $request->input('Annual');
        $professional->Notice = $request->input('Notice');
        $professional->Majorrole = $request->input('Majorrole');
        $professional->Skills = $request->input('Skills');
        $professional->Industry = $request->input('Industry');
        $professional->Functional = $request->input('Functional');
        $professional->Designation = $request->input('Designation');
        $professional->PreviousDesignation = $request->input('PreviousDesignation');
        $professional->PreviousCompany = $request->input('PreviousCompany');
        $professional->Performance = $request->input('Performance');
        $professional->save();

        return response()->json([
            'status' => 200,
            'message' => 'info added',
        ]);
    }
}
