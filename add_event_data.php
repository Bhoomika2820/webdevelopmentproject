<?php
$host="localhost";
$user="root";
$password="";
$db="commitee_advertisement";
$conn=mysqli_connect($host,$user,$password,$db);
$committee='Codex';
$start_time=$_POST["start_date"];
$end_time=$_POST["end_date"];
$event_category=$_POST["category"];
$event_name=$_POST["event_name"];
$caption=$_POST["caption"];
$event_desc=$_POST["info"];
$host=$_POST["host_name"];
$contact_name=$_POST["contact_person"];
$contact_num=$_POST["phone_no"];
$reg_link=$_POST["registration_link"];

$fileName = basename($_FILES["image"]["name"]); 
$fileType = pathinfo($fileName, PATHINFO_EXTENSION);
$image=$_FILES['image']['tmp_name'];
$imgContent = addslashes(file_get_contents($image)); 



echo"sdfghjkl";
if(isset($_POST['submit']))
{


    $sql="INSERT INTO advertise_committee (committee, start_time, end_time, event_category, event_name, caption, event_desc, host, contact_name, contact_num, reg_link,c_image) VALUES
     ('$committee', '$start_time', '$end_time', '$event_category','$event_name', '$caption', '$event_desc', '$host', '$contact_name', '$contact_num', '$reg_link','$imgContent')";
          
    if(mysqli_query($conn,$sql)){ 

        echo'<script type="text/javascript">
        
        alert("File uploaded successfully.");
        window.location="add_event.php";
        
        </script>';
    }
    else
    { 
            echo'<script type="text/javascript">
        
            alert("File upload failed, please try again.");
            window.location="add_event.php";
            </script>';
    }  


}
mysqli_close($conn);
?>
