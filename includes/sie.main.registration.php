<?php

$documnetRootPath = $_SERVER['DOCUMENT_ROOT'];
require_once $documnetRootPath.'/sie_includes/sie.main.connect.php';
require_once $documnetRootPath.'/sie_includes/sie.main.includes.php';

    $university_name =   $_GET["university_name"];
    $program_level =     $_GET["program_level"];
    $credit =           $_GET["credit"];
    $education_place =   $_GET["education_place"];
    $instruction_time =  $_GET["instruction_time"];
    $language_of_instruction =  $_GET["language_of_instruction"];


$sql = "
INSERT INTO `all_programs`(`university`, `program`, `credit_hr`, `education_place`, `instruction_time`, `language`) VALUES (". 
$university_name.",". $program_level.",". $credit.",'". $education_place."','". $instruction_time."','". $language_of_instruction."')";


$stmt= $connect->query($sql);
header('Location: ./sie.main.forms1.php');
?>