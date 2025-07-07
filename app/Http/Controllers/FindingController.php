<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FindingController extends Controller
{
    public function index()
    {
        // Defines sample data to pass to the view
        $sampleFinding = [
            "severity" => "High",
            "account" => "AWS_Account_123",
            "service" => "S3",
            "rule_name" => "Public S3 Bucket"
        ];
        return view('findings', compact('sampleFinding'));
    }
}
