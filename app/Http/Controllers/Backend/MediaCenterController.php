<?php

namespace App\Http\Controllers\Backend;

use App\Models\MediaCenter;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class MediaCenterController extends Controller
{
    public function view(){
        return view('backend.pages.mediacenter.create');
    }

    public function show(){
        $mediacenter=MediaCenter::all();
        return view('backend.pages.mediacenter.list',compact('mediacenter'));
    }

public function uploadImage(Request $request)
{
    try {
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        // Process the file upload
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $filePath = 'uploads/mediacenter/';

            // Move the file to the desired path
 $file->move( ($filePath), $filename);

            // Respond with the image URL for TinyMCE
            return response()->json([
                'location' => asset($filePath . $filename), // The full image URL
            ]);
        }

        return response()->json(['error' => 'No file uploaded.'], 422);
    } catch (\Exception $e) {
        // Log the error for debugging
        \Log::error('Image upload error: ' . $e->getMessage());
        return response()->json(['error' => 'Image upload failed.'], 500);
    }
}
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|mimes:jpg,jpeg,png',
            'video_url' => 'required|url', 
            'meta_title' => 'required|string',
            'meta_keyword' => 'required|string',
            'meta_description' => 'required|string',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $slug = Str::slug($request->input('title'));
        // $cleanDescription = strip_tags($request->input('description'));
        // $cleanmetaDescription = strip_tags($request->input('meta_description'));
        $mediacenter = MediaCenter::create([
            'title' => $request->input('title'),
            'slug' => $slug,
            'description' => $request->input('description'),
            'video_url' => $request->input('video_url'),
            'meta_title' => $request->input('meta_title'),
            'meta_keyword' => $request->input('meta_keyword'),
            'meta_description' => $request->input('meta_description'),
        ]);
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
    
            $file->move('uploads/mediacenter/', $filename);
    
            $mediacenter->image = $filename;
            $mediacenter->save();
        }
    
        return redirect()->route('mediacenter-list')->with('message', 'Data Added Successfully');
    }

    public function delete(Request $request,$id)
    {
        $del= $request->id;
        $mediacenter = MediaCenter::find($del);
        $path='uploads/mediacenter/'.$mediacenter->image;
        if(File::exists($path)){
          File::delete($path);
        }
        $mediacenter->delete();
        return redirect()->back()->with('warning', 'Deleted  Successfully');
    }


    public function edit($id){
        $mediacenter=MediaCenter::find($id);
        return view('backend.pages.mediacenter.edit',compact('mediacenter'));

    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|mimes:jpg,jpeg,png',
            'video_url' => 'required|url', 
            'meta_title' => 'required|string',
            'meta_keyword' => 'required|string',
            'meta_description' => 'required|string',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $mediacenter = MediaCenter::findOrFail($id);
    
        $slug = Str::slug($request->input('title'));
        // $cleanDescription = strip_tags($request->input('description'));
        // $cleanmetaDescription = strip_tags($request->input('meta_description'));
    
        $mediacenter->title = $request->input('title');
        $mediacenter->slug = $slug;
        $mediacenter->description =  $request->input('description');
        $mediacenter->video_url = $request->input('video_url');
        $mediacenter->meta_title = $request->input('meta_title');
        $mediacenter->meta_keyword = $request->input('meta_keyword');
        $mediacenter->meta_description = $request->input('meta_description');
    
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
    
            $file->move('uploads/mediacenter/', $filename);
    
            // Delete the previous image file if it exists
            if (!empty($mediacenter->image)) {
                $oldImagePath = 'uploads/mediacenter/' . $mediacenter->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
    
            $mediacenter->image = $filename;
        }
    
        $mediacenter->save();

        return redirect()->route('mediacenter-list')->with('message', 'Data Updated Successfully');
    }



    public function updateStatus(Request $request, $id)
{


    $mediacenter =  MediaCenter::findOrFail($id);
    $mediacenter->update(['status' => $request->status]);

    return response()->json(['message' => 'Status updated successfully']);
}

    
}
