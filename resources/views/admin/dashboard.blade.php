<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('IT Staff Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-center">
                    <div class="text-gray-500 text-sm uppercase tracking-wide">Total Students</div>
                    <div class="text-3xl font-bold text-blue-600">{{ $stats['total_students'] }}</div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-center">
                    <div class="text-gray-500 text-sm uppercase tracking-wide">Total Courses</div>
                    <div class="text-3xl font-bold text-green-600">{{ $stats['total_courses'] }}</div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-center">
                    <div class="text-gray-500 text-sm uppercase tracking-wide">Total Lecturers</div>
                    <div class="text-3xl font-bold text-purple-600">{{ $stats['total_lecturers'] }}</div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium mb-4">Quick Management</h3>
                    <div class="flex space-x-4">
                        <a href="{{ route('admin.courses.index') }}" class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">
                            Manage Courses
                        </a>
                        <a href="{{ route('admin.registrations.index') }}" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                            Manage Registrations
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>