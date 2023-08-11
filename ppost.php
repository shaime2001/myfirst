<?php
   require 'init.php';

if(isset($_post['agent_name'])&& isset($_post['address_agent'])&& isset($_post['email_agent'])&& isset($_post['country_agent'])){
$agent_name=$_post['agent_name'];
 $address_agent=$_post['address_agent']; 
 $email_agent=$_post['email_agent'];  
$country_agent=$_post['country_agent'];
}

 $sqli="INSERT INTO table_agent (agent_name,address_agent,email_agent,country_agent)
 values('$agent_name',' $address_agent','$email_agent','$country_agent')";
     if($_POST['ADD']){
      $query= mysqli_query($database,$sqli);
      echo ' تم الاضافة بنجاح';}

  $s="UPDATE table_agent  SET agent_name = '$agent_name ',address_agent= '$address_agent' , email_agent= '$email_agent', country_agent='$country_agent' "    
     
  if($_POST['UPDATA']){

    $up=mysqli_query($database,$s);
    echo 'تم العملية بنجاح';
  }

  $d="DELETE from table_company where company_name='$company_name'";
  if($_post['delete']){
     $d=mysqli_query($agent_database,$d);
     echo 'تم الحذف';
     

  }
  if($_post['next']){
     header ('location:customer.php');

  }
?> 
