<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FindingController extends Controller
{
    public function index()
    {
        // Lire le contenu du fichier JSON
        $json = file_get_contents(storage_path('app/findings.json'));
        // Décoder le JSON en tableau associatif
        $findings = json_decode($json, true);

        return view('findings', compact('findings'));
    }
}