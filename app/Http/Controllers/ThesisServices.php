<?php

namespace App\Http\Controllers;

use App\Models\Thesis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThesisServices extends Controller
{
    // index
    public function index()
    {
        $thesis = Thesis::all();
        return response()->json($thesis,200);
    }

    // show
    public function show($id)
    {
        $thesis = Thesis::find($id);
        return response()->json($thesis);
    }

    // update
    public function update(Request $request, $id)
    {
        $thesis = DB::table('thesis')->where('id', $id)->update([

            'status' => $request->status,
            'link_docs_notes' => $request->link_docs_notes,
            'feedback_dosbing' => $request->feedback_dosbing,
        ]);
        return response()->json($thesis);
    }

}
