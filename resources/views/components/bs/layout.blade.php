<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1"
  >
  <meta
    name="csrf-token"
    content="{{ csrf_token() }}"
  >

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
  <div class="min-vh-100 bg-body-secondary">
    @include('bs.navbar')

    <!-- Page Heading -->
    @if (isset($header))
      <header class="bg-white shadow-sm">
        <div class="container py-3">
          {{ $header }}
        </div>
      </header>
    @endif

    <!-- Page Content -->
    <main>
      {{ $slot }}
    </main>
  </div>
</body>

</html>
