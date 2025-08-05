@extends('layouts.dashboard', [
    'breadcrumbs' => [
        'Profil' => '#',
    ],
])
@section('title', 'Profil')
@section('content')
	<x-card>
		<div class="relative overflow-x-auto p-5 sm:rounded-lg">
			<form action="{{ route('profil.update') }}" method="POST">
				@csrf
				<div class="mb-5">
					<label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
					<input type="text" id="name" name="name" value="{{ auth()->user()->name }}" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
					@error('name')
						<p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
					@enderror
				</div>
				<div class="mb-5">
					<label for="email" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Email</label>
					<input type="text" id="email" name="email" value="{{ auth()->user()->email }}" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
					@error('email')
						<p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
					@enderror
				</div>
				<div>
					<x-button.submit text="Update" id="update-profile" />
				</div>
			</form>
		</div>
	</x-card>
	<x-card>
		<div class="relative overflow-x-auto p-5 sm:rounded-lg">
			<form action="{{ route('auth.change_password') }}" method="POST">
				@csrf
				<div class="mb-5">
					<label for="old_password" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Password Saat Ini</label>
					<input type="password" id="old_password" name="old_password" value="{{ old('old_password') }}" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
					@error('old_password')
						<p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
					@enderror
				</div>
				<div class="mb-5">
					<label for="new_password" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Password Baru</label>
					<input type="password" id="new_password" name="new_password" value="{{ old('new_password') }}" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
					@error('new_password')
						<p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
					@enderror
				</div>
				<div class="mb-5">
					<label for="repeat_new_password" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Ulangi Password Baru</label>
					<input type="password" id="repeat_new_password" name="repeat_new_password" value="{{ old('repeat_new_password') }}" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
					@error('repeat_new_password')
						<p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
					@enderror
				</div>
				<div>
					<x-button.submit text="Update Password" id="change-password" />
				</div>
			</form>
		</div>
	</x-card>
@endsection
