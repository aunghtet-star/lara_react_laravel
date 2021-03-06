<?php

namespace App\Http\Controllers;

use App\Models\Watch;
use App\Models\Category;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function showCategory()
    {
        $category = Category::all();
        return response()->json(['success' => true , 'data' => $category]);
    }

    public function showWatch()
    {
        $watch = Watch::orderBy('id', 'desc')->with('category')->paginate(5);
        return response()->json(['success' => true , 'data' => $watch]);
    }
}
