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
/**
 * File uploading system
 */
function fileUpload($file, $location, $file_type = ['jpg', 'png', 'gif', 'jpeg'], $size){
	//file information
	$file_name = $file['name'];
	$file_tmp_name = $file['tmp_name'];
	$file_size = $file['size'] / 1024;

	//file extenstion
	$file_array = explode('.', $file_name);
	$file_extenstion = strtolower(end($file_array));
	//file size check
	if ($file_size >= $size) {
		$file_size_check = false;
	}else{
		$file_size_check = true;
	}

	//Unique name
	$unique = md5(time().rand()). '.' .$file_extenstion;
	//file type check
	if (in_array($file_extenstion, $file_type) == false) {
		$mesg = "<p class='alert alert-danger'>'Invalid file type'<button class='close' data-dismiss='alert'>&times;</button></p>";
	}elseif ($file_size_check == false) {
		$mesg = "<p class='alert alert-danger'>'Invalid file size'<button class='close' data-dismiss='alert'>&times;</button></p>";
	}else{
		move_uploaded_file($file_tmp_name, $location . $unique);
	}
	return [
		'file_name' => $unique,
		'mess' => $mesg,
	];
}

 ?>
