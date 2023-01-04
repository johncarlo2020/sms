@extends('layouts.side')

@section('survey')
    <div class="row" style="padding-top: 40px;">
        <div class="col-md-4 text-right" style="">
        
            <div class="custom-file">
                <span>
                    <label class="survey-add-logo" for="customFile">
                        <i class="fas fa-regular fa-image"></i>
                        Add logo                    
                    </label>
                </span>
                <input type="file" class="custom-file-input" id="customFile">
            </div>
        </div>
        <div class="col-md-6">
            <h1 class="h3 mb-4 title-new-survey">
                {{ $survey[0]->name }}
            </h1>
        </div>

        <div class="col-md-2">
            <p class="preview-btn shadow">
                <i class="fas fa-eye"></i>
            </p>
        </div>
    </div>

    <hr style="margin-top: 20px; border: 1px solid;">

    <div class="row" style="padding-top: 40px;">
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

    <div class="col-md-8 padding-0 margin-0-auto section-part-container" style="margin-top: 35px;">
        <!-- sections -->
        <div class="col-md-11 row" >    
            <div class="col-md-4 section-main-container">
                <div class="card shadow h-100 section-container">
                    <a href="javascript:void(0);" 
                        class="section_div" 
                        data-id="" 
                        data-name="" 
                        data-bs-toggle="modal" 
                        data-bs-target="#modal-add-section"
                    >                                 
                        <p class="section_title">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            CREATE SECTION
                        </p>
                    </a>
                </div>
            </div>

            <div class="col-md-4 part-main-container">
                <div class="card shadow h-100 part-container">
                <a href="javascript:void(0);" 
                        class="part_div" 
                        data-id="" 
                        data-name="" 
                        data-bs-toggle="modal" 
                        data-bs-target="#modal-add-part"
                    >  
                        <p class="part_title">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            CREATE PART
                        </p>
                    </a>
                </div>
            </div>
            
        </div>        
    </div>
    


       <!-- Modal Preview -->
        <div class="modal" id="modal-preview-notice">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header" style="border: none;">
                        <h4 class="modal-title"></h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body text-center">
                        <h2 class="preview-notice-title">PLEASE NOTE </h2>
                        <p class="preview-notice-desc">
                            This is a survey preview, submitted <b>answers are NOT saved.</b>
                            If you wish to fill the survey out, <a href="#" target="_blank"><b>click here.</b></a>
                        </p>

                        <a href="{{ url('/preview/') }}/{{$survey[0]->id}} " class="preview-notice-btn col-md-8"
                            type="submit" style="margin-bottom: 25px;">CONTINUE</a>
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
                            <!-- <i class="fas fa-regular fa-check" aria-hidden="true"></i> -->                           
                            @switch($value->id)
                                @case(1)
                                     <i class="fas fa-regular fa-check qtype_choice" aria-hidden="true"></i>
                                    @break
                                @case(2)
                                    <i class="fas fa-check-double qtype_choice"></i>                                       
                                    @break
                                @case(3) 
                                    <i class="fas fa-font qtype_choice"></i>
                                @break
                                @case(4) 
                                    <i class="fas fa-image qtype_choice"></i>
                                @break
                                @case(5) 
                                    <i class="fas fa-star qtype_choice"></i>
                                @break
                                @case(6) 
                                <i style="padding: 8px !important; position: relative; top: 6px;">
                                    <svg height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M406.6 374.6l96-96c12.5-12.5 12.5-32.8 0-45.3l-96-96c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224l-293.5 0 41.4-41.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-96 96c-12.5 12.5-12.5 32.8 0 45.3l96 96c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288l293.5 0-41.4 41.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/></svg>
                                </i>
                                @break

                                @default
                                    <i class="fas fa-regular fa-check qtype_choice" aria-hidden="true"></i>
                            @endswitch                        
                            <p class="text-choice"  data-id="{{ $value->id }}">{{ $value->name }}</p>
                        </a>
                    </div>
                @endforeach            
            </div>
        </div>

    @foreach ($sections as $key1 => $value)
    @if(empty($value['part']))
    @else

        @foreach($value['part'] as $key2=>$value2)
             <div class="survey-created padding-0 col-md-8" style="margin-top: 50px;">
                <div class="section_title_container">
                    <p class="section_title_h1">{{$value['name']}}: {{$value2['name']}}</p>
                    <p class="section_description">{{$value['name']}}: {{$value2['name']}}</p>
                </div>
            @if(empty($value2['questions']))
            @else
                @foreach($value2['questions'] as $key => $value1)
                    <div class="col-md-12 survey-created-container" id="survey_id_{{$value1['survey_id']}}">
                        <div class="preview-title-container">         
                            <div class="dropdown preview-edit-container">
                                <button class="btn  type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </button>
                                
                                <ul class="dropdown-menu">
                                    <li><button class="dropdown-item" type="button">Edit</button></li>
                                    <li><button class="dropdown-item" type="button">Delete</button></li>
                                </ul>
                            </div>
                            <h4 class="h3 title-new-survey text-left text-capitalize">{{$key+1}}. {{$value1['questions_name']}}</h4>
                            <p class="text-left">{{$value1['questions_description']}}</p>
                        </div>

                        @if($value1['type'] == 3)
                            <div class="form-check col-md-12 text-center align-mddle">
                                <input type="text" name="text answer" class="form-control" placeholder="Text Answer">
                            </div>
                        @else
                            @foreach($value1['answers'] as $key => $ans)
                            <div class="form-check col-md-12 row text-center align-middle" style="margin:0 auto;">
                                <input class="btn-check" type="radio" name="exampleRadios" id="{{$ans}}" value="{{$ans}}">
                                <label class="select-preview text-left btn bgWhite text-black shadow text-capitalize" for="{{$ans}}">{{$ans}}</label> 
                                <!-- <div class="preview-active-check-container hide"><i class="fas fa-check preview-active-check" aria-hidden="true"></i></div>                        -->
                            </div>
                            @endforeach
                        @endif
                    </div>
                @endforeach
              @endif
        </div>
        @endforeach
        @endif
    @endforeach
    <hr style="margin-top: 20px; border: 1px solid;">


    <!-- Hide this if Empty Question -->
    @if(empty($value2['questions']))
    @else
        <div class="col-md-12 text-right preview-survey-created-container" style="margin-bottom: 130px;">
            <div class="col-md-10">
                <button type="button" class="btn bgPrimary2 preview-survey-created">Create</button>        
            </div>
        </div>
    @endif
      

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
                        <input type="hidden" name="survey_id" id="survey_id" value="{{$survey[0]->id}}">

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body row">

                        <div class="form-group">
                            <select name="section" class="form-select sections_select" >
                                <option  disabled>-Select Section-</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select name="part" class="form-select parts_select" >
                                <option selected>-Select Part-</option>
                            </select>
                        </div>

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
                            <!-- <div class="form-group">
                                <div class="col-md-12 row">
                                    <input type="text" name="survey" class="form-control form-control-user col-md-11"
                                        id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Answer" />
                                    <div class="col-md-1">
                                        <span class="remove-answer">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div> -->
                        </div>

                        <div class="sub-question-container hide">
                            <span class="modal-survey-name">SUB QUESTION</span>
                            <!-- append here -->
                        </div>

                        </div>

                        <div class="form-group">
                            <button type="button" class="btn btn-secondary bgWhite txt-black btn-add-answer">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                ADD ANSWER
                            </button>

                            <button type="button" class="btn btn-secondary bgWhite txt-black btn-add-sub-question hide">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                ADD SUB QUESTION
                            </button>

                        </div>

                        <div class="form-group col-md-12 row">
                            <p><span>Settings</span></p>
                            <div class="btn-group" style="background: #eee; padding: 15px 20px 15px 7px;">
                                <div class="dropdown col-md-8">
                                    <span>Display format:</span>
                                    <!-- <button class="btn dropdown-toggle add-question-dropdown" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-bars" aria-hidden="true"></i>
                                        Select Format
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><button class="dropdown-item" type="button">In a Row</button></li>
                                        <li><button class="dropdown-item" type="button">In a Column</button></li>
                                    </ul> -->

                                    <div class="form-group" style="width: 70%; float: right;">
                                        <select name="section" class="form-select formats_select" id="formats_select">
                                            <option value="">-Select Format-</option>
                                            <option value="row" id="format_row">In a Row</option>
                                            <option value="column" id="format_column">In a Column</option>
                                        </select>
                                    </div>

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
                                <button type="button" class="btn btn-modal-cancel btn-secondary bgWhite txt-black pull-right"
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

    

    <!-- Modal Create Section -->
    <form method="post" id="section_form" action="#">
        <div class="modal fade" id="modal-add-section" tabindex="-1" aria-labelledby="modal-add-section"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">

                    <div class="modal-header">                     
                        <h4 class="h3 title-page">Create Section  </h4>
                        <input type="hidden" name="" id="">
                        <input type="hidden" name="" id="" value="">

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <div class="answer-container">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="text" name="survey" class="form-control form-control-user col-md-12" id="create_section_input" aria-describedby="emailHelp" placeholder="Add Section Name" />
                                        
                                    <button type="button" id="section_create" class="btn btn-primary btn-success float-right col-md-2" style="margin-top: 10px;">
                                        Create
                                    </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
    
    <!-- Modal Create Part -->
    <form method="post" id="part_form" action="#">
        <div class="modal fade" id="modal-add-part" tabindex="-1" aria-labelledby="modal-add-part"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">

                    <div class="modal-header">                     
                        <h4 class="h3 title-page">Create Part </h4>
                        <input type="hidden" name="" id="">
                        <input type="hidden" name="" id="" value="">

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <div class="answer-container">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <select class="form-select part_select" id="section_list">
                                            <option selected>-Select Section-</option>
                                        </select>

                                        <input type="text" name="survey" class="form-control form-control-user col-md-12" id="create_part_input" aria-describedby="emailHelp" placeholder="Add Part Name" />                                    

                                        <button type="button" id="part_create" class="btn btn-primary btn-success float-right col-md-2" style="margin-top: 10px;">
                                            Create
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

