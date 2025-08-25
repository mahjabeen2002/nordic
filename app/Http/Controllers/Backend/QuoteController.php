<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Quote;

class QuoteController extends Controller
{
 
    public function list()
    {
        $quote = Quote::all();
        return View('backend.pages.quote.list', compact('quote'));
    }

    public function delete($id)
    {
        $delete = Quote::find($id);
        $delete->delete();
        return redirect()->back()->with('mesg', "Record Has Been Deleted...");

    
    }

}
