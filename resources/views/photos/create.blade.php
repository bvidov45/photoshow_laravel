@extends('layouts.app')


@section('content')


<div class="card">
 <div class="card-header bg-info text-center">
 <h3>Upload Photo</h3>
 </div>
<div class="card-body">

<form action="{{route('photos.store')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
<div class="form-group">
 <label for="title">Photo Title</label>
 <input type="text" name="title" class="form-control">
</div>

<div class="form-group">
 <label for="description">Photo Description</label>
 <input type="text" name="description" class="form-control">
</div>

<input type="hidden" name="album_id" value="{{$album_id}}">

<div class="form-group">
 <label for="cover_image">Photo</label>
 <input type="file" name="photo" class="form-control">
</div>

<div class="form-group">
 <input type="submit" name="submit" value="Save Photo" class="btn btn-primary">
</div>
</form>

</div>

</div>


@endsection