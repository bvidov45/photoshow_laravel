<?php

namespace App\Http\Controllers;
use App\Photo;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    public function create($album_id){
        return view('photos.create')->with('album_id', $album_id);
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'photo' => 'image|max:1999'
        ]);
 
       // get filename with extension
       $filenameWithExt = $request->file('photo')->getClientOriginalName();
       // get just the filename
       $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
       //get just extension
       $extension = $request->file('photo')->getClientOriginalExtension();
 
      $filenameToStore = $filename.'_'.time().'.'.$extension;
 
      //upload image
      $path = $request->file('photo')->storeAs('public/photos/'.$request->input('album_id'), $filenameToStore);
      
      $photo = new Photo;
      $photo->album_id = $request->input('album_id');
      $photo->title = $request->input('title');
      $photo->description = $request->input('description');
      $photo->size = $request->file('photo')->getClientSize();
      $photo->photo = $filenameToStore;
      $photo->save();
      return redirect('/albums/'.$request->input('album_id'))->with('success', 'Photo Created');
 
     }

     public function show($id){
     $photo = Photo::find($id);
     return view('photos.show')->with('photo', $photo);
     }

     public function destroy($id){
         $photo = Photo::find($id);
         $photo->delete();
         return redirect()->route('albums')->with('success', 'Successfully Deleted');

     }



}
