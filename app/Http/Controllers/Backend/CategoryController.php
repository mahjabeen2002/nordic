<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function create(){
        return view('backend.pages.category.create');
    }


    public function Index(){
        $category=Category::all();
        return view('backend.pages.category.index',compact('category'));
    }


    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'name'=>'required|string',
        ]);

        $slug = Str::slug($request->input('name'));
        $category=Category::create([
          'name'=>$request->name,
          'slug' => $slug,
        ]);



        return redirect()->route('category-list')->with('info','category Created Successfully');

    }


    public function delete (Request $request ,$id){
        $category=Category::find($id);
        $category->delete();
        return redirect()->back()->with('warning', 'Deleted  Successfully');
    }


    public function edit($id){
        $category=Category::find($id);
        return view('backend.pages.category.edit',compact('category'));
    }


    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'name'=>'required|string',
        ]);
      

        $category=Category::find($id);
        $slug = Str::slug($request->input('name'));
        $category->update([
            'name' => $request->input('name'),
            $category->slug = $slug,
        ]);


        return redirect()->route('category-list')->with('info','category Updated successfully');
    }
}
