<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('LAB 3 Main Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
               
            <a href="/offer">
                <div class="p-6 text-gray-900">
                    {{ __("Offer") }}
                </div>
            </a>

            <a href="/contact">
                <div class="p-6 text-gray-900">
                    {{ __("Contact") }}
                </div>
            </a>

            <a href="/order">
                <div class="p-6 text-gray-900">
                    {{ __("Order") }}
                </div>
            </a>
            </div>
        </div>
    </div>
</x-app-layout>
