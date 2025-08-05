<div class="flex basis-full flex-col rounded-lg border border-gray-200 bg-white px-5 py-5 shadow dark:border-gray-700 dark:bg-gray-800">
	<h6 class="font-bold mb-3">Petunjuk</h6>
	<p>Harap isi informasi pribadi Anda dengan lengkap. Setelah selesai, silakan lanjutkan dengan menekan tombol "Selanjutnya."</p>
</div>
<div class="flex basis-full flex-col space-y-5 rounded-lg border border-gray-200 bg-white px-5 py-5 shadow dark:border-gray-700 dark:bg-gray-800">
	<h5 class="mb-5 text-center text-2xl font-medium tracking-tight text-gray-900 dark:text-white">
		Data Diri
	</h5>
	<form action="{{ route('kuesioner') }}" method="GET">
		<input type="hidden" name="step" value="2">
		<input type="hidden" name="question" value="1">
		<div class="mb-5">
			<label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
			<input type="text" id="name" name="name" value="{{ old('name') }}" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
			@error('name')
				<p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
			@enderror
		</div>
		<div class="mb-5">
			<label for="genders" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
			<select id="genders" name="gender" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
				<option value="" hidden>-Pilih-</option>
				@foreach ($genders as $item)
					<option value="{{ $item->value }}" {{ old('gender') == $item->value ? 'selected' : '' }}>{{ $item->label }}</option>
				@endforeach
			</select>
			@error('gender')
				<p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
			@enderror
		</div>
		<div class="mb-5">
			<label for="age" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Umur</label>
			<input type="text" id="age" name="age" value="{{ old('age') }}" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
			@error('age')
				<p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
			@enderror
		</div>
		<div class="mb-5">
			<label for="educations" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Pendidikan</label>
			<select id="educations" name="education" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
				<option value="" hidden>-Pilih-</option>
				@foreach ($educations as $item)
					<option value="{{ $item->value }}" {{ old('education') == $item->value ? 'selected' : '' }}>{{ $item->label }}</option>
				@endforeach
			</select>
			@error('education')
				<p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
			@enderror
		</div>
		<div class="mb-5">
			<label for="jobs" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Pekerjaan</label>
			<select id="jobs" name="job" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
				<option value="" hidden>-Pilih-</option>
				@foreach ($jobs as $item)
					<option value="{{ $item->value }}" {{ old('job') == $item->value ? 'selected' : '' }}>{{ $item->label }}</option>
				@endforeach
			</select>
			@error('job')
				<p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
			@enderror
		</div>
		<div class="mb-5">
			<label for="villages" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Instansi</label>
			<select id="villages" name="village" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
				<option value="" hidden>-Pilih-</option>
				@foreach ($villages as $item)
					<option value="{{ $item->id }}" {{ old('village') == $item->village_id ? 'selected' : '' }}>{{ $item->village }}</option>
				@endforeach
			</select>
			@error('village')
				<p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
			@enderror
		</div>
		<div class="mb-5 text-right">
			<x-button.submit text="Selanjutnya" id="submit-personal-info" />
		</div>
	</form>
</div>
