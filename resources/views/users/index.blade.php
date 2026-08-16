<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form method="get" action="{{ route('users.search') }}" class="flex gap-2 mb-4">
                        <input type="text" name="query" placeholder="Search username..." 
                               value="{{ request('query', '') }}"
                               class="border rounded p-2 flex-grow">
                        <button type="submit" class="py-2 rounded">Search</button>
                    </form>

                    @if($users->isEmpty() && request('query', ''))
                        <p>No users found for "{{ request('query', '') }}"</p>
                    @endif

                    <ul class="space-y-2">
                        @foreach($users as $user)
                            <li class="border p-2 rounded hover:bg-gray-50 mt-1">
                                <a href="{{ route('users.show', $user) }}" class="font-medium text-blue-600">{{ $user->name }}</a>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>