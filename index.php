<?php

include 'db.php';
//include 'load-comment.php';
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!--        <script type="text/javascript" src="js.js"></script>-->
     <link rel="stylesheet" href="css.css">
    </head>
    <script>
       $(document).ready(function(){
           $("#mail-name").keyup(function(){
               var nameCheck=$("#mail-name").val();
               $.post("suggestions.php",{
                   suggestion:nameCheck
               },function(data,status){
                   $(".test").html(data);
               });
           });
           
           var commentCount=2;
          $('#btnComments').click(function(){
             commentCount+=2;
             $("#comments").load("load-comments.php",{
                 commentNewCount:commentCount
             }); 
          }); 
           
           
            $("#plikBtn").click(function(){
            $.get("test.txt",function(data,status){
                $(".txt").html(data);});
          });
           
           
           
          $("form").submit(function(event){
              event.preventDefault();
              var name=$("#mail-name").val();
              var email=$("#mail-email").val();
              var gender=$("#mail-gender").val();
              var message=$("#mail-message").val();
              var submit=$("#mail-submit").val();
              $(".form-message").load("mail.php",{
                  name:name,
                  email:email,
                  gender:gender,
                  message:message,
                  submit:submit
              });
          });
          
         
       
       

    </script>
    
    <body>
        <form>
            <input id="mail-name" type="text" name="name" placeholder="full name">
            <br><br>
            <br><br>
            <br><br>
            <p class="test"></p>
            <br><br>
            <input id="mail-email" type="text" name="email" placeholder="E-mail">
            <br><br>
            <select id="mail-gender" name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <br><br>
            <textarea id="mail-message" name="message" placeholder="message..........."></textarea>
            <br><br>
            <button id="mail-submit" type="submit" name="submit"> Send form !!!</button>
            <p class="form-message"></p>
        </form>
        <br><br><br>
        
       //////////////............/////////////// 
       
        <div id="comments">
            <?php
                $sql="select * from comments limit 2";
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
        </div>
        <button id="btnComments">show more comments</button>
        
        <br><br>
        <button id="plikBtn">Get txt document</button>
        <br><br><br><br><br><br>
        <p class="txt"></p>
        
        
        /////////////////////////////////.................///////////////////////////////////////
        
<!--        <form id="addCommentForm">
            <input id="author" type="text" name="author" placeholder="write you nick">
            <textarea id="commentsPost" name="commentsPost" placeholder="write your comment here..........."></textarea>
            <button id="commentSubmit" type="button">ADD YOUR COMMENT</button>
            <p class="messageCommentAdded"></p>
            
        </form>-->
    </body>
</html>
