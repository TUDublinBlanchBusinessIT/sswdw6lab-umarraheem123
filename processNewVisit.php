<?php

include 'dbcon.php';


$patientID = $_POST['PatientID'];
$doctorID = $_POST['DoctorID'];
$visitTime = $_POST['VisitDate'];
$visitTime = $_POST['VisitTime'];


$sql = "INSERT INTO Visit (PatientID, DoctorID, VisitDate, VisitTime)
        VALUES ('$patientID','$doctorID','$visitDate','$visitTime')";

echo $sql;
?>