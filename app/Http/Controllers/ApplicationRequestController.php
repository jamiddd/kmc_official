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
        $this->validate($request, [
            'full_name' => 'required',
            'mothers_name' => 'required',
            'phone_number' => 'required',
            'fathers_name' => 'required',
            'gender' => 'required',
            'stream' => 'required',
            'dob' => 'required',
            'last_school' => 'required',
            'email' => 'required',
            'photo_url_upload' => 'image|required|max:1999',
            'mark_sheet_upload' => 'image|required|max:1999',
            'admit_card_upload' => 'image|required|max:1999'
        ]);

        if ($request->hasFile('photo_url_upload') && $request->hasFile('mark_sheet_upload') && $request->hasFile('admit_card_upload')){
            $filenameWithExt = $request->file('photo_url_upload')->getClientOriginalName();
            $filenameWithExt1 = $request->file('mark_sheet_upload')->getClientOriginalName();
            $filenameWithExt2 = $request->file('admit_card_upload')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $filename1 = pathinfo($filenameWithExt1, PATHINFO_FILENAME);
            $filename2 = pathinfo($filenameWithExt2, PATHINFO_FILENAME);

            $extension = $request->file('photo_url_upload')->getClientOriginalExtension();
            $extension1 = $request->file('mark_sheet_upload')->getClientOriginalExtension();
            $extension2 = $request->file('admit_card_upload')->getClientOriginalExtension();

            $filenameToStore = $filename.'_'.time().'.'.$extension;
            $filenameToStore1 = $filename1.'_'.time().'.'.$extension;
            $filenameToStore2 = $filename2.'_'.time().'.'.$extension;

            $path = $request->file('photo_url_upload')->storeAs('public/uploads', $filenameToStore);
            $path1 = $request->file('mark_sheet_upload')->storeAs('public/uploads', $filenameToStore1);
            $path2 = $request->file('admit_card_upload')->storeAs('public/uploads', $filenameToStore2);

        } else {
            $filenameToStore = 'noimage.jpg';
            $filenameToStore1 = 'noimage.jpg';
            $filenameToStore2 = 'noimage.jpg';
        }

        $application_request = new ApplicationRequest;
        $application_request->fullname = $request->input('full_name');
        $application_request->phone_number = $request->input('phone_number');
        $application_request->fathers_name = $request->input('fathers_name');
        $application_request->mothers_name = $request->input('mothers_name');
        $application_request->gender = $request->input('gender');
        $application_request->stream = $request->input('stream');
        $application_request->dob = Carbon::parse($request->input('dob'));
        $application_request->last_school = $request->input('last_school');
        $application_request->email = $request->input('email');
        $application_request->photo_url = $filenameToStore;
        $application_request->mark_sheet = $filenameToStore1;
        $application_request->admit_card = $filenameToStore2;
        $application_request->save();
        
        $message = "Application submitted successfully. We will email you and message you in the number that you have provided regarding the status of your application. Thank you and stay connected to our website for future events and progress.";
    
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
