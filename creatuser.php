<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <h1>Bug Tracking System</h1>
    <h2>Create New Users</h2>
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
            color: white;
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




<form name="createNewRecord" action="" method="post">

    <!-- Table goes in the document BODY -->
    <table class="table-style-three">
        <thead>

        <tr>
            <th>UserName</th>
            <td><input type="text" name="username" value=""></td>
        </tr>

        <tr>
            <th>Password</th>
            <td><input type="password" name="password" value=""></td>
        </tr>

        <tr>
            <th>Role</th>
            <td><input type="text" name="role" value=""></td>
        </tr>
        <tr>
            <td><input type="Submit" name="submit" value="Create User"></td><td>&nbsp&nbsp&nbsp<input type="Submit" name="adminhome" value="Admin Home"></td>
        </tr>
        </thead>
    </table>
</form>
<?php


if(isset($_POST["submit"])) {

   require_once("config.php");

// Assigning $_POST values to individual variables for reuse.
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    $newuser = createNewUser($username, $password, $role);

}
if(isset($_POST["adminhome"]))
{ header("Location:admin.php"); die(); }

?>


</body>
</html>

