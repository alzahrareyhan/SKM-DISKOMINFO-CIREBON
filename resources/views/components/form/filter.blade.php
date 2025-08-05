<button id="multiLevelDropdownButton" data-dropdown-toggle="dropdown" class="inline-flex items-center rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-center text-sm text-gray-900 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" type="button">
	{{ request()->filter ?? 'Semua' }}
	<svg class="ml-5 h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
		<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
	</svg>
</button>

<div id="dropdown" class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700">
	<ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="multiLevelDropdownButton">
		@foreach ($options as $key => $option)
			<li>
        @if (isset($isMulti) && $isMulti)
          <button id="doubleDropdown{{ $key }}Button" data-dropdown-toggle="doubleDropdown{{ $key }}" data-dropdown-placement="right-start" type="button" class="flex w-full items-center justify-between px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
            {{ $key }}
            <svg class="ml-2.5 h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
          </button>
          <div id="doubleDropdown{{ $key }}" class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="doubleDropdown{{ $key }}Button">
              @foreach ($option as $item)
                <li>
                  <a href="{{ $item->route }}&per_page={{ request('per_page') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $item->name }}</a>
                </li>
              @endforeach
            </ul>
          </div>
        @else
          <a href="{{ $option->route }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $option->name }}</a>
        @endif
			</li>
		@endforeach
	</ul>
</div>
