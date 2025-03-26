<x-app-layout>
    <div class="flex flex-col h-screen w-screen p-4 overflow-auto">
        <div class="container mx-auto flex flex-col overflow-y-auto rounded-lg max-w-screen-xl">
            {{-- Account Information --}}
            <div class="flex flex-row items-center gap-4">
                <img src="{{ asset('img/dole_cavite_logo.png') }}" alt="DOLE Cavite Logo" class="h-16 w-auto">
                <img src="{{ asset('img/tupad_logo.png') }}" alt="Tupad Logo" class="h-16 w-auto">
                <div class="text-md font-bold">Tulong Panghanapbuhay sa Ating Disadvantaged (TUPAD) Workers</div>
            </div>
            <div class="divider"></div>

            {{-- User Information --}}
            <div class="space-y-2">
                <div class="text-xl font-medium text-gray-500 w-full">Beneficiary Information</div>

                <x-label-field label="Tupad ID Number">{{ $user->tupad_id_number }}</x-label-field>

                <div class="grid grid-cols-2 gap-2">
                    <x-label-field label="First Name">{{ $user->first_name }}</x-label-field>
                    <x-label-field label="Middle Name">{{ $user->middle_name }}</x-label-field>
                    <x-label-field label="Last Name">{{ $user->last_name }}</x-label-field>
                    <x-label-field label="Extension Name">{{ $user->extension_name }}</x-label-field>
                </div>
            </div>
            <div class="divider"></div>
            
            {{-- Address --}}
            <div class="space-y-2">
                <div class="text-xl font-medium text-gray-500 w-full">Address</div>
                <x-label-field label="Barangay">{{ $user->barangay }}</x-label-field>
                <x-label-field label="City / Municipality">{{ $user->city_municipality }}</x-label-field>
                <x-label-field label="Province">{{ $user->province }}</x-label-field>
            </div>
        </div>
    </div>
</x-app-layout>