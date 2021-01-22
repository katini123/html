<?php

$dbhost='localhost';
$dbuser='root';
$dbpass='mysql';

$conn=mysqli_connect($dbhost,$dbuser,$dbpass)
         or die('Error Connection');

         $dbname='order_form';
         $dbconn=mysqli_select_db($conn,$dbname);


         ?>