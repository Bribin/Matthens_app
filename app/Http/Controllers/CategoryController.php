<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Category;
use App\Models\Course;
use App\Models\Tag;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
        $type = $request->type;




        $categories =  Category::where('type',$type)->paginate(15);

        $data = [
            'page_title' => 'Manage Categories'
        ];

        return view('dashboard.category.index',compact('categories'),$data );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $type = $request->type;

        $categoriesList =  Category::where('type',$type)->pluck('id','title');



        $data = [
            'category' => null,
            'formMethod' => 'POST',
            'mode' => 'create',
            'url' => 'dashboard/categories',
            'page_title' => 'Add a New Category'
        ];

        return view('dashboard.category.edit',compact('categoriesList'),$data );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            $category = new Category();
            $category->title           = $request->get('title');
            $category->description     = $request->get('description');
            $category->type            = $request->get('type');
            $category->order           = $request->get('order');
            $category->status          = $request->get('status') ?? 0;
            $category->save();

            return redirect('dashboard/categories/'.$category->id.'/edit')->with('success', 'Category Created Successfully!');
        } catch (\Exception $e) {
            return $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::where('id', $id)->firstOrFail();


        $data = [
            'category' => $category,
            'formMethod' => 'PUT',
            'mode' => 'edit',
            'url' => 'dashboard/categories/'.$id,
            'page_title' => ' Edit # '.$category->title
        ];

        return view('dashboard.category.edit',$data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->title           = $request->get('title');
        $category->description     = $request->get('description');
        $category->type            = $request->get('type');
        $category->order           = $request->get('order');
        $category->status          = $request->get('status') ?? 0;
        $category->save();

        return redirect('dashboard/categories/'.$category->id.'/edit')->with('success', 'Category Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
