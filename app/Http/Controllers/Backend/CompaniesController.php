<?php

namespace App\Http\Controllers\Backend;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CompaniesController extends Controller
{
    public function view(){
        return view('backend.pages.companies.create');
    }

    public function show(){
        $companies=Company::all();
        return view('backend.pages.companies.list',compact('companies'));
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'image' => 'required|mimes:jpg,jpeg,png',
            'link' => 'required|url', 
           
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $company = Company::create([
            'name' => $request->input('name'),
            'link' => $request->input('link'),
          
        ]);
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
    
            $file->move('uploads/Company/', $filename);
    
            $company->image = $filename;
            $company->save();
        }
    
        return redirect()->route('collaboration-list')->with('message', 'Data Added Successfully');
    }

    public function delete(Request $request,$id)
    {
        $del= $request->id;
        $company = Company::find($del);
        $company->delete();
        return redirect()->back()->with('warning', 'Deleted  Successfully');
    }


    public function edit($id){
        $companies=Company::find($id);
        return view('backend.pages.companies.edit',compact('companies'));

    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'image' => 'required|mimes:jpg,jpeg,png',
            'link' => 'required|url', 
           
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $company = Company::findOrFail($id);
    
    
        $company->name = $request->input('name');
        $company->link = $request->input('link');
      
    
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
    
            $file->move('uploads/Company/', $filename);
    
            // Delete the previous image file if it exists
            if (!empty($company->image)) {
                $oldImagePath = 'uploads/Company/' . $company->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
    
            $company->image = $filename;
        }
    
        $company->save();

        return redirect()->route('collaboration-list')->with('message', 'Data Updated Successfully');
    }
}
