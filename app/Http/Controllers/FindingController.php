<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FindingController extends Controller
{
    public function index(Request $request)
    {
        // Lire le contenu du fichier JSON
        $json = file_get_contents(storage_path('app/findings.json'));
        // Décoder le JSON en tableau associatif
        $findingsJson = json_decode($json, true);

        $filterSeverity = $request->input('severity-filter');

        $findings = [];
        if ($filterSeverity) {
            foreach ($findingsJson as $finding) {
                if ($finding['severity'] == $filterSeverity) {
                    $findings[] = $finding;
                }
            }
        } else {
            $findings = $findingsJson;
        }

        return view('findings', compact('findings'));
    }
}