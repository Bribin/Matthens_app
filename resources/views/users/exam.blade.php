
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
        margin: 10px;
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

    .hideShow{
        display:none;
        padding:10px;
        width:100%;
        margin-bottom:10px;
    }


    .que-save-mark{}
    .que-mark{}
    .exam-inform{}
    .exam-inform ul{}
    .exam-inform ul li{
        border: 1px solid #0a53be;
        margin-top: 5px;
        padding: 20px 10px;
    }

    .question-status{
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
        background-color: #f2f2f2;
    }
    .answered{}
    .under-review{}
    .answered-review{
        font-weight: bold;
        border-radius: 5px;
        width: 30px;
        height: 30px;
        background: #00C985;
        text-align: center;

        display: inline-block;
        vertical-align: middle;
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
</style>


<div class="nk-block "  >
    <div class="row ">
        <div class="col-lg-12 pb-5">
            <div class="card card-bordered">
                <div class="card-header">Featured</div>
                <div class="card-inner">
                    <input type="hidden" id="TestDuration" value="{{ $ExamPaper[0]['TotalMinutes']  }}" />
                  <h4> Time Left :  <div class="timer-title"></div> </h4>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card card-bordered">
                <div class="card-inner">


                    @foreach ($ExamSections as $section)
                        <a class="btn btn-outline-primary" href="#">  {{  $section->Name  }}</a>
                    @endforeach
                </div>
            </div>


            <div class="card card-bordered">
                <div class="card-header">Featured

                </div>
                <div class="card-inner">

                    @foreach ($ExamQuestions as $question)
                        <div  class="question-bank pb-3 hideShow ">
                            <div class="question-bank-header">
                                <h5>Question No.{{$loop->iteration}}</h5>
                            </div>
                            <div id="questionID-{{ $question->id }}" class="question-box mt-5  ">
                                <div class="question ">
                                    <h5>{{ $question->Description }}</h5>
                                </div>
                                <div class="options-list">

                                    <ul class="custom-control-group">
                                        @foreach ($question->examanswers as $option)
                                        <li>
                                            <div class="custom-control custom-control-sm custom-radio custom-control-pro">
                                                <input type="radio" class="custom-control-input" name="btnRadio" id="btnRadio-{{  $option->id }}">
                                                <label class="custom-control-label" for="btnRadio-{{  $option->id }}">{{  $option->Option .')  '.$option->Answer }}</label>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-12 pt-5 ">
                                <div class="next btn btn-success">Save & Next</div>
                                <a href="#" class="btn btn-outline-gray">Clear</a>
                                <a href="#" class="btn btn-info">Save & Mark for Review</a>
                                <a href="#" class="btn btn-primary">Mark for Review & Next</a>
                            </div>
                        </div>

                    @endforeach



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
                           <li><div class="question-status">1</div>Not Answered</li>
                           <li> <div class="question-status">1</div>Answered</li>
                           <li><div class="question-status">1</div>Marked for Review</li>
                           <li><div class="question-status">1</div>Answered & Marked for Review</li>


                       </ul>
                   </div>
                </div>


            </div>

            <div class="card card-bordered">
                <div class="card-header border-bottom">No of Question
                </div>
                <div class="card-inner card-scroll">
                    <h4></h4>
                    <div class="question-count-block">
                    <ul class="test-questions" >
                        @foreach ($ExamQuestions as $question)
                            <li><div class="test-ques" id="{{ $question->id }}" >{{$loop->iteration}}</div> </li>
                        @endforeach
                    </ul>

                </div>

                </div>


            </div>
        </div>







</div><!-- .nk-block -->



@endsection
