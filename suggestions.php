<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$existingName=array("ala","daniel","denis","jane","blame","patruik","sttrarti","wojtek");
if(isset($_POST['suggestion'])){
    $name=$_POST['suggestion'];
    if(!empty($name)){
        foreach($existingName as $e){
        if(strpos($e,$name)!==false){
            echo $e;
            echo "<br>";
        }
    
}
    }

}




?>