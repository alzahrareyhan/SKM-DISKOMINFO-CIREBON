@props(['href', 'icon' => '', 'text' => '', 'color' => 'blue', 'class' => '', 'disabled' => false])

@if ($disabled)
  <button type="button" class="opacity-50 {{ $class }} font-medium rounded-lg text-white bg-{{ $color }}-700 hover:bg-{{ $color }}-800 focus:ring-4 focus:outline-none focus:ring-{{ $color }}-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-{{ $color }}-600 dark:hover:bg-{{ $color }}-700 dark:focus:ring-{{ $color }}-800">
    @if (!empty($icon))
      <x-icon :name="$icon" />
    @endif
    @if (!empty($text))
      {{ $text }}
    @endif
  </button>
@else
  <a href="{{ $href }}" class="{{ $class }} font-medium rounded-lg text-white bg-{{ $color }}-700 hover:bg-{{ $color }}-800 focus:ring-4 focus:outline-none focus:ring-{{ $color }}-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-{{ $color }}-600 dark:hover:bg-{{ $color }}-700 dark:focus:ring-{{ $color }}-800">
    @if (!empty($icon))
      <x-icon :name="$icon" />
    @endif
    @if (!empty($text))
      {{ $text }}
    @endif
  </a>
@endif
