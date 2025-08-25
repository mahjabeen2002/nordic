<?php

namespace App\Http\Controllers\Backend;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    public function view(){
        return view('backend.pages.team.create');
    }

    public function show(){
        $Teams=Team::all();
        return view('backend.pages.team.list',compact('Teams'));
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'tittle' => 'required|string',
            'email' => 'required|unique:users|email:rfc,dns',
            'profile_picture' => 'required|mimes:jpg,jpeg,png',
            'cv' => 'required|mimes:pdf,doc,docx,txt,jpg,jpeg,png|max:2048', 
            'possition' => 'required|string',
            'bio' => 'required|string',
            'phone' => 'required|string',
            'skills' => 'required|string',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // $cleanDescription = strip_tags($request->input('bio'));
    
        $team = Team::create([
            'name' => $request->input('name'),
            'tittle' => $request->input('tittle'),
            'possition' => $request->input('possition'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'skills' => $request->input('skills'),
            'bio' =>  $request->input('bio'),
            'file' => '',
        ]);
    
        if ($request->hasFile('profile_picture')) {
            $team->profile_picture = $this->uploadFile($request->file('profile_picture'), 'uploads/Team/');
        }
    
        if ($request->hasFile('cv')) {
            $team->cv = $this->uploadFile($request->file('cv'), 'uploads/CV/');
        }
    
        $team->save();
    
        return redirect()->route('team-list')->with('message', 'Data Added Successfully');
    }
    
    private function uploadFile($file, $destination)
    {
        $ext = $file->getClientOriginalExtension();
        $filename = time() . '.' . $ext;
        $file->move($destination, $filename);
    
        return $filename;
    }
    

    public function delete(Request $request,$id)
    {
        $del= $request->id;
        $Instructor = Team::find($del);
        $Instructor->delete();
        return redirect()->back()->with('warning', 'Deleted  Successfully');
    }


    public function edit($id){
        $Team=Team::find($id);
        return view('backend.pages.team.edit',compact('Team'));

    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'tittle' => 'required|string',
            'email' => 'required|unique:users|email:rfc,dns',
            'profile_picture' => 'required|mimes:jpg,jpeg,png',
            'cv' => 'required|mimes:pdf,doc,docx,txt,jpg,jpeg,png|max:2048', 
            'possition' => 'required|string',
            'bio' => 'required|string',
            'phone' => 'required|string',
            'skills' => 'required|string',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $team = Team::findOrFail($id);
        // $cleanDescription = strip_tags($request->input('bio'));
    
        $team->name = $request->input('name');
        $team->tittle = $request->input('tittle');
        $team->possition = $request->input('possition');
        $team->email = $request->input('email');
        $team->phone = $request->input('phone');
        $team->skills = $request->input('skills');
        $team->bio = $request->input('bio');
    
        // Update profile picture
        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
    
            $file->move('uploads/Team/', $filename);
    
            // Delete the previous profile picture file if it exists
            if (!empty($team->profile_picture)) {
                $oldImagePath = 'uploads/Team/' . $team->profile_picture;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
    
            $team->profile_picture = $filename;
        }
    
        // Update CV
        if ($request->hasFile('cv')) {
            $cvFile = $request->file('cv');
            $cvExt = $cvFile->getClientOriginalExtension();
            $cvFilename = time() . '.' . $cvExt;
    
            $cvFile->move('uploads/CV/', $cvFilename);
    
            // Delete the previous CV file if it exists
            if (!empty($team->cv)) {
                $oldCVPath = 'uploads/CV/' . $team->cv;
                if (file_exists($oldCVPath)) {
                    unlink($oldCVPath);
                }
            }
    
            $team->cv = $cvFilename;
        }
    
        $team->save();
    
        return redirect()->route('team-list')->with('message', 'Data Updated Successfully');
    }
    
}
