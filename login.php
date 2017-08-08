<?php
Session_start();
if(isset($_POST['submit']))
{
	 include 'inc.php';
	 $uid=mysqli_real_escape_string($conn, $_post[uid]); //no maicious code can be entererd using mysqli.....
	 $pwd=mysqli_real_escape_string($conn, $_post[pwd]);
	 
	 	//Error handlers
	 if(empty($uid)||empty($pwd))
	 {
	    header("Location: ../page1.php?login=error");
	    exit();
	 }else{
		   $sql=select *
		   from users
		   where user_uid="$uid";
		   $result=mysqli_querry($conn,$sql);
		   $resultcheck=mysqli_num_rows($result); // to check if any of such row exist
		   if($resultcheck<1)
		   {   header("Location: ../page1.php?login=error");
	    exit();
		   }else {
			   if($row=mysqli_fetch_assoc($result)){
				  //dehashing the password
				  $hashedpwdcheck=password_verify($wd,$row['user_pwd']);
				  if(hashedpwdchecked==false){
					  header("Location: ../page1.php?login=error");
				      exit();
				  }
				  else if(hashedpwdchecked==true)
				  {
					  //login
					  $_Session['u_id']=$_row['user_id'];
					  $_Session['u_first']=$_row['user_first'];
					  $_Session['u_last']=$_row['user_last'];
					   $_Session['u_email']=$_row['user_email'];
					  $_Session['u_uid']=$_row['user_uid'];
					  header("Location: ../page1.php?login=success");
				      exit();
}}}}}else{ header("Location: ../page1.php?login=error");
				      exit();
}