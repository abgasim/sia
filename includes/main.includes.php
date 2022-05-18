<?php
function getUrl($lang = "en")
{
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    if (strpos($url, 'lan=en') !== false || strpos($url, 'lan=am') !== false) {
        return $url;
    }
    $components = parse_url($url);
    parse_str($components['query'], $results);
    if (empty($results)) {
        return ($url . '?lan=' . $lang);
    } else {
        return ($url . '&lan=' . $lang);
    }
}
function myheader()
{
    if (isset($_GET) && $_GET['lang'] == "am") {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/language/am.php';
    } else {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/language/en.php';
    }

    echo '
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>studyinaddis</title>
    <link rel="shortcut icon" href="../images/favicon.ico">

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
        <p class="h1" style="margin-left: 20px;">
        <a href="../index.php">
        <span style="color: white;">www.studyinaddis.com</span>
        </p>
    </h1>
    <a class="btn btn-primary" href="' . getUrl("en") . '">English</a>
    <a class="btn btn-primary" href="' . getUrl("am") . '">አማርኛ</a>
    ';
    echo 'en en en' . getUrl("en") . '<br>';
    echo 'am am am' . getUrl("am") . '<br>';

    echo '
    <ul>
    <li>
    <a class="h3 links" href = "../includes/main.institutes.gov.php"><i class="fa fa-institution"></i>&nbsp;Polytechnic and College Lists</a>
    </li>
    <li><a class="h3 links" href = "../includes/main.resources.php"><i class="fa fa-book"></i>&nbsp;Resource</a></li>
    <li><a class="h3 links" href = "../includes/main.donate.php"><i class="fa fa-heart"></i>&nbsp;Donation</a></li>
    <li><a class="h3 links" href = "../includes/main.student.portal.php"><i class="fa fa-sign-in">&nbsp;</i>Login</a></li>
    <li><a class="h3 links" href = "../forms/all_forms.php">Forms</a></li>
    <li><a class="h3 links" href = "../includes/main.aboutus.php">About Us</a></li>
    </ul>
    </div>
    </header>';

    //     echo '
    //     <ul>
    //     <li><a class="h3 links" href = "../includes/main.institutes.gov.php"><i class="fa fa-institution"></i>&nbsp;' . $_TXT[1] . '</a></li>
    //     <li><a class="h3 links" href = "../includes/main.resources.php"><i class="fa fa-book"></i>&nbsp;' . $_TXT[2] . '</a></li>
    //     <li><a class="h3 links" href = "../includes/main.donate.php"><i class="fa fa-heart"></i>&nbsp;' . $_TXT[3] . '</a></li>
    //     <li><a class="h3 links" href = "../includes/main.student.portal.php"><i class="fa fa-sign-in">&nbsp;</i>' . $_TXT[4] . '</a></li>
    //     <li><a class="h3 links" href = "../forms/all_forms.php">' . $_TXT[5] . '</a></li>
    //     <li><a class="h3 links" href = "../includes/main.aboutus.php">' . $_TXT[6] . '</a></li>
    //     </ul>
    // </div>
    // </header>';
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

$maps = array(
    'ATG' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.579817109806!2d38.741905115255236!3d9.010754191754343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b85da69ce69ed%3A0x2572971e9e281f63!2sAddis%20Ababa%20Tegbareid%20Polytechnic%20College!5e0!3m2!1sen!2set!4v1652773629811!5m2!1sen!2set" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
    'AKI' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15761.347729893714!2d38.71872322723663!3d9.03299709628871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b88a0d05bd0b5%3A0x5b6de879862b253b!2sAddis%20Ketema%20Industrial%20College!5e0!3m2!1sen!2set!4v1652774781807!5m2!1sen!2set" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
    'AKK' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.1799702834646!2d38.80828521478539!3d8.862831593636228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b79849b5b425f%3A0xaebd06baf5de9a1e!2sAkaki%20Polytechnic%20College!5e0!3m2!1sen!2set!4v1652775165810!5m2!1sen!2set" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
    'ARM' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.2912997586277!2d38.76683481478664!3d9.0371699935152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b8f7ca52f27c5%3A0x88a4ac2d1663ccf1!2sArada%20Manufacturing%20College!5e0!3m2!1sen!2set!4v1652775256196!5m2!1sen!2set" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
    'BLM' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.547768686169!2d38.86373566525503!3d9.013692241709258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b9baf02921551%3A0x6c96a46237df2a73!2zQm9sZSBNYW51ZmFjdHVyaW5nIENvbGxlZ2UgfCDhiabhiIwg4Yib4YqR4Y2L4Yqt4Ym44Yiq4YqV4YyNIOGKruGIjOGMhQ!5e0!3m2!1sen!2set!4v1652775353555!5m2!1sen!2set" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
    'ETT' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.1380720170628!2d38.763145915255144!3d9.051167991132377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b8f6cd745d673%3A0xba5f61049290050c!2sEntoto%20Polytechnic%20College!5e0!3m2!1sen!2set!4v1652775424522!5m2!1sen!2set" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
    'GWG' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.1038970473296!2d38.71225171525505!3d9.054287091084234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b8895b419168d%3A0x940cd58dfc899705!2sGeneral%20Wingate%20Technical%20And%20Vocational%20College!5e0!3m2!1sen!2set!4v1652775498840!5m2!1sen!2set" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
    'GFI' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.9706328140587!2d38.739953715255005!3d8.974849292304732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b8521940aa591%3A0xb596340cf90d5ab0!2sGOFA%20INDUSTRIAL%20COLLEGE!5e0!3m2!1sen!2set!4v1652775578484!5m2!1sen!2set" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
    'KFI' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63048.55873169259!2d38.6540526168408!3d9.014869815655324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b8726c7c7b339%3A0x527d79b2c312cf68!2sKolfe%20Keranio%2C%20Addis%20Ababa!5e0!3m2!1sen!2set!4v1652776362275!5m2!1sen!2set" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
    'KKM' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.7885233133707!2d38.75069921525512!3d8.991597692048225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b85faf33b36ed%3A0x5f52256103eee42a!2sKirkos%20Manufacturing%20College!5e0!3m2!1sen!2set!4v1652775653984!5m2!1sen!2set" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
    'LDM' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.513694184762!2d38.72670731525501!3d9.016814991661283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b8708953c6d4b%3A0x3ac967c6476112b6!2sLideta%20Manufacturing%20College!5e0!3m2!1sen!2set!4v1652776171741!5m2!1sen!2set" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
    'MSK' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.4296383030655!2d38.78297551525498!3d9.02451369154295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b857bae727ba9%3A0x5982fb144b4d3776!2sMisrak%20Poly%20Technic%20College!5e0!3m2!1sen!2set!4v1652775978516!5m2!1sen!2set" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
    'NSK' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3941.0016574627766!2d38.75844191744385!3d8.971992900000021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b8548c0403725%3A0x21b07efbe2ea48d5!2zTmVmYXMgU2lsayBQb2x5dGVjaG5pYyBDb2xsZWdlIHwgTWFtbyBDb25kb21pbml1bSB8IOGKleGNi-GItSDhiLXhiI3hiq0g4Y2W4YiK4Ym04Yqt4YqS4YqtIHwg4Yib4YieIOGKruGKleGLtuGImuGKkuGLqOGInQ!5e0!3m2!1sen!2set!4v1652775886348!5m2!1sen!2set" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
    'YKI' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15760.331070933744!2d38.76953686977539!3d9.056215000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b8fc77854b429%3A0x808d97097f46f27d!2sYeka%20Industrial%20college!5e0!3m2!1sen!2set!4v1652775818028!5m2!1sen!2set" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'
);
