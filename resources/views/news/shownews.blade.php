<?php use Illuminate\Support\Facades\Storage; ?>

<style>
    .news-display-show
    {
        padding-left: 15px;
    }
    .news-display-show img
    {
        max-height: 400px;
        max-width: auto;
        border-radius: 5px;
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $news->title }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="news-display-show">
                        <div><strong>{{ $news->title }}</strong> </div> <!-- Title -->
                        <br>
                        <div><img src="{{ Storage::url($news->image) }}" alt=""> </div> <!-- Image -->              <!-- File URLs: https://laravel.com/docs/13.x/filesystem#main-content -->
                        <div>{!! $news->content !!} </div> <!-- Content -->
                        <br><br>
                        <div><small>Published at: {{ $news->created_at }}</small> </div> <!-- publishing date -->
                   </div>  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>