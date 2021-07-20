<?php
 $connection = mysqli_connect("localhost","root","");
 $db = mysqli_select_db($connection, 'student');

 if(isset($_POST['updatedata']))
 {

    $id = $_POST['update_id'];

     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $course = $_POST['course'];
     $contact = $_POST['contact'];
 

 $query = "UPDATE student_data SET fname='$fname', lname='$lname', course='$course', contact=' $contact' WHERE id='$id' ";

 $query_run = mysqli_query($connection, $query);

 if($query_run)
 {
     echo '<script> alert("Data Updated"); </script>';
     header('Location: index.php');
 }
 else
 {
    echo '<script> alert("Data Not Saved"); </script>';
 }

}
 
 ?>