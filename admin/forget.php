<?php 

include '../lib/Session.php'; 

Session::checklogin();


?>


<?php include '../config/config.php'; ?>
<?php include '../lib/Database.php'; ?>
<?php include '../helpers/Format.php'; ?>
<?php

$db = new Database();
$fm = new Format();

?>



<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<?php  
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$email = $_POST['email'];
			$email = mysqli_real_escape_string($db->link, $email);
			
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			    echo "<span style='color:red;font-size:14px; '> invalidate email  </span>"; 
			}else{
			$emailquery ="select * from blog_user where email= '$email' limit 1";
			$emailcheck= $db->select($emailquery);
			if ($emailcheck !=false) {
				while($value =$emailcheck->fetch_assoc()){
	            $userid   = $value['id'];
	            $username = $value['username'];
	          
				}
	        
	        
	            $text      = substr($email, 0, 3);
	            $rand      = rand(10000,99999);
	            
	            
	            
	            $newpass   = "$text$rand";
	            $passworld =md5($newpass); 
				
	            $mailupquery = "UPDATE blog_user 
	            SET 
	            password = '$passworld' 
	            where id= '$userid' ";
			    $update_row = $db->update($mailupquery);
			    
			    $to        = $email;
			    $from      = "uzzal.heliumvalley@gmail.com";
			    $headers[] = "From: $from\n";
			    $headers[] .= 'MIME-Version: 1.0'."\r\n";
                $headers[] .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
                $subject = "Your Passworld ";
                $message = "Your username is ".$username." and password is ".$newpass." please visite website login. ";
                
               
                $sendmail= mail($to,$subject,$message);
                if($sendmail){
                    	echo "<span style='color:green;font-size:14px; '> Please Cheak your Email  </span>";
                }else{
                   echo "<span style='color:red;font-size:14px; '> Email Not Send  !! </span>"; 
                }

			    
				
				}else{
					echo "<span style='color:red;font-size:14px; '> Email Not Exits  !! </span>";
				}

			}
		
		}

		?>

		<form action="" method="post">
			<h1>Forget Password </h1>
			<div>
				<input type="text" placeholder="email" required="" name="email"/>
			</div>
		
			<div>
				<input type="submit" value="Send" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="login.php">Login </a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>