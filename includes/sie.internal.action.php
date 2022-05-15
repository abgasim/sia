<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/sie_includes/sie.main.includes.php';;



$name = filter_input(INPUT_POST, 'name');
$website = filter_input(INPUT_POST, 'website');
$type = filter_input(INPUT_POST, 'type');
$logo = filter_input(INPUT_POST, 'logo');
$aboutus = filter_input(INPUT_POST, 'aboutus');
var_dump($_POST);
//exit;
//$sql = "UPDATE institute_gov SET aboutus = '".$aboutus ."' WHERE name = "."'".$name."'";
// $sql = "UPDATE institute_gov SET website = '" . $website . "' WHERE name = " . "'" . $name . "'";
$toUpdate = ['website' => $website, 'aboutus' => $aboutus, 'logo' => $logo];

foreach ($toUpdate as $key => $value) {
    if ($value != '') {
        $sql = "UPDATE institute_gov SET " . $key . " = '" . $value . "' WHERE name = " . "'" . $name . "'";
        echo $sql;
        $connect->query($sql);
    }
}
// var_dump($sql);
// //exit;
// $data = $connect->query($sql);
// $total = $data->rowCount();

// echo "<p class='h2'>Governmental Instituites found (".$total.")</p>";
// foreach ($data as $row) {
//     echo  "<a target='blank' href=./sie.main.institutes.gov.php?logo=" . $row['logo'] .">";

//     echo "<div>".$row['name'] ;
//     echo "[" . $row['logo'] . "]";
//     echo "</div></a>";
// }



// exit;
// //$sql = "INSERT INTO certification (name, website) values ('$name','$website')";
// //$sql = "INSERT INTO mooc (name, website) values ('$name','$website')";
// //$sql = "INSERT INTO scholarship (name, website) values ('$name','$website')";
// $sql = "INSERT INTO institute (name, website, type, logo) values ('$name','$website', '$type', '$logo')";
// // $sql = "INSERT INTO subject (area) values ('$name')";
// $connect->query($sql);
header("Location: sie.internal.upload.php");
