<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Job;
use App\Models\Team;
use App\Models\Quote;
use App\Models\Career;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Package;
use App\Models\Service;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Application;
use App\Models\MediaCenter;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\DB;
use App\Mail\ContactUsThankYouMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicationReceivedMail;



class HomeController extends Controller
{
    public function index()
    {
        $mediacenter = MediaCenter::all();
        $service = Service::all();
        $companies = Company::all();
        $servicecategory = ServiceCategory::all();
        $testimonial = Testimonial::all();
        $servicescategory = ServiceCategory::all();
        $team = Team::all();
        return view("frontend.pages.index", compact('companies', 'servicecategory', 'team', 'testimonial', 'service', 'mediacenter', 'servicescategory'));
    }

    public function servicecat(Request $req)
    {
        $data1 = ServiceCategory::all();
        return response()->json(['data1' => $data1]);
    }

    public function about()
    {
        $team = Team::orderBy('id', 'DESC')->get();
        return view("frontend.pages.about", compact('team'));
    }

    public function privacypolicy()
    {

        return view("frontend.pages.privacy");
    }
    public function termsandconditions()
    {

        return view("frontend.pages.terms");
    }

    public function team()
    {
        $team = Team::paginate(12);
        return view('frontend.pages.team', compact('team'));
    }
    public function teamdetail($slug)
    {
        $fetchall = Team::where('slug', '!=', $slug)->orderBy('id', 'DESC')->limit(4)->get();
        $fetch = Team::where('slug', $slug)->first();
        return view("frontend.pages.teamdetail", compact('fetch', 'fetchall'));
    }




    public function mediacenter()
    {
        $fetch = MediaCenter::paginate(8);
        return view('frontend.pages.mediacenter', compact('fetch'));
    }
    public function mediacenterdetail($slug)
    {
        $related = MediaCenter::where('slug', '!=', $slug)->get();
        $fetch = MediaCenter::where('slug', $slug)->first();
        return view('frontend.pages.mediacenterdetail', compact('fetch', 'related'));
    }




    public function package()
    {
        $fetch = Package::all();
        return view('frontend.pages.package', compact('fetch'));
    }
    public function packagedetail($slug)
    {
        $related = Package::where('slug', '!=', $slug)->get();
        $fetch = Package::where('slug', $slug)->first();
        return view('frontend.pages.packagedetail', compact('fetch', 'related'));
    }

   public function getServicesByCategorySlug($slug)
{
    // Find the category by slug
    $category = ServiceCategory::where('slug', $slug)->first();

    // If the category is found, retrieve its services
    if ($category) {
        $services = $category->services;
        return view('frontend.pages.categoryservices', compact('category', 'services'));
    } else {
        // Handle the case where the category is not found
        return abort(404);
    }
}


    public function service()
    {
        $fetch = Service::all();
        return view('frontend.pages.service', compact('fetch'));
    }
 public function servicedetail($slug)
{
    // Fetch the service details by slug
    $fetch = Service::where('slug', $slug)->first();

    // If service is found, fetch its category
    if ($fetch) {
        $category = $fetch->serviceCategory; // Assuming there's a relationship defined in Service model

        // Fetch related services (excluding the current one)
        $related = Service::where('category_id', $fetch->category_id)
                          ->where('slug', '!=', $slug)
                          ->get();

        return view('frontend.pages.servicedetail', compact('fetch', 'category', 'related'));
    } else {
        // Handle the case where the service is not found
        return abort(404);
    }
}

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function contactuspost(Request $req)
    {
        $contactmodel = new Contact();
        $contactmodel->name = $req->name;
        $contactmodel->email = $req->email;
        $contactmodel->phone = $req->phone;
        $contactmodel->message = $req->message;
        $contactmodel->save();

        // Send thank you email
        Mail::to($req->email)->send(new ContactUsThankYouMail($req->name));

        return redirect()->back()->with('message', "Your Message Has Been Sent...");
    }

    //quote
    public function quote_get()
    {
        $services = Service::all();
        return View('frontend.pages.quote', compact('services'));
    }

    public function quote_post(Request $req)
    {
        $quote = new Quote();
        $quote->name = $req->name;
        $quote->company_name = $req->company_name;
        $quote->service_id  = $req->services_id;
        $quote->comments = $req->comments;
        $quote->contact_no = $req->contact_no;
        $quote->email  = $req->email;
        $quote->address = $req->address;
        $quote->save();
        return redirect()->back()->with("message", "Submitted Successfully");
    }

    public function getSubCategoryCards($categoryId)
    {
        $subCategoryCards = Service::where('category_id', $categoryId)->get();
        return response()->json($subCategoryCards);
    }
    //portfolio navbar
    //    public function portfoliocat(Request $req)
    //    {

    //        $data1 = DB::table("categories")->get();
    //        return response()->json(['data1' => $data1]);
    //    }


    public function ourJobs()
    {
        $jobs = Job::all();
        return view('frontend.pages.job', compact('jobs'));
    }

    public function jobdetail($slug)
    {
        $related = Job::where('slug', '!=', $slug)->get();
        $jobs = Job::where('slug', $slug)->first();
        return view('frontend.pages.jobdetails', compact('jobs', 'related'));
    }



    public function uploadResume(Request $request, $slug)
    {
        // Validate the uploaded file
        $request->validate([
            'cv' => 'mimes:pdf,doc,docx,xlsx,xls,jpg,jpeg,png|max:2048', // Adjust the allowed file types and size
        ]);

        // Find the job by slug
        $job = Job::where('slug', $slug)->firstOrFail();

        // Create a new application
        $application = new Application([
            // 'user_id' => Auth::user()->id,
            'job_id' => $job->id,
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'city' => $request->input('city'),
            'country' => $request->input('country'),
            'coverletter' => $request->input('coverletter'),
        ]);

        if ($request->hasFile('cv')) {
            $file = $request->file('cv');
            $filename = time() . '_' . $file->getClientOriginalName(); // Adjust filename if needed to avoid conflicts

            // Move the file to the uploads folder
            $file->move('uploads/resumes/', $filename);

            // Save the file name to the database
            $application->cv = $filename;
        }

        $application->save();

        // Send confirmation email
        Mail::to($request->input('email'))->send(new ApplicationReceivedMail($application));

        return redirect()->back()->with('message', 'Application Submited successfully!');
    }

    public function store(Request $request)
    {
        $ipAddress = $request->ip();
        $consentStatus = $request->input('consent_status');

        // Store the consent status and IP address in the database
        DB::table('cookie_consents')->insert([
            'ip_address' => $ipAddress,
            'consent_status' => $consentStatus,
            'created_at' => now()
        ]);

        return response()->json(['message' => 'Consent status stored successfully.']);
    }

}
