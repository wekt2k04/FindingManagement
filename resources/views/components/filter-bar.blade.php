<div class="bg-white p-4 rounded-lg shadow mb-6">
  <h2 class="text-xl font-semibold text-gray-800 mb-3">Filter findings</h2>
  <div class="flex items-center space-x-4">
    <label for="severity-filter" class="text-gray-700">Severity:</label>
    <select id="severity-filter" name="severity" class="border rounded-md px-3 py-2 text-gray-700 focus:ring-blue-500 focus:border-blue-500">
      <option value="">All</option>
      <option value="High">High</option>
      <option value="Medium">Medium</option>
      <option value="Low">Low</option>
    </select>
    {{-- Placerholder for others filter options like service, account, etc. --}}
  </div>
</div>