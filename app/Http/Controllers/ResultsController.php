<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result; // Assuming you have a Result model

class ResultsController extends Controller
{
    public function store(Request $request)
    {
        // Validate incoming data
        $validated = $request->validate([
            'adhd' => 'required|integer|min:0',
            'dislexia' => 'required|integer|min:0',
            'pendengaran' => 'required|integer|min:0',
        ]);

        // Store the data in the database
        $result = new Result();
        $result->adhd = $validated['adhd'];
        $result->dislexia = $validated['dislexia'];
        $result->pendengaran = $validated['pendengaran'];
        $result->save();

        return response()->json(['message' => 'Results saved successfully!']);
    }
}

