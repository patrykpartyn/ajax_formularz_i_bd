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
       });
    </script>
    
    <body>
        <form>
            <input id="mail-name" type="text" name="name" placeholder="full name">
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
        
    </body>
</html>
