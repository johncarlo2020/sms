@extends('layouts.side')

@section('survey')
    <!-- <p>{{ $survey->name }}</p> -->
    <div class="row" style="padding-top: 40px;">
        <div class="col-md-4 text-right">
            <span class="survey-add-logo">
                <!-- <i class="fas fa-picture-o" aria-hidden="true"></i> -->
                <i class="fas fa-regular fa-image"></i>
                Add logo
            </span>
        </div>
        <div class="col-md-8">
            <h1 class="h3 mb-4 title-new-survey">
                {{ $survey->name }}
            </h1>
        </div>

    <hr style="margin-top: 20px; border: 1px solid;">

    <div class="add-question-container">
        <div class="col-md-12 text-center">
            <span>
                <i class="fas fa-regular fa-image" aria-hidden="true" style="font-size: 130px;"></i>            
            </span>
            <h4>This page is empty. <b class="h3 mb-4 title-new-survey">ADD A QUESTION</b></h4>

        <div style="border-bottom: 1px dashed #b8b1b1;">
            <!-- <hr class="line-dashed"/> -->
                <a class="btn-add-question" href="javascript:void(0);" style="position: relative;
    top: 23px; font-size: 27px;">
                    <i class="fa fa-plus" aria-hidden="true" style="background: #fff;
        color: gray;
        border: 2px solid #3cb9a5;
        border-radius: 50%;
        font-size: 15px;
        padding: 10px;"></i>
                </a>    
                    </a>
                </a>    
        </div>  
                </div>
        </div>  
        </div>
    </div>


    
        <div class="choices-container hide">
            <a href="javascript:void(0);" class="btn-choice-minus">
                <i class="fas fa-regular fa-minus-circle" aria-hidden="true"></i>
            </a>

            <div class="col-md-12 row padding-0 margin-0 shadow">

                @foreach ($question_types as $key => $value)
                    <div class="col-md-2">
                        <a href="javascript:void(0);" class="qtype_choice" data-id="{{ $value->id }}" data-name="{{ $value->name }}" data-bs-toggle="modal" data-bs-target="#modal-add-question">
                            <i class="fas fa-regular fa-check" aria-hidden="true"></i>
                            <p class="text-choice"  data-id="{{ $value->id }}">{{ $value->name }}</p>
                        </a>
                    </div>
                @endforeach            
            </div>
        </div>

        <div class="survey-created padding-0" style="margin-top: 50px;">
            <div class="col-md-12">
                <div class="preview-title-container">
                    <h4 class="h3 mb-4 title-new-survey text-left">1. Travel Award 2022*</h4>
                    <p class="text-left">Select one country only</p>
                </div>

                <div class="bloc">
                    <select class="select_class_preview" size="5">
                        <option class="survey-created-options shadow" value="1">Japan</option>
                        <option class="survey-created-options shadow" value="2">Korea</option>
                        <option class="survey-created-options shadow" value="3">USA</option>
                    </select>
                </div>

            <!-- <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary col-md-12 survey-created-options shadow">
                    <input type="radio" name="options" id="option1" autocomplete="off" checked> Japan
                </label>
                <label class="btn btn-secondary col-md-12 survey-created-options shadow">
                    <input type="radio" name="options" id="option2" autocomplete="off"> Korea
                </label>
            </div> -->

            </div>

        </div>
    </div>

    <!-- Modal Add Questions -->
    <form method="post" id="question_form" action="{{ route('survey') }}">
     
        <div class="modal fade" id="modal-add-question" tabindex="-1" aria-labelledby="modal-add-question"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- <h5 class="modal-title" id="modal-add-question">Start a new survey</h5> -->
                        <h4 class="h3 title-page">Add Question ( <span id="qtype"></span> )  </h4>
                        <input type="hidden" name="question_type" id="question_type">
                        <input type="hidden" name="survey_id" id="survey_id" value="{{$survey->id}}">

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body row">
                        <div class="form-group">
                            <textarea class="form-control" name="question" placeholder="Write your question here..." id="question"
                                rows="2" required></textarea>
                        </div>

                        <div class="form-group">
                            <span class="modal-survey-name">EXTRA DESCRIPTION</span>
                            <input type="text" name="description" class="form-control "
                                  placeholder="Add DESCRIPTION" />
                        </div>

                        <!-- answers -->
                        <div class="form-group">
                            <span class="modal-survey-name">ANSWERS</span>

                        <div class="answer-container">
                            <div class="form-group">
                                <div class="col-md-12 row">
                                    <input type="text" name="survey" class="form-control form-control-user col-md-11"
                                        id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Answer" />
                                    <div class="col-md-1">
                                        <span class="remove-answer">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </div>

                        <div class="form-group">
                            <button type="button" class="btn btn-secondary bgWhite txt-black btn-add-answer">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                ADD ANSWER
                            </button>

                            <!-- <button type="button" class="btn btn-secondary bgWhite txt-black btn-add-other-answer hide">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                ADD "OTHER" ANSWER
                            </button> -->

                        </div>

                        <div class="form-group col-md-12 row">
                            <p><span>Settings</span></p>
                            <div class="btn-group" style="background: #eee; padding: 15px 20px 15px 7px;">
                                <div class="dropdown col-md-8">
                                    <span>Display format:</span>
                                    <button class="btn dropdown-toggle add-question-dropdown" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-bars" aria-hidden="true"></i>
                                        In a row
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><button class="dropdown-item" type="button">Item 1</button></li>
                                        <li><button class="dropdown-item" type="button">Item 2</button></li>
                                    </ul>

                                </div>

                                <div class="col-md-4">
                                    <div class="form-check" style="position: relative; top: 7px;">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            Quiz mode
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="modal-footer text-left">
                        <div class="col-md-12 row">
                            <div class="form-group col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" name="required" type="checkbox" value="true"
                                        id="add-question-req">
                                    <label class="form-check-label" for="add-question-req">
                                        Required
                                    </label>
                                </div>
                            </div>

                            <div class="form-group col-md-6 text-right">
                                <button type="button" class="btn btn-secondary bgWhite txt-black pull-right"
                                    data-bs-dismiss="modal">
                                    Cancel
                                </button>

                                <button type="button" id="question_create" class="btn btn-primary btn-success pull-right">
                                    Create
                                </button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

