<?php 
	/**
	 * Old Data
	 */

 function oldData($value){
     if(isset($_POST[$value])){
        echo $_POST[$value];
     }
 }
 /**
  * Email Validate
  */
 function emailValidate($email)
 {
 	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
 		return true;
 	}else{
 		return false;
 	}
 }
/**
 * Email Restrict
 */
  function emailRestrict($email){

    $email_part =  explode('@', $email);
    $last_mail_part = end($email_part);

    if($last_mail_part == 'aiub.com'){
        return true;
    }else{
        return false;
    }
}
/**
 * Age Validate Under Age
 */
function underAge($age, $min){
	if ($age < $min) {
		return false;
	}else{
		return true;
	}
}
function overAge($age, $max){
	if ($age > $max) {
		return false;
	}else{
		return true;
	}
}
 ?>
