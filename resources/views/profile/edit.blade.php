<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-800">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto space-y-6">
            <div class="p-6 bg-white rounded-lg shadow-lg">
                <div class="max-w-md mx-auto">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-6 bg-white rounded-lg shadow-lg">
                <div class="max-w-md mx-auto">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-6 bg-white rounded-lg shadow-lg">
                <div class="max-w-md mx-auto">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
