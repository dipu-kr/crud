<?php
include 'header.php';
?>
<div class="container1">
    <h2>Update Record</h2>
    <div class="update">
         <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
           <div class="update-group">
           <label for="">Id</label>
           <input type="text" name="sid" class="update-control">
           <input type="submit" value="show" name="showbtn" class="btn1">
           </div>
         </form>
         <?php
         if(isset($_POST['showbtn'])){
          $conn = mysqli_connect("localhost","root","","crud") or die("connection failed.");

          $stu_id = $_POST['sid'];

          $sql = "SELECT * FROM student WHERE sid = {$stu_id}";
          $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.") ;

          if(mysqli_num_rows($result) > 0){
              while($row  = mysqli_fetch_assoc($result)){ 
         
         ?>

         <form action="updatedata.php" method="post">
           <div class="update-group">
           <label for="">name</label>
           <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>">
           <input type="text" name="sname" class="update-control" value="<?php echo $row['sname']; ?>">
           </div>
           <div class="update-group">
           <label for="">address</label>
           <input type="text" name="saddress" class="update-control" value="<?php echo $row['saddress']; ?>">
           </div>
           <div class="update-group">
           <label for="">class</label>
           <?php
              $sql1 = "SELECT * FROM studentclass";
              $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful.") ;
    
              if(mysqli_num_rows($result1) > 0){
                  echo '<select name="sclass" class="update-control">';
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
           <div class="update-group">
           <label for="">phone</label>
           <input type="text" name="sphone" class="update-control" value="<?php echo $row['sphone']; ?>">
           </div>
           <input type="submit" value="update" class="btn2">
         </form>
         <?php
              }
            }
          }
         ?>
    </div>
</div>

