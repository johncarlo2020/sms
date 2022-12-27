@extends('layouts.side') @section('survey')

    <div class="col-md-11 row survey-template-container" >
        <h1 class="h3 mb-4 title-page-modal">
            Create your own survey or use a template
        </h1>
        <div class="col-md-4">
            <div class="card shadow h-100 start-survey-container">
                <a href="javascript:void(0);" class="start_new_survey" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <span><i class="fas fa-plus fa-fw"></i></span> <br />
                    Start a new survey
                </a>
            </div>
        </div>

        @foreach($survey_list as $key => $value)
            <div class="col-md-4">
                <div class="card shadow h-100 survey-container-img">
                    <img src="https://png.pngtree.com/thumb_back/fw800/back_our/20190625/ourmid/pngtree-office-desk-minimalist-background-picture-image_259887.jpg"
                        alt="" style="width: 100%; height: 100%" />
                </div>
                <a href="{{url('/survey/')}}">
                    <p class="survey-tpl-title">{{ $value['name'] }}</p>
                    <span class="survey-tpl-question-title">{{ $value['count'] }} questions</span>
                </a>
            </div>
        @endforeach
    </div>



    <!-- Modal Create Survey -->
    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">Start new survey</div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>


    <form method="post" action="{{route('survey')}}">
        @csrf  {{ csrf_field() }} 
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- <h5 class="modal-title" id="exampleModalLabel">Start a new survey</h5> -->
                        <h4 class="h3 title-page">Start a new survey</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <span class="modal-survey-name">Survey name</span>
                            <input type="text" name="survey" class="form-control form-control-user" id="exampleInputEmail"
                                aria-describedby="emailHelp" placeholder="New survey" />
                        </div>
                    </div>
                    <div class="modal-footer text-left">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary bgViolet">
                                Continue
                            </button>
                            <button type="button" class="btn btn-secondary bgWhite txt-black" data-bs-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
