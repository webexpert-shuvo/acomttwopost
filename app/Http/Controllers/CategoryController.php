<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //Category Page Show

    public function index()
    {
        $allcategory =     Category::all();
        return view('admin.post.category.index',[

            'categorys'     => $allcategory,

        ]);
    }


    //category Store

    public function store(Request $request)
    {
        Category::create([
            'name'      => $request ->cate_name,
            'slug'      => Str::slug($request ->cate_name)
        ]);
        return redirect()->route('categorypage.show');
    }

    //Category Button Inactive

    public function inactive($id)
    {
      $inactive_cate_id =  Category::find($id);

      if($inactive_cate_id -> status == 'Active'){

        $inactive_cate_id -> status = 'Inactive';
        $inactive_cate_id -> update();
      }
    }


     //Category Button Active

     public function active($id)
     {
        $active_cate_id =  Category::find($id);
        if($active_cate_id -> status == 'Inactive'){
            $active_cate_id -> status = 'Active';
            $active_cate_id -> update();
        }

     }


     //Category Delete

     public function delete($id)
     {
        $cate_delete_id = Category::find($id);
        $cate_delete_id -> delete();
        return redirect()->route('categorypage.show');

     }




}


