@extends('layouts.side') @section('survey')
    <!-- Preview Testing New Survey -->
    <div class="preview-new-survey-container col-md-12 row text-center align-middle margin-top-15percent">
        <h1 class="h3 mb-4 preview-new-survey-title">
            New Survey
        </h1>
        <p class="preview-new-survey-desc">Dear Sir or Madam, </p>
        <p class="preview-new-survey-desc">Please take a few minutes of your time to complete the following questionaire.</p>
        <button class="preview-notice-btn col-md-4 margin-0-auto preview-new-survey-start" type="submit">START SURVEY NOW</button>
    </div>

    <!-- Preview Testing Show Survey List -->
    <div class="preview-survey-list hide">
    <div class="col-md-12">
        <div class="col-md-8" style="margin: 0 auto;">
            <h1 class="h3 mb-4 title-new-survey">
                New Survey
            </h1>
        </div>
        <hr style="margin-top: 20px; border: 1px solid;">
    </div>

    <div class="col-md-8" style="margin:0 auto;">
            <div class="col-md-12 row text-center align-middle">
                <div class="preview-title-container">
                    <div class="dropdown preview-edit-container">
                            <button class="btn" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                            </button>
                        
                            <ul class="dropdown-menu">
                            <li><button class="dropdown-item" type="button">Edit</button></li>
                                <li><button class="dropdown-item" type="button">Delete</button></li>
                            </ul>
                        </div>
                        <h4 class="h3 title-new-survey text-left">test</h4>
                        <p class="text-left">ttt</p>
                    </div>

                    <div class="form-check col-md-12 row text-center align-middle" style="margin:0 auto;">
                        <input class="btn-check" type="radio" name="exampleRadios" id="option1" value="option1">
                        <label class="text-left select-preview btn bgPrimary text-black" for="option1">Japan</label>      
                        <div class="preview-active-check-container hide"><i class="fas fa-check preview-active-check" aria-hidden="true"></i></div>          
                    </div>

                    <div class="form-check col-md-12 row text-center align-middle" style="margin:0 auto;">
                        <input class="btn-check" type="radio" name="exampleRadios" id="option2" value="option2">
                        <label class="select-preview text-left btn bgPrimary text-black" for="option2">Korea</label> 
                        <div class="preview-active-check-container hide"><i class="fas fa-check preview-active-check" aria-hidden="true"></i></div>                       
                    </div>

                    <div class="form-check col-md-12 row text-center align-middle" style="margin:0 auto;">
                        <input class="btn-check" type="radio" name="exampleRadios" id="option3" value="option3">
                        <label class="select-preview text-left btn bgPrimary text-black" for="option3">USA</label>  
                        <div class="preview-active-check-container hide"><i class="fas fa-check preview-active-check" aria-hidden="true"></i></div>                      
                    </div>
                </div>
            
            </div>

            <div class="col-md-12">
                <hr style="margin-top: 20px; border: 1px solid;">
            </div>

            <div class="col-md-12 text-right">
                <div class="col-md-10" style="position: relative; right: 28px;">
                    <button type="submit" class="btn bgPrimary text-white preview-survey-list-submit">Submit</button>
                </div>
            </div>
    </div>
    </div>

    <!-- Thank you Feedback -->
    <div class="col-md-12 row text-center ty-feedback-container margin-top-15percent" style="display: none;">
        <h1 class="h3 mb-4 preview-new-survey-title">
            <span><i class="fas fa-thumbs-up fa-fw" style="font-size: 115px;"></i></span>
        </h1>
        <p class="preview-new-survey-desc" style="font-size: 40px !important;">Thank you for your time and your feedback.
        </p>
        <p class="preview-new-survey-desc" style="font-size: 26px !important;">Share this survey to help us get more
            responses.</p>
        <span>
            <i class="fas fa-plus fa-fw social-media-icons"></i>
            <i class="fas fa-plus fa-fw social-media-icons"></i>
            <i class="fas fa-plus fa-fw social-media-icons"></i>
            <i class="fas fa-plus fa-fw social-media-icons"></i>
        </span>
        <!-- <button class="preview-notice-btn col-md-4 margin-0-auto preview-new-survey-start" type="submit">START SURVEY NOW</button>                     -->
    </div>
@endsection
