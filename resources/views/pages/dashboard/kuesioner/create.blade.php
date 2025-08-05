@extends('layouts.dashboard', [
    'breadcrumbs' => [
        'Kuesioner' => route('kuesioner.index'),
        'Tambah Kuesioner' => '#',
    ],
])
@section('title', 'Tambah Kuesioner')
@section('content')
	<x-card>
		<div class="relative overflow-x-auto p-5 sm:rounded-lg">
			<form action="{{ route('kuesioner.store') }}" method="POST">
				@csrf
				<div class="mb-3">
					<select name="unsur_id" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
						<option value="" hidden>-- Pilih Unsur --</option>
						@foreach ($unsurs as $unsur)
							<option value="{{ $unsur->id }}">{{ $unsur->unsur }}</option>
						@endforeach
					</select>
				</div>
				<div class="mb-4 w-full rounded-lg border border-gray-200 bg-gray-50 dark:border-gray-600 dark:bg-gray-700">
					<div class="flex items-center justify-between border-b px-3 py-2 dark:border-gray-600">
						<div class="flex flex-wrap items-center divide-gray-200 dark:divide-gray-600 sm:divide-x">
							<div class="flex items-center space-x-1 sm:pr-4">
								<h3 class="font-bold text-gray-500">Pertanyaan</h3>
							</div>
						</div>
						<button type="button" data-tooltip-target="tooltip-fullscreen" class="cursor-pointer rounded p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white sm:ml-auto">
							<svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 19 19">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 1h5m0 0v5m0-5-5 5M1.979 6V1H7m0 16.042H1.979V12M18 12v5.042h-5M13 12l5 5M2 1l5 5m0 6-5 5" />
							</svg>
							<span class="sr-only">Full screen</span>
						</button>
						<div id="tooltip-fullscreen" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
							Show full screen
							<div class="tooltip-arrow" data-popper-arrow></div>
						</div>
					</div>
					<div class="rounded-b-lg bg-white px-4 py-2 dark:bg-gray-800">
						<label for="editor" class="sr-only">Submit</label>
						<textarea id="editor" rows="8" name="question" class="block w-full border-0 bg-white px-0 text-sm text-gray-800 focus:ring-0 dark:bg-gray-800 dark:text-white dark:placeholder-gray-400" placeholder="Tulis pertanyaan kuesioner..."></textarea>
					</div>
				</div>
				<button type="submit" class="inline-flex items-center rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900">
					Submit
				</button>
			</form>
		</div>
	</x-card>
@endsection
