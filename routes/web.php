<?php

use App\Models\Exam;
use Illuminate\Support\Facades\Route;
use App\Imports\ExamImport;
use App\Imports\ExamPaperImport;
use App\Imports\ExamSectionImport;
use App\Imports\ExamQuestionImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
Auth::routes();

Route::get('/migrate', function(){
    \Artisan::call('migrate');
    dd('migrated!');
});


Route::get('/', function () {
    $exams = App\Models\Exam::orderBy('id', 'ASC')->paginate(10);
    return view('welcome',compact('exams'));

});

Route::get('/exams/{slug}/exam-papers', function ($slug) {

    $exampapers   = \App\Models\ExamPaper::where('ExamCode', $slug)->get();

    return view('users.exam-single',compact('exampapers'));
//    return view('users.course-single');
});


//Route::get('/exams/{slug}/start-exam', function ($slug) {
//////    $examsections = \App\Models\ExamSection::where('PaperCode', $slug)->get();
//////
//////    $examquestions = \App\Models\ExamQuestion::where('PaperCode', $slug)->get();
////    return view('users.exam',compact('examquestions','examsections') );
////    return view('users.course-single');
//});







Route::get('/account', function () {
    return view('account');
});






Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





Route::get('legal/terms-and-conditions', function () {
    return view('terms-conditions');
});

Route::get('legal/terms-of-service', function () {
    return view('terms-service');
});

Route::get('legal/cookie-policy', function () {
    return view('cookie-policy');
});


Route::get('legal/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('legal/content-policy', function () {
    return view('content-policy');
});


Route::get('/courses/ui-ux-design-essential-training', function () {
    return view('course-single');
});
Route::get('/courses/ux-ui-demo-class', function () {
    return view('course-demo');
});





Route::get('/job-board/post-job', function () {
    return view('dashboard.post-job');
});


//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('optimize');
    $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('config:cache');
    return '<h1>View cache cleared</h1>';
});


Route::group(['middleware'=>['auth']], function(){
        Route::get('/dashboard', function () {
            return view('dashboard.index');
        });
        Route::resource('dashboard/exams', \App\Http\Controllers\ExamController::class);
        Route::resource('dashboard/users', \App\Http\Controllers\UserController::class);
        Route::get('dashboard/mentors',  [\App\Http\Controllers\UserController::class, 'mentors']);

        Route::resource('dashboard/job-board', \App\Http\Controllers\JobController::class);
        Route::resource('dashboard/courses', \App\Http\Controllers\CoursesController::class);
        Route::resource('dashboard/batches', \App\Http\Controllers\BatchController::class);
        Route::resource('dashboard/categories', \App\Http\Controllers\CategoryController::class);
        Route::get('dashboard/courses/{id}/builder',  [\App\Http\Controllers\CoursesController::class, 'builder']);

        Route::get('dashboard/batch/{id}/timings',  [\App\Http\Controllers\BatchTimingController::class, 'ManageTimings']);
        Route::post('dashboard/batch/{id}/timings',  [\App\Http\Controllers\BatchTimingController::class, 'addTimings']);


});

Route::get('/courses', function () {

    $courses = \App\Models\Course::with('batches')->paginate(6);
    return view('users.courses',compact('courses'));
});
Route::get('/importExams', function () {

    Excel::import(new \App\Imports\ExamImport(), 'exams.xlsx');

    return redirect('/')->with('success', 'All good!');
});

Route::get('/importExamPapers', function () {

    Excel::import(new \App\Imports\ExamPaperImport(), 'exam_papers.xlsx');

    return redirect('/')->with('success', 'All good!');
});

Route::get('/importExamSection', function () {

    Excel::import(new \App\Imports\ExamSectionImport(), 'exam_sections.xlsx');

    return redirect('/')->with('success', 'All good!');
});

Route::get('/importQuestionSection', function () {

    Excel::import(new \App\Imports\ExamQuestionImport(), 'exam_questions.xlsx');

    return redirect('/')->with('success', 'All good!');
});

Route::get('/importExamSubjects', function () {

    Excel::import(new \App\Imports\ExamSubjectImport(), 'exam_subjects.xlsx');

    return redirect('/')->with('success', 'All good!');
});

Route::get('/importQuestionAnswers', function () {

    Excel::import(new \App\Imports\ExamAnswersImport(), 'exam_answers.xlsx');

    return redirect('/')->with('success', 'All good!');
});





Route::get('/course/{slug}/overview', function ($slug) {

    $course = \App\Models\Course::where('slug', $slug)->firstOrFail();


//    return $course;
    return view('users.course-single',compact('course'));
//    return view('users.course-single');
});


Route::group(['middleware'=>['auth']], function(){
    Route::get('/membership-central', function () {

        $exams =  Exam::orderBy('created_at','DESC')->paginate(10);
        return view('users.index',compact('exams') );

    });

    Route::get('/account-profile', function () {
        return view('users.profile');
    });

    Route::get('/exams/{slug}/start-exam', function ($slug) {

        $UserId = \Illuminate\Support\Facades\Auth::id();

        $data = [
            'UserId' => $UserId,
            'ExamStartTime' => date('Y-m-d H:i:s'),
            'ExamEndTime' => date('Y-m-d H:i:s'),

        ];



        $ExamSections = \App\Models\ExamSection::where('PaperCode', $slug)->get();
        $ExamPaper = \App\Models\ExamPaper::where('PaperCode', $slug)->get()->toArray();
        $ExamQuestions = \App\Models\ExamQuestion::where('PaperCode', $slug)->with('examanswers')->get();



        return view('users.exam',compact('ExamQuestions','ExamSections','ExamPaper','data') );

    });

    Route::post('/exams/submit-exam', function (Request $request) {

        $answers = $request->get('answers');
        $answers =  json_encode($answers);

        $answer = new \App\Models\UserAnswer();
        $answer->UserAnswerID      = Str::random(12);
        $answer->ExamCode          = $request->get('ExamCode');
        $answer->PaperCode         = $request->get('PaperCode');
        $answer->UserId            = $request->get('UserId');
        $answer->Answer            = $answers;
        $answer->ExamStartTime     = $request->get('ExamStartTime');
        $answer->ExamEndTime       = $request->get('ExamEndTime');
        $answer->save();

        $CorrectAnswers = \App\Models\ExamQuestion::where('PaperCode', $answer->PaperCode )->with('examanswers')->get();








    });



    Route::get('/check-answers/{slug}/start-exam', function ($slug) {
        $ExamQuestions = \App\Models\ExamQuestion::where('PaperCode', $slug)->with('examanswers')->get();
    });


});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
