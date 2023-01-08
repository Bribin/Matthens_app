<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Category;
use App\Models\Course;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses =  Course::orderBy('created_at','DESC')->paginate(10);
        $data = [
            'page_title' => 'Manage Courses'
        ];

        return view('dashboard.courses.index',compact('courses'),$data );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryList  = Category::where('type','category')->pluck('title','id');


        $tagsList  = Tag::where('type','tags')->pluck('name','name');




        $data = [
            'course' => null,
            'formMethod' => 'POST',
            'mode' => 'CREATE',
            'url' => 'dashboard/courses',
            'page_title' => 'Add a New Course'
        ];

        return view('dashboard.courses.edit', compact('tagsList','categoryList'),$data );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $tags = $request->get('tag_list');

        $destination    = 'images/courses/'; // image file upload path
        try {

            if ($request->hasFile('cover_image')) {
                $file       = $request->file('cover_image');
                $extension  = $file->getClientOriginalExtension(); // getting image extension
                $fileName   = str_replace(" ","-",strtolower($request->get('title'))).'_'.'cover'.'_'.time().'.'.$extension; // renameing image
                Storage::putFileAs($destination,$file, $fileName);
                $coverfileName   = $destination.$fileName;//file name for saving to db

            }
            $course = new Course();
            $course->user_id         = Auth::user()->id;
            $course->title           = $request->get('title');
            $course->description     = $request->get('description');
            $course->language        = $request->get('language');
            $course->level           = $request->get('level');
            $course->intro_url       = $request->get('intro_url');
            $course->price           = $request->get('price');
            $course->cover_image     = $coverfileName ?? null;
            $course->discount_price  = $request->get('discount_price');
            $course->status          = $request->get('status') ?? 0;
            $course->save();

            $course->categories()->sync($request->input('category_list'));
            $course->syncTagsWithType($tags, 'tags');

            return redirect('dashboard/courses/'.$course->id.'/edit')->with('success', 'Courses Created Successfully!');
        } catch (\Exception $e) {
            return $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $courses
     * @return \Illuminate\Http\Response
     */
    public function show(Course $courses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $courses
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::where('id', $id)->firstOrFail();
        $categoryList  = Category::where('type','category')->pluck('title','id');
        $tagsList =   Tag::where('type','tags')->pluck('name','name');




        $data = [
            'course' => $course,
            'formMethod' => 'PUT',
            'mode' => 'EDIT',
            'url' => 'dashboard/courses/'.$id,
            'page_title' => ' Edit # '.$course->title
        ];

        return view('dashboard.courses.edit',compact('tagsList','categoryList'),$data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $courses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $tags = $request->get('tag_list');

        try {
            $course = Course::findOrFail($id);
            $course->user_id         = Auth::user()->id;
            $course->title           = $request->get('title');
            $course->description     = $request->get('description');
            $course->language        = $request->get('language');
            $course->level           = $request->get('level');
            $course->intro_url       = $request->get('intro_url');
            $course->price           = $request->get('price');
            $course->cover_image     = $coverfileName ?? null;
            $course->discount_price  = $request->get('discount_price');
            $course->status          = $request->get('status') ?? 0;

            $course->save();
            $course->categories()->sync($request->input('category_list'));
            $course->syncTagsWithType($tags, 'tags');


//            Alert::success('Success', 'Category Updated Successfully');
            return redirect('dashboard/courses/'.$course->id.'/edit')->with('success', 'Courses Updated Successfully!');
        }
        catch (\Exception $e) {
            return $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $courses
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
//        Alert::alert('Deleted', 'Course Deleted Successfully');
        return redirect('dashboard/courses/')->with('Deleted', 'Section Deleted Successfully!');
    }


    public function builder($id)
    {
        $course = Course::where('id', $id)->firstOrFail();
        $categoryList  = Category::where('type','category')->pluck('title','id');
        $tagsList =   Tag::where('type','tags')->pluck('name','name');




        $data = [
            'course' => $course,
            'formMethod' => 'PUT',
            'mode' => 'EDIT',
            'url' => 'dashboard/courses/'.$id,
            'page_title' => ' Edit # '.$course->title
        ];

        return view('dashboard.courses.builder',compact('tagsList','categoryList'),$data);
    }
}



