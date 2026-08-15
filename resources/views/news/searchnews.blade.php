<style>
    .news-display-search
    {
        padding-left: 15px;
    }
    .news-display-search img
    {
        max-height: 100px;
        max-width: auto;
        border-radius: 5px;
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News Search') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="get" action="{{ route('news.search') }}" class="flex gap-2 mb-4">
                        <input type="text" name="query" placeholder="Search news..." value="{{ $query ?? '' }}"
                            class="border rounded p-2 flex-grow">
                        <button type="submit" class="py-2 rounded">Search</button>
                    </form>

                    @if($news->isEmpty() && $query)
                        <p>No news found for "{{ $query }}"</p>
                    @endif

                    <ul class="space-y-2">
                        @foreach($news as $news)
                            <li class="border p-2 rounded hover:bg-gray-50 mt-1">
                                <a href="{{ route('news.show', $news) }}" class="font-medium text-blue-600"> 
                                    <div class="news-display-search">
                                        <div><strong>{{ $news->title }}</strong> </div> <!-- Title -->
                                        <div><img src="{{ Storage::url($news->image) }}" alt=""> </div> <!-- Image -->              <!-- File URLs: https://laravel.com/docs/13.x/filesystem#main-content -->
                                        <div>{!! $news->content !!} </div> <!-- Content -->
                                        <br>
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

    <div class="py-6">
        
    </div>
</x-app-layout>