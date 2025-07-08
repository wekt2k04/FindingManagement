<div class="p-4 mb-2 bg-white rounded shadow d-flex align-items-center">
    @php
        $severityClass = '';
        switch ($finding['severity']) {
            case 'High':
                $severityClass = 'bg-danger'; // Équivalent à bg-red-500
                break;
            
            case 'Medium':
                $severityClass = 'bg-warning'; // Équivalent à bg-yellow-500
                break;
            
            case 'Low':
                $severityClass = 'bg-primary'; // Équivalent à bg-blue-500 (ou bg-info pour un bleu plus clair)
                break;
            
            default:
                $severityClass = 'bg-secondary'; // Équivalent à bg-gray-400
                break;
        }
    @endphp

    <span class="px-2 py-1 text-white rounded-pill fw-semibold {{ $severityClass }} ">
        {{ $finding['severity'] }}
    </span>

    <div class="ms-4"> {{-- Équivalent à ml-4 --}}
        <h3 class="text-dark fw-semibold">Rule Name : {{ $finding['rule_name'] }}</h3> {{-- text-dark pour text-gray-800, fw-semibold pour font-semibold --}}
        <p>Account: {{ $finding['account'] }} | Service: {{ $finding['service'] }}</p>
    </div>

</div>
