<?php

$pv_name=$_POST["fname"];
$pv_email=$_POST["email"];
$pv_date=$_POST["date"];
$pv_services=$_POST["services"];

            
$headers="From: New Inquiry piyushrokade129@gmail.com" . "\r\n";

$headers .= "Reply-To: " .$pv_email . "\r\n";

$headers .= 'X-Mailer: PHP/' . phpversion();

$headers .= "MINE-Version: 1.0\r\n";

$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

$subj="New Enquiry Received from=> $pv_name";

$body="$pv_name\n $pv_email\n $pv_date\n $pv_services";

if (mail("piyushrokade129@gmail.com", $subj, $body))

{

  echo "<script> location='index.php';</script>";

}

else{

    echo "Error";

}

?>