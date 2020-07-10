<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Sky High Aviation</title>
        <meta name="description" content="Login">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">

        <meta name="apple-mobile-web-app-capable" content="yes" />

        <meta name="msapplication-tap-highlight" content="no">

        <link id="vendorsbundle" media="screen, print" href="<?php echo e(asset('css/vendors.bundle.css')); ?>" rel="stylesheet">
        <link id="appbundle" media="screen, print" href="<?php echo e(asset('css/app.bundle.css')); ?>" rel="stylesheet">
        <link id="mytheme" rel="stylesheet" media="screen, print" href="#">
        <link id="myskin" media="screen, print" href="<?php echo e(asset('css/skins/skin-master.css')); ?>" rel="stylesheet">

         <link rel="icon" href="<?php echo e(URL::asset('img/plane.png')); ?>"sizes="180x180" />
        <link rel="icon" href="<?php echo e(URL::asset('img/plane.png')); ?>" type="image/png"sizes="32x32"/>
        <link rel="mask-icon" href="<?php echo e(URL::asset('img/favicon/safari-pinned-tab.svg')); ?>" color="#5bbad5" />
        <link id="myskin" media="screen, print" href="<?php echo e(asset('css/page-login-alt.css')); ?>" rel="stylesheet">
        <style >
            .heading{
                z-index: 6; font-family: Poppins; visibility: visible; line-height: 75px; letter-spacing: 0px; font-weight: 600; font-size: 65px; border-color: rgb(124, 124, 124); border-style: none; margin: 0px; border-radius: 0px; padding: 0px 0px 10px; color: #826bb0; text-decoration: none; white-space: normal; width: 860px; height: auto; min-height: 0px; min-width: 0px; max-height: none; max-width: none; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;margin-left: 250px!important;
            }
            .content-div{margin-top:10%;height: 80%; background-color: transparent!important;}
            .img{margin-left: 490px;width: 10%;height: 10%!important;}
            .h3{margin-left: 13%;font-weight:100; font-size: 40px;color: #826bb0;font-family: Poppins!important;}
        </style>
    </head>

    <body>
        <div class="col-11">
            <div class="content-div">
                <div>
                    <img class="img" src="<?php echo e(URL::asset('img/plane.png')); ?>">

                    <br>
                    <h1 class="heading"><b>Sky High</b><span class="fw-300"><i> Aviation School</i></span></h1><br>

                    <h3 class="h3"><i>Once you get to the skies, the ground is never an option</i></h3> <br><br>
                 
                    <div class="row" style="margin-left: 32%!important;">
                        <button type="button" class="btn btn-sm btn-outline-primary col-3 btn-pills waves-effect waves-themed" style="border-radius: 25px;" onclick="window.location='<?php echo e(url('student')); ?>'">
                            <h4 style="padding-top: 8px!important;"><i class="fal fa-users"></i> STUDENTS</h4>
                        </button>

                        <button style="border-radius: 25px;margin-left: 7px!important;"type="button" onclick="window.location='<?php echo e(url('fees')); ?>'" class="btn btn-outline-primary col-3 btn-pills waves-effect waves-themed"> 
                            <h4 style="padding-top: 8px!important;"><i class="fal fa-money-bill-wave"></i> FEES</h4>
                        </button>
                    </div>
                </div>
            </div>
        </div>
                
        <video poster="img/backgrounds/clouds.png" id="bgvid" playsinline autoplay muted loop>
            <source src="media/video/cc.webm" type="video/webm">
            <source src="media/video/cc.mp4" type="video/mp4">
        </video>
       
         <script src="<?php echo e(asset('js/vendors.bundle.js')); ?>"></script>
        <script src="<?php echo e(asset('js/app.bundle.js')); ?>"></script>
    </body>

    <script>
            'use strict';

            var classHolder = document.getElementsByTagName("BODY")[0],
                /** 
                 * Load from localstorage
                 **/
                themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
                {},
                themeURL = themeSettings.themeURL || '',
                themeOptions = themeSettings.themeOptions || '';
            /** 
             * Load theme options
             **/
            if (themeSettings.themeOptions)
            {
                classHolder.className = themeSettings.themeOptions;
                console.log("%c✔ Theme settings loaded", "color: #148f32");
            }
            else
            {
                console.log("%c✔ Heads up! Theme settings is empty or does not exist, loading default settings...", "color: #ed1c24");
            }
            if (themeSettings.themeURL && !document.getElementById('mytheme'))
            {
                var cssfile = document.createElement('link');
                cssfile.id = 'mytheme';
                cssfile.rel = 'stylesheet';
                cssfile.href = themeURL;
                document.getElementsByTagName('head')[0].appendChild(cssfile);

            }
            else if (themeSettings.themeURL && document.getElementById('mytheme'))
            {
                document.getElementById('mytheme').href = themeSettings.themeURL;
            }
            /** 
             * Save to localstorage 
             **/
            var saveSettings = function()
            {
                themeSettings.themeOptions = String(classHolder.className).split(/[^\w-]+/).filter(function(item)
                {
                    return /^(nav|header|footer|mod|display)-/i.test(item);
                }).join(' ');
                if (document.getElementById('mytheme'))
                {
                    themeSettings.themeURL = document.getElementById('mytheme').getAttribute("href");
                };
                localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
            }
            /** 
             * Reset settings
             **/
            var resetSettings = function()
            {
                localStorage.setItem("themeSettings", "");
            }

    </script>
</html>

<?php /**PATH C:\xampp\htdocs\111033_IAP\resources\views/MySchool.blade.php ENDPATH**/ ?>