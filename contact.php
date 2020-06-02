<?php
session_start(); 
require('connection.php');
extract($_POST);
	if(isset($submit))
		{
			//check user alereay exists or not
			$sql=mysqli_query($conn,"select * from contact_u where Email='$e'");
			$r=mysqli_num_rows($sql);
		if($r==true)
			{
				$err= "<font color='red'>This user already exists</font>";
			}
		else
			{
				//first_name
				$Name=$n;

				
				//confirm your password
				$Message=$mes;
				
				//$teacherid='';

				$query="insert into contact_u values('','$n','$e','$mes')";
					
				mysqli_query($conn,$query);	
				 
		}
	}
?>


