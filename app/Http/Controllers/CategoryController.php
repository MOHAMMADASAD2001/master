<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Prdouct;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    public function index()
    {
        $categories= Category::all();
        return view('dashboard.categories' ,  compact('categories'));

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function category()
    {
        $product = DB::table('products')->take(6)->get();

        $category= Category::all();

        return view ('pages.index',compact('category','product'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('dashboard.createcategories');

    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
        ]);
    
        $category = [
            'name' => $request->name,
            'description' => $request->description,
        ];
    
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
            $category['image'] = $filename;
        }
    
        Category::create($category);
    
        return redirect('categorydash')
            ->with('success', 'Category added successfully');
    }
    
    
   
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
  
     public function edit($id)
     {
         $categories=Category::find($id);
         return view('dashboard.editcategories')->with('category',$categories);
     }
  
    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
        ]);

        $category['name'] = $request->name;
        $category['description'] = $request->description;

        $filename = '';

        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
            $category['image'] = $filename;
        } else {
            unset($category['image']);
        }


        Category::where(['id' => $id])->update($category);
        return redirect('categorydash')->with('success','category updated successflly') ;  

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect('categorydash')->with('success','category deleted successfully');
    }
}
