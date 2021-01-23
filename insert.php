<?php
$connection = mysql_connect("localhost","root", "");
$db = mysql_select_db("example",$connection);
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$insname = $_POST['insname'];
$line1 = $_POST['line1'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$mobno = $_POST['mobno'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$pwd_repeat = $_POST['pwd-repeat'];

if($name !=''|| $email !=''){
$query = mysql_query("insert into register(name,insname,line1,state,pincode,mobno,email,pwd,pwd-repeat)values('$name','$insname','$line1','$state',$pincode,$mobno,'$email','$pwd','$pwd_repeat')");
echo "<br/><br/><span>data inserted successfully...</span>";
}

else
{
echo "<p>insertion failed<br/> some field are blank</p>";
}
}
mysql_close($connection);
?>