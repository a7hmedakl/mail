<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>

<main id="main" ng-controller="Sportscontroller">
        <div class="overlay"></div>
        <header class="header">
            <div class="search-box">
                <input placeholder="ابحث هنا..." ng-model="name"><span class="icon glyphicon glyphicon-search"></span>                
            </div>
            
            <h1 class="page-title">
                <a class="sidebar-toggle-btn trigger-toggle-sidebar">
                    <span class="line"></span><span class="line"></span>
                    <span class="line"></span><span class="line line-angle1"></span>
                    <span class="line line-angle2"></span></a>
                <a href="#" class="wp2 animated bounceInUp"> <span class="icon fa fa-envelope"></span></a>
                صندوق المراسلات
                <!--<a><span class="icon glyphicon glyphicon-chevron-down"></span></a>-->
            </h1>
            
            <div class="pull-left col-md-4 col-xs-12">
                
            </div>
            
        </header>
        <div class="action-bar boot-tooltip">
            <ul>
                <li><a href="#" data-toggle="tooltip" data-original-title="" class="icon circle-icon glyphicon glyphicon-chevron-down"></a></li>
                <li><a href="#" data-toggle="tooltip" data-original-title="تحديث" class="icon circle-icon glyphicon glyphicon-refresh"></a></li>
                <li><a href="#" data-toggle="tooltip" data-original-title="احاله" class="icon circle-icon glyphicon glyphicon-share-alt"></a></li>
                <li><a href="#" data-toggle="tooltip" data-original-title="ارسال الكتاب" class="icon circle-icon glyphicon glyphicon-pencil"></a></li>
                <li><a href="#" data-toggle="tooltip" data-original-title="حذف" class="icon circle-icon red glyphicon glyphicon-remove"></a></li>
                <li><a href="#" data-toggle="tooltip" data-original-title="معاينة" class="icon circle-icon red glyphicon glyphicon-eye-open"></a></li>
                <li><a href="#" data-toggle="tooltip" data-original-title="طباعة" class="icon circle-icon red glyphicon glyphicon-print"></a></li>
            </ul>

            <div class="pull-left filter-date">


                <div class="dropdown dropdown-submit-input">
                    <button class="btn btn-default btn-sm btn-filter" data-toggle="dropdown" aria-haspopup="true">
                        <span class="glyphicon glyphicon-filter"></span>
                        الفرز
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#" data-value="1">حسب التاريخ</a></li>
                        <!--<li><a href="#" data-value="2">تنازلى</a></li>-->

                    </ul>
                </div>

                <!--<input type="text" id="name" placeholder="Search" class="form-control" ng-model="name">-->
                <!--                <label class="control-label">فرز بالتاريخ</label>
                                <select class="form-control" style="padding: 5px;" ng-model="name">
                                    <option ng-repeat="sport in sports">{{sport.name}}</option>
                                </select>-->

            </div>

            <div class="clearfix"></div>
        </div>
        <div id="main-nano-wrapper" class="nano">
            <div class="nano-content">

                <table class="message-list table table-responsive">
                    <thead>
                        <tr class="unread">
                            <td class="subject" style="padding-right: 25px;">
                                <div class="checkbox-wrapper">
                                    <input type="checkbox" id="chk1">
                                    <label for="chk1" class="toggle"></label>
                                </div>
                            </td>
                            <td class="subject">
                                <span class="teaser">
                                    رقم المرجع 
                                </span>
                            </td>
                            <td class="subject">
                                <span class="teaser">
                                    الموضوع 
                                </span>
                            </td>
                            <td class="subject">
                                <span class="teaser">
                                    نقل من 
                                </span>
                            </td>
                            <td class="subject">
                                <span class="teaser">
                                    التوجيه 
                                </span>
                            </td>
                            <td class="subject">
                                <span class="teaser">
                                    تاريخ الإحاله 
                                </span>
                            </td>
                            <td class="subject">
                                <span class="teaser">
                                    الحاله 
                                </span>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="unread" ng-repeat="sport in sports| filter: name">
                            <td class="subject" style="padding-right: 25px;">
                                <div class="checkbox-wrapper">
                                    <input type="checkbox" id="chk1">
                                    <label for="chk1" class="toggle"></label>
                                </div>
                                <span class="star-toggle fa fa-star-o"></span>
                            </td>
                            <td class="subject">
                                <span class="teaser">
                                    {{sport.reference}} 
                                </span>
                            </td>
                            <td class="subject">
                                <span class="teaser">
                                    {{sport.name}} 
                                </span>
                            </td>
                            <td class="subject">
                                <span class="teaser">
                                    {{sport.from}} 
                                </span>
                            </td>
                            <td class="subject">
                                <span class="teaser">
                                    {{sport.guide}} 
                                </span>
                            </td>
                            <td class="subject">
                                <span class="teaser">
                                    {{sport.date}} 
                                </span>
                            </td>
                            <td class="subject">
                                <span class="teaser">
                                    {{sport.case}} 
                                </span>
                            </td>

                        </tr>
                    </tbody>
                </table>


                <a href="#" class="load-more-link">مشاهدة المزيد</a>
            </div>
        </div>

    </main>