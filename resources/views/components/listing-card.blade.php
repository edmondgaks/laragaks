@props(['Listing'])

<div class="bg-gray-50 border border-gray-200 rounded flex hover:drop-shadow-lg">
    <div class="flex">
        <img
            class="w-24"
            src="{{$listing->logo ? asset('storage/'. $listing->logo) : asset('/images/no-image.png')}}"
            alt="" 
        />
        <div class="p-8">
            <h3 class="text-xl font-bold mb-4">{{$listing->company}}</h3>
            <h3 class="text-xl">
                <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
            </h3>
            <x-listing-tags :tagsCsv="$listing->tags" />
            <div class="py-1">
                <i class="fa-solid fa-location-dot"></i>{{$listing->location}}
            </div>
        </div>
    </div>
</div>