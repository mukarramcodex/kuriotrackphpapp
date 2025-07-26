{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

<x-sidebar
    variant="sidebar"
    collapsible="offcanvas"
    side="left">
    <ul>
        <li>
            <a href="" class="block px-4 py-2 hover:bg-gray-100 rounded">Dashbaord</a></li>
        <li>
            <a href="" class="block px-4 py-2 hover:bg-gray-100 rounded">Reports</a>
        </li>
        <li>
            <a href="" class="block px-4 py-2 hover:bg-gray-100 rounded">Parcels</a>
        </li>
        <li>
            <a href="" class="block px-4 py-2 hover:bg-gray-100 rounded">Settings</a>
        </li>
    </ul>
</x-sidebar>
