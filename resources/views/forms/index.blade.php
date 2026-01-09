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
                    
                    <form method="POST" action="{{ route('forms.index') }}">
                        @csrf

                        <input name="title" placeholder="Title" required>
                        <textarea name="content" placeholder="Your message" required></textarea>
                        <input name="email" type="email" placeholder="Your email" required>

                        <button type="submit">Send</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>