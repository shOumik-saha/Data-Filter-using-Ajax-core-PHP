<?php

include("config/db.php");
// echo "here";
$doc_name = $_POST['doc_name'];
$speciality = $_POST['speciality'];
$branch = $_POST['branch'];
$days = $_POST['days'];
$status = $_POST['status'];

$sql = "INSERT INTO datafilter(doc_name, speciality, branch, days, status)
VALUES('$doc_name', '$speciality', '$branch', '$days', '$status')";
$query = $connect->query($sql);
if($query){
    echo "Record saved successfully";
}
else{
    echo 'Failed!';
}
?>
