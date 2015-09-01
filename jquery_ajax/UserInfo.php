<?php 
  $strName=urldecode($_POST["InName"]);
  $strSex=urldecode($_POST["sex"]);  
  $IsEmail=$_POST["IsEmail"];
//  echo $IsEmail;
  $strHTML = "<div class='clsShow'>";
  if($strName == "小明" && $strSex ==1){	  
	  $strHTML .= "姓名：小明<br>性别：男<br>";
	  if($IsEmail=="yes"){
		  $strHTML .= "邮箱：123@123.com";		  
		  }
	 $strHTML .= "<hr>";
	
	  }else if($strName == "小花" && $strSex =="0"){
		   $strHTML .= "姓名：小花<br>性别：女<br>";
	  	   if($IsEmail=="yes"){
		  	$strHTML .= "邮箱：456@123.com";		  
		  }
	 		$strHTML .= "<hr>";
		}
	$strHTML .= "</div>";
	
	echo $strHTML;


?>