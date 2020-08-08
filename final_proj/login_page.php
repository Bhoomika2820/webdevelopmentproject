<?php
$host="localhost";
$user="root";
$password="";
$db="committee_advertisement";
$conn=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['login']))
{
    $uname=$_POST['uname'];
    $password=$_POST['psw'];
    $sql="SELECT * FROM committee_head_login WHERE username='".$uname."'and password='".$password."'limit 1";
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
        
        alert("incorrect username or password");
        window.location="About1.php"
        
        </script>';
    }

}
mysqli_close($conn);
?>