@props(['listing', 'url'])

<x-card>
    <img class=" w-full h-96 md:h-auto object-cover md:w-48 rounded-t-lg md:rounded-none md:rounded-l-lg" src="{{$url}}" alt="" />
    <div class="p-8 flex flex-col justify-start">
      <h5 class="text-gray-900 text-xl font-medium mb-2"><a href="{{$listing->getKey()}}">{{$listing->title}}</a></h5>
      <p class="text-gray-700 text-base mb-4">
      {{$listing->description}}
      </p>
      <p>
        <x-tags :tags="$listing->tags"></x-tags>
      </p>
      <p class="text-gray-600 text-xs">{{$listing['created_at']}}</p>
    </div>
</x-card>



