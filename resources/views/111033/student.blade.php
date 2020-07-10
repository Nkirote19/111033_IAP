@extends('111033.layouts.student-layout')
@section('title','Add Student')
@section('student_content')
<!-- BEGIN Page Content -->
    <!-- the #js-page-content id is needed for some plugins to initialize -->
    <main id="js-page-content" role="main" class="page-content">
         @section('student_breadcrumbs')
            <ol class="breadcrumb page-breadcrumb" style="padding-top: 27px!important;">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Options</a></li>
                <li class="breadcrumb-item">Add Student</li>                
            </ol>
        @endsection

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>    
                    <strong>{{ $message }}</strong>
            </div>
        @endif
        
        @if(count($errors))
            <div class="form-group">
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    <ul>
                        @foreach($errors->all() as $error)
                           - {{$error}} 
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        

        <div class="col-xl-6">
            <div id="panel-1" class="panel" style="margin-right: 2%; margin-top: 4%!important;">
                <div class="panel-hdr">
                    <h2>ADD <span class="fw-300"><i>New Student</i></span></h2>
                </div>

                <div class="panel-container show">
                    <div class="panel-content">

                        <form id="add-student-form" method="POST" data-type="json" action="/register_student"enctype="multipart/form-data">
                            @csrf

                            <div class="row">                 
                                <div class="form-group col-4">
                                    <section >
                                    <label class="form-label" for="surname">Surname</label>
                                    <div class="input-group flex-nowrap">
                                        <input id="surname" name="surname" type="text" class="form-control"aria-label="Surname" aria-describedby="addon-wrapping-right" data-toggle="tooltip" data-placement="top"   data-original-title="Please Enter Student's Surname">

                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-user fs-xl"></i></span>
                                        </div>
                                    </div>
                                    </section>
                                </div>

                                <div class="form-group col-4">
                                    <section >
                                        <label class="form-label" for="first_name">First Name</label>
                                        <div class="input-group flex-nowrap">
                                            <input id="first_name" name="first_name" type="text" class="form-control"aria-label="First_Name" aria-describedby="addon-wrapping-right" data-toggle="tooltip" data-placement="top"   data-original-title="Please Enter Student's First Name">

                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-user fs-xl"></i></span>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                 <div class="form-group col-4">
                                    <section >
                                        <label class="form-label" for="other_name">Other Name</label>
                                        <div class="input-group flex-nowrap">
                                            <input id="other_name" name="other_name"type="text" class="form-control"aria-label="Other_Nname" aria-describedby="addon-wrapping-right" data-toggle="tooltip" data-placement="top"   data-original-title="Please Enter Student's Other Name ">

                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-user fs-xl"></i></span>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="form-group col-4">
                                    <section >
                                        <label class="form-label" for="gender">Gender</label><br>
                                        <div class="form-check-inline">
                                            <label class="form-check-label" for="Female">
                                                <input type="radio" class="form-check-input" id="Female" name="gender" value="Female">Female
                                            </label>
                                        </div>

                                        <div class="form-check-inline">
                                            <label class="form-check-label" for="Male">
                                                <input type="radio" class="form-check-input" id="Male" name="gender" value="Male">Male
                                            </label>
                                        </div>

                                        <div class="form-check-inline">
                                            <label class="form-check-label" for="Other">
                                                <input type="radio" class="form-check-input" id="Other" name="gender" value="Other">Other
                                            </label>
                                        </div>
                                    </section>
                                </div>

                                <div class="form-group col-4">
                                    <label class="form-label" for="dob">Date of Birth</label>
                                    <input class="form-control" id="dob" type="date" name="dob">
                                </div>                                
                            </div>

                            <div class="row">
                               <div class="form-group col-4">
                                    <section >
                                    <label class="form-label" for="phonenumber">Phone Number</label>
                                    <div class="input-group flex-nowrap">
                                        <input id="phonenumber" name="phonenumber" type="text" class="form-control"aria-label="Phonenumber" aria-describedby="addon-wrapping-right">

                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-phone-alt fs-xl"></i></span>
                                        </div>
                                    </div>
                                    </section>
                                </div>

                                <div class="form-group col-4">
                                    <section >
                                        <label class="form-label" for="email">Email</label>
                                        <div class="input-group flex-nowrap ">
                                            <input id="email" name="email" type="email" class="form-control "aria-label="Email" aria-describedby="addon-wrapping-right">

                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-at fs-xl"></i></i></span>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                 <div class="form-group col-4">
                                    <section >
                                        <label class="form-label" for="student_number">Student Number</label>
                                        <div class="input-group flex-nowrap">
                                            <input id="student_number" name="student_number"type="text" class="form-control"aria-label="Student Number" aria-describedby="addon-wrapping-right">

                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-id-card fs-xl"></i></span>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div> 
                            <div class="card-footer text-muted">                                     
                                <div style="text-align: right;">
                                    <button id="add_student_submit" type="submit" class="btn btn-primary "><i class="fas fa-user-plus fs-xl"></i> Add Student</button>
                                </div>
                            </div>

                        </form>           
                    </div>
                </div>
            </div>
         </div>

</main>
@endsection