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
        <!--I've added this for the css of datatables-->
        <link rel="stylesheet" media="screen, print" href="<?php echo e(asset('css/datagrid/datatables/datatables.bundle.css')); ?>" >

        <link media="screen, print" href="<?php echo e(asset('css/fa-regular.css')); ?>" rel="stylesheet">
        <link media="screen, print" href="<?php echo e(asset('css/fa-solid.css')); ?>" rel="stylesheet">

        <!-- Place favicon.ico in the root directory -->
         <link rel="icon" href="<?php echo e(URL::asset('img/plane.png')); ?>"sizes="180x180" />
        <link rel="icon" href="<?php echo e(URL::asset('img/plane.png')); ?>" type="image/png"sizes="32x32"/>
        <link rel="mask-icon" href="<?php echo e(URL::asset('img/favicon/safari-pinned-tab.svg')); ?>" color="#5bbad5" />

      
        <script src="<?php echo e(asset('js/datagrid/datatables/jquery.min.js')); ?>" ></script>


        <!-- You can add your own stylesheet here to override any styles that comes before it
        <link rel="stylesheet" media="screen, print" href="css/your_styles.css">-->
    </head>
    
     <body class="mod-bg-1 mod-nav-link header-function-fixed nav-function-fixed" >
        <!-- DOC: script to save and load page settings -->
        
        <!-- BEGIN Page Wrapper -->
        <div class="page-wrapper">
            <div class="page-inner">
                <!-- BEGIN Left Aside -->
                   <!--navbar-->

        <?php echo $__env->make('111033.templates.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
                       
                        <?php echo $__env->yieldContent('student_breadcrumbs'); ?>
                        <?php echo $__env->yieldContent('fees_breadcrumbs'); ?>
                        <?php echo $__env->yieldContent('all_breadcrumbs'); ?>
                        <?php echo $__env->yieldContent('all_payments_breadcrumbs'); ?>
                        <?php echo $__env->yieldContent('edit_breadcrumbs'); ?>

                        <div class="ml-auto d-flex">
                            <!-- activate app search icon (mobile) -->
                            <div class="hidden-sm-up">
                                <a href="#" class="header-icon" data-action="toggle" data-class="mobile-search-on" data-focus="search-field" title="Search">
                                    <i class="fal fa-search"></i>
                                </a>
                            </div>
                            <!-- app settings -->
                            <div class="hidden-md-down">
                                <a href="#" class="header-icon" data-toggle="modal" data-target=".js-modal-settings">
                                    <i class="fal fa-cog"></i>
                                </a>
                            </div>  

                            <!-- app user menu -->
                            <div>
                                <a href="#" data-toggle="dropdown" title="drlantern@gotbootstrap.com" class="header-icon d-flex align-items-center justify-content-center ml-2">
                                    <img src="img/demo/avatars/avatar-h.png" class="profile-image rounded-circle" alt="Dr. Codex Lantern">
                                    <!-- you can also add username next to the avatar with the codes below:
                                    <span class="ml-1 mr-1 text-truncate text-truncate-header hidden-xs-down">Me</span>
                                    <i class="ni ni-chevron-down hidden-xs-down"></i> -->
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg">
                                    <div class="dropdown-header bg-trans-gradient d-flex flex-row py-4 rounded-top">
                                        <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                                            <span class="mr-2">
                                                <img src="img/demo/avatars/avatar-h.png" class="rounded-circle profile-image" alt="Dr. Codex Lantern">
                                            </span>
                                            <div class="info-card-text">
                                                <div class="fs-lg text-truncate text-truncate-lg">Administrator</div>
                                                <span class="text-truncate text-truncate-md opacity-80">administrator@skyhigh.com</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider m-0"></div>
                                    <a href="#" class="dropdown-item" data-action="app-reset">
                                        <span data-i18n="drpdwn.reset_layout">Reset Layout</span>
                                    </a>
                                    <a href="#" class="dropdown-item" data-toggle="modal" data-target=".js-modal-settings">
                                        <span data-i18n="drpdwn.settings">Settings</span>
                                    </a>
                                    <div class="dropdown-divider m-0"></div>
                                    <a href="#" class="dropdown-item" data-action="app-fullscreen">
                                        <span data-i18n="drpdwn.fullscreen">Fullscreen</span>
                                        <i class="float-right text-muted fw-n">F11</i>
                                    </a>
                                    <a href="#" class="dropdown-item" data-action="app-print">
                                        <span data-i18n="drpdwn.print">Print</span>
                                        <i class="float-right text-muted fw-n">Ctrl + P</i>
                                    </a>
                                
                                    <div class="dropdown-divider m-0"></div>
                            
                                  <form id= "form-logout"action="POST">
                                      <?php echo e(csrf_field()); ?>

                                    <a  id="logout" class="dropdown-item fw-500 pt-3 pb-3" href="">
                                        <span data-i18n="drpdwn.page-logout">Logout</span>
                                        <span class="float-right fw-n">&commat;skyhigh</span>
                                    </a>
                                  </form>
                                </div>
                            </div>                         
                   
                        </div>
                    </header>
                    <!-- END Page Header --><?php /**PATH C:\xampp\htdocs\111033_IAP\resources\views/111033/templates/header.blade.php ENDPATH**/ ?>