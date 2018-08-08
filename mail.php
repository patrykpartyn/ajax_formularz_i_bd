<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//include 'index.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $message=$_POST['message'];
    
    $errorEmpty=false;
    $errorEmail=false;
    if(empty($name)|| empty($email) || empty($message)){
        echo "<span class='error'> fill in all fields!</span>";
        $errorEmpty=true;
        
    }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
         echo "<span class='error'> write a valid email addres!</span>";
           $errorEmail=true;
    }else
    { 
        echo "<span class='suc'> gyyyyyyyyyyyyyyyyt!</span>";
    }
}

?>

<script>
    var errorEmpty="<?php echo $errorEmpty;?>";
    var errorEmail="<?php echo $errorEmail;?>";
    if(errorEmpty==true){
        $("#mail-name,#mail-email,#mail-message").addClass("errori");
    }
     if(errorEmail==true){
        $("#mail-email").addClass("errori");
    }
    if(errorEmpty==false && errorEmail==false){
       $("#mail-name,#mail-email,#mail-message").val("");
    }
</script>