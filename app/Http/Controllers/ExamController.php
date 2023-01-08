<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Category;
use App\Models\Course;
use App\Models\Exam;
use App\Models\quiz;
use App\Models\Tag;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exams =  Exam::orderBy('created_at','DESC')->paginate(10);
        $data = [
            'page_title' => 'Manage Exams'
        ];

        return view('dashboard.exams.index',compact('exams'),$data );
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
            'exam' => null,
            'formMethod' => 'POST',
            'mode' => 'CREATE',
            'url' => 'dashboard/exams',
            'page_title' => 'Add a New Exam Series'
        ];

        return view('dashboard.exams.edit', compact('tagsList','categoryList'),$data );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $exam = new Exam();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $exam = Exam::where('id', $id)->firstOrFail();
        $categoryList  = Category::where('type','category')->pluck('title','id');
        $tagsList =   Tag::where('type','tags')->pluck('name','name');
        $data = [
            'exam' => $exam,
            'formMethod' => 'PUT',
            'mode' => 'EDIT',
            'url' => 'dashboard/exams/'.$id,
            'page_title' => ' Edit # '.$exam->title
        ];

        return view('dashboard.exams.edit',compact('tagsList','categoryList'),$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exam $exam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $exam)
    {
        //
    }
}
