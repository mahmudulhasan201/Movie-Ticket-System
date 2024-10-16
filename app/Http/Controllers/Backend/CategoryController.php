<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;

class CategoryController extends Controller
{
    public function category()
{

    $allCategory=Category::paginate(5);
       
    return view('backend.pages.category.category',compact('allCategory'));   
}

public function category_form()
{
 
 return view('backend.pages.category.category_form');

}

public function store(Request $request)
{


        $validation=Validator::make($request->all(),
        [
            'cat_name'=>'required',
        ]);
        
      if($validation->fails())
      {
        // notify()->error($validation->getMessageBag());
        return redirect()->back();
      }


        // dd($request->all()); //to see data comming from form

        //lets store data into database
       // dd($request->all());
        Category::create([
            //bam pase table er column name => dan pase input field er name
            'id'=>$request->id,
            'name'=>$request->cat_name,
        ]);

        return redirect()->route('category');    
}

  //Edit
  public function editCategory($id)
  {

    $categories = Category::find($id);
    return view('backend.pages.category.editCategory', compact('categories'));
  }

  //update
  public function update(Request $request, $id)
  {
    $categories = Category::find($id);

    $validation=Validator::make($request->all(),
    [
        'cat_name'=>'required',
    ]);


    if ($validation->fails()) {
      notify()->error($validation->getMessageBag());
      return redirect()->back();
    }


    $categories-> update([
      'id'=>$request->id,
      'name'=>$request->cat_name,
    ]);
    return redirect()->route('category');
  }


//delete
public function deleteCategory($id){
  $delete = Category::find($id);
  $delete->delete();
  notify()->success('Category Deleted');
  return redirect()->back();
}
}