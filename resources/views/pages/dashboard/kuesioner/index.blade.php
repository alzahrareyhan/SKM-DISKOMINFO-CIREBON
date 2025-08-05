@extends('layouts.dashboard', [
    'breadcrumbs' => [
        'Kuesioner' => '#',
    ],
])
@section('title', 'Kuesioner')
@section('content')
	<x-card>
		<div class="relative overflow-x-auto p-5 sm:rounded-lg">
			<form action="{{ route('kuesioner.checks') }}" method="POST">
				@csrf
				<div class="flex items-center justify-between pb-4">
					<div>
						<x-button.create text="Tambah Kuesioner" :href="route('kuesioner.create')" />
						<button type="submit" id="deleteMany" name="action" value="delete" class="mr-2 hidden items-center rounded-lg bg-red-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
							<svg class="mr-2 h-3.5 w-3.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
							</svg>
							Hapus
						</button>
					</div>
				</div>

				<table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
					<thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
						<tr>
							<th scope="col" class="p-4">
								<input id="checkbox-table-all" type="checkbox" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-800">
								<label for="checkbox-table-all" class="sr-only">checkbox</label>
							</th>
							<th scope="col" class="px-6 py-3">
								Unsur
							</th>
							<th scope="col" class="px-6 py-3">
								Pertanyaan
							</th>
							<th scope="col" class="px-6 py-3">
								Aksi
							</th>
						</tr>
					</thead>
					<tbody>
						@if (count($kuesioner) == 0)
							<tr>
								<td colspan="8" class="py-5 text-center italic text-red-500">Data Kosong</td>
							</tr>
						@else
							@foreach ($kuesioner as $item)
								<tr class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
									<td class="w-4 p-4">
										<div class="flex items-center">
											<input id="checkbox-table-{{ $item->uuid }}" type="checkbox" name="checks[]" value="{{ $item->uuid }}" onchange="updateButtonVisibility()" class="checkbox-item h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-800">
											<label for="checkbox-table-{{ $item->uuid }}" class="sr-only">checkbox</label>
										</div>
									</td>
									<td scope="row" class="break-all px-6 py-4 text-gray-900 dark:text-white">
										{{ $item->unsur->unsur }}
									</td>
									<td scope="row" class="break-all px-6 py-4 text-gray-900 dark:text-white">
										{{ $item->question }}
									</td>
									<td class="flex space-x-3 whitespace-nowrap px-6 py-4">
										<a href="{{ route('kuesioner.edit', $item->uuid) }}" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Edit</a>
									</td>
								</tr>
							@endforeach
						@endif
					</tbody>
				</table>

				<div class="mt-5">
					{{ $kuesioner->links() }}
				</div>
			</form>
		</div>
	</x-card>

	<script>
		const checkAll = document.getElementById('checkbox-table-all')
		const checkboxes = document.querySelectorAll(".checkbox-item")
		checkAll.addEventListener('change', (e) => {
			checkboxes.forEach(checkbox => checkbox.checked = e.target.checked)
			updateButtonVisibility()
		})

		const updateButtonVisibility = () => {
			const deleteMany = document.getElementById("deleteMany")
			let checked = false;

			for (let i = 0; i < checkboxes.length; i++) {
				if (checkboxes[i].checked) {
					checked = true;
					break;
				}
			}

			if (checked) {
				deleteMany.classList.add('inline-flex')
				deleteMany.classList.remove('hidden')
			} else {
				deleteMany.classList.add('hidden')
				deleteMany.classList.remove('inline-flex')
			}
		}
	</script>
@endsection
