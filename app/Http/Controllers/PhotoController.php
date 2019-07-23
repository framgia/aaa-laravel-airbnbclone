<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Photo;

class PhotoController extends Controller
{
    public function store(Request $request, Room $room)
    {   
        if ($request->hasFile('photos')) {
            $files = $request->file('photos');

            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();

                if ($photo = $room->photos()->create(['image' => $filename])) {
                    $photo->resizeAndSave($file);

                    toastr()->success("Uploaded image(s) successfully.");
                } else {
                    toastr()->failed("Something went wrong, try again.");
                } 
            }
        }

        return back();
    }

    public function destroy(Room $room, Photo $photo)
    {
        //
    }
}
