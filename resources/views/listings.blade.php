
<h1>{{$heading}}</h1>

@foreach( $listings as $listing)

<div>
<label for="label-{{$listing->getId()}}"> 
    Label:
    <input type="text" disabled id="label-{{$listing->getId()}}" value="{{$listing->getLabel()}}">
</label>

<label for="desc-{{$listing->getId()}}" >
    Description:
    <input type="text" disabled id="desc-{{$listing->getId()}}" value="{{$listing->getDescription()}}">
</label>
</div>

@endforeach;