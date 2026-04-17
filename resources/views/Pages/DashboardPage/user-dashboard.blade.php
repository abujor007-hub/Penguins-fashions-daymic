<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">Welcome User!</h3>
                    <p>You are logged in as a regular user.</p>
                    
                    <div class="mt-4">
                        <h4 class="font-semibold">User Features:</h4>
                        <ul class="list-disc ml-5 mt-2">
                            <li>View profile</li>
                            <li>Edit settings</li>
                            <li>View content</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>