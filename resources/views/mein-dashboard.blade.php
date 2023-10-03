<x-app-layout>

    <!-- Den Header in mein-dashboard einfügen -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mein-Dashboard') }}
        </h2>
    </x-slot> 



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <div>
        
        @auth
            <p style="color: white";>Willkommen, {{ Auth::user()->name }}!</p>
        @else
            <p>Willkommen, Gast!</p>
        @endauth

    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>