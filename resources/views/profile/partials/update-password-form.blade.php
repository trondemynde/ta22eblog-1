<section>
    <div class="card bg-base-100 shadow-xl border border-gray-200 p-6">
        <header>
            <h2 class="text-2xl font-bold">
                {{ __('Update Password') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Ensure your account is using a long, random password to stay secure.') }}
            </p>
        </header>

        <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-4">
            @csrf
            @method('put')

            <!-- Current Password -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">{{ __('Current Password') }}</span>
                </label>
                <input id="update_password_current_password"
                       name="current_password"
                       type="password"
                       class="input input-bordered w-1/2 @error('current_password', 'updatePassword') input-error @enderror"
                       autocomplete="current-password" />
                @error('current_password', 'updatePassword')
                    <label class="label">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </label>
                @enderror
            </div>

            <!-- New Password -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">{{ __('New Password') }}</span>
                </label>
                <input id="update_password_password"
                       name="password"
                       type="password"
                       class="input input-bordered w-1/2 @error('password', 'updatePassword') input-error @enderror"
                       autocomplete="new-password" />
                @error('password', 'updatePassword')
                    <label class="label">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </label>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">{{ __('Confirm Password') }}</span>
                </label>
                <input id="update_password_password_confirmation"
                       name="password_confirmation"
                       type="password"
                       class="input input-bordered w-1/2 @error('password_confirmation', 'updatePassword') input-error @enderror"
                       autocomplete="new-password" />
                @error('password_confirmation', 'updatePassword')
                    <label class="label">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </label>
                @enderror
            </div>

            <div class="flex items-center gap-4 mt-6">
                <button type="submit" class="btn btn-primary">
                    {{ __('Save') }}
                </button>

                @if (session('status') === 'password-updated')
                    <p x-data="{ show: true }"
                       x-show="show"
                       x-transition
                       x-init="setTimeout(() => show = false, 2000)"
                       class="text-sm text-gray-600">
                        {{ __('Saved.') }}
                    </p>
                @endif
            </div>
        </form>
    </div>
</section>
