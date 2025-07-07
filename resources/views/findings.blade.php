<!DOCTYPE html>
<html>
  <head>
    <title>CSPM Findings</title>
  </head>
  <body>
    <h1>Current Findings</h1>

    @foreach ($findings as $finding)
      <div>
        <h3>Severity : {{ $finding['severity'] }}</h3>
        <p>Account: {{ $finding['account'] }}</p>
        <p>Service: {{ $finding['service'] }}</p>
        <p>Rule Name : {{ $finding['rule_name'] }}</p>
      </div>
    @endforeach
    
  </body>
</html>