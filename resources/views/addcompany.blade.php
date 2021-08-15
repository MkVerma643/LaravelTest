<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('addcompany') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="company_name" class="block mt-1 w-full" type="text" name="company_name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

                <!-- logo -->
                <div>
                    <x-label for="name" :value="__('Logo')" />

                    <x-input id="logo" class="block mt-1 w-full" type="file" name="logo" :value="old('logo')" required autofocus />
                </div>

                <!-- website -->
                <div>
                    <x-label for="name" :value="__('Website')" />

                    <x-input id="website" class="block mt-1 w-full" type="url" name="website" :value="old('website')" required autofocus />
                </div>


            <div class="flex items-center justify-end mt-4">


                <x-button class="ml-4">
                    {{ __('Add Company') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
