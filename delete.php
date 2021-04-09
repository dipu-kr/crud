<?php
 include 'header.php';

if(isset($_POST['deletebtn'])){
  
   $conn = mysqli_connect("localhost","root","","crud") or die("connection failed.");
   $stu_id = $_POST['sid'];
   $sql = "DELETE FROM student WHERE sid = {$stu_id}";
   $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.") ;
   echo "<script> location.href ='http://localhost/crud1/index.php';</script>";
   mysqli_close( $conn);
}
  // header("location: http://localhost/crud1/index.php");
  ?>

<div class="container2">
    <h2>Delete Record</h2>
    <div class="delete">
         <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
           <div class="delete-group">
           <label for="">Id</label>
           <input type="text" name="sid" class="delete-control" placeholder="Enter id for deletion">
           <input type="submit" value="delete" name="deletebtn" class="btn3">
           </div>
         </form>
    </div>
</div>
