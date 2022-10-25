<?php

namespace App\Http\Controllers\Admin;

use App\Models\Subject;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    //
    public function create()
    {
        $categories = Category::get();
        $subjects = Subject::get();
        return view('admin.pages.subjects.create', compact('subjects','categories'));
    }

    public function store(Request $request)
    {
        $img = null;
        if (isset($request->img)) {
            $img = $request->img->store('public/img/subjects');
        }
        Subject::create([
            'user_id' => Auth::user()->id,
            'date' => $request->date,
            'category_id' => $request->category_id,
            'name' => $request->name,
            'img' => $img,
        ]);
        return redirect()->back()->with(['success' => "تم الحفظ بنجاح"]);
    }

    public function edit($id)
    {
        $categories = Category::get();
        $subject = Subject::findOrFail($id);
        return view('admin.pages.subjects.edit', compact('subject','categories'));
    }

    public function update(Request $request, $id)
    {
        $subject = Subject::findOrFail($id);
        $img = $subject->img;
        if (isset($request->img)) {
            $img = $request->img->store('public/img/subjects');
        }
        $subject->update([
            'user_id' => Auth::user()->id,
            'date' => $request->date,
            'category_id' => $request->category_id,
            'name' => $request->name,
            'img' => $img,
        ]);
        return redirect()->route('subject.create')->with(['success' => "تم التحديث بنجاح"]);
    }

    public function destroy($id)
    {
        $subject = Subject::findOrFail($id);
        $subject->delete();
        return redirect()->back()->with(['success' => "تم الحذف بنجاح"]);
    }
}
