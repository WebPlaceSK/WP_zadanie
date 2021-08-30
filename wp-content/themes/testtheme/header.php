<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Bootstrap v5.1</title>
    <link href="<?php echo get_stylesheet_uri() ?>">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-grid.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-grid.rtl.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-reboot.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-reboot.rtl.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.rtl.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-utilities.rtl.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-utilities.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/all.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/font/style.css"/>
    <style>
        body{
            font-family:'Myriad Pro Regular';
        }
        .col-xs-offset-right-1 {
            border-right: 2px #cdd7e6 solid;
            padding: 0 8.33333333% 0 0;
        }
        .col-xs-offset-left-1 {
            margin-left: 8.33333333%;
        }
        @media (min-width: 768px) {
            .col-sm-offset-right-1 {
                border-right: 2px #cdd7e6 solid;
                padding: 0 8.33333333% 0 0;
            }
            .col-sm-offset-left-1 {
                margin-left: 8.33333333%;
            }
        }
        @media (min-width: 992px) {
            .col-md-offset-right-1 {
                border-right: 2px #cdd7e6 solid;
                padding: 0 8.33333333% 0 0;
            }
            .col-md-offset-left-1 {
                margin-left: 8.33333333%;
            }
        }
        @media (min-width: 1200px) {
            .col-lg-offset-right-1 {
                border-right: 2px #cdd7e6 solid;
                padding: 0 8.33333333% 0 0;
            }
            .col-lg-offset-left-1 {
                margin-left: 8.33333333%;
            }
        }
        .masthead {
            height: 80%;
            min-height: 50vh;
            background-image: url('<?php bloginfo('template_url'); ?>/img/shutterstock_1148185499.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .info_layout{
            padding: 10px;
            font-size: 18px;
            margin: 0;
        }
        .info_layout img{
            margin: 0;
            padding-right: 10px;
            padding-bottom: 5px;
        }
        .content_area{
            padding-top: 70px;
        }
        .body-callout-text, .body-callout-img{
            line-height: 36px;
            font-size: 18px;
            padding: 40px 0;
        }
        article{
            line-height: 36px;
            font-size: 18px;
            padding: 20px 0;
        }
        .announcements{
            color: #2b4771;
            font-size: 30px;
            padding: 0;
            margin: 0;
        }
        .twitterBox{
            background-color: #cdd7e6;
            color: #2b4771;
            font-size: 18px;
        }
        .twiterfollow{
            color: #4d9ede;
            font-size: 40px;
            float: right;
        }
        .vertical-center {
            padding: 25px 10px;
            display: flex;
            align-items: center;
        }
        .bgr-f2f2f2{
            background-color: #f2f2f2;
        }
        .bgr-db615e{
            background-color: #db615e;
        }
        .recent-link{
            float: right;
            font-size: 20px;
            color: #2b4771;
            text-decoration: none;
            bottom: 0;
            font-weight: lighter;
        }
        .warning_img_block{
            background-color: #ed5759;
            width: 70px;
        }
        .text_button{
            color: #323232;
            font-size: 18px;
            font-weight: bold;
            bottom: 0;
            text-decoration: none;
            cursor: pointer;
            font-style: normal;
        }
        .text_button i{
            font-style: normal;
        }
        .card_collapse{
            padding-left: 30px;
        }
        .comunity_event_title{
            border-bottom: 2px #cdd7e6 solid;
            font-size: 30px;
            color: #2d4771;
            font-weight: bold;
        }
        .comunity_event_date{
            padding-top: 20px;
            font-size: 16px;
            color: #2d4771;
            font-weight: bold;
        }
        .comunity_event_text{
            padding-bottom: 20px;
            font-size: 20px;
            color: #323232;
        }
        .comunity_event_more{
            color: #eb924f;
            font-size: 18px;
            text-decoration: none
        }
        .p_text_box {
            padding: 30px 10px 10px 30px;
            font-weight: bold;
            color: #2b4771;
            font-size: 30px;
        }
        .p_text_box_content{
            padding: 10px 30px;
            font-weight: normal;
            color: #323232;
            font-size: 18px;

        }
        .p_text_box_button{
            margin: 20px 0 40px 30px;
            padding: 10px 30px;
            font-weight: normal;
            font-size: 18px;
            color: #000;
            background-color: #eb924f;
            border-color: #eb924f;

        }
        .p_email_box_button{
            padding: 10px 45px;
            font-weight: normal;
            font-size: 18px;
            color: #000;
            background-color: #eb924f;
            border-color: #eb924f;
            box-shadow: 0px 0px 5px 5px rgba(0, 0, 0, 0.1);

        }
        .footer_mail_text{
            padding: 20px 0;
        }
        .email{
            border: none;
            border-bottom: 2px #555555 solid;
            margin: 10px 0;
            width: 100%;
            background: transparent;
        }
        .home_get_img_1{
            background-image: url('<?php bloginfo('template_url'); ?>/img/icon_2.png');
            width: 100%;
            height: 20px;
            background-repeat: no-repeat;
        }
        .home_get_img_1 p{
            padding: 0;
        }
        .home_get_img_2{
            background-image: url('<?php bloginfo('template_url'); ?>/img/icon_3.png');
            width: 100%;
            height: 21px;
            background-repeat: no-repeat;
        }
        .home_get_img_2 p{
            padding: 0;
        }
        li{
            list-style: none;
        }
        .widget_block p{
            padding: 0;
            margin: 0;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        wp_nav_menu( array(
                'menu'              => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse justify-content-end',
                'container_id'      => 'navbarNav',
                'menu_class'        => 'nav nav-pills',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'list_item_class'   => 'nav-item',
                'link_class'        => 'nav-link m-2 menu-item nav-active'
            )
        );
        ?>
    </div>
</nav>

<main>
    <header class="masthead d-flex align-items-center">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-6 align-items-center" >
                    <h5 style="color: #cdd7e6; padding: 15vh 0 10vh 0 ">Committee</h5>
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-6 align-items-center" style="background-color: rgb(43 74 121); color: white; font-weight: bold; padding: 3vh">
                    <h1 class="fw-bold">Your Community Voice</h1>
                    <p class="lead h5 fw-bold text-justify">Manhattan Community Board 6 lorem et dolor sit amet lipsum erus  donec neque</p>
                </div>
            </div>
        </div>
        <div class="b-example-divider"></div>
    </header>
    <div class="d-flex align-items-center" style="background-color: #f2f2f2">
        <div class="container">
            <div class="row">
                <div class="col-4 info_layout">
                    <img src="<?php bloginfo('template_url'); ?>/img/icon_1.png">
                    <i class="home_get_img_1"></i>Next Full Board Meeting: June 14, 2020
                </div>
                <div class="col-4 info_layout">
                    <?php if ( is_active_sidebar( 'home_json_data_1' ) ) : ?><?php dynamic_sidebar( 'home_json_data_1' ); ?><?php endif; ?>
                </div>
                <div class="col-4 info_layout">
                    <?php if ( is_active_sidebar( 'home_json_data_2' ) ) : ?><?php dynamic_sidebar( 'home_json_data_2' ); ?><?php endif; ?>
                </div>
            </div>
        </div>
    </div>
