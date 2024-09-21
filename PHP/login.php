<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "bus_booking_system";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$User_Type = $_POST['User_Type'];
$User_Name = $_POST['User_Name'];
$password = $_POST['password'];

if($User_Type== "Client"){
    $tablename="registration";
    $uname= "User_Name";
    $pname = "Password";
}
else{
    $tablename="Local_registration";
    $uname= "UserName";
    $pname = "password";
    
}

session_start();
//error_reporting(0);

if(isset($User_Name))
{
  $adminusername=$_POST['User_Name'];
  $pass=($_POST['password']);
$ret=mysqli_query($conn,"SELECT * FROM $tablename WHERE $uname='$adminusername' and $pname='$pass'");
$num=mysqli_fetch_array($ret);

if($num>0)
{

if($User_Type == "Admin"){

$extra="../Admin_panel.php";
$_SESSION['login']=$User_Name;
$_SESSION['admindets']=$num;
echo "<script>window.location.href='".$extra."'</script>";
exit();

}elseif($User_Type == "Local User"){

$extra="../Local_User.php";
$_SESSION['login']=$User_Name;
$_SESSION['admindets']=$num;
echo "<script>window.location.href='".$extra."'</script>";
exit();

}else{

$extra="../Client_page.php";
$_SESSION['login']=$User_Name;
$_SESSION['admindets']=$num;
echo "<script>window.location.href='".$extra."'</script>";
exit();

}


}
else
{
$_SESSION['action1']="*Invalid username or password";
$extra="../login_form.php";
echo "<script>window.location.href='".$extra."'</script>";
exit();
}

}

?>