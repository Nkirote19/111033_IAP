<!DOCTYPE html>
<html>   
     <head>
        <meta charset="utf-8">
          <title><?php echo $__env->yieldContent('title'); ?></title>   
        <meta name="description" content="Page Title">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">

        <!-- Call App Mode on ios devices -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <!-- Remove Tap Highlight on Windows Phone IE -->
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <!-- base css -->   
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="<?php echo e(asset('css/vendors.bundle.css')); ?>" >
        <link id="appbundle" rel="stylesheet" media="screen, print" href="<?php echo e(asset('css/app.bundle.css')); ?>" >
        <link id="mytheme" rel="stylesheet" media="screen, print" href="#">
        <link id="myskin" rel="stylesheet" media="screen, print" href="<?php echo e(asset('css/skins/skin-master.css')); ?>" >
      
        <link rel="stylesheet" media="screen, print" href="<?php echo e(asset('css/datagrid/datatables/datatables.bundle.css')); ?>" >

        <link media="screen, print" href="<?php echo e(asset('css/fa-regular.css')); ?>" rel="stylesheet">
        <link media="screen, print" href="<?php echo e(asset('css/fa-solid.css')); ?>" rel="stylesheet">

         <link rel="icon" href="<?php echo e(URL::asset('img/plane.png')); ?>"sizes="180x180" />
        <link rel="icon" href="<?php echo e(URL::asset('img/plane.png')); ?>" type="image/png"sizes="32x32"/>
        <link rel="mask-icon" href="<?php echo e(URL::asset('img/favicon/safari-pinned-tab.svg')); ?>" color="#5bbad5" />

      
        <script src="<?php echo e(asset('js/datagrid/datatables/jquery.min.js')); ?>" ></script>

    </head>
    
     <body class="mod-bg-1 mod-nav-link header-function-fixed nav-function-fixed" >
        <!-- DOC: script to save and load page settings -->
        
        <!-- BEGIN Page Wrapper -->
        <div class="page-wrapper">
            <div class="page-inner">
                <!-- BEGIN Left Aside -->
                   <!--navbar-->

        <?php echo $__env->make('111033.templates.edit-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

               <div class="page-content-wrapper">
                    <!-- BEGIN Page Header -->

                    <header class="page-header" role="banner" style="margin-left: 20%!important;">

                        <!-- we need this logo when user switches to nav-function-top -->
                        <div class="page-logo">
                            <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
                                <img src="<?php echo e(URL::asset('img/backgrounds/clouds.png')); ?>" alt="SkyHigh Aviation" aria-roledescription="logo">
                                <span class="page-logo-text mr-1">SkyHigh Aviation</span>
                                <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
                                <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                            </a>
                        </div>
                     
                        <div class="hidden-lg-up">
                            <a href="#" class="header-btn btn press-scale-down" data-action="toggle" data-class="mobile-nav-on">
                                <i class="ni ni-menu"></i>
                            </a>
                        </div>
                     
                        <?php echo $__env->yieldContent('edit_breadcrumbs'); ?>

                        
                    </header>
                    <!-- END Page Header --><?php /**PATH C:\xampp\htdocs\111033_IAP\resources\views/111033/templates/edit-header.blade.php ENDPATH**/ ?>