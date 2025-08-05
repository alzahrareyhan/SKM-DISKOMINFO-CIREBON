<form class="space-y-6" action="{{ $route }}" method="{{ $method }}">
	@csrf
	<div>
		<label for="email" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Email</label>
		<input type="email" name="email" id="email" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400" placeholder="Email">
	</div>
	<div>
		<label for="password" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Password</label>
    <div class="relative">
      <input type="password" name="password" id="password" placeholder="••••••••" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400">
      <input class="absolute top-1/2 right-4 transform -translate-y-1/2 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="checkbox" name="showPassword" id="showPassword">
    </div>
	</div>
	<div class="flex justify-between">
		<div class="flex items-start">
			<div class="flex h-5 items-center">
				<input id="remember" type="checkbox" value="" class="focus:ring-3 h-4 w-4 rounded border border-gray-300 bg-gray-50 focus:ring-blue-300 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-800 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-800">
			</div>
			<label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ingat Saya</label>
		</div>
	</div>
	<button type="submit" class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
		Login
	</button>
</form>

<script>
	const passwordInput = document.getElementById("password");
	const showPasswordCheckbox = document.getElementById("showPassword");

	showPasswordCheckbox.addEventListener("change", function() {
		if (showPasswordCheckbox.checked) {
			passwordInput.type = "text";
		} else {
			passwordInput.type = "password";
		}
	});
</script>
