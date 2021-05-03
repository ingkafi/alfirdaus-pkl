@extends('layouts.app')

@section('content')

    <div>
        <div>
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @include('profile.update-profile-information-form')
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div>
                    @include('profile.update-password-form')
                </div>
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div>
                    @include('profile.two-factor-authentication-form')
                </div>

                <x-jet-section-border />
            @endif

            <div>
                @include('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-jet-section-border />

                <div>
                    @include('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
@endsection
