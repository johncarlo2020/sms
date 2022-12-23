@extends('layouts.app') @section('dashboard')

    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav bg-side-menu sidebar sidebar-dark accordion" id="accordionSidebar">
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                    <div class="sidebar-brand-text mx-3">
                        <div class="sidebar-brand-text" style="font-size: 13px">
                            Survey Management System
                        </div>
                    </div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0" />

                <!-- Nav Item - Dashboard -->
                <li class="nav-item" style="padding: 17px">
                    <div class="nav-side-profile"></div>
                    <a class="nav-link padding-0" href="javascript:void(0);" style="padding: 0px !important;">
                        <span>Myco</span>
                    </a>
                    <a class="nav-link padding-0" href="javascript:void(0);" style="padding: 0px !important;">
                        <span>Edit Profile</span>
                    </a>
                    <a class="nav-link padding-0" href="javascript:void(0);" style="padding: 0px !important;">
                        <span>Generate Resume</span>
                    </a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider" />

                <!-- Heading -->
                <!-- <div class="sidebar-heading">
                                                                                                                                                                                                    Interface
                                                                                                                                                                                                </div> -->

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-bars"></i>
                        <span>Survey</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Custom Components:</h6>
                            <a class="collapse-item" href="{{ route('template') }}">Template</a>
                        </div>
                    </div>
                </li>

                <hr class="sidebar-divider d-none d-md-block" />

                <!-- Sidebar Toggler (Sidebar) -->
                <!-- <div class="text-center d-none d-md-inline">
                        <button class="rounded-circle border-0" id="sidebarToggle"></button>
                    </div> -->
            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                        <p class="h3 mb-4 title-page-modal navToggle" id="sidebarToggle" style="cursor: pointer;">
                            <i class="fas fa-bars" style="color: #a7a4a4; margin-right: 30px;"></i>
                            Survey
                        </p>
                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                    aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small"
                                                placeholder="Search for..." aria-label="Search"
                                                aria-describedby="basic-addon2" />
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>

                            <!-- Nav Item - Alerts -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bell fa-fw"></i>
                                    <!-- Counter - Alerts -->
                                    <span class="badge badge-danger badge-counter">3+</span>
                                </a>
                                <!-- Dropdown - Alerts -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="alertsDropdown">
                                    <h6 class="dropdown-header">Alerts Center</h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-primary">
                                                <i class="fa fa-refresh" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">
                                                December 12, 2019
                                            </div>
                                            <span class="font-weight-bold">A new monthly report is ready to
                                                download!</span>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-success">
                                                <i class="fas fa-bell fa-fw"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">
                                                December 7, 2019
                                            </div>
                                            $290.29 has been deposited into your
                                            account!
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-warning">
                                                <i class="fas fa-bell fa-fw"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">
                                                December 2, 2019
                                            </div>
                                            Spending Alert: We've noticed unusually
                                            high spending for your account.
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All
                                        Alerts</a>
                                </div>
                            </li>

                            <!-- Nav Item - Messages -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-sync-alt"></i>
                                    <!-- Counter - Messages -->
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header">Message Center</h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="..." />
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate">
                                                Hi there! I am wondering if you can
                                                help me with a problem I've been
                                                having.
                                            </div>
                                            <div class="small text-gray-500">
                                                Emily Fowler · 58m
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="..." />
                                            <div class="status-indicator"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">
                                                I have the photos that you ordered
                                                last month, how would you like them
                                                sent to you?
                                            </div>
                                            <div class="small text-gray-500">
                                                Jae Chun · 1d
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="..." />
                                            <div class="status-indicator bg-warning"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">
                                                Last month's report looks great, I
                                                am very happy with the progress so
                                                far, keep up the good work!
                                            </div>
                                            <div class="small text-gray-500">
                                                Morgan Alvarez · 2d
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle"
                                                src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="..." />
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">
                                                Am I a good boy? The reason I ask is
                                                because someone told me that people
                                                say this to all dogs, even if they
                                                aren't good...
                                            </div>
                                            <div class="small text-gray-500">
                                                Chicken the Dog · 2w
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Read More
                                        Messages</a>
                                </div>
                            </li>

                            <!-- Nav Item - Messages -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-question-circle"></i>
                                    <!-- Counter - Messages -->
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header">Message Center</h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="..." />
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate">
                                                Hi there! I am wondering if you can
                                                help me with a problem I've been
                                                having.
                                            </div>
                                            <div class="small text-gray-500">
                                                Emily Fowler · 58m
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="..." />
                                            <div class="status-indicator"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">
                                                I have the photos that you ordered
                                                last month, how would you like them
                                                sent to you?
                                            </div>
                                            <div class="small text-gray-500">
                                                Jae Chun · 1d
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="..." />
                                            <div class="status-indicator bg-warning"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">
                                                Last month's report looks great, I
                                                am very happy with the progress so
                                                far, keep up the good work!
                                            </div>
                                            <div class="small text-gray-500">
                                                Morgan Alvarez · 2d
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle"
                                                src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="..." />
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">
                                                Am I a good boy? The reason I ask is
                                                because someone told me that people
                                                say this to all dogs, even if they
                                                aren't good...
                                            </div>
                                            <div class="small text-gray-500">
                                                Chicken the Dog · 2w
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Read More
                                        Messages</a>
                                </div>
                            </li>

                            <!-- Nav Item - Messages -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user-cog"></i>
                                    <!-- Counter - Messages -->
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header">Message Center</h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="..." />
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate">
                                                Hi there! I am wondering if you can
                                                help me with a problem I've been
                                                having.
                                            </div>
                                            <div class="small text-gray-500">
                                                Emily Fowler · 58m
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="..." />
                                            <div class="status-indicator"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">
                                                I have the photos that you ordered
                                                last month, how would you like them
                                                sent to you?
                                            </div>
                                            <div class="small text-gray-500">
                                                Jae Chun · 1d
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="..." />
                                            <div class="status-indicator bg-warning"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">
                                                Last month's report looks great, I
                                                am very happy with the progress so
                                                far, keep up the good work!
                                            </div>
                                            <div class="small text-gray-500">
                                                Morgan Alvarez · 2d
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle"
                                                src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="..." />
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">
                                                Am I a good boy? The reason I ask is
                                                because someone told me that people
                                                say this to all dogs, even if they
                                                aren't good...
                                            </div>
                                            <div class="small text-gray-500">
                                                Chicken the Dog · 2w
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Read More
                                        Messages</a>
                                </div>
                            </li>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <!-- <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                                                                                                                                                                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                                                                                                                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Myco Claro</span>
                                                                                                                                                                                                                    <img class="img-profile rounded-circle"
                                                                                                                                                                                                                        src="img/undraw_profile.svg">
                                                                                                                                                                                                                </a> -->
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Settings
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Activity Log
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                        data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid row justify-content-md-center col-md-12">
                        @yield('content') @yield('survey')
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Ready to Leave?
                        </h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Select "Logout" below if you are ready to end your current
                        session.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">
                            Cancel
                        </button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <!-- Modal -->

        <!-- end Modal -->
        <script>
            $(document).on('click', '.btn-modal-cancel', function() {
                $(".modal").on("hidden.bs.modal", function() {
                    $('textarea').val('');
                    $('input').val('');
                    $('.answer-input-div').remove();
                });
            });

            $(document).ready(function() {
                var answer = 0;
                $(document).on('click', '.qtype_choice', function() {
                    var name = $(this).attr('data-name');
                    var id = $(this).attr('data-id');
                    $('#qtype').html(name);
                    $('#question_type').val(id);
                });

                $(document).on('click', '#question_create', function() {
                    const ans = [];
                    var data = $('#question_form').serializeArray().reduce(function(obj, item) {
                        obj[item.name] = item.value;
                        return obj;
                    }, {});
                    $('.answers').each(function() {
                        ans.push($(this).val());
                    });
                    $.ajax({
                        url: "{{ route('add_question') }}",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "form": data,
                            "answers": ans,
                        },
                        dataType: "json",
                        type: "post",
                        success: function(data) {
                            $('.btn-modal-cancel').trigger('click');
                            // console.log(data);
                            $('#new_data').attr('id', 'prev_data')
                            let survey_container = `
                                <div class="col-md-12 survey-created-container" id="new_data survey_new_id_${data.question.survey_id}">
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
                                        <h4 class="h3 title-new-survey text-left text-capitalize">${data.question.name}</h4>
                                        <p class="text-left">${data.question.description}</p>
                                    </div>

                
                                </div>
                            `
                            $(".survey-created").append(survey_container);

                            if(data.question.question_type_id == 3){
                                let survey_text_answer = `
                                    <div class="form-check col-md-12 text-center align-mddle">
                                        <input type="text" name="text answer" class="form-control" placeholder="Text Answer">
                                    </div>
                                `
                                $(".survey-created-container").last().append(survey_text_answer);
                            }

                            data.answer.forEach(function(item, index) {
                                let survey_created = `                                        
                                    <div class="form-check col-md-12 row text-center align-middle" style="margin:0 auto;">
                                        <input class="btn-check" type="radio" name="exampleRadios" id="${item.id}" value="${item.name}">
                                        <label class="select-preview text-left btn bgWhite text-black shadow text-capitalize" for="${item.id}">${item.name}</label>                                        
                                    </div>                                       
                                `
                                $(".survey-created-container").last().append(survey_created);
                            });
                        }
                    });
                });

                $(document).on('click', '.btn-add-question', function() {
                    $('.add-question-container').addClass('hide');
                    $('.choices-container').removeClass('hide');
                });

                $(document).on('click', '.choices-container > .btn-choice-minus', function() {
                    $(this).parent().addClass('hide');
                    $('.add-question-container').removeClass('hide');
                });


                // Add input answer
                $(document).on('click', '.btn-add-answer', function() {

                    let answer = `
                        <div class="form-group answer-input-div">
                            <div class="col-md-12 row">
                                <input type="text" class="answers form-control form-control-user col-md-11"
                                     placeholder="Answer" />
                                <div class="col-md-1">
                                    <span class="remove-answer">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        `

                    $(".answer-container").append(answer);
                });

                // Remove Answer
                $(document).on('click', '.remove-answer', function() {
                    $(this).parent().parent().parent().remove();
                });

                // Start Survey Now - Show Preview
                $(document).on('click', '.preview-new-survey-start', function() {
                    $('.preview-new-survey-container').hide();
                    $('.preview-survey-list').removeClass('hide');
                });

                $(document).on('click', '.preview-btn', function() {
                    $('#modal-preview-notice').modal('show');
                });
                
                
                $(document).on('click', '.select-preview', function() {
                    var active = 'bg-active';
                    var prev_container = '.preview-active-check-container';
                    var hide = 'hide';

                    $('.select-preview').removeClass(active);
                    $(this).addClass(active);
                    $(prev_container).addClass(hide);
                    $(this).next(prev_container).removeClass(hide);
                });

                $(document).on('click', '.preview-survey-list-submit', function() {
                    $('.preview-survey-list').hide();
                    $('.ty-feedback-container').show();
                });
            });
        </script>
        <!-- Scripts -->
        <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery-easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
    </body>
@endsection
