@extends('layouts.public')
@section('title', 'OPD')
@section('content')
<section class="grid place-content-center px-5">
<div class="mx-auto max-w-screen-lg">
	<section> 
	<h1 class=" text-3xl font-bold py-8">Pilih Kategori Instansi</h1>
		<div class="grid grid-cols-2 gap-5 md:grid-cols-4">
		<a href="{{ route('kuesioner') }}">
			<div class="rounded-xl border p-8 shadow cursor-pointer transition duration-300 hover:bg-blue-100 hover:border-blue-500 flex flex-col items-center justify-center">
			<div class="flex h-20 w-20 items-center justify-center rounded-full bg-white shadow-2xl">
				<img src="{{ asset('assets/1.jpg') }}" alt="Tidak Memuaskan" class="rounded-full h-full w-full object-cover">
			</div>
				<h2 class="mb-3 mt-6 font-medium uppercase text-black text-center">dinas</h2>
			</div>
		</a>

			
			<a href="{{ route('kuesioner') }}">
				<div class="rounded-xl border p-8 shadow cursor-pointer transition duration-300 hover:bg-blue-100 hover:border-blue-500 flex flex-col items-center justify-center">
				<div class="flex h-20 w-20 items-center justify-center rounded-full bg-white shadow-2xl">
						<img src="{{ asset('assets/2.jpg') }}" alt="Tidak Memuaskan" class="rounded-full h-full w-full object-cover">
					</div>
					<h2 class="mb-3 mt-6 font-medium uppercase text-black text-center">badan</h2>
				</div>
			</a>
			
			<a href="{{ route('kuesioner') }}">
				<div class="rounded-xl border p-8 shadow cursor-pointer transition duration-300 hover:bg-blue-100 hover:border-blue-500 flex flex-col items-center justify-center">
					<div class="flex h-20 w-20 items-center justify-center rounded-full bg-white text-white shadow-2xl">
						<img src="{{ asset('assets/3.jpg') }}" alt="Tidak Memuaskan" class="rounded-full h-full w-full object-cover">
					</div>
					<h2 class="mb-3 mt-6 font-medium uppercase text-black text-center">kecamatan</h2>
				</div>
			</a>
			<a href="{{ route('kuesioner') }}">
				<div class="rounded-xl border p-8 shadow cursor-pointer transition duration-300 hover:bg-blue-100 hover:border-blue-500 flex flex-col items-center justify-center">
					<div class="flex h-20 w-20 items-center justify-center rounded-full bg-white text-white shadow-2xl">
						<img src="{{ asset('assets/10.jpg') }}" alt="Tidak Memuaskan" class="rounded-full h-full w-full object-cover">
					</div>
					<h2 class="mb-3 mt-6 font-medium uppercase text-black text-center">puskesmas</h2>
				</div>
			</a>
			
			<a href="{{ route('kuesioner') }}">
				<div class="rounded-xl border p-8 shadow cursor-pointer transition duration-300 hover:bg-blue-100 hover:border-blue-500 flex flex-col items-center justify-center">
					<div class="flex h-20 w-20 items-center justify-center rounded-full bg-white text-white shadow-2xl">
						<img src="{{ asset('assets/5.jpg') }}" alt="Tidak Memuaskan" class="rounded-full h-full w-full object-cover">
					</div>
					<h2 class="mb-3 mt-6 font-medium uppercase text-black text-center">kelurahan dan desa</h2>
				</div>
			</a>
			
			<a href="{{ route('kuesioner') }}">
				<div class="rounded-xl border p-8 shadow cursor-pointer transition duration-300 hover:bg-blue-100 hover:border-blue-500 flex flex-col items-center justify-center">
					<div class="flex h-20 w-20 items-center justify-center rounded-full bg-white text-white shadow-2xl">
						<img src="{{ asset('assets/6.jpg') }}" alt="Tidak Memuaskan" class="rounded-full h-full w-full object-cover">
					</div>
					<h2 class="mb-3 mt-6 font-medium uppercase text-black text-center">sekolah</h2>
				</div>
			</a>
			
			<a href="{{ route('kuesioner') }}">
				<div class="rounded-xl border p-8 shadow cursor-pointer transition duration-300 hover:bg-blue-100 hover:border-blue-500 flex flex-col items-center justify-center">
					<div class="flex h-20 w-20 items-center justify-center rounded-full bg-white text-white shadow-2xl">
						<img src="{{ asset('assets/7.jpg') }}" alt="Tidak Memuaskan" class="rounded-full h-full w-full object-cover">
					</div>
					<h2 class="mb-3 mt-6 font-medium uppercase text-black text-center">rsud dan labkesda</h2>
				</div>
			</a>
			
			<a href="{{ route('kuesioner') }}">
				<div class="rounded-xl border p-8 shadow cursor-pointer transition duration-300 hover:bg-blue-100 hover:border-blue-500 flex flex-col items-center justify-center">
					<div class="flex h-20 w-20 items-center justify-center rounded-full bg-white text-white shadow-2xl">
						<img src="{{ asset('assets/8.jpg') }}" alt="Tidak Memuaskan" class="rounded-full h-full w-full object-cover">
					</div>
					<h2 class="mb-3 mt-6 font-medium uppercase text-black text-center">opd lainnya</h2>
				</div>
			</a>


		</div>
	</div>
	</section>
</section>
<footer class="border-t-10">
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