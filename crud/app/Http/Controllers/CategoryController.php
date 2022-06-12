<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategory(){
        $cate = Category::all();
        return view('welcome', compact('cate'));
        // $category = Category::latest()->paginate(4);
        // return view('welcome', compact('category'))
        // ->with('i', (request()->input('page', 1) - 1) * 4);
    }

    public function viewCategory(Category $cate){
        return view('soloview', compact('cate'));
    }

    public function createCategory(){
        return view('create');
    }

    public function validasiCategory(Request $request){
        // $cate = new Category;
        // $cate->category_name = $request->category_name;
        // $cate->save();

        // Category::create([
        //     'category_name'=>$request->category_name
        // ]);

        $request->validate([
            'category_name'=>'required|max:225'
        ]);

        Category::create($request->all());
        return redirect('/')->with('status', 'berhasil!');
    }

    public function deleteCategory(Category $cate){
        Category::destroy($cate->id);
        return redirect('/')->with('status', 'berhasil hapus!');
    }

    public function viewEdit(Category $cate){
        return view('edit',[
            'cate'=>$cate
        ]);
    }

    public function validasiEdit(Request $request, Category $cate){
        $request->validate([
            'category_name'=>'required|max:225'
        ]);

        Category::where('id', $cate->id)->update([
            'category_name'=>$request->category_name
        ]);
        return redirect('/')->with('status', 'berhasil update!');
    }
}
