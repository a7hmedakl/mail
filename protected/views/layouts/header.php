<!DOCTYPE html>
<html ng-app="Sports">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>نظام التراسل الإلكترونى</title>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/bootstrap.css" /> 
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/bootstrap-rtl.css" /> 
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/normalize.css" /> 
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/font-awesome.min.css" /> 
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/style.css" />   
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/animate.css" />   
        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="<?php echo Yii::app()->baseUrl; ?>/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.<?php echo Yii::app()->baseUrl; ?>/js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body class="flip">

        <aside id="sidebar" class="nano">
            <div class="nano-content">
                <div class="logo-container">
                    <span class="logo glyphicon glyphicon-envelope"></span>
                    <label>
                        <address>
                            نظــــام التــراسل الإلـــكترونى
                        </address>
                        Correspondance Tracking System
                    </label>
                </div>

                <div class="profile-userpic">
                    <img src="<?php echo Yii::app()->baseUrl; ?>/images/8.jpg" class="img-responsive" alt="">

                    <h5>مرحبا أحمد عقل</h5>

                    <a href="javascript:void(0)" onclick="myuploader()" class="cam-bt animated bounce upload-profile">
                        <i class="fa fa-camera"></i>
                    </a>
                    <input type="file" accept="image/*" id="pp_uploader">

                </div>

                <menu class="menu-segment">
                    <ul>
                        <li class="active">
                            <a href="#">
                                <i class="fa fa-newspaper-o"></i>
                                مسوداتى <span> 2</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-inbox"></i>
                                صندوق المراسلات
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-share-square-o"></i>
                                مرسله
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-clock-o"></i>
                                متابعة البريد 
                                <span> 3</span>
                            </a>
                        </li>
                    </ul>
                </menu>

            </div>
        </aside>