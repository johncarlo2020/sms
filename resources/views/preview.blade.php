@extends('layouts.side') @section('survey')
    <!-- Preview Testing New Survey -->
    <div class="col-md-12 row text-center">
        <h1 class="h3 mb-4 preview-new-survey-title">
            New Survey
        </h1>
        <p class="preview-new-survey-desc">Dear Sir or Madam, </p>
        <p class="preview-new-survey-desc">Please take a few minutes of your time to complete the following questionaire.</p>
        <button class="preview-notice-btn col-md-4 margin-0-auto preview-new-survey-start" type="submit">START SURVEY
            NOW</button>
    </div>

    <!-- Thank you Feedback -->
    <div class="col-md-12 row text-center">
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
