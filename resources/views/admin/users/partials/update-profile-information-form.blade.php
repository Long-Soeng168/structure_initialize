<section class="">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-white">
            {{ __('messages.profileInformation') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-white">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ url('admin/users/'.$user->id) }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="grid grid-cols-1 gap-5 lg:grid-cols-2">
            <!-- Name Address -->
            <div>
                <x-input-label for="name" :value="__('messages.name')" />
                <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('messages.email')" />
                <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email', $user->email)" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div>

        <div class="grid grid-cols-1 gap-5 lg:grid-cols-3">
            <div>
                <x-input-label for="phone" :value="__('messages.phone')" />
                <x-text-input id="phone" class="block w-full mt-1" type="text" name="phone" :value="old('phone', $user->phone)"  autofocus placeholder="Phone Number" />
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>
            <div class="relative z-0 w-full group">
                <x-input-label for="genders" :value="__('messages.gender')" />
                <x-select-option id="genders" name='gender'>
                    <option>{{__('messages.male')}}</option>
                    <option>{{__('messages.female')}}</option>
                </x-select-option>
            </div>
            <div>
                <x-input-label for="date_of_birth" :value="__('messages.dateOfBirth')" />
                <x-text-input id="date_of_birth" class="block w-full mt-1" type="date" name="date_of_birth" :value="old('date_of_birth', $user->date_of_birth)" autofocus />
                <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
            </div>
        </div>

        <div class="mb-6">
            <div class="flex items-center space-4">
                <div class="max-w-40">
                    <img id="selected-image" src="#" alt="Selected Image" class="hidden max-w-full pr-4 max-h-40" />
                </div>
                <div class="flex-1">
                    <x-input-label for="types" :value="__('messages.uploadImage')" />
                    <x-file-input id="dropzone-file" name="image" accept="image/png, image/jpeg, image/gif" onchange="displaySelectedImage(event)" />
                </div>
            </div>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
            {{-- Started At --}}
            <div>
                <x-input-label for="started_at" :value="__('messages.startedAt')" />

                <x-text-input id="started_at" class="block w-full mt-1" type="date" name="started_at" value="{{ $user->started_at }}" />

                <x-input-error :messages="$errors->get('started_at')" class="mt-2" />
            </div>

            <!-- Expired At -->
            <div>
                <x-input-label for="expired_at" :value="__('messages.expiredAt')" />

                <x-text-input id="expired_at" value="{{ $user->expired_at }}" class="block w-full mt-1" type="date" name="expired_at"/>

                <x-input-error :messages="$errors->get('expired_at')" class="mt-2" />
            </div>
        </div>

        <div>
            <x-input-label :value="__('User Roles')" />
            <div class="grid grid-cols-4 gap-4">
                @foreach ($roles as $role)
                <div class="flex items-center">
                    <input
                        type="checkbox"
                        id="permission_{{ $role->id }}"
                        name="roles[]"
                        value="{{ $role->name }}"
                        class="mr-2"
                        {{ in_array($role->id, $userRoles) ? 'checked' : '' }}
                    >
                    <label for="permission_{{ $role->id }}">{{ $role->name }}</label>
                </div>
                @endforeach
            </div>
            <x-input-error class="mt-2" :messages="$errors->get('roles')" />
        </div>

        {{-- <div>
            <x-input-label for="name" :value="__('messages.name')" />
            <x-text-input id="name" name="name" type="text" class="block w-full mt-1" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('messages.email')" />
            <x-text-input id="email" name="email" type="email" class="block w-full mt-1" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="mt-2 text-sm text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 text-sm font-medium text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div> --}}

        <div class="flex items-center gap-4">
            <button class = 'flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg cursor-pointer bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800'>
                {{__('messages.submit')}}
            </button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-green-700"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
