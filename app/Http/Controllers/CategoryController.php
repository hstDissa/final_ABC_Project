<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('category.create');
    }

    public function save(Request $request)
    {
        
            $request->validate([
                'category' => 'required|string|max:255'
            ]);
    
            $category= new category();
            $category->category = $request->category;
            
            $category->save();

            toastr()->success('category has been saved successfully!', 'Congrats');
            return redirect()->route("category.create");
    
           
        
    }
}
