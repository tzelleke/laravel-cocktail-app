<a
  class="nav-link dropdown-toggle"
  href="#"
  role="button"
  data-bs-toggle="dropdown"
  aria-expanded="false"
>
  {{ $trigger }}
</a>
<ul {{ $attributes->class(['dropdown-menu']) }}>
  {{ $content }}
</ul>
