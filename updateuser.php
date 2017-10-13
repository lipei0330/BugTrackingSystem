<?php

require_once("config.php");

$thisUserID = $_GET['UserID'];


$foundUser = fetchThisUser($thisUserID);
echo "<pre>";
echo "</pre>";
?>

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <title>
        Bug Tracking System
    </title>
    <!-- Style -- Can also be included as a file usually style.css -->
    <style type="text/css">
        table.table-style-three {
            font-family: verdana, arial, sans-serif;
            font-size: 11px;
            color: black;
            border-width: 1px;
            border-color: black;
            border-collapse: collapse;
        }
        table.table-style-three th {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color:black;
            background-color: black;
            color: brown;
        }
        table.table-style-three a {
            color:black;
            text-decoration: none;
        }

        table.table-style-three tr:hover td {
            cursor: pointer;
        }
        table.table-style-three tr:nth-child(even) td{
            background-color: white;
        }
        table.table-style-three td {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: black;
            background-color: lightsalmon;
        }
        body {
            background: url(bug.jpg) no-repeat center center fixed;
            top:0%;
            left:0;
            min-width:200%;
            min-height:200%;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>

</head>
<body>

<form name="getUserDetails" method="post" action="processupdateuser.php">
    <table class="table-style-three">
        <?php foreach ($foundUser as $userdetails) { ?>
            <tr><td>User Name:</td>      <td><input type="text" name="username" value="<?php print $userdetails['UserName']; ?>"></td></tr>
            <tr><td>Password:</td>       <td><input type="text" name="password" value="<?php print $userdetails['Password']; ?>"></td></tr>
            <tr><td>Role:</td>       <td><input type="text" name="role" value="<?php print $userdetails['Role']; ?>"></td></tr>
            <tr><td>Userid : </td>      <td><input type="text" name="userid" value="<?php print $userdetails['UserID'];?>"></td></tr>
        <?php } ?>
    </table><br /><br />

    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit" name="submit" value="Update Me" style=" color:black;background-color:lightsalmon">

</form>


</body>
</html>