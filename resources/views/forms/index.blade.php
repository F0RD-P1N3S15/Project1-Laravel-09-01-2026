<style>
    .form-layout input, .form-layout textarea
    {
        border: 1px gray solid;
        border-radius: 5px;
        width: 100%;
    }
    .form-layout textarea
    {
        height: 200px;
    }
    .form-layout button
    {
        background-color: gray;
        color: white;
        border-radius: 5px;
        padding: 10px;
        width: 100px;
    }
    .news-display
    {
        padding-left: 15px;
    }
</style>

<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <form method="POST" action="{{ route('forms.index') }}" class="form-layout">
                        @csrf <!--  csrf protection -->

                        <input name="title" placeholder="Title" required>
                        <br><br>
                        <textarea name="content" placeholder="Your message" required></textarea>
                        <br><br>
                        <input name="email" type="email" placeholder="Your email" required>
                        <br><br>
                        <button type="submit">Send</button>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <ul class="space-y-2">
                        @foreach($forms as $form)
                        @if(auth()->check() && $form->email == Auth::user()->email)
                            <li class="border p-2 rounded hover:bg-gray-50 mt-1">
                                    <div class="news-display">
                                        <div><strong>{{ $form->title }}</strong> </div> <!-- Title -->
                                        <div> <i>Email:</i> {{ $form->email }} </div> <!-- Email -->
                                        <br>
                                        <div>{!! $form->content !!} </div> <!-- Content -->

                                        @if($form->admin_answer)
                                            <br><br>
                                            <div><strong>Admin answer:</strong> {{ $form->admin_answer }}</div> <!-- admin answer -->
                                        @endif
                                    </div> 
                            </li>
                        @endif
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>