<?php

namespace App\Http\Controllers\Backend;
use App\Models\Job;
use App\Models\Data;
use App\Models\Team;
use App\Models\User;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Application;
use App\Models\MediaCenter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{
  public function index()
{
    $totalApplications = Application::count();
    $totalCompanies = Company::count();
    $totalContacts = Contact::count();
    $totalJobs = Job::count();
    $totalMediaCenters = MediaCenter::count();
    $totalServices = Service::count();
    $totalTeams = Team::count();

    return view('backend.pages.index', compact(
        'totalApplications', 
        'totalCompanies', 
        'totalContacts', 
        'totalJobs', 
        'totalMediaCenters', 
        'totalServices', 
        'totalTeams'
    ));
}


  public function contact(){
      $contact=Contact::all();
    return view('backend.pages.messages.index',compact('contact'));
  }

  public function delete(Request $request,$id){
    $contact=Contact::find($id);
    $contact->delete();
   return redirect()->back()->with('warning','Message Delete Successfully');

 }

 public function data(){
  $data=Data::all();
return view('backend.pages.datacollection.index',compact('data'));
}

public function Datadelete(Request $request,$id){
$data=Data::find($id);
$data->delete();
return redirect()->back()->with('warning','Message Delete Successfully');

}

 public function cvs(){
    $applications=Application::all();
    return view('backend.pages.cvs.list',compact('applications'));
 }

 public function downloadCV($id)
 {
     // Retrieve the application by ID
     $application = Application::findOrFail($id);

     // Get the file path from the application
     $filePath = public_path('uploads/resumes/' . $application->cv);

     // Check if the file exists
     if (file_exists($filePath)) {
         // Return the file for download
         return response()->download($filePath, $application->cv);
     } else {
         // File not found, return a response
         return redirect()->back()->with('warning', 'File Not Available');
     }
 }


 public function cvdelete(Request $request,$id){
    $application=Application::find($id);
    $application->delete();
   return redirect()->back()->with('warning','Application Delete Successfully');

 }
 
 

Public function view(){
    return view('backend.pages.setting.changepassword');
}


public function changepassword(Request $request)
{
$request->validate([
    'old_password' => 'required',
    'new_password' => 'required|min:6',
    'confirm_password' => 'required|same:new_password',
]);

$user = auth()->user();

if (!Hash::check($request->old_password, $user->password)) {
    return redirect()->back()->with('error', 'The old password is incorrect.');
}

$user->password = Hash::make($request->new_password);
$user->save();

return redirect()->route('admin-dashboard')->with('info', 'Password changed successfully.');
}


Public function profile($id){
  $user=User::find($id);
  return view('backend.pages.setting.profile',compact('user'));
}

public function updateprofile(Request $req, $id)
{
    $user = User::find($id);

    // Validate input data
    $req->validate([
        'name' => 'required|string|max:255',
        'email' => 'required',
        'phone_number' => 'nullable|string|max:15',
        'address' => 'nullable|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $user->name = $req->name;
    $user->email = $req->email;
    $user->address = $req->address;
    $user->phone_number = $req->phone_number;

    if ($req->hasFile('image')) {
        $file = $req->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time() . '.' . $ext;

        $file->move('uploads/User/', $filename);

        // Delete the previous image file if it exists
        if (!empty($user->image)) {
            $oldImagePath = 'uploads/User/' . $user->image;
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        $user->image = $filename;
    }

    $user->save();

    return redirect()->route('admin-dashboard')->with('info', "Your Data Has Been Updated...");
}

 public function cookieshow()
    {
        // Fetch all records from the cookie_consents table
        $consents = DB::table('cookie_consents')->get();

        // Return the view with the consents data
        return view('backend.pages.cookies', compact('consents'));
    }



}
