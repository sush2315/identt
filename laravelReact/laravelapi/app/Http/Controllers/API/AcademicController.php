<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Academic;

class AcademicController extends Controller
{
    public function index()
    {
        $employee = Academic::all();

        return response()->json([
            'status' => 200,
            'employee' => $employee,
        ]);
    }
    public function edit($id)
    {
        $employee = Academic::find($id);

        return response()->json([
            'status' => 200,
            'employee' => $employee,
        ]);
    }

    public function delete($id)
    {
        $employee = Academic::find($id);
        $employee-> delete();
        return response()->json([
            'status' => 200,
            'message' => 'deleted',
        ]);
    }


    public function store(Request $request)
    {
        $academic = new Academic;
        $academic->Firstname = $request->input('Firstname');
        $academic->Lastname = $request->input('Lastname');
        $academic->MiddleName = $request->input('MiddleName');
        $academic->Email = $request->input('Email');
        $academic->Mobile = $request->input('Mobile');
        $academic->Alternate = $request->input('Alternate');
        $academic->PermanentAddress = $request->input('PermanentAddress');
        $academic->CurrentAddress = $request->input('CurrentAddress');
        $academic->State = $request->input('State');
        $academic->City = $request->input('City');
        $academic->Country = $request->input('Country');
        $academic->Pincode = $request->input('Pincode');
        $academic->save();

        return response()->json([
            'status' => 200,
            'message' => 'info added',
        ]);
    }
}
