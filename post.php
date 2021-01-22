<html>
<head></head>
<body>

<?php
	include 'connect1.php' ;


$F_name = $_POST['Fname'];
$L_name = $_POST['Lname'];
$Email = $_POST['email'];
$O_Date = $_POST['odate'];
$O_Item = $_POST['oitem'];
$D_Address = $_POST['daddress'];
$Contact = $_POST['cnumber'];
$Sex = $_POST['gender'];

    

		
		if (isset($_POST['submit']))
		{
			$sql = "INSERT INTO record(F_name,L_name,Email,O_Date,O_Item,D_Address,Contact,Sex)values('$Fname','$Lname','$email','$odate','$oitem','$daddress','$cnumber','$gender')";

			if(mysqli_query($conn, $sql)) 
 			 { 
    			echo "<br>"; 
    			echo "<br>"; 
    			echo 'You order has been placed Successfully.'; 
  				echo "<br>"; 

 			 } 
 			else 
 			{ 
  				echo "Not Inserted". $sql . " " . mysqli_error($conn);
   			} 

		}
		
		mysql_close($connection);
		
?>
</body>
</html>

