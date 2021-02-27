<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\News;
use Image;

class NewController extends Controller
{
    /**
     * Send flash message
     * 
     * @param string $message
     * @param string $key
     * @return mixed
     */
    public function FlashMessage($key, $message)
    {
        return session()->flash($key, $message);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('created_at','desc')->paginate(10);

        return view('new.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->id == 1){
            return view('new.create');
        }
        else{
            return view('new.index');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate inputs using 'Validatenew' function
        $new = $this->ValidateNews();


        $image = $request->file('image');
        $input['image'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('uploads/images/');
        $image->move($destinationPath, $input['image']);
        $new = new News();
        $new->title = $request->get('title');
        $new->body = $request->get('body');
        $new->body = $request->get('description');
        $new->image = $input['image'];
        $new->save();

    
        // Send flash message
        session()->flash('NewsCreatedMessage', 'Your News has been published successfully.');

        return redirect()->route('dashboard.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::findorFail($id);
        return view('new.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->isA('superadmin')){
            $new = News::findorFail($id);
            return view('new.edit', compact('new'));
        }
        return abort(403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(news $new, Request $request)
    {
        // Only article owner can edit 
        if(Auth::user()->id == 1){
            $attributes = $this->ValidateNews();
            if ($request->image != null) {
                // Post Image
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->save('uploads/images/' . $filename);
                $attributes['image'] = $new->image = $filename;
            }
            $new->update($attributes);
             // Send flash message
            session()->flash('NewsUpdate', 'Your News has been Updated successfully.');
            return redirect()->route('dashboard.home');
        }
        // return '403' error if the user is not the article owner
        return abort(403);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(news $news)
    {
        if(Auth::user()->isA('superadmin')){
            
            $news ->delete($news);
            $this->FlashMessage('NewsDeleted', 'Your News has been deleted [ Title: '. $news->title . ' ]');
            return redirect()->route('dashboard.home');
        }
        $this->FlashMessage('NewsNotDeleted', ' Unauthorised to Delete News!');
         return redirect()->back();
    }

    
    /**
    * Validate new
    */
    public function ValidateNews()
    {
        return request()->validate([
            'title' => 'required|min:3|max:50',
            'body' => 'required|min:3|max:9000',
            'description' => 'nullable|min:3|max:500',
            'source' => 'nullable',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024|dimensions:min_width=100,min_height=200|required'
        ]); 
    }
}
