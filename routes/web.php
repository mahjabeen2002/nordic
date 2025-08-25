<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkedinController;
use App\Http\Controllers\Backend\JobsController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\QuoteController;

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\ServicesController;
use App\Http\Controllers\Backend\CompaniesController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\Auth\SigninController;
use App\Http\Controllers\Backend\MediaCenterController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Backend\ServicesCategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/clear-cache', function () {
    Artisan::call('route:cache');
    Artisan::call('config:cache');
    Artisan::call('view:cache');
    Artisan::call('cache:clear');

    return redirect()->back()->with('success', 'Cache cleared successfully.');
})->name('clear-cache');





Route::get('/termsandconditions', function () {
    return view('frontend.pages.terms');
});
Route::get('/privacypolicy', function () {
    return view('frontend.pages.privacy');
});
//Admin Login Routes
Route::controller(SigninController::class)->group(function () {
    Route::get('/admin/login', 'view')->name('adminlogin.form');
    Route::post('/admin/login', 'adminAuthenticate')->name('admin.login');
});
Route::controller(SigninController::class)->group(function () {
    Route::get('/admin/logout', 'adminlogout')->name('admin.logout');
});
//Admin Dashboard Routes Start

Route::middleware(['auth', 'redirect.only.admins'])->group(function () {
    Route::prefix('admin')->as('admin-')->group(function () {
        Route::controller(DashboardController::class)->group(function () {
            Route::get('dashboard', 'index')->name('dashboard');
            Route::get('/contact', 'contact')->name('contact');
            Route::get('messages', 'contact')->name('messages');

            Route::get('/cookie-consents', 'cookieshow')->name('cookie');
            Route::get('delete/{id}', 'delete')->name('delete');

            Route::get('data', 'data')->name('data');

            Route::get('datadelete/{id}', 'datadelete')->name('datadelete');

            Route::get('job_cvs', 'cvs')->name('job.cvs');

            Route::get('deletecv/{id}', 'cvdelete')->name('deletecv');
             Route::get('/download-cv/{id}', 'downloadCV')->name('download.cv');

            Route::get('/changepassword', 'view')->name('change.form');
            Route::post('/changepassword', 'changepassword')->name('change.password');

            Route::get('/profile/{id}', 'profile')->name('profile');
            Route::put('/update-profile/{id}', 'updateprofile')->name('update-profile');
        });
    });




    //media center route start

    Route::prefix('mediacenter')->as('mediacenter-')->group(function () {
        Route::controller(MediaCenterController::class)->group(function () {
            Route::get('/create', 'view')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/list', 'show')->name('list');
            Route::get('delete/{id}', 'delete')->name('delete');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::put('update/{id}', 'update')->name('update');
            Route::get('delete_image/{id}', 'destroyimage')->name('delete_image');
        });
    });
    Route::post('/update-status/{id}', [MediaCenterController::class, 'updateStatus'])->name('update.status');
    //end media center route

Route::post('/mediacenter/upload-image', [MediaCenterController::class, 'uploadImage'])->name('mediacenter-upload-image');
      //Services routes
      Route::prefix('servicecategory')->as('servicecategory-')->group(function () {
        Route::controller(ServicesCategoryController::class)->group(function () {
            Route::get('/create', 'view')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/list', 'show')->name('list');
            Route::get('delete/{id}', 'delete')->name('delete');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::put('update/{id}', 'update')->name('update');
            Route::get('details/{id}', 'showDetails')->name('details');

        });
    });

    //end Services routes

     //Services routes
     Route::prefix('service')->as('service-')->group(function () {
        Route::controller(ServicesController::class)->group(function () {
            Route::get('/create', 'view')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/list', 'show')->name('list');
            Route::get('delete/{id}', 'delete')->name('delete');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::put('update/{id}', 'update')->name('update');
            Route::get('details/{id}', 'showDetails')->name('details');

        });
    });

    //end Services routes
    //Team Routes start
    Route::prefix('team')->as('team-')->group(function () {
        Route::controller(TeamController::class)->group(function () {
            Route::get('/create', 'view')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/list', 'show')->name('list');
            Route::get('delete/{id}', 'delete')->name('delete');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::put('update/{id}', 'update')->name('update');



        });
    });
    //end Team Routes
//company routes
    Route::prefix('collaboration')->as('collaboration-')->group(function () {
        Route::controller(CompaniesController::class)->group(function () {
            Route::get('/create', 'view')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/list', 'show')->name('list');
            Route::get('delete/{id}', 'delete')->name('delete');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::put('update/{id}', 'update')->name('update');

        });
    });
    Route::prefix('testimonial')->as('testimonial-')->group(function () {
        Route::controller(TestimonialController::class)->group(function () {
            Route::get('/create', 'view')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/list', 'show')->name('list');
            Route::get('delete/{id}', 'delete')->name('delete');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::put('update/{id}', 'update')->name('update');
            Route::get('delete_image/{id}', 'destroyimage')->name('delete_image');
        });
    });

  //Jobs routes
  Route::prefix('jobs')->as('jobs-')->group(function () {
    Route::controller(JobsController::class)->group(function () {
        Route::get('/create', 'view')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/list', 'show')->name('list');
        Route::get('delete/{id}', 'delete')->name('delete');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::put('update/{id}', 'update')->name('update');
        Route::get('details/{id}', 'showDetails')->name('details');

    });
});

//end Jobs routes






// });

//end AdminDashboard Routes


    //++++++++++guote Start+++++++++quote
    Route::prefix('quote')->as('quote-')->group(function () {
    Route::controller(QuoteController::class)->group(function(){

        Route::get('/list',  "list")->name('list');
        Route::get('/delete/{id}', "delete")->name('delete');
    });
});
});
//Frontend Routes Start
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    // Route::get('home', 'index')->name('home');
    Route::get('/get-a-quote', "quote_get")->name('get-a-quote');
    Route::post('/quote_post', "quote_post")->name('quote.post');
    Route::get('about-us', 'about')->name('about-us');
    
    Route::get('contact-us', 'contact')->name('contact-us');
    Route::post('/contactuspost',"contactuspost");
    
     Route::post('/cookie-consent',"store");

    Route::get('/mediacenter', "mediacenter")->name('mediacenter');
    Route::get('/mediacenterdetail/{slug}', "mediacenterdetail")->name('mediacenterdetail');


    Route::get('/package', "package")->name('package');
    Route::get('/packagedetail/{slug}', "packagedetail")->name('packagedetail');


    Route::get('/services', "service")->name('services');
    Route::get('/servicedetail/{slug}', "servicedetail")->name('servicedetail');
    Route::get('/servicecategory/{slug}', "getServicesByCategorySlug")->name('servicecategory');

    Route::get('/our-jobs', "ourJobs")->name('ourjobs');
    Route::get('/job-detail/{slug}', "jobdetail")->name('jobdetail');

    
    Route::post('/upload-resume/{slug}', 'uploadResume')->name('upload.resume');
    Route::get('/getSubCategoryCards/{categoryId}',"getSubCategoryCards")->name('subCategoryCards');

    Route::get('/team',"team");
    Route::get('/teamdetail/{slug}',"teamdetail");

    Route::get('/terms-and-conditions',"termsandconditions");
    Route::get('/privacy-policy',"privacypolicy");
});


Route::get('/servicecat', [HomeController::class, 'servicecat']);


Route::get('auth/linkedin', [LinkedinController::class, 'linkedinRedirect'])->name('linkedinRedirect');
Route::get('auth/linkedin/callback', [LinkedinController::class, 'linkedinCallback'])->name('linkedinCallback');




Route::get('/job-application-form', [LinkedinController::class, 'showApplicationForm'])->name('job.application.form');
Route::get('/jobdetail/{slug}/apply-linkedin', [LinkedinController::class, 'applyWithLinkedIn'])->name('linkedin.apply');
