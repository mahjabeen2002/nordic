<?php

namespace App\Http\Controllers\Backend;

use App\Models\Testimonial;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    public function view(){
        return view('backend.pages.testimonial.create');
    }

    public function show(){
        $testimonial=Testimonial::all();
        return view('backend.pages.testimonial.list',compact('testimonial'));
    }


    public function store(Request $req)
    {
        $testimonial = new Testimonial();
        $testimonial->name = $req->name;
        $testimonial->companyname = $req->companyname;
        $testimonial->feedback = $req->feedback;
        $image=$req->file('image');
        $ext = rand().".".$image->getClientOriginalName();
        $image->move('uploads/testimonial',$ext);
        $testimonial->image=$ext;
        $testimonial->save();



        return redirect()->route('testimonial-list')->with('message', 'Data Added Successfully');
    }

    public function delete(Request $request,$id)
    {
        $del= $request->id;
        $testimonial = Testimonial::find($del);
        $path='uploads/testimonial/'.$testimonial->image;
        if(File::exists($path)){
          File::delete($path);
        }
        $testimonial->delete();
        return redirect()->back()->with('warning', 'Deleted  Successfully');
    }


    public function edit($id){
        $testimonial=Testimonial::find($id);
        return view('backend.pages.testimonial.edit',compact('testimonial'));

    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'feedback' => 'required|string',
            'image' => 'nullable|mimes:jpg,jpeg,png',
            'companyname' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $testimonial = Testimonial::findOrFail($id);

        $slug = Str::slug($request->input('name'));

        $testimonial->name = $request->input('name');
        $testimonial->feedback =  $request->input('feedback');
        $testimonial->companyname = $request->input('companyname');


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('uploads/testimonial/', $filename);

            // Delete the previous image file if it exists
            if (!empty($testimonial->image)) {
                $oldImagePath = 'uploads/testimonial/' . $testimonial->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $testimonial->image = $filename;
        }

        $testimonial->save();

        return redirect()->route('testimonial-list')->with('message', 'Data Updated Successfully');
    }



    public function updateStatus(Request $request, $id)
{


    $testimonial =  Testimonial::findOrFail($id);
    $testimonial->update(['status' => $request->status]);

    return response()->json(['message' => 'Status updated successfully']);
}


}
