<?php
$host="localhost";
$user="root";
$password="";
$db="commitee_advertisement";
$conn=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['login']))
{
    $uname=$_POST['uname'];
    $password=$_POST['psw'];
    $sql="select*from commitee_head_login where username='".$uname."'and password='".$password."'limit 1";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1)
    {
        echo'<script>
        window.location="add_event.php";
        </script>';
        exit();
    }
    else{
        echo'<script type="text/javascript">
        window.location="About1.php";
        alert("incorrect username or password");
        
        </script>';
    }

}
mysqli_close($conn);
?>