@extends('layouts.app')


@section('content')

<h3>Albums</h3><hr>


<div class="row col-md-12">
@foreach($albums as $album)
<div class="col-md-4 text-center">
<a href="{{route('albums.show', ['id'=> $album->id])}}">
<img class="img-thumbnail" style="max-height:350px;"  src="storage/album_covers/{{$album->cover_image}}">
</a>
<div>
<h3>{{$album->name}}</h3>
</div>

</div>
@endforeach
</div>


@endsection