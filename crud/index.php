 <?php
    include 'header.php';
    ?>

 <!-- main content start  -->

 <div id="main-content">
     <h2> All Records </h2>
     <?php

        $databaseConnection = mysqli_connect("localhost", "root", "", "crud") or die("Database connection failed");

        $sql = "select * from student join studentclass where student.sclass = studentclass.cid";

        $result = mysqli_query($databaseConnection, $sql) or die("Query Unsuccessfull");

        if (mysqli_num_rows($result) > 0) {
        ?>

         <table cellpadding="7px">
             <thead>
                 <th>Id</th>
                 <th>Name</th>
                 <th>Address</th>
                 <th>Class</th>
                 <th>Phone</th>
                 <th>Action </th>
             </thead>

             <tbody>

                 <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                     <tr>
                         <td> <?php echo $row['sid']; ?></td>
                         <td><?php echo $row['sname']; ?></td>
                         <td><?php echo $row['saddress']; ?></td>
                         <td><?php echo $row['cname']; ?></td>
                         <td><?php echo $row['sphone']; ?></td>
                         <td>
                             <a href="edit.php?id=<?php echo $row['sid'];?>">Edit</a>
                             <a href="delete_inline.php?id=<?php echo $row['sid'];?>">Delete </a>
                         </td>
                     </tr>

                 <?php } ?>
             </tbody>
         </table>

     <?php } else {
            echo "<h2>No Record Found </h2>";
        }

        mysqli_close($databaseConnection);
        
        ?>
 </div>

 <!-- main content end  -->


 </div>
 </body>

 </html>