@props(['id', 'label', 'help', 'errors' => null])

<div class="mb-3">
  <label
    for="{{ $id }}"
    class="form-label"
  >{{ $label }}</label>
  <input
    type="text"
    @class(['form-control', 'is-invalid' => $errors])
    id="{{ $id }}"
    name="{{ $id }}"
    {!! $attributes !!}
  >
  @isset($help)
    <div
      id="{{ $id }}Help"
      class="form-text"
    >{{ $help }}</div>
  @endisset
  @if ($errors)
    <ul
      id="{{ $id }}Error"
      class="invalid-feedback"
    >
      @foreach ((array) $errors as $message)
        <li>{{ $message }}</li>
      @endforeach
    </ul>
  @endif
  @isset($slot)
    {{ $slot }}
  @endisset
</div>
