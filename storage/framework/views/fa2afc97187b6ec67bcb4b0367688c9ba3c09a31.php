<?php echo $__env->make('111033.templates.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('student_content'); ?>
<?php echo $__env->yieldContent('all_students_content'); ?>

<?php echo $__env->yieldContent('dashboard_content'); ?>



<?php echo $__env->make('111033.templates.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\111033_IAP\resources\views/111033/layouts/student-layout.blade.php ENDPATH**/ ?>