<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\HtmlString;

class ServicesController extends Controller
{
    public function view(){
        $servicescategory=ServiceCategory::all();
        return view('backend.pages.service.create',compact('servicescategory'));
    }

    public function show(){
        $services=Service::all();
        return view('backend.pages.service.list',compact('services'));
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required|exists:service_categories,id',
            'name' => 'required|string',
            'short_description' => 'nullable|string',
            'long_description' => 'nullable|string',
            'image' => 'required|mimes:jpg,jpeg,png',
            'icon' => 'required',
            'meta_title' => 'required|string',
            'meta_keyword' => 'required|string',
            'meta_description' => 'nullable|string',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $slug = Str::slug($request->input('name'));

  
        $services = Service::create([
            'category_id' => $request->input('category_id'),
            'name' => $request->input('name'),
            'slug' => $slug,
            'short_description' =>  $request->input('short_description'),
            'long_description' =>  $request->input('long_description'),
            'meta_description' =>  $request->input('meta_description'),
            'meta_title' => $request->input('meta_title'),
            'meta_keyword' => $request->input('meta_keyword'),
          
        ]);

        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageExt = $imageFile->getClientOriginalExtension();
            $imageFilename = time() . '_image.' . $imageExt;
        
            $imageFile->move('uploads/Service/', $imageFilename);
        
            $services->image = $imageFilename;
        }
        
        if ($request->hasFile('icon')) {
            $iconFile = $request->file('icon');
            $iconExt = $iconFile->getClientOriginalExtension();
            $iconFilename = time() . '_icon.' . $iconExt;
        
            $iconFile->move('uploads/Service/', $iconFilename);
        
            $services->icon = $iconFilename;
        }
        
        $services->save();

        return redirect()->route('service-list')->with('message', 'Data Added Successfully');
    }

    public function delete(Request $request,$id)
    {
        $del= $request->id;
        $services = Service::find($del);

        $services->delete();
        return redirect()->back()->with('warning', 'Deleted  Successfully');
    }


    public function edit($id){
        $services=Service::find($id);
        $servicescategory=ServiceCategory::all();
        return view('backend.pages.service.edit',compact('services','servicescategory'));

    }
    public function update(Request $request, $id)
    {
       

        $services = Service::findOrFail($id);

        $slug = Str::slug($request->input('name'));
      
       
        $services->name = $request->input('name');
        $services->category_id = $request->input('category_id');
        $services->slug = $slug;
        $services->short_description =   $request->input('short_description');
        $services->long_description = $request->input('long_description');
        $services->meta_description =  $request->input('meta_description');
        $services->meta_title = $request->input('meta_title');
        $services->meta_keyword = $request->input('meta_keyword');
      

     
    if ($request->hasFile('image')) {
        $imageFile = $request->file('image');
        $imageExt = $imageFile->getClientOriginalExtension();
        $imageFilename = time() . '_image.' . $imageExt;

        $imageFile->move('uploads/Service/', $imageFilename);

        // Delete the previous image file if it exists
        if (!empty($services->image)) {
            $oldImagePath = 'uploads/Service/' . $services->image;
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        $services->image = $imageFilename;
    }

    if ($request->hasFile('icon')) {
        $iconFile = $request->file('icon');
        $iconExt = $iconFile->getClientOriginalExtension();
        $iconFilename = time() . '_icon.' . $iconExt;

        $iconFile->move('uploads/Service/', $iconFilename);

        // Delete the previous icon file if it exists
        if (!empty($services->icon)) {
            $oldIconPath = 'uploads/Service/' . $services->icon;
            if (file_exists($oldIconPath)) {
                unlink($oldIconPath);
            }
        }

        $services->icon = $iconFilename;
    }

    $services->save();

        return redirect()->route('service-list')->with('message', 'Data Updated Successfully');
    }


protected function processAlignment($text)
{
    // Replace CKEditor alignment classes with appropriate HTML tags
    $text = str_replace('class="text-left"', 'style="text-align: left;"', $text);
    $text = str_replace('class="text-center"', 'style="text-align: center;"', $text);
    $text = str_replace('class="text-right"', 'style="text-align: right;"', $text);

    return new HtmlString($text);
}



    public function showDetails($id)
{
    $service = Service::find($id);

    return view('backend.pages.service.detail',compact('service'));
}
}
