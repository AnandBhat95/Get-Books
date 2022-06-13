<?php
 if($_SERVER['REQUEST_METHOD'] == "POST"){
  $dom = 'localhost';
  $us = 'root';
  $pass = '';
  $db = "anand";

  $con = mysqli_connect($dom,$us,$pass,$db);
  if(!$con){
      die('error');
  }  
  $sql = "insert into form(name,email,book,message) values('".$_POST['name']."','".$_POST['email']."','".$_POST['subject']."','".$_POST['message']."')";
  
  if(preg_match("/^[a-zA-z -]+$/",$_POST['name']) === 0) {
    echo "Enter names with alphabets only";
    }
   else{


  if(mysqli_query($con,$sql)){
      echo " Thank you,We will contact you soon";
  } else {
      echo "Not inserted successfully".mysqli_error($con);
  }
}}
?>