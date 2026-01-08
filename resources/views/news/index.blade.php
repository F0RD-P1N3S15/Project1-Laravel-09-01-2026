<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>News</title>
</head>
<body>

<h1>News</h1>

</body>
</html>

<x-app-layout>
    <x-slot name="header">
        <nav class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <b> - </b>
            <a href="{{ route('dashboard') }}">Dashboard</a>
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
            
                    <h1>News</h1>

                    <ul>
                        @foreach($news as $news)
                            <li>
                                <strong>{{ $news->title }}</strong>                  <!-- Title -->
                                <p>{!! $news->content !!}</p>                        <!-- Content -->
                                <img src="{{ $news->image }}" alt="">                <!-- Image -->
                                <small>Published at: {{ $news->created_at }}</small> <!-- Published Date -->
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

