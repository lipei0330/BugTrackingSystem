<?php
/**
 * Created by PhpStorm.
 * User: Praviin
 * Date: 2/7/16
 * Time: 2:17 PM
 */

?>
    <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
    <html xmlns='http://www.w3.org/1999/xhtml'>
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
        <h1>Bug Tracking System</h1>
        <h2>Change Status</h2>
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

    <?php require_once("config.php");

    $allrecords = fetchAllbugs();
    ?>

    <!-- Table goes in the document BODY -->
    <table class="table-style-three">
        <thead>
        <!-- display user details header  -->
        <th>change Status</th>
        <th>Bug_ID</th>
        <th>UserName</th>
        <th>Bug_description</th>
        <th>Priority</th>
        <th>Status</th>



        </thead>
        <tbody>
        <?php
        foreach($allrecords as $displayRecords) { ?>
            <tr>
                <td><a href="Change_Status.php?Bug_ID=<?php print $displayRecords['Bug_ID']; ?>"><?php echo "<font color='blue'>Edit"; ?></a></td>
                <td><?php print $displayRecords['Bug_ID']; ?></td>
                <td><?php print $displayRecords['UserName']; ?></td>
                <td><?php print $displayRecords['Bug_description']; ?></td>
                <td><?php print $displayRecords['Priority']; ?></td>
                <td><?php print $displayRecords['Status']; ?></td>


            </tr>
        <?php } ?>
        </tbody>
    </table>

    </body>
    </html>


    <?php
/**
 * Created by PhpStorm.
 * User: kavit
 * Date: 4/30/2017
 * Time: 1:44 AM
 */