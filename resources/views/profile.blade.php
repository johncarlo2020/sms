@extends('layouts.side') @section('survey')
<div class="row">

<div class="col-lg-12">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Profile</h1>
    </div>
    <!-- Default Card Example -->
    <div class="card mb-4">
        <div class="card-header">
            My Profile
        </div>
        <div class="card-body row">
            <div class="col-md-2">
                <p>Name:</p>
                <p>Email:</p>
                <p>Phone Number:</p>
                <p>Gender:</p>
            </div>
            <div class="col-md-5">
                <p>Myco Claro</p>
                <p>mycoclaro@gmail.com</p>
                <p>+631234567</p>
                <p>Male</p>
            </div>
            <div class="col-md-5">
                <div class="profile-img-container">
                    <div class="profile-img-background">   
                        <div class="custom-file">
                            <span>
                                <label class="profile-update bgPrimary2" for="customFile">
                                    Change         
                                </label>
                            </span>
                            <input type="file" class="custom-file-input" id="customFile">
                        </div>             
                    </div>
                </div>
            </div>
            
            <div class="col-md-12">
                    <hr>
                    <div class="text-left">
                        <button class="btn bgPrimary2 text-white">Save</button>
                    </div>
            </div>
        </div>
    </div>

</div>


</div>
@endsection
