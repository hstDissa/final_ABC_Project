<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function categoryCreate(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255'
        ]);

        $category= new category();
        $category->category = $request->category;
        $category->save();

       return response("Data added succesfully");
    }
}
