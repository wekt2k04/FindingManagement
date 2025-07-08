<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // NEW: Import the Storage facade

class FindingController extends Controller
{
    public function index(Request $request) // Injecter l'objet Request
    {
        // Read the JSON file content from storage/app
        $findingsJsons = Storage::disk('local')->get('findings.json');
        
        // Decode the JSON string into a PHP array
        $findingsJson = json_decode($findingsJsons, true); // `true` converts objects to associative arrays
        
        // Retrieve severity attribute value
        $filterSeverity = $request->query('severity');

        // Initialization of $findings and loop
        $findings = [];
        if ($filterSeverity) {
            foreach ($findingsJson as $finding) {
                if ($finding['severity'] === $filterSeverity) {
                    $findings[] = $finding;
                }
            }
        } else {
            $findings = $findingsJson;
        }


        // Pass the entire array of findings to the view
        return view('findings', compact('findings'));
    }
}
