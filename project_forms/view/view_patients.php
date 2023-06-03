<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Patient Details</title>
        <style>
            body{
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                background: aliceblue;
                text-align: center;
            }
            table, th, td{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <h1>Patients Table</h1>
        <center>
            <?php
                require_once("../database_classes/drug_database.php");
                $db->readTable("SELECT * FROM tbl_patients");
            ?>
        </center>
    </body>
</html>