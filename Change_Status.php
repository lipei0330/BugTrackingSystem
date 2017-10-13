<?php

require_once("config.php");

$thisbugID = $_GET['Bug_ID'];


$foundUser = fetchThisBug($thisbugID);

?>

    <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
    <html xmlns='http://www.w3.org/1999/xhtml'>
<h1>Bug Tracking System</h1>
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
        <title>

        </title>
        <style>

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
            <style type="text/css">
            table.table-style-three {
                font-family: verdana, arial, sans-serif;
                font-size: 13px;
                color: black;
                border-width: 5px;
                border-color: #3A3A3A;
                border-collapse: collapse;
            }
            /*table.table-style-three {
                font-family: verdana, arial, sans-serif;
                font-size: 11px;
                color: black;
                border-width: 1px;
                border-color: black;
                border-collapse: collapse;
            }*/
            table.table-style-three th {
                border-width: 15px;
                padding: 15px;
                border-style: solid;
                border-color: #FFA6A6;
                background-color: lightsalmon;
                color: lightsalmon;
            }
            table.table-style-three a {
                color: lightsalmon;
                text-decoration: none;
            }

            table.table-style-three tr:hover td {
                cursor: pointer;
            }
            table.table-style-three tr:nth-child(even) td{
                background-color: #F7CFCF;
            }
            table.table-style-three td {
                border-width: 15px;
                padding: 15px;
                border-style: solid;
                border-color: black;
                background-color: lightsalmon;
            }
        </style>

        </style>

    </head>
    <a>

        <form name="getUserDetails" method="post" action="ProcessChangeStatus.php">
            <table class="table-style-three">
                <?php foreach ($foundUser as $userdetails) { ?>

                    <tr><td>Bug_ID: </td>      <td><input type="text" name="Bug_ID" value="<?php print $userdetails['Bug_ID'];?>"></td></tr>
                <?php } ?>
            </table><br> <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit"  name="submit" value="Change_Status"style="font-size:12pt;color:black;background-color:lightsalmon;padding:3px">

        </form>





        </body>
    </html>

