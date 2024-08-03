<section>
   
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="update_password_current_password" class="form-label">{{ __('Current Password') }}</label>
                                <input id="update_password_current_password" name="current_password" type="password" class="form-control @error('current_password', 'updatePassword') is-invalid @enderror" autocomplete="current-password" />
                                @error('current_password', 'updatePassword')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="update_password_password" class="form-label">{{ __('New Password') }}</label>
                                <input id="update_password_password" name="password" type="password" class="form-control @error('password', 'updatePassword') is-invalid @enderror" autocomplete="new-password" />
                                @error('password', 'updatePassword')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="update_password_password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                                <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control @error('password_confirmation', 'updatePassword') is-invalid @enderror" autocomplete="new-password" />
                                @error('password_confirmation', 'updatePassword')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex align-items-center gap-4 mt-4">
                                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>

                                @if (session('status') === 'password-updated')
                                    <p
                                        x-data="{ show: true }"
                                        x-show="show"
                                        x-transition
                                        x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-success"
                                    >{{ __('Saved.') }}</p>
                                @endif
                            </div>
                        </form>
       
</section>
