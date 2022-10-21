@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp

<ul class="flex py-1">
    @foreach ($tags as $tag)
    <li class="bg-black text-white rounded-xl py-1 px-2 text-center mr-2 text-xs">
        <a href="/?tag={{$tag}}" class="text-center">{{$tag}}</a>
    </li>
    @endforeach
    
</ul>