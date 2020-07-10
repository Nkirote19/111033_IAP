
<?php $__env->startSection('title','Sky High Aviation'); ?>
<?php $__env->startSection('edit_content'); ?>
    <main id="js-page-content" role="main" class="page-content">
         <?php $__env->startSection('edit_breadcrumbs'); ?>
            <ol class="breadcrumb page-breadcrumb" style="padding-top: 27px!important;">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>  
                <li class="breadcrumb-item">Edit Details</li>            
            </ol>
        <?php $__env->stopSection(); ?>

		<div class="col-xl-6" style="margin-left:20%;align-content: center;width:50%!important;">
		    <div id="panel-1" class="panel">
		      	<div class="panel-hdr">
		        	<h2>ALL <span class="fw-300"><i>Students</i></span></h2>
		      	</div>

		      	<div class="panel-container show">
		        	<div class="panel-content">

				   		<form action = "/edit/<?php echo e($data->student_number); ?>" method = "post">
		                      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
		                      <table>
		                        <tr>
		                          <td>Student Number</td>
		                          <td>
		                            <input class="form-control" type = 'text' name = 'student_number'value = "<?php echo e($data->student_number); ?>"/>
		                          </td>
		                        </tr> 

		                        <tr>
		                          <td>Surame</td>
		                          <td>
		                            <input class="form-control" type = 'text' name = 'surname' value =" <?php echo e($data->surname); ?>"/>
		                          </td>
		                        </tr> 

		                        <tr>
		                          <td>First Name</td>
		                          <td>
		                            <input class="form-control" type = 'text' name = 'first_name'value =" <?php echo e($data->first_name); ?>"/>
		                          </td>
		                        </tr> 

		                        <tr>
		                          <td>Other Name</td>
		                          <td>
		                            <input class="form-control" type = 'text' name = 'other_name'value = "<?php echo e($data->other_name); ?>"/>
		                            </td>
		                        </tr> 

		                        <tr>
		                          <td>Gender</td>
		                            <td>
		                              <input class="form-control" type = 'text' name = 'gender'value = "<?php echo e($data->gender); ?>"/>
		                            </td>
		                        </tr> 

		                        <tr>
		                          <td>Date of Birth</td>
		                          <td>
		                            <input class="form-control" type = 'text' name = 'dob' value = "<?php echo e($data->dob); ?>"/>
		                          </td>
		                        </tr> 

		                        <tr>
		                          <td>PhoneNumber</td>
		                          <td>
		                            <input class="form-control" type = 'text' name = 'phonenumber' value ="<?php echo e($data->phonenumber); ?>"/>
		                          </td>
		                        </tr> 

		                        <tr>
		                          <td>Email</td>
		                          <td>
		                            <input class="form-control" type = 'text' name = 'email' value ="<?php echo e($data->email); ?>"/>
		                          </td>
		                        </tr> 
		                      </table>

		                      <div class="modal-footer">
		                        <button type="submit" class="btn btn-info">Update</button>                          
		                        <button type="button" class="btn btn-primary" onclick="window.location='<?php echo e(url('all_students')); ?>'">Back</button>
		                      </div>
		                </form>

					</div>
				</div>
			</div>
		</div>
   	</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('111033.layouts.edit-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\111033_IAP\resources\views/111033/edit_students.blade.php ENDPATH**/ ?>