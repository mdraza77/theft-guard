<x-app-layout>
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
            <div class="flex pt-10 gap-10">
                <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Cameras</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700">{{ $totalCameras }}</p>
                    <a href={{ route('cameras.index') }}
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800">
                        View
                    </a>
                </div>
                <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Alerts</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700">{{ $totalAlerts }}</p>
                    <a href={{ route('alerts.index') }}
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800">
                        View
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
