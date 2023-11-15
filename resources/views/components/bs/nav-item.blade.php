@props(['href', 'active' => false])

<li class="nav-item"><a
    {{ $attributes->class(['nav-link', 'active' => $active]) }}
    @if ($active) aria-current="page" @endif
    href="{{ $href }}"
  >{{ $slot }}</a></li>
