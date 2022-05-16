<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/main.connect.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/main.includes.php';
function myheader()
{
    echo '
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>studyinaddis</title>
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
    <link rel="stylesheet" href="../css/mystyle.css">
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
    <li>
    <a class="h3 links" href = "../includes/main.institutes.gov.php"><i class="fa fa-institution"></i>&nbsp;Polytechnic and College Lists</a>
    </li>
    <li><a class="h3 links" href = "../includes/main.resources.php"><i class="fa fa-book"></i>&nbsp;Resource</a></li>
    <li><a class="h3 links" href = "../includes/main.donate.php"><i class="fa fa-heart"></i>&nbsp;Donation</a></li>
    <li><a class="h3 links" href = "../includes/main.student.portal.php"><i class="fa fa-sign-in">&nbsp;</i>Student portal</a></li>
    <li><a class="h3 links" href = "../forms/all_forms.php">Form</a></li>
    <li><a class="h3 links" href = "../includes/main.aboutus.php">About Us</a></li>
    </ul>
</div>
</header>';
    // <li><a class="h3 links" href = "../includes/main.scholarship.php"><i class="fa fa-link"></i>Scholarships and Studying abroad<br>(UK,USA,EUROPE)</a></li>
    // <li><a class="h3 links" href = "../includes/main.certification.php"><i class="fa fa-certificate"></i>Certifications & Online Courses<br> (IELTS,TOEFL,UDACITY,MoSHE,...)</a></li>

    // <li><a class="h3 links" href = "../includes/main.aboutus.php">About Us</a></li>

    //    <li><a class="h3 links" href = "../includes/main.forms1.php">Form</a></li>
    // <form class="example" action="/action_page.php">
    // <input type="text" placeholder="Search.." name="search">
    // <button type="submit"><i class="fa fa-search"></i></button>
    // </form>
    // <li><a class="h3 links" href = "./includes/main.resources.php"><i class="fa fa-book"></i>Resource</a></li>
    // <li><a class="h3 links" href = "./includes/main.donate.php">Donation</a></li>
    // <li><a class="h3 links" href = "./includes/main.student.portal.php"><i class="fa fa-sign-in"></i>Portal</a></li>

    // <ul>
    // <li><a class="h3 links" href = "./internal.upload.php">upload</a></li>
    // <li><a href="sie.main.institutes.gov.php">Governmental </a></li>
    // <li><a href="sie.main.institutes.private.php">Private </a></li>
    // </ul>
}

function myfooter()
{
    echo '<footer class="footer-section" style="text-align: center">Copyright © SIA 2022 , Powered By <a href="#">GABE Technology Solution</a></footer>';
    echo '</html>';
}
