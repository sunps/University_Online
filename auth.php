<?php
   include("conn.php");
   ?>
<?php

   function my_simple_crypt( $string, $action = 'e' ) {
    // you may change these values to your own
    $secret_key = '741085209963.';
    $secret_iv = '963.85207410';
 
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $key = hash( 'sha256', $secret_key );
    $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
 
    if( $action == 'e' ) {
        $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
    }
    else if( $action == 'd' ){
        $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
    }
 
    return $output;
}


session_start();
if(isset($_POST['login'])){
	$id=$_POST['uid'];
	$pass=$_POST['password'];
	 $check="select name, pass, access from auth where user_id = '$id'; ";
 $result=mysqli_query($conn, $check);
	 $rows_num=mysqli_num_rows($result);
	 $row=mysqli_fetch_assoc($result);
	$user=$row["name"];
	$_SESSION['user']=$user;
	$pass2=$row["pass"];

	$valid_pass=my_simple_crypt( $pass2, 'd' );
		$access=$row["access"];
   
   if($rows_num==0){
	 header("Location:index.php?status=inc");
   }

   else{
	   if($pass==$valid_pass){

		   if($id==$valid_pass){
			   $_SESSION['uid']=$id;
		   header("Location:pass.php");
	   }
	   else{
		   if($access==1){
		   header("Location:admin/");
			}
			elseif ($access==2) {
				header("Location:hod/");
			}
			elseif ($access==3) {
				header("Location:faculty/");
			}
			elseif ($access==4) {
				header("Location:student/");
			}
		   else{
		
	             header("Location:index.php?status=inc");
		   }
		  }
	   }
	   else{
	             header("Location:index.php?status=warn");
		   }
   }
}
else{
	 header("Location:index.php?status=lg");
}



?>