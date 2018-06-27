@extends('layouts.app')


@section('content')


<div class="card">
 <div class="card-header bg-info text-center">
 <h3>CreateAlbum</h3>
 </div>
<div class="card-body">

<form action="{{route('albums.store')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
<div class="form-group">
 <label for="name">Album Name</label>
 <input type="text" name="name" class="form-control">
</div>

<div class="form-group">
 <label for="description">Album Description</label>
 <input type="text" name="description" class="form-control">
</div>

<div class="form-group">
 <label for="cover_image">Cover Image</label>
 <input type="file" name="cover_image" class="form-control">
</div>

<div class="form-group">
 <input type="submit" name="submit" value="Save Album" class="btn btn-primary">
</div>
</form>

</div>

</div>


@endsection