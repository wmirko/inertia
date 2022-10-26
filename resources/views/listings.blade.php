@extends('layout')

@section('listings')
@include('partials._hero')
@include('partials._search')

@foreach( $listings as $listing)
<div class="flex justify-center" style="max-width: 120mm; max-height: 70mm; margin: 20mm;">
  <div class="flex flex-col md:flex-row md:max-w-xl rounded-lg bg-white shadow-lg">
    <img class=" w-full h-96 md:h-auto object-cover md:w-48 rounded-t-lg md:rounded-none md:rounded-l-lg" src="https://mdbootstrap.com/wp-content/uploads/2020/06/vertical.jpg" alt="" />
    <div class="p-6 flex flex-col justify-start">
      <h5 class="text-gray-900 text-xl font-medium mb-2"><a href="{{$listing->getKey()}}">{{$listing['title']}}</a></h5>
      <p class="text-gray-700 text-base mb-4">
      {{$listing->description}}
      </p>
      <p class="text-gray-600 text-xs">{{$listing->timestamps}}</p>
    </div>
  </div>
</div>

@endforeach
@endsection