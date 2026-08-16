<style>
    .news-display
    {
        padding-left: 15px;
    }
    .news-display img
    {
        max-height: 200px;
        max-width: auto;
        border-radius: 5px;
    }
</style>

<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form method="get" action="{{ route('news.search') }}" class="flex gap-2 mb-4">
                        <input type="text" name="query" placeholder="Search news..." 
                               value="{{ request('query', '') }}"
                               class="border rounded p-2 flex-grow">
                        <button type="submit" class="py-2 rounded">Search</button>
                    </form>

                    @if($news->isEmpty() && request('query', ''))
                        <p>No news found for "{{ request('query', '') }}"</p>
                    @endif

                    <ul class="space-y-2">
                        @foreach($news as $news)
                            <li class="border p-2 rounded hover:bg-gray-50 mt-1">
                                <a href="{{ route('news.show', $news) }}" class="font-medium text-blue-600"> 
                                    <div class="news-display">
                                        <div><strong>{{ $news->title }}</strong> </div> <!-- Title -->
                                        <br>
                                        <div><img src="{{ $news->image }}" alt=""> </div> <!-- Image -->
                                        <div>{!! $news->content !!} </div> <!-- Content -->
                                        <br><br>
                                        <div><small>Published at: {{ $news->created_at }}</small> </div> <!-- publishing date -->
                                    </div>   
                                </a>
                                    
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>