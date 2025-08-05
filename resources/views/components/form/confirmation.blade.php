<div class="flex basis-full flex-col rounded-lg border border-gray-200 bg-white px-5 py-5 shadow dark:border-gray-700 dark:bg-gray-800">
	<h6 class="font-bold mb-3">Petunjuk</h6>
	<p>Silakan berikan kritik dan saran yang membangun jika Anda memiliki. Setelah itu, tekan tombol "Konfirmasi".</p>
</div>
<div class="flex basis-full flex-col space-y-5 rounded-lg border border-gray-200 bg-white px-5 py-5 shadow dark:border-gray-700 dark:bg-gray-800">
	<h5 class="mb-5 text-center text-2xl font-medium tracking-tight text-gray-900 dark:text-white">
		Kritik & Saran
	</h5>
	<form action="{{ route('result.store') }}" method="POST">
		@csrf
		<input type="hidden" name="name" value="{{ $data['name'] }}">
		<input type="hidden" name="gender" value="{{ $data['gender'] }}">
		<input type="hidden" name="age" value="{{ $data['age'] }}">
		<input type="hidden" name="job" value="{{ $data['job'] }}">
		<input type="hidden" name="education" value="{{ $data['education'] }}">
		<input type="hidden" name="village" value="{{ $data['village'] }}">
		@foreach ($kuesioner as $key => $item)
			@php
				$value = (object) [
				    'idKuesioner' => $item->id,
				    'kuesionerAnswer' => $data['question' . $key + 1],
				];
			@endphp
			<input type="hidden" name="answers[]" value="{{ json_encode($value) }}">
		@endforeach

		{{-- Feedback --}}
		<div>
			<label for="feedback" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Kritik dan Saran</label>
			<textarea id="feedback" rows="8" name="feedback" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"></textarea>
		</div>

		<div class="pt-5 text-center">
			<x-button.submit id="submit-result" text="Konfirmasi" />
		</div>
	</form>
</div>
