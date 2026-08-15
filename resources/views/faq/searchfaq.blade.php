<?php use Illuminate\Support\Facades\Storage; ?>

<style>
    .faq-display
    {
        display: flex;
        justify-content: space-between;
        padding-left: 30px;
        padding-right: 30px;
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Faq Search') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="get" action="{{ route('faqs.search') }}" class="flex gap-2 mb-4">
                        <input type="text" name="query" placeholder="Search faq..." value="{{ $query ?? '' }}"
                            class="border rounded p-2 flex-grow">
                        <button type="submit" class="py-2 rounded">Search</button>
                    </form>

                    @if($faqs->isEmpty() && $query)
                        <p>No faqs found for "{{ $query }}"</p>
                    @endif

                    <ul class="space-y-2">
                        @foreach($faqs as $faq)
                            <li class="border p-2 rounded hover:bg-gray-50 mt-1">
                                <a href="{{ route('faqs.show', $faq) }}" class="font-medium text-blue-600"> 
                                    <div class="faq-display">
                                        <div><strong>{{ $faq->title }}</strong> </div> <!-- Title -->
                                        <div>{!! $faq->content !!} </div> <!-- Content -->
                                        <div><small><strong>Category:</strong> {{ $faq->category->title }}</small></div> <!-- category -->
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