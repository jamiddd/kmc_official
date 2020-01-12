<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\ApplicationRequest as AR;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $app_requests = AR::orderBy('created_at', 'asc')->paginate(10);

        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'cover_photo' => 'image|required|max:1999'
        ]);


        if ($request->hasFile('cover_photo')){
            $filenameWithExt = $request->file('cover_photo')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('cover_photo')->getClientOriginalExtension();

            $filenameToStore = $filename.'_'.time().'.'.$extension;

            $path = $request->file('cover_photo')->storeAs('public/uploads', $filenameToStore);
        } else {
            $filenameToStore = 'noimage.jpg';
        }

        $news_post = new News();
        $news_post->title = $request->input('title');
        $news_post->content = $request->input('content');
        $news_post->photo = $filenameToStore;
        $news_post->save();

        $msg = 'News created successfully';

        return redirect()->action('HomeController@index')->with('success', $msg)->with('app_requests', $app_requests);
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
