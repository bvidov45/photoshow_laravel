@extends('layouts.app')


@section('content')

<h3>{{$album->name}}</h3><hr>
<a href="{{route('albums')}}" class="btn btn-dark btn-sm">Go Back</a>
<a href="{{route('photos.create', ['id' => $album->id])}}" class="btn btn-info btn-sm">Upload Photo To Album</a>

<div class="row col-md-12">
@foreach($album->photos as $photo)
<div class="col-md-4 text-center">
<a href="{{route('photos.show', ['id'=> $photo->id])}}">
<img class="img-thumbnail" style="max-height:350px;"  src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}">
</a>
<div>
<h3>{{$photo->title}}</h3>
</div>

</div>
@endforeach
</div>


@endsection