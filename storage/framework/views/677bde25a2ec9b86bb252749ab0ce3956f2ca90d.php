
<?php $__env->startSection('title','Manage Fees'); ?>
<?php $__env->startSection('fees_content'); ?>
<!-- BEGIN Page Content -->
    <!-- the #js-page-content id is needed for some plugins to initialize -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <main id="js-page-content" role="main" class="page-content">
         <?php $__env->startSection('fees_breadcrumbs'); ?>
            <ol class="breadcrumb page-breadcrumb" style="padding-top: 27px!important;">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Options</a></li>
                <li class="breadcrumb-item">Manage Fees</li>                
            </ol>
        <?php $__env->stopSection(); ?>

         <?php if($message = Session::get('success')): ?>
    <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>    
      <strong><?php echo e($message); ?></strong>
    </div>
  <?php endif; ?>
    <div class="col-xl-6">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>ADD <span class="fw-300"><i>Fee Payment</i></span></h2>
                </div>

                <div class="panel-container show">
                    <div class="panel-content">
                        <form id="fees-form" method="POST" data-type="json" action="/savePayment"enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>


                            <div class="row">
                               <div class="form-group col-3">
                                    <section >
                                    <label class="form-label" for="student_number">Student Number</label>
                                    <select name="student_number" id="student_number" class="form-control">
                                        <option>Select Student Number</option>
                                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($id->student_number); ?>">
                                            <?php echo e($id->student_number); ?>

                                               </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                    </select>
                                  <!--   <div class="input-group flex-nowrap">
                                        <input id="student_number" name="student_number" type="text" class="form-control"aria-label="student_number" aria-describedby="addon-wrapping-right"required>

                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-id-card fs-xl"></i></span>
                                        </div>
                                    </div> -->
                                    </section>
                                </div>

                               <div class="form-group col-5"></div> 

                                <div class="form-group col-4">
                                    <label class="form-label" for="date_of_payment">Date of Payment</label>
                                    <input class="form-control" id="date_of_payment" type="date" name="date_of_payment" required>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="form-group col-4">
                                    <section >
                                    <label class="form-label" for="oldBalance">Balance</label>
                                    <div class="input-group flex-nowrap">
                                        <input name="oldBalance"class="form-control disabled"aria-label="oldBalance" aria-describedby="addon-wrapping-right" id="oldBalance" >

                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-money-bill fs-xl"></i></span>
                                        </div>
                                    </div>
                                    </section>
                                </div>

                                <div class="form-group col-4">
                                    <section >
                                        <label class="form-label" for="current_amount">Amount Paid</label>
                                        <div class="input-group flex-nowrap ">
                                            <input id="current_amount" name="current_amount" class="form-control "aria-label="Amount Paid" aria-describedby="addon-wrapping-right">

                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-money-bill fs-xl"></i></span>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                 <div class="form-group col-4">
                                    <section >
                                        <label class="form-label" for="new_balance">Amount Left</label>
                                        <div class="input-group flex-nowrap">
                                            <input id="new_balance" name="new_balance" class="form-control disabled"aria-label="Amount Left" aria-describedby="addon-wrapping-right">

                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-money-bill fs-xl"></i></span>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div> 
                            <div class="card-footer text-muted">                                     
                                <div style="text-align: right;">
                                    <button id="fees_form_submit" type="submit" class="btn btn-primary "><i class="fas fa-plus-circle fs-xl"></i> Add Payment</button>
                                </div>
                            </div>

                        </form>            
                    </div>
                </div>
            </div>
         </div>

<script>
    $(document).ready( function (){
    const str_id = document.getElementById('student_number');
    const amt = document.getElementById('current_amount');
           
            str_id.addEventListener('input',updateValue);
             amt.addEventListener('input',newBalance);

            function updateValue(e)
            {              
                console.log(e.target.value);
                var student_no=e.target.value;
                var oldBalance;
               $.ajax({

                    url: "/getBalance/"+student_no,
                    type:"POST",
                    data:{
                        "_token": "<?php echo e(csrf_token()); ?>",
                        student_number:student_no,
                        },
                    success: function(response){
                        oldBalance = response[response.length-1];
                        console.log(oldBalance);
                        $("#oldBalance").val(oldBalance);
                    }

                });
                $("#current_amount").val('');
               $("#new_balance").val('');
            }

            function newBalance(amount){
                var current_amount = amount.target.value;
                var old_balance = $("#oldBalance").val();
                var new_balance = old_balance - current_amount;
                $("#new_balance").val(new_balance);
            }
        });

</script>

</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('111033.layouts.fees-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\111033_IAP\resources\views/111033/fees.blade.php ENDPATH**/ ?>