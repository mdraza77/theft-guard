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
            <div class="grid gap-6 pt-10 sm:grid-cols-2 xl:grid-cols-3">
                <div
                    class="p-6 bg-white border border-gray-200 rounded-3xl shadow-sm hover:shadow-lg transition-shadow duration-200">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h5 class="text-xl font-semibold text-gray-900">Cameras</h5>
                            <p class="text-sm text-gray-500">Total active sources</p>
                        </div>
                        <div
                            class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-50 text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 10l4.553-2.276A2 2 0 0122 9.618v4.764a2 2 0 01-2.447 1.894L15 14m0-4v4m0-4l-4.553-2.276A2 2 0 007 9.618v4.764a2 2 0 002.447 1.894L11 14m4 0H11" />
                            </svg>
                        </div>
                    </div>
                    <p class="text-4xl font-bold text-gray-900">{{ $totalCameras }}</p>
                    <a href={{ route('cameras.index') }}
                        class="mt-6 inline-flex items-center rounded-full bg-blue-600 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-700">View
                        cameras</a>
                </div>

                <div
                    class="p-6 bg-white border border-gray-200 rounded-3xl shadow-sm hover:shadow-lg transition-shadow duration-200">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h5 class="text-xl font-semibold text-gray-900">Alerts</h5>
                            <p class="text-sm text-gray-500">Events detected by the system</p>
                        </div>
                        <div
                            class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-rose-50 text-rose-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4m0 4h.01M4.93 4.93l14.14 14.14M19.07 4.93L4.93 19.07" />
                            </svg>
                        </div>
                    </div>
                    <p class="text-4xl font-bold text-gray-900">{{ $totalAlerts }}</p>
                    <a href={{ route('alerts.index') }}
                        class="mt-6 inline-flex items-center rounded-full bg-blue-600 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-700">View
                        alerts</a>
                </div>

                <div
                    class="p-6 bg-white border border-gray-200 rounded-3xl shadow-sm hover:shadow-lg transition-shadow duration-200">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h5 class="text-xl font-semibold text-gray-900">Protected Objects</h5>
                            <p class="text-sm text-gray-500">Monitored assets and zones</p>
                        </div>
                        <div
                            class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                    </div>
                    <p class="text-4xl font-bold text-gray-900">{{ $totalProtectedObjects }}</p>
                    <a href={{ route('protected-objects.index') }}
                        class="mt-6 inline-flex items-center rounded-full bg-blue-600 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-700">View
                        objects</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
