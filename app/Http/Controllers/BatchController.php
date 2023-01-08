<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batches =  Batch::orderBy('created_at','DESC')->paginate(10);
        $data = [
            'page_title' => 'Manage Batches'
        ];

        return view('dashboard.batches.index',compact('batches'),$data );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courseList  = Course::pluck('title','id');
        $mentorList  = User::pluck('name','id');
//



        $data = [
            'batch' => null,
            'formMethod' => 'POST',
            'mode' => 'CREATE',
            'url' => 'dashboard/batches',
            'page_title' => 'Add a New Batch'
        ];

        return view('dashboard.batches.edit', compact('courseList','mentorList'),$data );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $batch = new Batch();
        $batch->title           = $request->get('title');
        $batch->course_id       = $request->get('course_id');
        $batch->mentor_id       = $request->get('mentor_id');
        $batch->type            = $request->get('type');
        $batch->mode            = $request->get('mode');
        $batch->description     = $request->get('description');
        $batch->start_date      = $request->get('start_date');
        $batch->end_date        = $request->get('end_date');
        $batch->start_time      = $request->get('start_time');
        $batch->duration        = $request->get('duration');
        $batch->status          = $request->get('status') ?? 0;
        $batch->save();
        $batch->courses()->sync($request->input('course_id'));

        return redirect('dashboard/batches/'.$batch->id.'/edit')->with('success', 'Courses Updated Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function show(Batch $batch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $batch = Batch::where('id', $id)->firstOrFail();

        $courseList  = Course::pluck('title','id');
        $mentorList  = User::pluck('name','id');

        $data = [
            'batch' => $batch,
            'formMethod' => 'PUT',
            'mode' => 'edit',
            'url' => 'dashboard/batches/'.$id,
            'page_title' => ' Edit Batch # '.$batch->title
        ];

        return view('dashboard.batches.edit',compact('courseList','mentorList'),$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


//        return  Carbon::parse($request->get('start_time'))->format('H:i:s');


        $batch = Batch::findOrFail($id);
        $batch->title           = $request->get('title');
        $batch->course_id       = $request->get('course_id');
        $batch->mentor_id       = $request->get('mentor_id');
        $batch->type            = $request->get('type');
        $batch->mode            = $request->get('mode');
        $batch->description     = $request->get('description');
        $batch->start_date      = $request->get('start_date');
        $batch->end_date        = $request->get('end_date');
        $batch->start_time      = $request->get('start_time');
        $batch->duration        = $request->get('duration');
        $batch->save();
        $batch->courses()->sync($request->input('course_id'));
        return redirect('dashboard/batches/'.$batch->id.'/edit')->with('success', 'Batch Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Batch $batch)
    {
        //
    }



    public function ManageTimings($id)
    {

    }
}
