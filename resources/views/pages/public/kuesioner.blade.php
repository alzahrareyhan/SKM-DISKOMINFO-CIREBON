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
@extends('layouts.public')
@section('title', 'Kuesioner')
@section('content')
	<section class="bg-white dark:bg-gray-900">
		<ol class="mx-auto mt-8 flex max-w-screen-lg items-center px-4 text-center text-sm font-medium text-gray-500 dark:text-gray-400 sm:text-base">
			<li class="after:border-1 {{ $step == 1 ? 'text-blue-600' : '' }} flex items-center after:mx-6 after:hidden after:h-1 after:w-full after:border-b after:border-gray-200 dark:text-blue-500 dark:after:border-gray-700 sm:after:inline-block sm:after:content-[''] md:w-full xl:after:mx-10">
				<span class="flex items-center after:mx-2 after:text-gray-200 after:content-['/'] dark:after:text-gray-500 sm:after:hidden">
					@if ($step > 1)
						<svg class="mr-2.5 h-3.5 w-3.5 sm:h-4 sm:w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
							<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
						</svg>
					@else
						<span class="mr-2">1)</span>
					@endif
					Data <span class="hidden sm:ml-2 sm:inline-flex">Diri</span>
				</span>
			</li>
			<li class="after:border-1 {{ $step == 2 ? 'text-blue-600' : '' }} flex items-center after:mx-6 after:hidden after:h-1 after:w-full after:border-b after:border-gray-200 after:content-[''] dark:after:border-gray-700 sm:after:inline-block md:w-full xl:after:mx-10">
				<span class="flex items-center after:mx-2 after:text-gray-200 after:content-['/'] dark:after:text-gray-500 sm:after:hidden">
					@if ($step > 2)
						<svg class="mr-2.5 h-3.5 w-3.5 sm:h-4 sm:w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
							<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
						</svg>
					@else
						<span class="mr-2">2)</span>
					@endif
					Kuesioner
				</span>
			</li>
			<li class="{{ $step == 3 ? 'text-blue-600' : '' }} flex items-center whitespace-nowrap">
				<span class="mr-2">3)</span>
				Kritik & Saran
			</li>
		</ol>
		<div class="mx-auto flex flex-col space-y-5 max-w-screen-lg px-4 py-8">
			@if ($step == 1)
				<x-form.personal-info :genders="$genders" :educations="$educations" :jobs="$jobs" :total-kuesioner="$totalKuesioner" :villages="$villages" />
			@elseif ($step == 2)
				<x-form.kuesioner :previous="$previous" :step="$step" :question="$question" :total-kuesioner="$totalKuesioner" :next="$next" :kuesioner="$kuesioner" :data="$data" />
			@elseif ($step == 3)
				<x-form.confirmation :kuesioner="$kuesioner" :data="$data" :step="$step" />
			@endif
		</div>
	</section>
@endsection
