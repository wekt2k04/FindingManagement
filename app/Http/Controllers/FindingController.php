<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // NEW: Import the Storage facade

class FindingController extends Controller
{
    public function index()
    {
        // Read the JSON file content from storage/app
        $findingsJson = Storage::disk('local')->get('findings.json');

        // Decode the JSON string into a PHP array
        $findings = json_decode($findingsJson, true); // `true` converts objects to associative arrays

        // Pass the entire array of findings to the view
        return view('findings', compact('findings'));
    }
}
