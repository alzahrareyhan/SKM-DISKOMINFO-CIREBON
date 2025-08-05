@props(['route'])

<form action="{{ $route }}" method="POST">
  @method('DELETE')
  @csrf
  <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</button>
</form>