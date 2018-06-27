@extends('layouts.app')


@section('content')
<hr>


<div class="row col-md-12">

<div class="col-md-4 text-center">
<h3>{{$photo->title}}</h3>
<img class="img-thumbnail" style="max-height:350px;"  src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}">
<p>{{$photo->description}}</p>
<div>
 
<form action="{{route('photos.destroy',['id' => $photo->id])}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{ method_field('DELETE') }}

<div class="form-group">
 <input type="submit" name="submit" value="Delete Photo" class="btn btn-danger">
</div>
</form>


</div>
</div>

</div>


@endsection