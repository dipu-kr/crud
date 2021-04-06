<?php
   include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit page</title>
</head>
<body>

<div class="container">
  <h2>Edit Record</h2>
  
  <div class="forms">
        <?php
           $conn = mysqli_connect("localhost","root","","crud") or die("connection failed.");
           $stu_id = $_GET['id'];
           $sql = "SELECT * FROM student WHERE sid = {$stu_id}";
           $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.") ;

           if(mysqli_num_rows($result) > 0){
               while($row  = mysqli_fetch_assoc($result)){ 
         ?>
       <form action="updatedata.php" method="post">
           <div class="form-group">
           <label for="" active>name</label>
           <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>">
           <input type="text" name="sname" class="form-control" value="<?php echo $row['sname']; ?>">
           </div>

           <div class="form-group">
           <label for="">Address</label>
           <input type="text" name="saddress" class="form-control" value="<?php echo $row['saddress']; ?>">
           </div>

           <div class="form-group">
           <label for="">Class</label>
           <?php
              $sql1 = "SELECT * FROM studentclass";
              $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful.") ;
    
              if(mysqli_num_rows($result1) > 0){
                  echo '<select name="sclass" class="form-control">';
                while($row1  = mysqli_fetch_assoc($result1)){ 
                    if($row['sclass'] == $row1['cid']){
                        $select = "selected";
                    }else{
                        $select = "";
                    }
                 echo "<option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>"; 
                }          
                echo "</select>";
            }
           ?>
           </div>
           <div class="form-group">
           <label for="">Phone</label>
           <input type="text" name="sphone" class="form-control" value="<?php echo $row['sphone']; ?>">
           </div>
           <input type="submit" value="Edit" class="btn"> 
     
       </form>
       <?php 
        }
       }
        ?> 
   </div>   
</div> 
    
</body>
</html>