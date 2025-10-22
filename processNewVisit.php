<?php

include 'dbcon.php';


$patientID = $_POST['PatientID'];
$doctorID = $_POST['docid'];
$visitTime = $_POST['visitDate'];
$visitTime = $_POST['visitTime'];


$sql = "INSERT INTO Visit (PatientID, DoctorID, VisitDate, VisitTime)
        VALUES ('$patientID','$doctorID','$visitDate','$visitTime')";

echo $sql;
mysqli_query($conn,$sql)
?>