<?php 
	/**
	 * Old Data
	 */

 function oldData($value){
     if(isset($_POST[$value])){
        echo $_POST[$value];
     }
 }
 ?>