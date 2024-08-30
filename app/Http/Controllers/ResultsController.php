<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result; // Assuming you have a Result model
use Illuminate\Support\Facades\Log;
class ResultsController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'adhd' => 'required|integer|min:0',
            'dislexia' => 'required|integer|min:0',
            'pendengaran' => 'required|integer|min:0',
        ]);
        Log::info($request->all());

        $data = json_decode($request->getContent(), true);
        Result::create([
            'adhd' => $data['adhd'],
            'dislexia' => $data['dislexia'],
            'pendengaran' => $data['pendengaran'],
        ]);
        


        return response()->json(['message' => 'Results saved successfully!']);
    }
}
