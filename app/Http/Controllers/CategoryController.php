<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\category;
use App\article;

class CategoryController extends Controller
{
    public function __construct()
    {
        // These methods are for authentecated users 
        $this->middleware('auth')->only(['create', 'store']);
    }
    public function FlashMessage($key, $message)
    {
        return session()->flash($key, $message);
    }


    public function index()
    {
        $categories = category::all();
        return view('Category.all', compact('categories'));
    }

    /**
     * return 'Create Category' page
     * < HTTP GET >
     */
    public function create()
    {
        // only superadmin and editor can create category
        if(Auth::user()->isA('superadmin') || Auth::user()->isAn('editor')){
            return view('Category.create');
        }
        else{
            $this->FlashMessage('Unauthorised', ' Unauthorised user Please Contact your Administrator!');
            return redirect()->route('categories'); 
        }
    }

    /**
     * Store category in database
     * < HTTP POST >
     */
    public function store()
    {
        if(Auth::user()->isA('superadmin') || Auth::user()->isA('editor')){
            // Before create, Validate the inputs using 'ValidateCat' function
            category::create($this->ValidateCat());
            return redirect('/dashboard/categories');
        }
        else{
            $this->FlashMessage('Unauthorised', ' Unauthorised user. Please Contact your Administrator!');
            return redirect()->route('categories'); 
        }
    }

    // Show the category and return all articles that are in the category
    public function show(category $category)
    {
        return view('category.show', compact('category'));
    }

    public function edit(category $category)
    {
        // Only article owner can edit 
        if(Auth::user()->isA('superadmin') || Auth::user()->isA('editor')){
            $categories = category::all();
            return view('category.edit', compact('categories', 'category'));
        }
        $this->FlashMessage('Unauthorised', ' Unauthorised user. Please Contact your Administrator!');
         return redirect()->route('categories'); 
    }
    public function update(category $category, Request $request)
    {
        // Only article owner can edit 
        if(Auth::user()->isA('superadmin')){
            $attributes = $this->ValidateCat();
            $category->update($attributes);
            $this->FlashMessage('CategoryUpdated', ' The Category' . $category->name.' has been updated successfully');
            return redirect()->route('categories');
        }
        
    }


     // HTTP DELETE
     public function destroy(category $category)
     {
         // Only super admin can delete 
         if(Auth::user()->isA('superadmin')){
             $category ->delete($category);
             $this->FlashMessage('CategoryDeleted', ' The Category' . $category->name.' has been deleted [ id: '. $category->id . ' ]');
             return redirect()->route('categories');
         }
         $this->FlashMessage('CategoryNotDeleted', ' Unauthorised to Delete Categories!');
         return redirect()->route('categories');
     }
    /**
     * Validate category
     */
    public function ValidateCat()
    {
        return request()->validate([
            'name' => 'required|min:3|max:30'
        ]);
    }
}
