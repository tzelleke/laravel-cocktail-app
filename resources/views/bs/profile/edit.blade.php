<x-bs.layout>
  <x-slot name="header">
    <x-bs.header-title>
      {{ __('Profile') }}
    </x-bs.header-title>
  </x-slot>

  <div class="container py-4 px-3 mx-auto vstack gap-4">
    @include('bs.profile.partials.update-profile-information-form')
    <x-bs.section>
      @include('bs.profile.partials.update-password-form')
    </x-bs.section>
    <x-bs.section>
      @include('bs.profile.partials.delete-user-form')
    </x-bs.section>
  </div>
</x-bs.layout>
