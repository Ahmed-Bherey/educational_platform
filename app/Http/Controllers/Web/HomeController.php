<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryTotal;
use App\Models\GeneralSetting;
use App\Models\SubCategory;
use App\Models\Subject;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $generalSetting = GeneralSetting::first();
        $subCategories = SubCategory::get();
        $categories = Category::where('id','>',1)->get();
        $categoriesAll = Category::get();
        $categoryFirst = Category::first();
        $subjects = Subject::take(10)->get();
        return view('web.pages.home',compact('subjects','categories','categoryFirst','generalSetting','subCategories','categoriesAll'));
    }

    public function subjects($id)
    {
        $generalSetting = GeneralSetting::first();
        $subjects = Subject::get();
        $categories = Category::get();
        $category = Category::findOrFail($id);
        $sub_subjects = Subject::where('category_id',$id)->get();
        $sub_cat_subjects = Subject::where('subCategory_id',$id)->get();
        $subject_video = Subject::find($id);
        return view('web.pages.subjects',compact('subjects','sub_subjects','sub_cat_subjects','category','categories','subject_video','generalSetting'));
    }

    public function subject_details($id)
    {
        $generalSetting = GeneralSetting::first();
        $categories = Category::get();
        $subject = Subject::find($id);
        return view('web.pages.subject_details',compact('subject','categories','generalSetting'));
    }

    public function sub_cat_subjects($id)
    {
        $generalSetting = GeneralSetting::first();
        $categories = Category::get();
        $category = Category::find($id);
        $sub_cat_subject = SubCategory::find($id);
        $sub_cat_subjects = Subject::where('subCategory_id',$id)->get();
        return view('web.pages.sub_cat_subjects',compact('sub_cat_subjects','sub_cat_subject','categories','generalSetting','category'));
    }
}