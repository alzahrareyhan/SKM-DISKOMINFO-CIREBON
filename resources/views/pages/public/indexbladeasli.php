@extends('layouts.public')
@section('title', 'Survey Kepuasan Masyarakat')
@section('content')

<section id="home" class="py-12">
	<section class="bg-white bg-bottom bg-no-repeat px-5 pb-5 dark:bg-gray-900" style="background-image: url({{ asset('assets/svg1.png') }}); height: calc(95vh - 100px) ;">

	<div class="mx-auto mt-10 grid h-full max-w-screen-lg rounded-xl border-2 bg-white px-4 py-8 shadow lg:h-auto lg:grid-cols-12 lg:gap-8 lg:py-16 xl:gap-0;">

		<div class="mr-auto md:pl-10 place-self-center text-center lg:col-span-7 lg:place-self-start lg:text-start">
			<h1 class="mb-4 max-w-2xl text-4xl font-extrabold leading-none tracking-tight dark:text-white md:text-5xl xl:text-6xl">
			Survey Kepuasan Masyarakat</h1>
			<p class="mb-6 max-w-2xl font-light text-gray-500 dark:text-gray-400 md:text-lg lg:mb-8 lg:text-xl">
				Setiap penilaian yang Anda berikan adalah suara yang berarti bagi kami, dan kami
			sangat menghargai kontribusi Anda dalam meningkatkan kualitas layanan kami</p>
			<a href="{{ route('opd') }}" class="mr-3 inline-flex items-center justify-center rounded-lg bg-primary-700 px-5 py-3 text-center text-base font-medium text-white hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
				Beri Penilaian
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-2 h-6 w-6">
					<path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
				</svg>
			</a>
		</div>
		<div class="hidden lg:col-span-5 lg:mt-0 lg:flex">
			<div class="rounded-xl" style="background-color: rgba(, 255, 255, 0.1);">
				<x-chart.donut :answers="$answers" />
			</div>
		</div>
	</div>
</section>

<section class="  bg-top bg-no-repeat px-5 pb-5 dark:bg-gray-900" style="background-image: url({{ asset('assets/svg2.png') }}); height: calc(80vh - 100px);  background-position-top: -170px ; background-position-left: -200px ;">
<section class=" min-h-screen grid place-content-center px-3">
	<section id="informasi" class="py-10">
		
		<h1 class=" text-3xl font-bold">Informasi</h1>
		<p>Konten informasi di sini.</p>

    <div class="mb-4 mx-auto mt-10 grid h-full max-w-screen-lg rounded-xl border-2 bg-white px-4 py-8 shadow lg:h-auto lg:grid-cols-12 lg:gap-8 lg:py-16 xl:gap-10">
        <div class="mr-auto md:pl-10 place-self-center text-center lg:col-span-7 lg:place-self-start lg:text-start">

            <h2 class="mb-4 text-2xl font-bold">DASAR HUKUM</h2>
            <p class="mb- max-w-2xl font-light text-gray-500 dark:text-gray-400 md:text-lg lg:mb-8 lg:text-xl">
                Survei Kepuasan Masyarakat dilaksanakan sesuai dengan ketentuan dalam Peraturan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor 14 Tahun 2017 tentang Pedoman Penyusunan Survei Kepuasan Masyarakat
            </p>
            <p class="mb- max-w-2xl font-light text-gray-500 dark:text-gray-400 md:text-lg lg:mb-8 lg:text-xl">
                Survei Persepsi Anti Korupsi (SPAK) dan Survei Persepsi Kualitas Pelayanan (SPKP) dilaksanakan sesuai dengan SE MENPANRB No 04 TAHUN 2023
            </p>
            <div class="flex space-x-4">
                <a href="{{ asset('assets/permenpanrb-14-2017.pdf') }}" class="inline-flex items-center justify-center rounded-lg bg-primary-700 px-4 py-2 text-center text-sm font-medium text-white hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    PREMENPAN NOMOR 14 TAHUN 2017
                </a>

                <a href="{{ asset('assets/semenpanrb-04-2023.pdf') }}" class="inline-flex items-center justify-center rounded-lg bg-primary-700 px-4 py-2 text-center text-sm font-medium text-white hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    SE MENPANRB No 04 TAHUN 2023
                </a>
            </div>
        </div>
    
        <!-- Menambahkan gambar di samping teks -->
        <div class="hidden lg:col-span-4 lg:mt-0 lg:flex items-center justify-center">
            <img src="{{ asset('assets/logo.png') }}" alt="Deskripsi Gambar" class="h-auto w-full rounded-xl shadow-lg">
        </div>
    </div>
	</section>
</section>
</section>
</section>

	<!-- hasilllllllllllllllllllllllllllllllllllllll -->
<section id="hasil" class="py-10">
	<section class="bg-white bg-bottom bg-no-repeat px-5 pb-5 dark:bg-gray-900" style="background-image: url({{ asset('assets/svg3.png') }}); height: calc(100vh - 100px);">		
	<section class=" min-h-screen place-content-center px-3">
		<h2 class="text-3xl font-bold ">Hasil Survei</h2>
		<p	class="mb-10">Konten hasil di sini.</p>
		<x-card class="mb-10">
			<div class="relative overflow-x-auto p-5 sm:rounded-lg">
				<div class="mb-10 flex items-center justify-between">
					<div class="flex space-x-2">
						<button id="dropdownLaporanGrafikButton" data-dropdown-toggle="dropdownLaporanGrafik" class="inline-flex items-center rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
							Laporan Hasil
							<svg class="ml-2.5 h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
							</svg>
						</button>
						<div id="dropdownLaporanGrafik" class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700">
							<ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownLaporanGrafikButton">
								<li>
									<a href="{{ route('ikm.export.graph', request()->all()) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
										Cetak
									</a>
								</li>
								<li>
									<a href="{{ route('ikm.preview.graph', request()->all()) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
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
									<a href="{{ route('ikm.export.table', request()->all()) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
										Cetak
									</a>
								</li>
								<li>
									<a href="{{ route('ikm.preview.table', request()->all()) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
										Preview
									</a>
								</li>
							</ul>
						</div>
					</div>
					<form id="form-action" method="GET" action="{{ route('ikm.index') }}" class="flex items-center space-x-3">
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
											<a href="{{ route('ikm.index', ['start_date' => now()->format('Y-m-d'), 'end_date' => now()->format('Y-m-d')]) }}" class="mb-2 me-2 rounded-lg border border-blue-700 px-5 py-2.5 text-center text-sm font-medium text-blue-700 hover:bg-blue-800 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300 dark:border-blue-500 dark:text-blue-500 dark:hover:bg-blue-500 dark:hover:text-white dark:focus:ring-blue-800">Hari ini</a>
											<a href="{{ route('ikm.index', ['start_date' => now()->startOfWeek()->format('Y-m-d'),'end_date' => now()->endOfWeek()->format('Y-m-d')]) }}" class="mb-2 me-2 rounded-lg border border-blue-700 px-5 py-2.5 text-center text-sm font-medium text-blue-700 hover:bg-blue-800 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300 dark:border-blue-500 dark:text-blue-500 dark:hover:bg-blue-500 dark:hover:text-white dark:focus:ring-blue-800">Minggu ini</a>
											<a href="{{ route('ikm.index', ['start_date' => now()->startOfMonth()->format('Y-m-d'),'end_date' => now()->endOfMonth()->format('Y-m-d')]) }}" class="mb-2 me-2 rounded-lg border border-blue-700 px-5 py-2.5 text-center text-sm font-medium text-blue-700 hover:bg-blue-800 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300 dark:border-blue-500 dark:text-blue-500 dark:hover:bg-blue-500 dark:hover:text-white dark:focus:ring-blue-800">Bulan ini</a>
											<a href="{{ route('ikm.index', ['start_date' => now()->startOfYear()->format('Y-m-d'),'end_date' => now()->endOfYear()->format('Y-m-d')]) }}" class="mb-2 me-2 rounded-lg border border-blue-700 px-5 py-2.5 text-center text-sm font-medium text-blue-700 hover:bg-blue-800 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300 dark:border-blue-500 dark:text-blue-500 dark:hover:bg-blue-500 dark:hover:text-white dark:focus:ring-blue-800">Tahun ini</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<input type="hidden" name="filter" value="{{ request('filter') }}">
						<input type="hidden" name="filter_by" value="{{ request('filter_by') }}">
						<div class="relative">
							<input type="date" name="start_date" id="start_date" value="{{ request('start_date') }}" class="date block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
							<label for="start_date" class="absolute -top-2 left-3 bg-white px-1 text-[.65rem] text-gray-400">Tanggal Mulai</label>
						</div>
						<div class="relative">
							<input type="date" name="end_date" id="end_date" value="{{ request('end_date') }}" class="date block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
							<label for="end_date" class="absolute -top-2 left-3 bg-white px-1 text-[.65rem] text-gray-400">Tanggal Selesai</label>
						</div>
						<div class="relative">

							<label for="filter" class="absolute -top-2 left-3 bg-white px-1 text-[.65rem] text-gray-400"></label>
						</div>
					</form>
				</div>
				<dl class="mb-5 grid grid-cols-3 divide-x divide-gray-200 text-sm text-gray-900 dark:divide-gray-700 dark:text-white">
					<div class="flex flex-col">
						<dt class="mb-1 text-gray-500 dark:text-gray-400">Instansi</dt>
						<dd class="font-semibold">{{ request('filter') ?? 'Semua' }}</dd>
					</div>
					<div class="flex flex-col pl-5">
						<dt class="mb-1 text-gray-500 dark:text-gray-400">Tanggal Mulai</dt>
						<dd class="font-semibold">{{ request('start_date') }}</dd>
					</div>
					<div class="flex flex-col pl-5">
						<dt class="mb-1 text-gray-500 dark:text-gray-400">Tanggal Selesai</dt>
						<dd class="font-semibold">{{ request('end_date') }}</dd>
					</div>
				</dl>
				<table class="w-full border text-left text-sm text-gray-500 dark:text-gray-400">
					<thead class="bg-blue-100 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
						<tr>
							<th scope="col" class="px-6 py-3">
								Pertanyaan
							</th>
							<th scope="col" class="px-6 py-3">
								Jumlah Nilai/Unsur
							</th>
							<th scope="col" class="px-6 py-3">
								NRR/Unsur
							</th>
							<th scope="col" class="px-6 py-3">
								Bobot Nilai Tertimbang
							</th>
							<th scope="col" class="px-6 py-3">
								NRR Tertimbang/Unsur
							</th>
						</tr>
					</thead>
					
				</table>
			</div>
		</x-card>

		<script>
			const dates = document.querySelectorAll('.date');
			const form = document.querySelector('#form-action');

			dates.forEach(date => {
				date.addEventListener('change', (e) => {
					form.submit()
				});
			});
		</script>
	
	</section>
</section>
<section class=" bg-white bg-top bg-no-repeat px-5 pb-5 dark:bg-gray-900" style="background-image: url({{ asset('assets/svg4.png') }});  height: calc(70vh - 100px);  background-position-top: -170px ;">

<section class="mb-10 min-h-screen grid place-content-center px-5">
<section class="bg-white bg-top bg-no-repeat px-5 pb-5 dark:bg-gray-900" style="background-color: rgb(255, 255, 255,0);">

	<div class="mx-auto max-w-screen-lg">
		<div class="p-10">
			<div class="felx-col flex items-center justify-center"> <span class="rounded-full bg-indigo-500 px-2 py-1 text-sm uppercase text-white"> IKM </span> </div>
			<h1 class="mt-6 text-center text-4xl font-medium text-gray-700"> Indek Kepuasan Masyarakat </h1>
			<p class="mt-6 text-center text-lg font-light text-gray-500">Terimakasih atas kepercayaan dan dukungan yang Anda berikan kepada kami. Kami
			sangat bersemangat untuk terus memberikan layanan terbaik bagi Anda</p>
		</div>
		<div class="grid grid-cols-2 gap-5 md:grid-cols-4">
			<div class="rounded-xl border p-8 shadow">
				<div class="flex h-16 w-16 items-center justify-center rounded-full bg-red-100 text-red-500 shadow-2xl">
					<img src="{{ asset('assets/1.svg') }}" alt="Tidak Memuaskan" class="p-3">
				</div>
				<h2 class="mb-3 mt-6 font-medium uppercase text-red-500">Tidak Memuaskan</h2>
				<p class="text-5xl">{{ $answers->details[0]['total'] }}</p>
			</div>
			<div class="rounded-xl border p-8 shadow">
				<div class="flex h-16 w-16 items-center justify-center rounded-full bg-orange-100 text-orange-500 shadow-2xl">
					<img src="{{ asset('assets/2.svg') }}" alt="Kurang Memuaskan" class="p-3">
				</div>
				<h2 class="mb-3 mt-6 font-medium uppercase text-orange-500">Kurang Memuaskan</h2>
				<p class="text-5xl">{{ $answers->details[1]['total'] }}</p>
			</div>
			<div class="rounded-xl border p-8 shadow">
				<div class="flex h-16 w-16 items-center justify-center rounded-full bg-yellow-100 text-yellow-500 shadow-2xl">
					<img src="{{ asset('assets/3.svg') }}" alt="Memuaskan" class="p-3">
				</div>
				<h2 class="mb-3 mt-6 font-medium uppercase text-yellow-500">Memuaskan</h2>
				<p class="text-5xl">{{ $answers->details[2]['total'] }}</p>
			</div>
			<div class="rounded-xl border p-8 shadow">
				<div class="flex h-16 w-16 items-center justify-center rounded-full bg-green-100 text-green-500 shadow-2xl">
					<img src="{{ asset('assets/4.svg') }}" alt="Sangat Memuaskan" class="p-3">
				</div>
				<h2 class="mb-3 mt-6 font-medium uppercase text-green-500">Sangat Memuaskan</h2>
				<p class="text-5xl">{{ $answers->details[3]['total'] }}</p>
			</div>
		</div>
	</div>
</section>





	<!-- JavaScript untuk Intersection Observer -->
	<script>
	document.addEventListener('DOMContentLoaded', function () {
		const sections = document.querySelectorAll('section');
		const navLinks = document.querySelectorAll('nav ul li a');

		const observer = new IntersectionObserver(
		(entries) => {
			entries.forEach((entry) => {
			if (entry.isIntersecting) {
				navLinks.forEach((link) => {
				link.classList.remove('active');
				});

				const activeLink = document.querySelector(`nav ul li a[href="#${entry.target.id}"]`);
				if (activeLink) {
				activeLink.classList.add('active');
				}
			}
			});
		},
		{
			threshold: 0.6,
		}
		);

		sections.forEach((section) => {
		observer.observe(section);
		});
	});
	document.addEventListener('DOMContentLoaded', function () {
	const sections = document.querySelectorAll('section');
	const navLinks = document.querySelectorAll('nav ul li a');

	// Scrollspy functionality
	const observer = new IntersectionObserver(
		(entries) => {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
			navLinks.forEach((link) => {
				link.classList.remove('active');
			});

			const activeLink = document.querySelector(`nav ul li a[href="#${entry.target.id}"]`);
			if (activeLink) {
				activeLink.classList.add('active');
			}
			}
		});
		},
		{
		threshold: 0.6, // Trigger when 60% of the section is visible
		}
	);

	sections.forEach((section) => {
		observer.observe(section);
	});

	// Smooth scroll for navigation links
	navLinks.forEach((link) => {
		link.addEventListener('click', function (e) {
		e.preventDefault();
		const targetId = this.getAttribute('href').substring(1);
		const targetSection = document.getElementById(targetId);

		if (targetSection) {
			window.scrollTo({
			top: targetSection.offsetTop - 50, // Adjust offset as needed
			behavior: 'smooth',
			});
		}
		});
	});
	});
	</script>



<!-- CSS untuk kelas aktif -->
<style>
  nav ul li a.active {
    color: #1d4ed8;
    font-weight: bold;
    border-bottom: 2px solid #1d4ed8;
  }
</style>


</section>
<footer class="border-t-2">
	<div class="mx-auto max-w-screen-lg px-4 py-8 sm:px-6 lg:px-8">
		<div class="sm:flex sm:items-center sm:justify-between">
			<a href="{{ route('index') }}" class="flex items-center">
				<img src="{{ asset('assets/logo.png') }}" class="mr-3 h-8" alt="Logo" />
				<span class="self-center whitespace-nowrap text-2xl font-medium dark:text-white">{{ config('app.name') }}</span>
			</a>
			<p class="mt-4 text-center text-sm text-gray-500 lg:mt-0 lg:text-right">
				Copyright &copy; Reyhan Nandita Al Zahra Development 2024. All rights reserved. | 
				<a href="https://wa.me/6289607070668" target="_blank">Hubungi Kami</a>
			</p>
		</div>
	</div>
</footer>

@endsection