<form action="{{ $action }}" method="GET" id="form-per-page">
  <select name="per_page" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
    <option value="5">5</option>
    <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
    <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25</option>
    <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
    <option value="100" {{ request('per_page') == 100 ? 'selected' : '' }}>100</option>
  </select>
</form>

<script>
  const form = document.querySelector('#form-per-page');
  
  form.addEventListener('change', (e) => {
    e.preventDefault();
    form.submit();
  });
</script>