<?php
include "config.php";

$SurName = $_POST['sur_name'];

$FirstName = $_POST['first_name'];

$LastName = $_POST['last_name'];

$Company = $_POST['company'];

$DateOfBirth = $_POST['date_of_birth'];

$Address = $_POST['address'];

$PostalCode = $_POST['zip_postal'];

$CityName = $_POST['city'];

$Country = $_POST['country'];

$Nationality = $_POST['nationality'];

$ResidingCountry = $_POST['residing_country'];

$Telephone = $_POST['tele_num'];

$MobileNumber = $_POST['phone_code']."-".$_POST['mobile'];

$Email = $_POST['email'];

$Designation = $_POST['designation'];

$sql = mysql_query("insert into visitors_registration (SurName,FirstName,LastName,Company,DateOfBirth,Address,PostalCode,CityName,Nationality,Country,Telephone,MobileNumber,Email,Designation) values ('$SurName','$FirstName','$LastName','$Company','$DateOfBirth','$Address','$PostalCode','$CityName','$Nationality','$ResidingCountry','$Telephone','$MobileNumber','$Email','$Designation')");

$message = "Visitor Added Successfully";
header('location:visitors_registration.php?message='.$message);

?>