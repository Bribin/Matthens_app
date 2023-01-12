
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
        float: left;
        min-width: 40px;
        padding: 10px;
        margin: 5px;
        border-radius: 5px;
        background: #0a53be;

        text-align: center;
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
</style>
<div class="nk-block "  >
    <div class="row ">
        <div class="col-lg-8">
            <div class="card card-bordered">
                <div class="card-header">Featured

                </div>
                <div class="card-inner">
                    <div class="question-bank pb-3">
                        <div class="question-bank-header">
                          <h4>Question No.1</h4>
                        </div>
                        <div class="question-box mt-5">
                            <div class="question">
                                <h3>
                                    Who among the following is not a dramatist?</h3>
                            </div>
                           <div class="options-list">
                               <ul class="custom-control-group">
                                   <li>
                                       <div class="custom-control custom-control-sm custom-radio custom-control-pro">
                                           <input type="radio" class="custom-control-input" name="btnRadio" id="btnRadio1">
                                           <label class="custom-control-label" for="btnRadio1">Girish R. Karnad</label>
                                       </div>
                                   </li>
                                   <li>
                                       <div class="custom-control custom-control-sm custom-radio custom-control-pro">
                                           <input type="radio" class="custom-control-input" name="btnRadio" id="btnRadio2">
                                           <label class="custom-control-label" for="btnRadio2">Badal Sircar</label>
                                       </div>
                                   </li>
                                   <li>
                                       <div class="custom-control custom-control-sm custom-radio custom-control-pro">
                                           <input type="radio" class="custom-control-input" name="btnRadio" id="btnRadio3">
                                           <label class="custom-control-label" for="btnRadio3">ayanta Mahapatra</label>
                                       </div>
                                   </li>
                                   <li>
                                       <div class="custom-control custom-control-sm custom-radio custom-control-pro">
                                           <input type="radio" class="custom-control-input" name="btnRadio" id="btnRadio4">
                                           <label class="custom-control-label" for="btnRadio4">Vijay Tendulkar
                                           </label>
                                       </div>
                                   </li>
                               </ul>
                           </div>
                        </div>
                    </div>

                    <div class="col-lg-12 ">
                        <a href="#" class="btn btn-success">Save & Next</a>
                        <a href="#" class="btn btn-outline-gray">Clear</a>
                        <a href="#" class="btn btn-info">Save & Mark for Review</a>
                        <a href="#" class="btn btn-primary">Mark for Review & Next</a>
                    </div>
                </div>


            </div>

        </div>
        <div class="col-lg-4">
            <div class="card card-bordered">
                <div class="card-header border-bottom">Notes

                </div>
                <div class="card-inner ">
                    <ul>
                        <li>Not Visited</li>
                        <li>Not Answered</li>
                        <li>Answered</li>
                        <li>Marked for Review</li>
                        <li>Answered & Marked for Review</li>
                    </ul>
                </div>


            </div>

            <div class="card card-bordered">
                <div class="card-header border-bottom">No of Question
                </div>
                <div class="card-inner card-scroll">
                    <h4></h4>
                    <div class="question-count-block">
                    <ul >
                        @foreach (range(1, 100) as $item)
                            <li><a href="#">{{ $item }}</a> </li>
                        @endforeach
                    </ul>

                </div>

                </div>


            </div>
        </div>







</div><!-- .nk-block -->



@endsection
