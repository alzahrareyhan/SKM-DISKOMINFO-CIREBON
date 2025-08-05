@extends('layouts.dashboard', [
  'breadcrumbs' => [
      'Kuesioner' => route('kuesioner.index'),
      'Edit Kuesioner' => '#'
  ],
])
@section('title', 'Edit Kuesioner')
@section('content')
  <x-card>
    <div class="relative overflow-x-auto sm:rounded-lg p-5">
      <form action="{{ route('kuesioner.update', $kuesioner->uuid) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
					<select name="unsur_id" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
						<option value="" hidden>-- Pilih Unsur --</option>
						@foreach ($unsurs as $unsur)
							<option value="{{ $unsur->id }}" {{ $kuesioner->unsur->unsur == $unsur->unsur ? 'selected' : '' }}>{{ $unsur->unsur }}</option>
						@endforeach
					</select>
				</div>
        <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
          <div class="flex items-center justify-between px-3 py-2 border-b dark:border-gray-600">
            <div class="flex flex-wrap items-center divide-gray-200 sm:divide-x dark:divide-gray-600">
              <div class="flex items-center space-x-1 sm:pr-4">
                <h3 class="font-bold text-gray-500">Pertanyaan</h3>
              </div>
            </div>
            <button type="button" data-tooltip-target="tooltip-fullscreen"
              class="p-2 text-gray-500 rounded cursor-pointer sm:ml-auto hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
              <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 19 19">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13 1h5m0 0v5m0-5-5 5M1.979 6V1H7m0 16.042H1.979V12M18 12v5.042h-5M13 12l5 5M2 1l5 5m0 6-5 5" />
              </svg>
              <span class="sr-only">Full screen</span>
            </button>
            <div id="tooltip-fullscreen" role="tooltip"
              class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
              Show full screen
              <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
          </div>
          <div class="px-4 py-2 bg-white rounded-b-lg dark:bg-gray-800">
            <label for="editor" class="sr-only">Submit</label>
            <textarea id="editor" rows="8"
              name="question"
              class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
              placeholder="Tulis pertanyaan kuesioner...">{{ $kuesioner->question }}</textarea>
          </div>
        </div>
        <button type="submit"
          class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
          Submit
        </button>
      </form>
    </div>
  </x-card>
@endsection
