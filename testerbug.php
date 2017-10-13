<?php
include_once ("config.php");
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <h1>Bug Tracking System</h1>
    <h2>Please Report Bugs</h2>

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
            <th>Bug Description</th>
            <td><input type="text" name="bugdescription" value=""></td>
        </tr>
        <tr>
            <th>Attach_file</th>
            <td><input type="file" name="image" value=""></td>
        </tr>


        <tr>
            <th>status</th>
            <td><select name="status">
                    <option value="">..select status</option>
                    <option value="open">open</option>
                    <option value="close">close</option>
                    </select></td>

        </tr>

        <tr>
            <th>Priority</th>
            <td><select name="Priority">
                    <option value="">..select Priority</option>
                    <option value="High">High</option>
                    <option value="Medium">Medium</option>
                    <option value="Low">Low</option>
                </select></td>

        </tr>
        <tr>
            <th>Assigned To</th>
            <td><select name="assignedto">
                    <option value="">..select Developer..</option>
                    <?php
                    $viewallDevelopers=fetchAllDeveloper();
                    foreach ($viewallDevelopers as $allDeveloper){
                        ?>
                    <option value="<?php echo $allDeveloper['UserName'];?>"><?php echo $allDeveloper["UserName"];?>
                    </option>
                <?php
                    }
                    ?>
                </select></td>
        </tr>

               <tr>
            <td><input type="Submit" name="submit" value="Submit" style="background-color:lightsalmon";></td>
        </tr>
        </thead>
    </table>
</form>
<?php


if((isset($_POST["submit"]))&& (isset($_POST["status"]))&& (isset($_POST["Priority"]))&&(isset($_POST["assignedto"])))
{

   // require_once("config.php");

// Assigning $_POST values to individual variables for reuse.
    $UserName=$_POST["assignedto"];
    $Bug_description = $_POST["bugdescription"];
    $Attach_File = $_POST["image"];
    $Priority = $_POST["Priority"];
    $Status=$_POST["status"];
    $newbug = createNewBug($UserName,$Bug_description,$Attach_File,$Priority,$Status);
    echo"<p align = 'left'><font color = red size = '6pt'>Bug has been assigned suceessfully !</font></p>";

}

?>





</body>




</html>


