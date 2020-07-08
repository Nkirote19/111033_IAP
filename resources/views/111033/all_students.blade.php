@extends('111033.layouts.student-layout')
@section('title','All Students')
@section('all_students_content')

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<main id="js-page-content" role="main" class="page-content">
  @section('all_breadcrumbs')
    <ol class="breadcrumb page-breadcrumb" style="padding-top: 27px!important;">
      <li class="breadcrumb-item"><a href="javascript:void(0);">Options</a></li>
      <li class="breadcrumb-item">View all students</li>                
    </ol>
  @endsection

  @if ($message = Session::get('success'))
    <div class="alert alert-info alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>    
      <strong>{{ $message }}</strong>
    </div>
  @endif

  <div class="col-xl-6" style="margin-left:-3%;width:105%!important;">
    <div id="panel-1" class="panel">
      <div class="panel-hdr">
        <h2>ALL <span class="fw-300"><i>Students</i></span></h2>
      </div>

      <div class="panel-container show">
        <div class="panel-content">
          <table class="table" id="all_students_table">
           <thead>
              <tr>
                <!--  <th scope="col">id</th> -->
                  <th scope="col" style="width: 6%!important;">Student Number</th>
                  <th scope="col">Surname</th>
                  <th scope="col">First Name</th>
                  <th scope="col">Other Name</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Date of Birth</th>
                  <th scope="col">Phone Number</th>
                  <th scope="col">Email</th>
                  <th class="text-center">Actions</th>
              </tr>
            </thead>

            <tbody>
              @foreach($data as $item)
                <tr class="item{{$item->id}}">
                <!-- <td>{{$item->id}}</td> -->
                <td>{{$item->student_number}}</td>
                <td>{{$item->surname}}</td>
                <td>{{$item->first_name}}</td>
                <td>{{$item->other_name}}</td>
                <td>{{$item->gender}}</td>
                <td>{{$item->dob}}</td>
                <td>{{$item->phonenumber}}</td>
                <td>{{$item->email}}</td>
                <td><a href = 'delete/{{ $item->student_number }}'>Delete</a>
                <a style="padding-left: 10px!important" href = 'edit1/{{ $item->student_number }}'>Edit</a></td>
                </tr>
              @endforeach
              </tbody>
            </table> 
      </div>
    </div>
  </div>
</div>

<script >
    $(document).ready(function(){
         $('#all_students_table').DataTable(
                {
                   responsive: true
               });
    })</script>

</main>
@endsection
