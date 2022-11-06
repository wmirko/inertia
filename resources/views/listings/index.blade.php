<x-layout>
  @foreach( $listings as $listing)
  <div class="flex" style="max-height: 70mm; margin: 10mm;">
    <x-listing :listing="$listing" :url="'https://mdbootstrap.com/wp-content/uploads/2020/06/vertical.jpg'"></x-listing>
  </div>
  @endforeach
</x-layout>