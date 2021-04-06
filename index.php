<?php
include 'header.php';
?>
<div id="main-content">
     <div id="main">
         <h2>All Records</h2>
         <?php
           $conn = mysqli_connect("localhost","root","","crud") or die("connection failed.");
           $sql = "SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid";
           $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.") ;

           if(mysqli_num_rows($result) > 0){
         ?>
         <table cellpadding="7px">
             <thead>
                 <th>ID</th>
                 <th>NAME</th>
                 <th>ADDRESS</th> 
                 <th>CLASS</th>
                 <th>PHONE</th>
                 <th>ACTION</th>
             </thead>
             <tbody>
                 <?php 
                   while($row = mysqli_fetch_array($result)){
                 ?>      
                 <tr>
                     <td><?php echo $row['sid']; ?></td>
                     <td><?php echo $row['sname']; ?></td>
                     <td><?php echo $row['saddress']; ?></td>
                     <td><?php echo $row['cname']; ?></td>
                     <td><?php echo $row['sphone']; ?></td>
                     <td>
                         <a href="edit.php?id=<?php echo $row['sid'];?>">EDIT</a>
                         <a href="delete-inline.php?id=<?php echo $row['sid'];?>">DELETE</a>
                     </td>
                 </tr>
                 <?php } ?>
             </tbody>

         </table>
         <?php }else{
             echo "<h2>No Record Found</h2>";
         } ?>
     </div>
</div>