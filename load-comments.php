<?php
             
include 'db.php';
//include 'index.php';
$commentNewCount=$_POST['commentNewCount'];
            $sql="select * from comments limit $commentNewCount";
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        echo "<p>";
                        echo $row['author'];
                        echo "<br>";
                        echo $row['message'];
                        echo "<p>";
                    }
                }else{
                    echo "there are no comments";
                }
?>