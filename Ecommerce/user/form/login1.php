
<?php
error_reporting();
$Name = $_POST['name'];
$Password = $_POST['password'];
$Con = mysqli_connect('localhost', 'root', '', 'Ecommerce');
$result = mysqli_query($Con ,"SELECT * FROM `tbluser` WHERE( UserName ='$Name' OR Email = '$Name') AND Password = '$Password'");
session_start();
if(mysqli_num_rows($result)){
    // here we cerating to  don't use add cart before login
    $_SESSION['user']=$Name ;
    echo "
    <script>
alert('Succesfully Login');
 window.location.href='../index.php';
    </script>
      ";
}
else{
    echo "
    <script>
alert('Invorrect email/username/password');
 window.location.href='login.php';
    </script>
      ";

}

?>