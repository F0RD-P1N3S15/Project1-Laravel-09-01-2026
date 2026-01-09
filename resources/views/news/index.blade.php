<style>
    .character-section 
    {
    padding-top: 40px;
    padding-bottom: 20px;
    padding-right: 40px;
    width: 90%;
    }

    .character-row 
    {
    background: lightsalmon;
    border-radius: 10px;
    border-left: 4px solid darkorange;
    height: auto;
    padding-left: 20px;
    margin: 10px;
    margin-bottom: 15px;
    margin-right: 20px;
    transition: all 0.3s ease;
    box-shadow: 0 2px 6px rgba(45, 31, 92, 0.1);
    }

    .character-row img
    {
        max-width: 250px;
        max-height: 250px;
        padding-left: 20px;
    }

    .character-row p
    {
        padding: 20px;
        width: 90%;
    }
    
    .character-row h1
    {
        padding-top: 20px;
        font-size: 24px;
        font-weight: 600;
    }
</style>

<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    @foreach($news as $news)
                    <div class="character-section">
                        <div class="character-row">
                            <h1>{{ $news->title }}</h1>                  <!-- Title -->
                            <img src="{{ $news->image }}" alt="">                <!-- Image -->
                            <p>{!! $news->content !!}</p>                        <!-- Content -->
                            <small>Published at: {{ $news->created_at }}</small> <!-- Published Date -->
                        </div>
                        
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

