<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryTotal;
use App\Models\Subject;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $categories = Category::get();
        $subjects = Subject::get();
        return view('web.pages.home',compact('subjects','categories'));
    }

    public function subjects($id)
    {
        $subjects = Subject::get();
        $categories = Category::get();
        $category = Category::findOrFail($id);
        $sub_subjects = Subject::where('category_id',$id)->get();
        $subject_video = Subject::find($id);
        return view('web.pages.subjects',compact('subjects','sub_subjects','category','categories','subject_video'));
    }
}