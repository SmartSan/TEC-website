<?php
$myfile = fopen("admissiondetails.txt", "a") ;
$name=$_POST["name"];
$dob=$_POST["dob"];
$sex=$_POST["sex"];
$fathername=$_POST["fathername"];
$percentage=$_POST["percentage"];
$address=$_POST["address"];
$contact=$_POST["contactno"];
$email=$_POST["email"];
fwrite($myfile,"\nname:");
fwrite($myfile,$name);
fwrite($myfile,"\ndob:");
fwrite($myfile,$dob);
fwrite($myfile,"\nsex:");
fwrite($myfile,$sex);
fwrite($myfile,"\nfathername:");
fwrite($myfile,$fathername);
fwrite($myfile,"\npercentage:");
fwrite($myfile,$percentage);
fwrite($myfile,"\naddress:");
fwrite($myfile,$address);
fwrite($myfile,"\ncontact:");
fwrite($myfile,$contact);
fwrite($myfile,"\nemail:");
fwrite($myfile,$email);
fclose($myfile);

header("Location:admission.php");
?>