<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryTotal;
use App\Models\GeneralSetting;
use App\Models\Subject;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $generalSetting = GeneralSetting::first();
        $categories = Category::where('id','>',1)->get();
        $categoryFirst = Category::first();
        $subjects = Subject::take(10)->get();
        return view('web.pages.home',compact('subjects','categories','categoryFirst','generalSetting'));
    }

    public function subjects($id)
    {
        $generalSetting = GeneralSetting::first();
        $subjects = Subject::get();
        $categories = Category::get();
        $category = Category::findOrFail($id);
        $sub_subjects = Subject::where('category_id',$id)->get();
        $subject_video = Subject::find($id);
        return view('web.pages.subjects',compact('subjects','sub_subjects','category','categories','subject_video','generalSetting'));
    }

    public function subject_details($id)
    {
        $generalSetting = GeneralSetting::first();
        $categories = Category::get();
        $subject = Subject::find($id);
        return view('web.pages.subject_details',compact('subject','categories','generalSetting'));
    }
}