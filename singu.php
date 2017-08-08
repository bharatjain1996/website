<?php
  include_once 'include/inc.php';
  ?>
<?php

if(isset($_POST['submit']))
{
	 include 'inc1.php';
	 
	 $first=$_POST['first'];
	 $last=$_POST['last'];
	 $email=$_POST['email'];
	 $uid=$_POST['uid'];
	 $pwd=$_POST['pwd'];
	
   	//Error handlers
	 if(empty($first)||empty($last)||empty($email)||empty($uid)||empty($pwd))
	 {
	    header("Location: ../singup.php?Singup=empty");
	    exit();
	 }else{
       // check if input characters are allowed
	   if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last))
	   {  
		   header("Location: ../singup.php?Singup=invalid");
	    exit();
	   }
	 else{
      // check if email is valid
      if (!filter_var($email,FILTER_VALIDATE_EMAIL))
      {		  
	      header("Location: ../singup.php?Singup=invalid");
	    exit();
	   }
	 
	   else{
		   $sql="select *
		   from users
		   where user_uid='$uid'";
		   $result=mysqli_querry($conn,$sql);
		   $resultcheck=mysqli_num_rows($result); // to check if any of such row exist
		   if($resultcheck>0)
		   {   header("Location: ../sinup.php?Singup=invalid");
	    exit();
	   }   
	   else{
		   // Hashing the password
		    $hashedpwd=hash_password($pwd,PASSWORD_DEFAULT);
		   //Insert data int the database
	$sql="INSERT INTO users(User_first,User_last,User_email,User_uid,User_pwd) VALUES('$first','$last','$email','$uid','$pwd')";
	 mysqli_querry($conn,$sqli);
	 header("Location:../sinup.php?singup=success");
	 
	 }
	}
   }
 }
}
else{
	 header("Location:../sinup.php");
	 exit(); //stop code from running after exit
}