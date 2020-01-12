<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApplicationRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $app_requests = ApplicationRequest::orderBy('created_at', 'asc')->paginate(10);
        return view('pages.home')->with('app_requests', $app_requests);
    }

    public function mew($q){
        $x = str_split(strtolower($q));
        $whole = "<table class=\"responsive-table\"><tr><th>Name</th><th>Mark Sheet</th><th>Admit Card</th><th>Stream</th><th>Phone No.</th><th>Email</th><th>Gender</th><th>DOB</th><th>Father's Name</th><th>Mother's Name</th><th>Last School</th></tr>";
        // $letter = Input::get('q');
        $app_reqs = ApplicationRequest::orderBy('created_at', 'asc')->paginate(10);

        if ($q == "all"){
            foreach ($app_reqs as $app_req){
                $whole = $whole."<tr><td>".$app_req->fullname."</td><td><a href=\"/storage/uploads/$app_req->mark_sheet\">Mark Sheet</a></td><td><a href=\"/storage/uploads/$app_req->admit_card\">Admit Card</a></td><td>".$app_req->stream."</td><td>".$app_req->phone_number."</td><td>".$app_req->email."</td><td>".$app_req->gender."</td><td>".$app_req->dob."</td><td>".$app_req->fathers_name."</td><td>".$app_req->mothers_name."</td><td>".$app_req->last_school."</td></tr>";
            }
        } else {
            $count = 0;
            foreach ($app_reqs as $app_req){
                $y = str_split(strtolower($app_req->fullname));
                if ($x[$count] == $y[$count]){
                    $whole = $whole."<tr><td>".$app_req->fullname."</td><td><a href=\"/storage/uploads/$app_req->mark_sheet\">Mark Sheet</a></td><td><a href=\"/storage/uploads/$app_req->admit_card\">Admit Card</a></td><td>".$app_req->stream."</td><td>".$app_req->phone_number."</td><td>".$app_req->email."</td><td>".$app_req->gender."</td><td>".$app_req->dob."</td><td>".$app_req->fathers_name."</td><td>".$app_req->mothers_name."</td><td>".$app_req->last_school."</td></tr>";
                }
            }
        }

       
        // $tot = $pref.$suff;
        return $whole;
    }
}
