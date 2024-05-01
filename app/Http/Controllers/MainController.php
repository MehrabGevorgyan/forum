<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theme;
use App\Models\Category;

class MainController extends Controller
{
    public function main()
    {
        $themes = Theme::select("*")->offset(0)->limit(10)->get();
        $categories = Category::all();
        return view('home', ['themes' => $themes, 'categories' => $categories]);
    }

    public function category($id)
    {
        $category_name = Category::find($id);
        $category_themes = Theme::where('category_id', '=', $id)->get();
        return view('category', ['category_themes' => $category_themes, 'category_name' => $category_name]);
    }
}
