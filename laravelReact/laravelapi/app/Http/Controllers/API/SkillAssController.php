<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SkillAss;

class SkillAssController extends Controller
{
    
    public function index()
    {
        $skills = SkillAss::all();

        return response()->json([
            'status' => 200,
            'skills' => $skills,
        ]);
    }
    public function edit($id)
    {
        $skills = SkillAss::find($id);

        return response()->json([
            'status' => 200,
            'skills' => $skills,
        ]);
    }

    public function delete($id)
    {
        $skills = SkillAss::find($id);
        $skills-> delete();
        return response()->json([
            'status' => 200,
            'message' => 'deleted',
        ]);
    }
    public function store(Request $request)
    {
        $skillass = new SkillAss;
        $skillass->tag = $request->input('tag');
        $skillass->comment = $request->input('comment');
      
        $skillass->save();

        return response()->json([
            'status' => 200,
            'message' => 'info added',
        ]);
    }
}
