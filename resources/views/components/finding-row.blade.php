<div class="p-4 mb-2 bg-white rounded-lg shadow flex item-center">
  @php
    $severityClass = '';
    switch ($finding['severity']) {
      case 'High':
        $severityClass = 'bg-red-500';
        break;
      
      case 'Medium':
        $severityClass = 'bg-yellow-500';
        break;
      
      case 'Low':
        $severityClass = 'bg-blue-500';
        break;
      
      default:
        $severityClass = 'bg-gray-400';
        break;
    }
  @endphp

  <span class="px-3 py-1 text-sm font-semibold text-white rounded-full {{ $severityClass }} ">
    {{ $finding['severity'] }}
  </span>

  <div class="ml-4">
    <h3 class="text-lg font-semibold text-gray-800">Rule Name : {{ $finding['rule_name'] }}</h3>
    <p>Account: {{ $finding['account'] }} | Service: {{ $finding['service'] }}</p>
  </div>

</div>