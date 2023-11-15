<x-bs.section>
  <div style="max-width: 480px;">
    <header>
      <h2 class="h5">
        {{ __('Profile Information') }}
      </h2>

      <p class="text-muted">
        {{ __("Update your account's profile information and email address.") }}
      </p>
    </header>

    <form
      id="send-verification"
      method="post"
      action="{{ route('verification.send') }}"
    >
      @csrf
    </form>

    <form
      method="post"
      action="{{ route('bs.profile.update') }}"
    >
      @csrf
      @method('patch')

      <x-bs.form.input-text
        id="name"
        :label="__('Name')"
        :value="old('name', $user->name)"
        :errors="$errors->get('name')"
        required
        autofocus
        autocomplete="name"
      />

      <x-bs.form.input-text
        id="email"
        :label="__('Email')"
        :value="old('email', $user->email)"
        :errors="$errors->get('email')"
        :help="__('We will never share your email with anyone.')"
        required
        autofocus
        autocomplete="username"
      >
        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
          <p class="mt-2 mb-0">
            {{ __('Your email address is unverified.') }}

            <button
              form="send-verification"
              class="btn btn-link link-secondary p-0 m-0 align-baseline"
            >
              {{ __('Click here to re-send the verification email.') }}
            </button>
          </p>

          @if (session('status') === 'verification-link-sent')
            <p class="text-success fw-medium mt-1 mb-0">
              {{ __('A new verification link has been sent to your email address.') }}
            </p>
          @endif
        @endif
      </x-bs.form.input-text>

      <div class="d-flex align-items-center gap-3">
        <button
          type="submit"
          class="btn btn-primary"
        >{{ __('Save') }}</button>

        @if (session('status') === 'profile-updated')
          <div
            x-data="{ show: true }"
            x-show="show"
            x-transition
            x-init="setTimeout(() => show = false, 2000)"
            class=""
          >{{ __('Saved.') }}</div>
        @endif
      </div>
    </form>
  </div>
</x-bs.section>
