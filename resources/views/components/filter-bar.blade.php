<div class="container">
  <form id="filter-form" action="{{ route('findings.index') }}" method="GET">
    <select id="severity-filter" name="severity-filter">
      <option value="All" selected >All</option>
      <option value="High">High</option>
      <option value="Medium">Medium</option>
      <option value="Low">Low</option>
    </select>
  </form>
</div>

<script>
  document.getElementById('severity-filter').addEventListener('change', function(){
    document.getElementById('filter-form').submit();
  });
</script>