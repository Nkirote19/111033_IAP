
<?php $__env->startSection('title','All Payments'); ?>
<?php $__env->startSection('all_payments_content'); ?>
<!-- BEGIN Page Content -->
    <!-- the #js-page-content id is needed for some plugins to initialize -->
    <main id="js-page-content" role="main" class="page-content">
         <?php $__env->startSection('all_payments_breadcrumbs'); ?>
            <ol class="breadcrumb page-breadcrumb" style="padding-top: 27px!important;">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Options</a></li>
                <li class="breadcrumb-item">View all Payments </li>                
            </ol>
        <?php $__env->stopSection(); ?>
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
                              <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="item<?php echo e($item->id); ?>">
                                <!-- <td><?php echo e($item->id); ?></td> -->
                                <td><?php echo e($item->student_number); ?></td>
                                <td><?php echo e(optional($item->relationsPayStu)->surname); ?></td>
                                <td><?php echo e($item->amount_paid); ?></td>
                                <td><?php echo e($item->amount_left); ?></td>
                                <td><?php echo e($item->date_of_payment); ?></td>                         
                                </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('111033.layouts.fees-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\111033_IAP\resources\views/111033/all_payments.blade.php ENDPATH**/ ?>