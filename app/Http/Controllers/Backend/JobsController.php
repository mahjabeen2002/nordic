<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class JobsController extends Controller
{
    public function view(){
        return view('backend.pages.job.create');
    }

    public function show(){
        $jobs=Job::all();
        return view('backend.pages.job.list',compact('jobs'));
    }


    public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'title' => 'required|string',
        'details' => 'required',
        'image' => 'nullable|required|mimes:jpg,jpeg,png',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    $slug = Str::slug($request->input('title'));

    $jobs = Job::create([

        'title' => $request->input('title'),
        'slug' => $slug,
        'details' =>  $request->input('details'),

    ]);

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time() . '.' . $ext;

        $file->move('uploads/jobs/', $filename);

        $jobs->image = $filename;
        $jobs->save();
    }

    return redirect()->route('jobs-list')->with('message', 'Data Added Successfully');
}


    public function delete(Request $request,$id)
    {
        $del= $request->id;
        $jobs = Job::find($del);
        $path='uploads/jobs/'.$jobs->image;
        if(File::exists($path)){
          File::delete($path);
        }
        $jobs->delete();
        return redirect()->back()->with('warning', 'Deleted  Successfully');
    }


    public function edit($id){
        $jobs=Job::find($id);
        return view('backend.pages.job.edit',compact('jobs'));

    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'details' => 'required',
            'image' => 'nullable|required|mimes:jpg,jpeg,png',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $jobs = Job::findOrFail($id);
        $slug = Str::slug($request->input('title'));
        $jobs->title = $request->input('title');
        $jobs->slug = $slug;
        $jobs->details =   $request->input('details');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('uploads/jobs/', $filename);

            // Delete the previous image file if it exists
            if (!empty($jobs->image)) {
                $oldImagePath = 'uploads/jobs/' . $jobs->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $jobs->image = $filename;
        }

        $jobs->save();

        return redirect()->route('jobs-list')->with('info', 'Data Updated Successfully');
    }
}
