<nav class="border-b-2 border-gray-200 bg-white dark:bg-gray-900 sticky top-0 z-50">
	<div class="mx-auto flex max-w-screen-lg flex-wrap items-center justify-between p-4">
		<a href="{{ route('index') }}" class="flex items-center">
			<img src="{{ asset('assets/logo.png') }}" class="mr-3 h-8" alt="Logo" />
			<span class="self-center whitespace-nowrap text-2xl font-medium dark:text-white">{{ $appName }}</span>
		</a>
		<button data-collapse-toggle="navbar-default" type="button" class="inline-flex h-10 w-10 items-center justify-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden" aria-controls="navbar-default" aria-expanded="false">
			<span class="sr-only">Open main menu</span>
			<svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
				<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
			</svg>
		</button>
		<div class="hidden w-full md:block md:w-auto" id="navbar-default">
			<ul class="mt-4 flex flex-col items-center rounded-lg border border-gray-100 bg-gray-50 p-4 font-medium dark:border-gray-700 dark:bg-gray-800 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-white md:p-0 md:dark:bg-gray-900">
				@foreach ($links as $link)
					<li>
						<a href="{{ $link->route }}" class="block rounded py-2 pl-3 pr-4 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:bg-transparent md:dark:hover:text-blue-500">{{ $link->label }}</a>
					</li>
				@endforeach
				<li>
                    <a href="#home" class="block rounded py-2 pl-3 pr-4 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:bg-transparent md:dark:hover:text-blue-500">Home</a>
                </li>
                <li>
                    <a href="#informasi" class="block rounded py-2 pl-3 pr-4 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:bg-transparent md:dark:hover:text-blue-500">Informasi</a>
                </li>
                <!-- Link untuk scroll ke bagian Hasil -->
                <li>
                    <a href="#hasil" class="block rounded py-2 pl-3 pr-4 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:bg-transparent md:dark:hover:text-blue-500">Hasil Survei</a>
                </li>
				<li>
				<li>
					<button type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="rounded-lg border border-blue-700 px-5 py-2.5 text-center text-sm font-medium text-blue-700 hover:bg-blue-800 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300 dark:border-blue-500 dark:text-blue-500 dark:hover:bg-blue-500 dark:hover:text-white dark:focus:ring-blue-800">Login</button>
				</li>
			</ul>
		</div>
	</div>
</nav>

<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
	<div class="relative max-h-full w-full max-w-md">
		<div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
			<button type="button" class="absolute right-2.5 top-3 ml-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
				<svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
					<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
				</svg>
				<span class="sr-only">Close modal</span>
			</button>
			<div class="px-6 py-6 lg:px-8">
				<h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Masuk</h3>
				<x-form.login :route="route('auth.login')" method="POST" />
			</div>
		</div>
	</div>
</div>


