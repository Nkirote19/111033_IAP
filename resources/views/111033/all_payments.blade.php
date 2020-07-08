@extends('111033.layouts.fees-layout')
@section('title','All Payments')
@section('all_payments_content')
<!-- BEGIN Page Content -->
    <!-- the #js-page-content id is needed for some plugins to initialize -->
    <main id="js-page-content" role="main" class="page-content">
         @section('all_payments_breadcrumbs')
            <ol class="breadcrumb page-breadcrumb" style="padding-top: 27px!important;">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Options</a></li>
                <li class="breadcrumb-item">View all Payments </li>                
            </ol>
        @endsection
    <div class="col-xl-6">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>ALL <span class="fw-300"><i>Payment Details</i></span></h2>
                </div>

                <div class="panel-container show">
                    <div class="panel-content">
                         <table class="table" id="all_payments_table">
                           <thead>
                              <tr>
                                <!--  <th scope="col">id</th> -->
                                  <th scope="col" style="width:20%!important;">Student Number</th>
                                  <th scope="col">Surname</th>
                                  <th scope="col">Amount Paid</th>
                                  <th scope="col">Amount Left</th>
                                  <th scope="col">Date of Payment</th>                                  
                              </tr>
                            </thead>

                            <tbody>
                              @foreach($data as $item)
                                <tr class="item{{$item->id}}">
                                <!-- <td>{{$item->id}}</td> -->
                                <td>{{$item->student_number}}</td>
                                <td>{{optional($item->relationsPayStu)->surname}}</td>
                                <td>{{$item->amount_paid}}</td>
                                <td>{{$item->amount_left}}</td>
                                <td>{{$item->date_of_payment}}</td>                         
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
         $('#all_payments_table').DataTable(
                {
                   responsive: true
               });
    })</script>
</main>
@endsection
