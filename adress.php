<?php

if(isset(($_POST['submit']))
{
	 include 'inc.php'
	 
	 $name=$_POST['name'];
	 $contact=$_POST['last'];
	 $email=$_POST['email'];
	 $address1=$_POST['address1'];
	 $address2=$_POST['address2'];
	 $address3=$_POST['address3'];
	 
	 //Error handlers
	 if(empty($name)||empty($contact)||empty($email)||empty($address))
	 {
	    header("Location: ../Details.php");
	    exit();
	 }else{
       // check if input characters are allowed
	   if(preg_match("/^[a-zA-Z]*$/"$name))
	   {  
		   header("Location: ../Details.php");
	    exit();
	   }
	 
	 else{
      // check if email is valid
      if (!filter_var($email,FILTER_VALIDATE_EMAIL))
      {		  
	      header("Location: ../Details.php");
	    exit();
	   }