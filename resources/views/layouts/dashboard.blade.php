@php
	$menus = [
	    (object) [
	        'name' => 'Dasbor',
	        'link' => route('dasbor'),
	        'icon' => 'chart-pie',
	    ],
	    (object) [
	        'name' => 'Kuesioner',
	        'link' => route('kuesioner.index'),
	        'icon' => 'document-duplicate',
	    ],
	    (object) [
	        'name' => 'Responden',
	        'link' => route('responden.index'),
	        'icon' => 'users',
	    ],
	    (object) [
	        'name' => 'IKM',
	        'link' => route('ikm.index'),
	        'icon' => 'star',
	    ],
	    (object) [
	        'name' => 'Kritik & Saran',
	        'link' => route('feedback.index'),
	        'icon' => 'envelope',
	    ],
	    (object) [
	        'name' => 'Instansi',
	        'link' => route('village.index'),
	        'icon' => 'map-pin',
	    ]
	];
@endphp

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>{{ config('app.name') }} - @yield('title')</title>
		@vite(['resources/css/app.css', 'resources/js/app.js'])
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		    <!-- Favicon -->
		<link rel="icon" type="image/png" href="{{ asset('assets/logocrb.png') }}" />

	</head>

	<body>
		<x-navbar.dashboard :app-name="config('app.name')" />
		<x-sidebar :menus="$menus" />
		<main>
			<div class="p-4 sm:ml-64">
				<div class="mt-14 p-4">
					<x-card>
						<div class="flex items-center justify-between px-5 py-4">
							<h2 class="text-xl font-bold text-gray-700">@yield('title')</h2>
							<x-breadcrumb :$breadcrumbs />
						</div>
					</x-card>
					@yield('content')
				</div>
			</div>
		</main>
		<x-script.toast />
	</body>

</html>
