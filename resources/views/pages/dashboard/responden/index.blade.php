@php
	$genders = [
	    (object) [
	        'value' => 'Laki-laki',
	        'label' => 'Laki-laki',
	    ],
	    (object) [
	        'value' => 'Perempuan',
	        'label' => 'Perempuan',
	    ],
	];

	$ages = [
	    (object) [
	        'value' => 'Anak-anak',
	        'label' => 'Anak-anak',
	    ],
	    (object) [
	        'value' => 'Remaja',
	        'label' => 'Remaja',
	    ],
	    (object) [
	        'value' => 'Dewasa',
	        'label' => 'Dewasa',
	    ],
	    (object) [
	        'value' => 'Lansia',
	        'label' => 'Lansia',
	    ],
	];

	$educations = [
	    (object) [
	        'value' => 'SD',
	        'label' => 'Sekolah Dasar (SD)',
	    ],
	    (object) [
	        'value' => 'SMP',
	        'label' => 'Sekolah Menengah Pertama (SMP)',
	    ],
	    (object) [
	        'value' => 'SMA',
	        'label' => 'Sekolah Menengah Atas (SMA)',
	    ],
	    (object) [
	        'value' => 'SMK',
	        'label' => 'Sekolah Menengah Kejuruan (SMK)',
	    ],
	    (object) [
	        'value' => 'D3',
	        'label' => 'Diploma Tiga (D3)',
	    ],
	    (object) [
	        'value' => 'S1',
	        'label' => 'Sarjana (S1)',
	    ],
	    (object) [
	        'value' => 'S2',
	        'label' => 'Magister (S2)',
	    ],
	    (object) [
	        'value' => 'S3',
	        'label' => 'Doktor (S3)',
	    ],
	];

	$jobs = [
	    (object) [
	        'value' => 'Pelajar/Mahasiswa',
	        'label' => 'Pelajar/Mahasiswa',
	    ],
	    (object) [
	        'value' => 'Guru',
	        'label' => 'Guru',
	    ],
	    (object) [
	        'value' => 'PNS',
	        'label' => 'PNS',
	    ],
	    (object) [
	        'value' => 'TNI',
	        'label' => 'TNI',
	    ],
	    (object) [
	        'value' => 'Polisi',
	        'label' => 'Polisi',
	    ],
	    (object) [
	        'value' => 'Dosen',
	        'label' => 'Dosen',
	    ],
	    (object) [
	        'value' => 'Pedagang',
	        'label' => 'Pedagang',
	    ],
	    (object) [
	        'value' => 'Buruh',
	        'label' => 'Buruh',
	    ],
	    (object) [
	        'value' => 'Lainnya',
	        'label' => 'Lainnya',
	    ],
	];
@endphp
@extends('layouts.dashboard', [
    'breadcrumbs' => [
        'Responden' => '#',
    ],
])
@section('title', 'Responden')
@section('content')
	<x-card>
		<div class="relative overflow-x-auto px-4 py-5 sm:rounded-lg">
			<form id="form-action" method="GET" action="{{ route('responden.index') }}">
				<div class="mb-4 grid grid-cols-2 gap-4">
					<div class="relative">
						<input type="date" name="start_date" id="start_date" value="{{ request('start_date') }}" class="date block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
						<label for="start_date" class="absolute -top-2 left-3 bg-white px-1 text-[.65rem] text-gray-400">Tanggal Mulai</label>
					</div>
					<div class="relative">
						<input type="date" name="end_date" id="end_date" value="{{ request('end_date') }}" class="date block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
						<label for="end_date" class="absolute -top-2 left-3 bg-white px-1 text-[.65rem] text-gray-400">Tanggal Selesai</label>
					</div>
				</div>
				<div class="mb-4 grid grid-cols-5 gap-4">
					<div class="relative">
						<label for="gender" class="absolute -top-2 left-3 bg-white px-1 text-[.65rem] text-gray-400">Jenis Kelamin</label>
						<select name="gender" id="gender" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
							<option value="">Semua</option>
							@foreach ($genders as $item)
								<option value="{{ $item->value }}" {{ request('gender') == $item->value ? 'selected' : '' }}>{{ $item->label }}</option>
							@endforeach
						</select>
					</div>
					<div class="relative">
						<label for="age" class="absolute -top-2 left-3 bg-white px-1 text-[.65rem] text-gray-400">Umur</label>
						<select name="age" id="age" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
							<option value="">Semua</option>
							@foreach ($ages as $item)
								<option value="{{ $item->value }}" {{ request('age') == $item->value ? 'selected' : '' }}>{{ $item->label }}</option>
							@endforeach
						</select>
					</div>
					<div class="relative">
						<label for="education" class="absolute -top-2 left-3 bg-white px-1 text-[.65rem] text-gray-400">Pendidikan</label>
						<select name="education" id="education" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
							<option value="">Semua</option>
							@foreach ($educations as $item)
								<option value="{{ $item->value }}" {{ request('education') == $item->value ? 'selected' : '' }}>{{ $item->label }}</option>
							@endforeach
						</select>
					</div>
					<div class="relative">
						<label for="job" class="absolute -top-2 left-3 bg-white px-1 text-[.65rem] text-gray-400">Pekerjaan</label>
						<select name="job" id="job" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
							<option value="">Semua</option>
							@foreach ($jobs as $item)
								<option value="{{ $item->value }}" {{ request('job') == $item->value ? 'selected' : '' }}>{{ $item->label }}</option>
							@endforeach
						</select>
					</div>
					<div class="relative">
						<label for="village" class="absolute -top-2 left-3 bg-white px-1 text-[.65rem] text-gray-400">Instansi</label>
						<select name="village" id="village" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
							<option value="">Semua</option>
							@foreach ($villages as $item)
								<option value="{{ $item->id }}" {{ request('village') == $item->id ? 'selected' : '' }}>{{ $item->village }}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="mb-4 grid grid-cols-5 gap-4">
					<div class="relative">
						<label for="per_page" class="absolute -top-2 left-3 bg-white px-1 text-[.65rem] text-gray-400">Per Halaman</label>
						<select name="per_page" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
							<option value="5">5</option>
							<option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
							<option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25</option>
							<option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
							<option value="100" {{ request('per_page') == 100 ? 'selected' : '' }}>100</option>
						</select>
					</div>
					<div class="relative col-span-4">
						<label for="search" class="absolute -top-2 left-3 bg-white px-1 text-[.65rem] text-gray-400">Cari</label>
						<div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
							<svg class="h-5 w-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
							</svg>
						</div>
						<input type="text" id="search" name="search" value="{{ request('search') }}" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2 pl-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="Cari...">
					</div>
				</div>
				<div class="grid grid-cols-4 gap-4">
					<button type="submit" class="col-span-3 flex items-center justify-center rounded-lg border border-gray-300 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 h-5 w-5">
							<path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
						</svg>
						Filter
					</button>
					<button type="button" data-modal-target="advanced-modal" data-modal-toggle="advanced-modal" class="flex items-center justify-center rounded-lg border border-gray-300 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 h-5 w-5">
							<path stroke-linecap="round" stroke-linejoin="round" d="M6 13.5V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 9.75V10.5" />
						</svg>
						Advanced
					</button>
					<div id="advanced-modal" tabindex="-1" aria-hidden="true" class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
						<div class="relative max-h-full w-full max-w-md">
							<div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
								<button type="button" class="absolute right-2.5 top-3 ml-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="advanced-modal">
									<svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
										<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
									</svg>
									<span class="sr-only">Close modal</span>
								</button>
								<div class="px-6 py-6 lg:px-8">
									<h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Filter</h3>
									<div class="grid grid-cols-1">
										<a href="{{ route('responden.index', ['start_date' => now()->format('Y-m-d'), 'end_date' => now()->format('Y-m-d')]) }}" class="mb-2 me-2 rounded-lg border border-blue-700 px-5 py-2.5 text-center text-sm font-medium text-blue-700 hover:bg-blue-800 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300 dark:border-blue-500 dark:text-blue-500 dark:hover:bg-blue-500 dark:hover:text-white dark:focus:ring-blue-800">Hari ini</a>
										<a href="{{ route('responden.index', ['start_date' => now()->startOfWeek()->format('Y-m-d'),'end_date' => now()->endOfWeek()->format('Y-m-d')]) }}" class="mb-2 me-2 rounded-lg border border-blue-700 px-5 py-2.5 text-center text-sm font-medium text-blue-700 hover:bg-blue-800 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300 dark:border-blue-500 dark:text-blue-500 dark:hover:bg-blue-500 dark:hover:text-white dark:focus:ring-blue-800">Minggu ini</a>
										<a href="{{ route('responden.index', ['start_date' => now()->startOfMonth()->format('Y-m-d'),'end_date' => now()->endOfMonth()->format('Y-m-d')]) }}" class="mb-2 me-2 rounded-lg border border-blue-700 px-5 py-2.5 text-center text-sm font-medium text-blue-700 hover:bg-blue-800 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300 dark:border-blue-500 dark:text-blue-500 dark:hover:bg-blue-500 dark:hover:text-white dark:focus:ring-blue-800">Bulan ini</a>
										<a href="{{ route('responden.index', ['start_date' => now()->startOfYear()->format('Y-m-d'),'end_date' => now()->endOfYear()->format('Y-m-d')]) }}" class="mb-2 me-2 rounded-lg border border-blue-700 px-5 py-2.5 text-center text-sm font-medium text-blue-700 hover:bg-blue-800 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300 dark:border-blue-500 dark:text-blue-500 dark:hover:bg-blue-500 dark:hover:text-white dark:focus:ring-blue-800">Tahun ini</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</x-card>
	<x-card>
		<div class="relative overflow-x-auto p-5 sm:rounded-lg">
			<div class="flex items-center justify-between pb-4">
				<div class="flex space-x-2">
					<button id="dropdownLaporanGrafikButton" data-dropdown-toggle="dropdownLaporanGrafik" class="inline-flex items-center rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
						Laporan Grafik
						<svg class="ml-2.5 h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
						</svg>
					</button>
					<div id="dropdownLaporanGrafik" class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700">
						<ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownLaporanGrafikButton">
							<li>
								<a href="{{ route('responden.export.graph', request()->all()) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
									Cetak
								</a>
							</li>
							<li>
								<a href="{{ route('responden.preview.graph', request()->all()) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
									Preview
								</a>
							</li>
						</ul>
					</div>

					<button id="dropdownLaporanTabelButton" data-dropdown-toggle="dropdownLaporanTabel" class="inline-flex items-center rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
						Laporan Tabel
						<svg class="ml-2.5 h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
						</svg>
					</button>
					<div id="dropdownLaporanTabel" class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700">
						<ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownLaporanTabelButton">
							<li>
								<a href="{{ route('responden.export.table', request()->all()) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
									Cetak
								</a>
							</li>
							<li>
								<a href="{{ route('responden.preview.table', request()->all()) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
									Preview
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
				<thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
					<tr>
						<th scope="col" class="p-4">
							#
						</th>
						<th scope="col" class="px-6 py-3">
							Nama
						</th>
						<th scope="col" class="px-6 py-3">
							Jenis Kelamin
						</th>
						<th scope="col" class="px-6 py-3">
							Umur
						</th>
						<th scope="col" class="px-6 py-3">
							Pendidikan
						</th>
						<th scope="col" class="px-6 py-3">
							Pekerjaan
						</th>
						<th scope="col" class="px-6 py-3">
							Inatansi
						</th>
						<th scope="col" class="px-6 py-3">
							Aksi
						</th>
					</tr>
				</thead>
				<tbody>
					@if (count($respondens) == 0)
						<tr>
						<tr>
							<td colspan="8" class="py-5 text-center italic text-red-500">Data Kosong</td>
						</tr>
						</tr>
					@else
						@foreach ($respondens as $responden)
							<tr class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
								<td scope="row" class="px-6 py-4 text-gray-900 dark:text-white">
									{{ $respondens->firstItem() + $loop->index }}
								</td>
								<td scope="row" class="px-6 py-4 text-gray-900 dark:text-white">
									{{ $responden->name }}
								</td>
								<td scope="row" class="px-6 py-4 text-gray-900 dark:text-white">
									{{ $responden->gender }}
								</td>
								<td scope="row" class="px-6 py-4 text-gray-900 dark:text-white">
									{{ $responden->age }}
								</td>
								<td scope="row" class="px-6 py-4 text-gray-900 dark:text-white">
									{{ $responden->education }}
								</td>
								<td scope="row" class="px-6 py-4 text-gray-900 dark:text-white">
									{{ $responden->job }}
								</td>
								<td scope="row" class="px-6 py-4 text-gray-900 dark:text-white">
									{{ $responden->village->village }}
								</td>
								<td class="flex space-x-3 whitespace-nowrap px-6 py-4">
									<a href="{{ route('responden.show', $responden->uuid) }}" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Detail</a>
								</td>
							</tr>
						@endforeach
					@endif
				</tbody>
			</table>

			<div class="mt-5">
				{{ $respondens->onEachSide(1)->appends([
				        'start_date' => request('start_date'),
				        'end_date' => request('end_date'),
				        'gender' => request('gender'),
				        'age' => request('age'),
				        'education' => request('education'),
				        'job' => request('job'),
				        'village' => request('village'),
				        'search' => request('search'),
				        'per_page' => request('per_page'),
				        'filter' => request('filter'),
				        'filter_by' => request('filter_by'),
				    ])->links() }}
			</div>
		</div>
	</x-card>
@endsection
