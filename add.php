<?php
   include 'header.php';
?>
<div class="container">
  <h2>Add New Record</h2>
  <div class="forms">
       <form action="savedata.php" method="post">
           <div class="form-group">
           <label for="" active>name</label>
           <input type="text" name="sname" class="form-control">
           </div>

           <div class="form-group">
           <label for="">Address</label>
           <input type="text" name="saddress" class="form-control">
           </div>

           <div class="form-group">
           <label for="">Class</label>
           <select name="sclass" id="" class="form-control">
                 <option value="" selected disabled>select branch</option>
                 <?php
                     $conn = mysqli_connect("localhost","root","","crud") or die("connection failed.");
                     $sql = "SELECT * FROM studentclass";
                     $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
                      
                     while($row = mysqli_fetch_array($result)){
                        
                     ?>
                 <option value="<?php echo $row['cid'];?>"><?php echo $row['cname'];?></option>
                 <?php } ?>
                  
           </select>
           </div>
           <div class="form-group">
           <label for="">Phone</label>
           <input type="text" name="sphone" class="form-control">
           </div>
           <input type="submit" value="save" class="btn"> 
     
       </form>
   </div>    
</div> 