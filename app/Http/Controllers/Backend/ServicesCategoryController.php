<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ServicesCategoryController extends Controller
{
    public function view(){
        return view('backend.pages.servicescategory.create');
    }


    public function show(){
        $servicescategory=ServiceCategory::all();
        return view('backend.pages.servicescategory.index',compact('servicescategory'));
    }


    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'name'=>'required|string',
            'image' => 'required|mimes:jpg,jpeg,png',
            'meta_title' => 'required|string',
            'meta_keyword' => 'required|string',
            'description' => 'required|string',
        ]);

        $slug = Str::slug($request->input('name'));
        $sercicecategory=ServiceCategory::create([
          'name'=>$request->name,
          'slug' => $slug,
           'description' => $request->input('description'),
          'meta_title' => $request->input('meta_title'),
          'meta_keyword' => $request->input('meta_keyword'),
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('uploads/Servicecategory/', $filename);

            $sercicecategory->image = $filename;
            $sercicecategory->save();
        }


        return redirect()->route('servicecategory-list')->with('info','sercicecategory Created Successfully');

    }


    public function delete (Request $request ,$id){
        $sercicecategory=ServiceCategory::find($id);
        $sercicecategory->delete();
        return redirect()->back()->with('warning', 'Deleted  Successfully');
    }


    public function edit($id){
        $sercicecategory=ServiceCategory::find($id);
        return view('backend.pages.servicescategory.edit',compact('sercicecategory'));
    }


    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'image' => 'required|mimes:jpg,jpeg,png',
            'meta_title' => 'required|string',
             'description' => 'required|string',
            'meta_keyword' => 'required|string',
        ]);

        $sercicecategory = ServiceCategory::find($id);
        $slug = Str::slug($request->input('name'));
        $sercicecategory->update([
            'name' => $request->input('name'),
            'slug' => $slug,
            'meta_title' => $request->input('meta_title'),
            'meta_keyword' => $request->input('meta_keyword'),
           'description' => $request->input('description'),
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('uploads/Servicecategory/', $filename);

            // Delete the previous image file if it exists
            if (!empty($sercicecategory->image)) {
                $oldImagePath = 'uploads/Servicecategory/' . $sercicecategory->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $sercicecategory->image = $filename;
        }

        $sercicecategory->save();

        return redirect()->route('servicecategory-list')->with('info', 'Category Updated Successfully');
    }
}
