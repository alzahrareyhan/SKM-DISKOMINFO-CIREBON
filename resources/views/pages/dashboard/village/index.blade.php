@extends('layouts.dashboard', [
    'breadcrumbs' => [
        'Inatansi' => '#',
    ],
])
@section('title', 'Instansi')
@section('content')
	<x-card>
		<div class="relative overflow-x-auto p-5 sm:rounded-lg">
			<div class="flex items-center justify-between pb-4">
				<div>
					<button type="button" data-modal-target="add-village-modal" data-modal-toggle="add-village-modal" class="mr-2 inline-flex items-center rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
						<svg class="mr-2 h-3.5 w-3.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
						</svg>
						Tambah Instansi
					</button>
					<div id="add-village-modal" tabindex="-1" aria-hidden="true" class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
						<div class="relative max-h-full w-full max-w-md">
							<div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
								<button type="button" class="absolute right-2.5 top-3 ml-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="add-village-modal">
									<svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
										<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
									</svg>
									<span class="sr-only">Close modal</span>
								</button>
								<div class="px-6 py-6 lg:px-8">
									<h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Tambah Instansi</h3>
									<form action="{{ route('village.add') }}" method="POST">
										@csrf
										<div>
											<label for="village" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Instansi</label>
											<input type="text" name="village" id="village" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400" placeholder="Nama Instansi">
										</div>
										<button type="submit" class="mt-3 w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
											Submit
										</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
				<thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
					<tr>
						<th scope="col" class="px-6 py-3">
							#
						</th>
						<th scope="col" class="px-6 py-3">
							Nama Instansi
						</th>
						<th scope="col" class="px-6 py-3">
							Aksi
						</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($data as $item)
						<tr class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
							<td scope="row" class="px-6 py-4 text-gray-900 dark:text-white">
								{{ $data->firstItem() + $loop->index }}
							</td>
							<td scope="row" class="px-6 py-4 text-gray-900 dark:text-white">
								{{ $item->village }}
							</td>
							<td scope="row" class="px-6 py-4 text-gray-900 dark:text-white flex space-x-3">
								<button type="button" data-modal-target="edit-village-modal" data-modal-toggle="edit-village-modal" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Edit</button>
								<div id="edit-village-modal" tabindex="-1" aria-hidden="true" class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0">
									<div class="relative max-h-full w-full max-w-md">
										<div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
											<button type="button" class="absolute right-2.5 top-3 ml-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="edit-village-modal">
												<svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
													<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
												</svg>
												<span class="sr-only">Close modal</span>
											</button>
											<div class="px-6 py-6 lg:px-8">
												<h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit Instansi</h3>
												<form action="{{ route('village.update', $item->uuid) }}" method="POST">
													@csrf
													@method('PATCH')
													<div>
														<label for="village" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Instansi</label>
														<input type="text" name="village" id="village" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400" placeholder="Nama Instansi" value="{{ $item->village }}">
													</div>
													<button type="submit" class="mt-3 w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
														Submit
													</button>
												</form>
											</div>
										</div>
									</div>
								</div>
								<form action="{{ route('village.destroy', $item->uuid) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
									@csrf
									@method('DELETE')
									<button type="submit" class="font-medium text-red-600 hover:underline dark:text-red-500">Hapus</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>

			<div class="mt-5">
				{{ $data->links() }}
			</div>
		</div>
	</x-card>
@endsection
