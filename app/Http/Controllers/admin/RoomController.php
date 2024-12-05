<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\imageUpload;
use App\Models\ActuRoom;
use App\Models\Room;
use App\Models\Room_gallery;




class RoomController extends Controller
{
    public function index()
    {

        $data = Room::orderBy('desk', 'asc')->get();
        return view('admin.room.index', compact('data'));
    }

    public function ajaxdesk(Request $request)
    {
        $all = $request->except('_token');
        $update = Room::where('id', '=', $all['id'])->update($all);
    }

    public function create()
    {
        return view('admin.room.create');
    }

    public function store(Request $request)
    {
        $all = $request->except('_token');
        // $all['image'] = imageUpload::singleUpload(rand(1, 9000), "room", $request->file('image'));

        $all['featured_image'] = imageUpload::singleUpload(rand(1, 9000), "room", $request->file('featured_image'));
        // Initialize an array to hold uploaded image paths
        $imagePaths = [];
        // Check if multiple images are uploaded
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Use your imageUpload class to handle the upload
                $imagePaths[] = imageUpload::singleUpload(rand(1, 9000), "room", $image);
            }
        }
        // Store the image paths as JSON in the database
        $all['images'] = json_encode($imagePaths);
        $create = ActuRoom::create($all);
        if ($create) {
            return redirect()->route('admin.room.index')->with('status', 'Başarıyla Eklendi');
        } else {
            return redirect()->route('admin.room.index')->with('status', 'Beklenmedik Bir Hata Oluştu!');
        }
    }
    // public function store(Request $request)
    // {
    //     $all = $request->except('_token');

    //     // Initialize an array to hold uploaded image paths
    //     $imagePaths = [];

    //     // Check if multiple images are uploaded
    //     if ($request->hasFile('images')) {
    //         foreach ($request->file('images') as $image) {
    //             // Use your imageUpload class to handle the upload
    //             $imagePaths[] = imageUpload::singleUpload(rand(1, 9000), "room", $image);
    //         }
    //     }

    //     // Store the image paths as JSON in the database
    //     $all['images'] = json_encode($imagePaths);

    //     // Create the record in the database
    //     $create = ActuRoom::create($all);

    //     if ($create) {
    //         return redirect()->route('admin.room.index')->with('status', 'Başarıyla Eklendi');
    //     } else {
    //         return redirect()->route('admin.room.index')->with('status', 'Beklenmedik Bir Hata Oluştu!');
    //     }
    // }

    public function edit($id)
    {
        $data = Room::find($id);
        return view('admin.room.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $all = $request->except('_token');
        $image = Room::find($id);
        if ($request->hasFile('image')) {
            $old_image = $image->image;
            $old_big_image = \App\Helper\mHelper::largeImage($image['image']);
            if (file_exists($old_image)) {
                unlink($old_image);
            }
            if (file_exists($old_big_image)) {
                unlink($old_big_image);
            }

            $all['image'] = imageUpload::singleUpload(rand(1, 9000), 'room', $request->file('image'));
        } else {
            unset($all['image_one']);
        }


        $update = Room::find($id)->update($all);
        if ($update) {
            return redirect()->route('admin.room.index')->with('status', 'Başarıyla Güncellendi');
        } else {
            return redirect()->route('admin.room.index')->with('status', 'Beklenmedik Bir Hata Oluştu!');
        }
    }

    public function delete($id)
    {
        $image = Room::find($id);
        $room_gallery = Room_gallery::where('room_id', $id)->get();
        foreach ($room_gallery as $gallery) {
            $old_img = $gallery->image;
            unlink($old_img);
        }
        $old_image = $image->image;
        $old_big_image = \App\Helper\mHelper::largeImage($image['image']);
        unlink($old_image);
        unlink($old_big_image);

        $delete = Room::find($id)->delete();
        if ($delete) {
            return redirect()->route('admin.room.index')->with('status', 'Başarıyla Silindi');
        } else {
            return redirect()->route('admin.room.index')->with('status', 'Beklenmedik Bir Hata Oluştu!');
        }
    }
}
