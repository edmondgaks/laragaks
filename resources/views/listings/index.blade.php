<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <x-layout>
        @include('partials._hero')
        @include('partials._search');
        <div class="grid gap-5 grid-cols-3 mx-4 md:grid-cols-2 lg:grid-cols-3 sm:grid-cols-1">
            @unless(count($listings) == 0)
            @foreach ($listings as $listing)
                <x-listing-card :listing="$listing" />
            @endforeach
            @else 
            <p>No listings found</p>
            @endunless
        </div>
        <div class="mt-6 p-4">{{$listings->links()}}</div>
    </x-layout>
    
</body>
</html>