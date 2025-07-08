<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // NEW: Import the Storage facade

class FindingController extends Controller
{
    public array $findings;

    public function __construct()
    {
        $this->findings = $this->retrieveJSON();
    }
    
    public function index(Request $request)
    {
        
        // Retrieve severity attribute value
        $filterSeverity = $request->query('severity');
        $filterAccount = $request->query('account');
        $filterService = $request->query('service');

        // Initialization of $findings and loop
        $filterFindings = $this->findings;
        
        // Apply filters sequentially
        if ($filterSeverity) {
            $filterFindings = array_filter($filterFindings, function($finding) use ($filterSeverity) {
                return isset($finding['severity']) && $finding['severity'] === $filterSeverity;
            });
        }
        
        if ($filterAccount) {
            $filterFindings = array_filter($filterFindings, function($finding) use ($filterAccount) {
                return isset($finding['account']) && stripos($finding['account'], $filterAccount) !== false;
            });
        }
        
        if ($filterService) {
            $filterFindings = array_filter($filterFindings, function($finding) use ($filterService) {
                return isset($finding['service']) && stripos($finding['service'], $filterService) !== false;
            });
        }
        
        $findings = $filterFindings;

        // Pass the entire array of findings to the view
        return view('findings', compact('findings'));
    }

    private function retrieveJSON() : array
    {
        // Read the JSON file content from storage/app
        $findingsJsons = Storage::disk('local')->get('findings.json');
        
        // Decode the JSON string into a PHP array
        $findingsJson = json_decode($findingsJsons, true); // `true` converts objects to associative arrays
        
        return $findingsJson;
    }
}
