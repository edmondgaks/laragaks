<x-layout>
    <x-card class="max-w-4xl mx-auto mt-10">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Tell us about yourself
            </h2>
        </header>
        <form method="POST" action="/storysave">
            @csrf
            <div class="mb-6">
                <label for="name" class="inline-block text-lg mb-2">
                    What position are you looking for?
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" value="{{old('name')}}" />
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">What are you passionate about?</label>
                <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />
                <!-- Error Example -->
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Describe your self according to your experience</label>
                <textarea type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}"></textarea>
                <!-- Error Example -->
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
    </x-card>
</x-layout>