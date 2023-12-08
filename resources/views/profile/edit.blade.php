<x-app-layout>
    <x-slot name="header">
        <h2 class="text-3xl font-bold text-gray-900">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    <div class="py-8 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="max-w-md mx-auto">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="max-w-md mx-auto">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="col-span-3">
            <div class="bg-white rounded-lg shadow-md p-6">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
