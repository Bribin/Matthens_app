
@extends('layouts.user-dashboard')
@section('content')

<style>
    .question-count-block{
        max-height: 300px;
        height: 300px;
    }
    .question-count-block ul{

    }
    .question-count-block ul li{
        font-weight: bold;
        float: left;
        min-width: 45px;
        padding: 8px;
        margin: 12px;
        box-shadow: 0 5px 0 0 #ccc;
        -webkit-transition: .3s ease-in-out;
        transition: .3s ease-in-out;
        color: #5d2057;
        text-decoration: none;
        cursor: pointer;
        border-radius: 8px;
        background-color: #f2f2f2;
        text-align: center;
    }
    .active{
        box-shadow: none;
    }

    .question-count-block ul li:hover {
        box-shadow: none;
        -webkit-transform: translate(0,6px);
        -ms-transform: translate(0,6px);
        transform: translate(0,6px);
    }
    .question-count-block ul li a{
        color: #FFFFFF;
    }
    .question-count-block ul li a:hover{
        background: #0a53be;
    }
    .options-list{
        margin-top: 30px;
    }
    .options-list .custom-control-group{
        display: block;
    }
    .options-list .custom-control-pro.custom-control-sm {
        display: grid;
    }
    .card-scroll{
        height: 300px;
        overflow: scroll;
        padding-bottom: 30px;
        margin-bottom: 30px;
    }




    .que-save-mark{}
    .que-mark{}
    .exam-inform{}
    .exam-inform ul{}
    .exam-inform ul li{
        padding: 8px 10px;
    }

    .question-status{
        margin-left: 20px;
        margin-right: 20px;
        font-weight: bold;
        float: left;
        width: 30px;
        box-shadow: 0 2px 0 0 #ccc;
        color: #5d2057;
        text-decoration: none;
        cursor: pointer;
        border-radius: 4px;
        background-color: #f2f2f2;
        text-align: center;
    }

    .not-answered{
        background-color: #e7040f !important;
        border-radius:5px ;
        color: #FFFFFF !important;
        box-shadow: none;
    }
    .answered{
        background-color: #50b167 !important;
        border-radius:5px ;
        color: #FFFFFF;
        box-shadow: none;
    }
    .under-review{
        background-color: #8D5B98 !important;
        border-radius:5px ;
        color: #FFFFFF;
        box-shadow: none;

    }
    .answered-review{
        background-color: #461a42 !important;
        border-radius:5px ;
        color: #FFFFFF;
        box-shadow: none;
        font-weight: bold;

    }

    .timer-title{
        background: rgb(0 160 106);
        padding: 10px;
        color: #FFFFFF;
        height: 48px;
        width: 140px;
        display: inline-block;
        border-radius: 5px;
        box-shadow: 0 5px 0 0 #ccc;
        -webkit-transition: .3s ease-in-out;
        transition: .3s ease-in-out;
        letter-spacing: 2px;
        text-align: center;
    }
    .time-ending{
        background: rgb(236 11 67);

    }
    .selected {
        background: #6ec100 !important;
        color: #fff;
        border: 3px solid #555;
    }

    .visited{
        background: #6ec100 !important;
        color: #fff;
    }

    .question-block{
        padding: 30px;
        border: 1px solid #f9f9f9;
        border-radius: 5px;
        background: #f8f8f8;
        margin: 20px;
    }

    .question-block { display: block; }
    .question-block ~ .question-block { display: none; }

    .save {
        background: red !important;
    }


    .review {
        background: #6c4298 !important;
    }

    #list ul{
        list-style-type: none;
    }
    #list ul li{
        list-style-type: none;
    }
</style>

<div class="nk-block "  >
    <form method="post" action="{{ url('/exams/submit-exam') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
    <div class="row ">

        <div class="col-lg-12 pb-5">
            <div class="card card-bordered">
                <div class="card-header">Featured</div>
                <div class="card-inner">
                    <input type="hidden" id="TestDuration" name="ExamDuration" value="{{ $ExamPaper[0]['TotalMinutes']  }}" />
                    <input type="hidden" id="ExamPaperCode" name="ExamPaperCode" value="{{ $ExamPaper[0]['PaperCode']  }}" />
                    <input type="hidden" id="ExamExamCode" name="ExamExamCode" value="{{ $ExamPaper[0]['ExamCode']  }}" />

                  <h4> Time Left :  <div class="timer-title"></div> </h4>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card card-bordered">
                <div class="card-inner">
                    @foreach ($ExamSections as $section)
                        <a class="btn btn-outline-primary" href="#">{{  $section->Name  }}</a>
                    @endforeach
                </div>
            </div>


            <div class="card card-bordered">
                <div class="card-header">Featured

                </div>
                <div class="card-inner" >

                    @foreach ($ExamQuestions as $question)
                               <div class="question-block pb-3" id="question-{{ $question->id }}">
                                   <div class="question-bank-header">
                                       <h5>Question No.{{$loop->iteration}}</h5>
                                   </div>
                                   <div  class="question-box mt-5  ">
                                       <div class="question">
                                           <h5>{{ $question->Description }}</h5>
                                       </div>
                                       <div class="options-list">

                                           <ul class="custom-control-group">
                                               @foreach ($question->examanswers as $option)
                                                   <li>
                                                       <div class="custom-control custom-control-sm custom-radio custom-control-pro">
                                                           <input type="radio" class="custom-control-input" value="{{  $option->Option }}" name="answers[{{  $question->id }}]" id="btnRadio-{{  $option->id }}">
                                                           <label class="custom-control-label" for="btnRadio-{{  $option->id }}">{{  $option->Option .')  '.$option->Answer }}</label>
                                                       </div>
                                                   </li>
                                               @endforeach
                                           </ul>
                                       </div>
                                   </div>

                               </div>
                    @endforeach
                        <div class="col-lg-12 pt-5 ">
                            <button type="button" id="prev" class="btn btn-primary">Previous</button>
                            <button type="button" id="next" class="btn btn-secondary">Next</button>
                            <button type="button" id="save" class="btn btn-danger ">Save</button>
                            <button type="button" id="review" class="btn btn-info ">Review</button>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-bordered">
                <div class="card-header border-bottom">Notes
                </div>
                <div class="card-inner ">
                   <div class="exam-inform">
                       <ul>

                           <li> Not Visited</li>
                           <li><div class="question-status not-answered">1</div>Not Answered</li>
                           <li> <div class="question-status answered ">1</div>Answered</li>
                           <li><div class="question-status under-review">1</div>Marked for Review</li>
                           <li><div class="question-status answered-review">1</div>Answered & Marked for Review</li>

                       </ul>
                   </div>
                </div>
            </div>

            <div class="card card-bordered">
                <div class="card-header border-bottom">No of Question
                </div>
                <div class="card-inner card-scroll">
                    <h4></h4>
                    <div class="question-count-block " >
                        <ul id="list">
                            @foreach ($ExamQuestions as $question)
                                <li data-target="#question-{{ $question->id }}" value="{{ $question->id }}">{{$loop->iteration}}</li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="assessment-footer">

        </div>
        <div class="col-lg-12">
            <button type="submit"class="btn btn-primary">Submit Exam</button>
        </div>

</div><!-- .nk-block -->



@endsection
