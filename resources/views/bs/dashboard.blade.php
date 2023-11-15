<x-bs.layout>
  <x-slot name="header">
    <x-bs.header-title>
      {{ __('Dashboard') }}
    </x-bs.header-title>
  </x-slot>

  <div class="container py-4 px-3 mx-auto">
    <x-bs.card class="border-0">
      {{ __("You're logged in!") }}
    </x-bs.card>
  </div>
</x-bs.layout>
