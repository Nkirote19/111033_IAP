@extends('111033.layouts.edit-layout')
@section('title','Sky High Aviation')
@section('edit_content')
    <main id="js-page-content" role="main" class="page-content">
         @section('edit_breadcrumbs')
            <ol class="breadcrumb page-breadcrumb" style="padding-top: 27px!important;">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>  
                <li class="breadcrumb-item">Edit Details</li>            
            </ol>
        @endsection

		<div class="col-xl-6" style="margin-left:20%;align-content: center;width:50%!important;">
		    <div id="panel-1" class="panel">
		      	<div class="panel-hdr">
		        	<h2>ALL <span class="fw-300"><i>Students</i></span></h2>
		      	</div>

		      	<div class="panel-container show">
		        	<div class="panel-content">

				   		<form action = "/edit/{{$data->student_number}}" method = "post">
		                      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
		                      <table>
		                        <tr>
		                          <td>Student Number</td>
		                          <td>
		                            <input class="form-control" type = 'text' name = 'student_number'value = "{{$data->student_number}}"/>
		                          </td>
		                        </tr> 

		                        <tr>
		                          <td>Surame</td>
		                          <td>
		                            <input class="form-control" type = 'text' name = 'surname' value =" {{$data->surname}}"/>
		                          </td>
		                        </tr> 

		                        <tr>
		                          <td>First Name</td>
		                          <td>
		                            <input class="form-control" type = 'text' name = 'first_name'value =" {{$data->first_name}}"/>
		                          </td>
		                        </tr> 

		                        <tr>
		                          <td>Other Name</td>
		                          <td>
		                            <input class="form-control" type = 'text' name = 'other_name'value = "{{$data->other_name}}"/>
		                            </td>
		                        </tr> 

		                        <tr>
		                          <td>Gender</td>
		                            <td>
		                              <input class="form-control" type = 'text' name = 'gender'value = "{{$data->gender}}"/>
		                            </td>
		                        </tr> 

		                        <tr>
		                          <td>Date of Birth</td>
		                          <td>
		                            <input class="form-control" type = 'text' name = 'dob' value = "{{$data->dob}}"/>
		                          </td>
		                        </tr> 

		                        <tr>
		                          <td>PhoneNumber</td>
		                          <td>
		                            <input class="form-control" type = 'text' name = 'phonenumber' value ="{{$data->phonenumber}}"/>
		                          </td>
		                        </tr> 

		                        <tr>
		                          <td>Email</td>
		                          <td>
		                            <input class="form-control" type = 'text' name = 'email' value ="{{$data->email}}"/>
		                          </td>
		                        </tr> 
		                      </table>

		                      <div class="modal-footer">
		                        <button type="submit" class="btn btn-info">Update</button>                          
		                        <button type="button" class="btn btn-primary" onclick="window.location='{{ url('all_students') }}'">Back</button>
		                      </div>
		                </form>

					</div>
				</div>
			</div>
		</div>
   	</main>
@endsection