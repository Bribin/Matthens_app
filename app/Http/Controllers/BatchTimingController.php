<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\BatchTiming;
use App\Models\Course;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BatchTimingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BatchTiming  $batchTiming
     * @return \Illuminate\Http\Response
     */
    public function show(BatchTiming $batchTiming)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BatchTiming  $batchTiming
     * @return \Illuminate\Http\Response
     */
    public function edit(BatchTiming $batchTiming)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BatchTiming  $batchTiming
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BatchTiming $batchTiming)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BatchTiming  $batchTiming
     * @return \Illuminate\Http\Response
     */
    public function destroy(BatchTiming $batchTiming)
    {
        //
    }

    public function ManageTimings($id)
    {


        $batch = Batch::where('id', $id)->firstOrFail();
        $course = Course::where('id', $batch->course_id)->firstOrFail();
        $data = [
            'batchtimings' => null,
            'formMethod' => 'POST',
            'mode' => 'CREATE',
            'url' => 'dashboard/batch/'.$batch->id.'/timings',
            'page_title' => '# '.$course->title.' - '.$batch->title
        ];

        return view('dashboard.timings.edit',compact('batch','course'),$data);
    }


    public function addTimings(Request $request, $id)
    {




        foreach ($request->batchTimings as $item)
        {

                $batchTimings = new BatchTiming();
                $batchTimings->batch_id = $id;
                $batchTimings->title = $item['title'];
                $batchTimings->date = Carbon::parse( $request->date)->format('Y-m-d');
                $batchTimings->time = Carbon::parse( $request->time)->format('H:i:s');
                $batchTimings->duration = $item['duration'];
                $batchTimings->status          = $request->get('status') ?? 0;
                $batchTimings->save();

        }

        return redirect('dashboard/batch/'.$id.'/timings/');

    }


}
