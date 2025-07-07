<!DOCTYPE html>
<html>
  <head>
    <title>CSPM Findings</title>
  </head>
  <body>
    <h1>Current Findings</h1>

    @php
      // Temporary mock data for Week 1 deliverable
      $sampleFinding = [
        "severity" => "High",
        "account" => "AWS_Account_123",
        "service" => "S3",
        "rule_name" => "Public S3 Bucket"
      ];
    @endphp

    <x-finding-row :finding="$sampleFinding" />
    
  </body>
</html>