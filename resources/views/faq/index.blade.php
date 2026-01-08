<x-app-layout>
    <x-slot name="header">
        <nav class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a href="">Dashboard</a>
            <b> - </b>
            <a href="{{ route('faq.index') }}">FAQ</a>
            <b> - </b>
            <a href="{{ route('news.index') }}">News</a>
        </nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
            
                    <h1>FaQ</h1>

                    <ul>
                        @foreach($faqs as $faq)
                            <li>
                                <strong>{{ $faq->title }}</strong> <!-- Question -->
                                <p>{!! $faq->content !!}</p>       <!-- Answer -->
                                <small>Category: {{ $faq->category?->title ?? 'Uncategorized' }}</small>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
