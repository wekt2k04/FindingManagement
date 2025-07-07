<!DOCTYPE html>
<html>
  <head>
    <title>CSPM Findings</title>
  </head>
  <body class="bg-gray-100 p-6">
    <div class="max-w-4xl mx-auto">
      <h1 class="text-3x1 font-bold text-gray-800 mb-6">CSPM Findings List</h1>
    </div>

    <x-filter-bar /> {{-- NEW : filter bar component --}}

    <div class="finding-list space-y-4"> {{-- Added vertical space between findings --}}
      @forelse ($findings as $finding)
        <x-finding-row :finding="$finding" />
      @empty
        <p class="text-gray-600 text-center">No findings to display</p>
      @endforelse
    </div>    
  </body>
</html>