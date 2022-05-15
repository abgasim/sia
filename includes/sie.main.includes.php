<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/sie.main.connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/sie.main.includes.php';
function header()
{
    echo '
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sie</title>
    <link rel="shortcut icon" href="../img/flag.ico">

    <script src="https://use.fontawesome.com/61d813f638.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/sie.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5528376568579945"
     crossorigin="anonymous"></script>
</head>
<header>
<div class="header">
    <h1>
        <p class="h1" style="font-weight:bold">
        <a href="../index.php"><span style="color: white">www.studyinaddis.com</span></a>



    </h1>
    <ul>
    <li><a class="h3 links" href = "../includes/sie.main.institutes.gov.php"><i class="fa fa-institution"></i>Institutes,Universities, & Colleges List<br>(More than 38 institutes)</a>

    </li>
    <li><a class="h3 links" href = "../includes/sie.main.scholarship.php"><i class="fa fa-link"></i>Scholarships and Studying abroad<br>(UK,USA,EUROPE)</a></li>
    <li><a class="h3 links" href = "../includes/sie.main.certification.php"><i class="fa fa-certificate"></i>Certifications & Online Courses<br> (IELTS,TOEFL,UDACITY,MoSHE,...)</a></li>

    <li><a class="h3 links" href = "../includes/sie.main.aboutus.php">About Us</a></li>
    
       <li><a class="h3 links" href = "../includes/sie.main.forms1.php">Form</a></li>

    </ul>
</div>
</header>';
// <form class="example" action="/action_page.php">
// <input type="text" placeholder="Search.." name="search">
// <button type="submit"><i class="fa fa-search"></i></button>
// </form>
// <li><a class="h3 links" href = "./includes/sie.main.resources.php"><i class="fa fa-book"></i>Resource</a></li>
// <li><a class="h3 links" href = "./includes/sie.main.donate.php">Donation</a></li>
// <li><a class="h3 links" href = "./includes/sie.main.student.portal.php"><i class="fa fa-sign-in"></i>Portal</a></li>

// <ul>
// <li><a class="h3 links" href = "./sie.internal.upload.php">upload</a></li>
// <li><a href="sie.main.institutes.gov.php">Governmental </a></li>
// <li><a href="sie.main.institutes.private.php">Private </a></li>
// </ul>
}

function footer(){
    echo '<footer class="footer-section" style="text-align: center">Copyright © SiE 2021 , Powered By <a href="https://abgasim.com/">ABGASIM</a></footer>';
    echo '</html>';
}
