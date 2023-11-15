@props(['href', 'active' => false])

<li><a
    {{ $attributes->class(['dropdown-item', 'active' => $active]) }}
    href="{{ $href }}"
  >{{ $slot }}</a></li>
