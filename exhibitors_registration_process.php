<?php
include "config.php";

$sur_name = $_POST['sur_name'];

$fname = $_POST['name'];


$lname = $_POST['last_name'];

$company = $_POST['company'];

$dob = $_POST['dob'];

$address = $_POST['address'];

$zip = $_POST['zip_postal'];

$city = $_POST['city'];

$country = $_POST['country'];

$nationality = $_POST['nationality'];

$residing_country = $_POST['residing_country'];

$telephone = $_POST['tele_num'];

$phone_code = $_POST['phone_code'];

$mobile_num = $_POST['mobile_num'];

$email = $_POST['email_id'];

$designation = $_POST['designation'];



echo $sql = "insert into registration(name_title,fname,lname,company,dob,address,zip,city,nationality,counrty,telephone,phone_code,mobile,email,degignation,reg_type) values ('$sur_name','$fname','$lname','$company','$dob','$address','$zip','$city','$nationality','$country','$telephone','$phone_code','$mobile_num','$email','$designation','1')";

if(mysql_query($sql))
{
    header('location:index.php');
}
else echo "Try Again Later!";
