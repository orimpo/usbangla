<?php
include "header.php";
include "config.php";

$sqlRes = "SELECT * FROM `registration` WHERE 1";
$sql = mysql_query($sqlRes);
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Table</h2>
    <p style="color: #00A8FF">Client List</p>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Mr.</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Company</th>
                <th>Date Of Birth</th>
                <th>Address</th>
                <th>Postal Zip</th>
                <th>City</th>
                <th>Nationality</th>
                <th>Country</th>
                <th>Telephone</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Designation</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <?php
                $i = 1;
                $sql;
                while($row = mysql_fetch_array($sql)) {
                    ?>
                    <td><?php echo $i;?></td>
                    <td><?php echo $row['mr'];?></td>
                    <td><?php echo $row['fname']; ?></td>
                    <td><?php echo $row['lname']; ?></td>
                    <td><?php echo $row['company']; ?></td>
                    <td><?php echo $row['dob'];  ?></td>
                    <td><?php echo $row['address'];  ?></td>
                    <td><?php echo $row['zip'];  ?></td>
                    <td><?php echo $row['city'];  ?></td>
                    <td><?php echo $row['nationality'];  ?></td>
                    <td><?php echo $row['country'];  ?></td>
                    <td><?php echo $row['telephone'];  ?></td>
                    <td><?php echo $row['phone_code'] + $row['mobile'];  ?></td>
                    <td><?php echo $row['email']; ?>/<td>
                    <td><?php echo $row['degignation']; ?></td>
                <?php
                    $i++;
                }
                    ?>
            </tr>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
<?php
include "footer.php";
?>