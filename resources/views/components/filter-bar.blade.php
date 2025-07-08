<div class="bg-white p-4 rounded shadow mb-4"> {{-- p-4 pour padding, rounded pour rounded-lg, shadow pour shadow, mb-4 pour mb-6 (Bootstrap utilise des espacements plus petits) --}}
    <h2 class="h5 fw-semibold text-dark mb-3">Filter Findings</h2> {{-- h5 pour text-xl, fw-semibold pour font-semibold, text-dark pour text-gray-800 --}}
    <div class="d-flex align-items-center"> {{-- d-flex pour flex, align-items-center pour items-center --}}
        <label for="severity-filter" class="form-label text-secondary me-3">Severity:</label> {{-- form-label pour label, text-secondary pour text-gray-700, me-3 pour space-x-4 (marge à droite) --}}
        <select id="severity-filter" name="severity" class="form-select w-auto"> {{-- form-select pour select stylisé, w-auto pour largeur automatique --}}
            <option value="">All</option>
            <option value="High">High</option>
            <option value="Medium">Medium</option>
            <option value="Low">Low</option>
        </select>
        {{-- Placeholder for other filter options like service, account, etc. --}}
    </div>
</div>
