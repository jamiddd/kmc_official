<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApplicationRequest;
use Carbon\Carbon; 

class ApplicationRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $application_requests = ApplicationRequest::all();
        return view('application_requests.requests')->with('application_requests', $application_requests);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admission');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'dbta' => 'required',
        //     'dbtp' => 'required'
        // ]);
        $application_request = new ApplicationRequest;
        $application_request->fullname = $request->input('first_name')." ".$request->input('last_name');
        $application_request->fathers_name = $request->input('fathers_name');
        $application_request->mothers_name = $request->input('mothers_name');
        $application_request->gender = $request->input('gender');
        $application_request->stream = $request->input('stream');
        $application_request->dob = Carbon::parse($request->input('dob'));
        $application_request->fathers_name = $request->input('fathers_name');
        $application_request->last_school = $request->input('last_school_name');
        $application_request->email = $request->input('email');
        $application_request->photo_url = $request->input('photo_url');
        $application_request->marksheet = $request->input('marksheet');
        $application_request->save();
        
        $message = "Application submitted successfully";
    
        return view('pages.submitted')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
