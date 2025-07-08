<div class="bg-white p-4 rounded shadow mb-4"> {{-- p-4 pour padding, rounded pour rounded-lg, shadow pour shadow, mb-4 pour mb-6 (Bootstrap utilise des espacements plus petits) --}}
    <h2 class="h5 fw-semibold text-dark mb-3">Filter Findings</h2> {{-- h5 pour text-xl, fw-semibold pour font-semibold, text-dark pour text-gray-800 --}}
    <form id="filter-form" action="{{ route('findings.index') }}" method="GET"> {{-- Ajout d'un formulaire --}}
      <div class="d-flex align-items-center mb-3"> {{-- d-flex pour flex, align-items-center pour items-center --}}
          <label for="severity-filter" class="form-label text-secondary me-3">Severity:</label> {{-- form-label pour label, text-secondary pour text-gray-700, me-3 pour space-x-4 (marge à droite) --}}
          <select id="severity-filter" name="severity" class="form-select w-auto"> {{-- form-select pour select stylisé, w-auto pour largeur automatique --}}
              <option value="">All</option>
              <option value="High" {{ request('severity') == 'High' ? 'selected' : '' }}>High</option>
              <option value="Medium" {{ request('severity') == 'Medium' ? 'selected' : '' }}>Medium</option>
              <option value="Low" {{ request('severity') == 'Low' ? 'selected' : '' }}>Low</option>
          </select>
          {{-- Placeholder for other filter options like service, account, etc. --}}
      </div>

      <div class="d-flex align-items-center mb-3"> {{-- New filter field for account --}}
        <label for="account-filter" class="form-label text-secondary me-3">Account:</label>
        <input type="text" id="account-filter" name="account" class="form-control w-auto" value="{{ request('account') }}" />
      </div>

      <div class="d-flex align-items-center mb-3">
        <label for="service-filter" class="form-label text-secondary me-3">Service:</label>
        <input type="text" id="service-filter" name="service" class="form-control w-auto" value="{{ request('service') }}" />
      </div>

      <button type="submit" class="btn btn-primary mt-3">Apply filters</button>
  </form>
</div>

<script>
  // Petit script pour soumettre le formulaire quand la selection change
  document.getElementById('severity-filter').addEventListener('change', function() {
    document.getElementById('filter-form').submit();
  })
</script>