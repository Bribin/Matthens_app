@extends('layouts.dashboard')
@section('css_before')

@endsection

@section('js_after')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#addRow").click(function() {

                var counter = $("table#sessions tbody tr.item-row").length;
                counter++;
                $(".item-row:last").after('<tr class="item-row"><td><div class="form-group"><div class="form-control-wrap"><input type="hidden" name="batchTimings[' + counter + '][id]" value="' + counter + '"> <input type="text" data-provide="datepicker" name="batchTimings[' + counter + '][date]" class="form-control form-control-lg date-picker" placeholder="Date" required="required" value="2022-04-16 00:00:00"></div></div></td><td><input placeholder="Session Title" value="Session Title" name="batchTimings[' + counter + '][title]" class="form-control form-control-lg" required></td><td><input type="text" name="batchTimings[' + counter + '][time]" class="form-control form-control-lg time-picker" placeholder="11:30 AM" value="11:30 AM" required></td><td><div class="input-group"><input type="number" value="90"  placeholder="90" name="batchTimings[' + counter + '][duration]" class="form-control form-control-lg" required><div class="input-group-prepend"><span class="input-group-text">Mintues</span></div></div></td><td align="center" style="vertical-align:middle"><div id="deleteItem"><a href="#"><em class="remove ni ni-trash-alt"></em></a></div></td></tr>');
            });
            // Remove button functionality
            $(document).on('click', '#deleteItem .remove', function() {
                $(this).parents('.item-row').remove();
            });
        });

        // Dynamic Input Timepicker solution
        $('body').on('focus',".time-picker", function(){
            $(this).timepicker();
        });
    </script>
@endsection

@section('content')
    <div class="nk-block-head">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">{{ $page_title  }}</h3>
                <div class="nk-block-des text-soft"> </div>
            </div>
            <!-- .nk-block-head-content -->
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle"> <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                            <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Export</span></a></li>
                            <li class="nk-block-tools-opt">
                                <div class="drodown"> <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-bs-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="{{ url('/dashboard/batches/create') }}"><span>Add New Batch</span></a></li>
                                            <li><a href="#"><span>Add Team</span></a></li>
                                            <li><a href="#"><span>Import User</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- .toggle-wrap -->
            </div>
            <!-- .nk-block-head-content -->
        </div>
        <!-- .nk-block-between -->
    </div>
    <!-- .nk-block-head -->
    <div class="nk-block">
        <div class="card card-bordered card-stretch ">
            <div class="card-inner-group">
                <div class="card-inner"> {{ $batch }}
                    <h6> Sessions</h6> {{ $batch->start_date }} {{ $batch->end_date }}
                    {!! Form::model($batchtimings, array( 'method' => $formMethod, 'data-parsley-validate', 'url' => $url ,'class'=>'horizontal-form' ,'files' => 'true', 'enctype'=>'multipart/form-data')) !!}
                    <table id="sessions">
                        <tr>
                            <th class="nk-tb-col"><span class="sub-text">Date</span></th>
                            <th class="nk-tb-col"><span class="sub-text">Title</span></th>
                            <th class="nk-tb-col"><span class="sub-text">Start Time</span></th>
                            <th class="nk-tb-col"><span class="sub-text">Duration</span></th>
                            <th class="nk-tb-col"><span class="sub-text"></span></th>
                        </tr>

                        @if (count($batch->batchTimings ) > 0) )
                        <?php $count = 0; ?>
                        @foreach ($batch->batchTimings as $batchTiming)
                            <tr class="item-row">
                                <td>
                                    <div class="form-group">
                                        <div class="form-control-wrap"> {!! Form::text('batchTimings['.$count.'][id]', $batchTiming->id, ['class' => 'form-control form-control-lg', 'hidden'=>'hidden','required' =>'required']) !!} {!! Form::text('batchTimings['.$count.'][date]',$batchTiming->date, ['class' => 'form-control date-picker form-select-lg', 'date-format'=>'d/M/Y','placeholder'=>'Date','required' =>'required']) !!} </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class="form-control-wrap"> {!! Form::text('batchTimings['.$count.'][title]', $batchTiming->title, ['class' => 'form-control form-control-lg', 'placeholder'=>'Date','required' =>'required']) !!} </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class="form-control-wrap"> {!! Form::text('batchTimings['.$count.'][time]', $batchTiming->time, ['class' => 'form-control time-picker form-control-lg', 'placeholder'=>'Date','required' =>'required']) !!} </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <div class="input-group"> {!! Form::text('batchTimings['.$count.'][duration]', $batchTiming->duration, ['class' => 'form-control form-select-lg', 'placeholder'=>'Date','required' =>'required']) !!}
                                                    <div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1">Mintues</span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td align="center" style="vertical-align: middle;">
                                    <div id="deleteItem"><a href="#"><em class="remove ni ni-trash-alt"></em></a></div>
                                </td>

                            </tr>
                            <?php $count++ ?>
                            @endforeach
                        @else
                            <tr class="item-row">
                                <td>
                                    <div class="form-group">
                                        <input type="hidden" name="batchTimings[0][id]" value="0">
                                        <div class="form-control-wrap">
                                            {!! Form::text('batchTimings[0][date]', $batch->start_date ?? null , ['class' => 'form-control form-control-lg date-picker', 'placeholder'=>'Date','required' =>'required']) !!}
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class="form-control-wrap"> {!! Form::text('batchTimings[0][title]', 'Session Title', ['class' => 'form-control form-control-lg', 'placeholder'=>'Date','required' =>'required']) !!} </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class="form-control-wrap"> {!! Form::text('batchTimings[0][time]', '11:30 AM', ['class' => 'form-control time-picker form-control-lg', 'placeholder'=>'Date','required' =>'required']) !!} </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <div class="input-group">
                                                    {!! Form::text('batchTimings[0][duration]', '90', ['class' => 'form-control form-control-lg', 'placeholder'=>'Date','required' =>'required']) !!}
                                                    <div class="input-group-prepend"> <span class="input-group-text">minutes</span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <td>
                            </tr>
                        @endif
                        <tr>
                            <th colspan="6" align="left" class="text-left">
                                <button id="addRow" type="button" class="btn btn-default"><em class="ni ni-plus-circle" aria-hidden="true"></em></button>
                            </th>
                        </tr>
                    </table>
                    <div class="form-group">
                        <button type="submit" class=" float-left btn btn-lg btn-primary">Save</button>
                    </div>
                </div>
                {!! Form::close() !!} </div>
        </div>
        <!-- .card -->
    </div>
    <!-- .nk-block -->
@endsection
