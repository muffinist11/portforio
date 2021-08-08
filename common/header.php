<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="webデザインで貴方の仕事をお手伝いします">
    <meta name="keywords" content="ポートフォリオ,webデザイン,コーディング,webdesign,coding">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CP.T</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri();?>/img/49364.jpg">
    <meta name="google-site-verification" content="kv-ZpfoR3KMJX8RoyDd8oFJt2X-LJVm0mo8ENSj2_ck" />
</head>
<body>

    <header>
        <div class="logo">
            <h1></h1>
        </div>

        <div class="pc-menu">
            <nav id="gnav">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="about">About me</a></li>
                    <li><a href="works">Works</a></li>
                    <li><a href="contact">Contact</a></li>
                    <!-- 
                    <li><a href="#">blog</a></li> -->
                </ul>
            </nav>
        </div>
        <div class="sp-menu">
            <span class="material-icons" id="open">menu</span>
        </div>
    </header>

    <div class="overlay">
        <span class="material-icons" id="close">close</span>
        <nav>
            <ul id="inner">
                <li><a href="/">Home</a></li>
                <li><a href="about">About me</a></li>
                <li><a href="works">Works</a></li>
                <li><a href="contact">Contact</a></li>
                <!--
                <li><a href="#">blog</a></li> -->
            </ul> 
        </nav>
    </div>

    <div  class="animetion-outer">
        <div class="box">
            <div class="square -one"></div>
            <div class="square -two"></div>
            <div class="square -three"></div>
            <div class="name-inner">Creamy Panda . Tokyo</div>
        </div>
    </div>


