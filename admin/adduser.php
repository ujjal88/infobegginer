<?php include 'inc/header.php'; ?>
<?php include 'inc/sidbar.php'; ?>

<?php

 if(!Session::get('userrole') == '0' ){ 
 echo "<script>window.location = 'index.php'</script>";
 } 
 
 ?>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2> Add New User </h2>
               <div class="block copyblock"> 
               
    <?php  
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		   	$username =$fm->validation($_POST['username']);
		   	$password =$fm->validation(md5($_POST['password']));
		   	$email =$fm->validation($_POST['email']);
		   	$role =$fm->validation($_POST['role']);
		   
		   	
			$username = mysqli_real_escape_string($db->link, $username);
			$password = mysqli_real_escape_string($db->link, $password);
		
		
		
	
			if(empty($username )|| empty($password )|| empty($email) || empty($role)){
			    echo "<span class='error'> Field  Must be Empty !</span>";
			}else{
			
		$emailquery ="select * from blog_user where email = '$email' limit 1";
		    $emailcheck= $db->select($emailquery);
		    if($emailcheck  !=false ){
		         echo "<span class='error'>email is already exit !! </span>";
		    }else{
			    
			    $query = "INSERT INTO blog_user (username, password, email, role) VALUES('$username','$password', '$email','$role')";
			    $result = $db->insert($query);
			    if ($result) {
			        echo "<span class='sucess'> User Insert Sucessful </span>";
			    }else{
			         echo "<span class='error'> User  Not Insert !! </span>";
			    }
			}

		
		}
}
		?>
		
		
                 <form action="" method ="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <lable>User Name </lable>
                            </td>
                            <td>
                                <input type="text" name="username" placeholder="Enter User name..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <lable>Password  </lable>
                            </td>
                            <td>
                                <input type="password" name="password" placeholder="Enter Password..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <lable>Email  </lable>
                            </td>
                            <td>
                                <input type="email" name="email" placeholder="Enter Your Email..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <lable>User Role </lable>
                            </td>
                            <td>
                                <select id="select" name="role">
                                    <option>select User Role</option>
                                   <option  value="0" >Admin</option>
                                    <option value="1" >Author</option>     
                                    <option value="2" >editor</option>
                                </select>
                            </td>
                        </tr>
                        
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Create" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
        
        
        
<?php include 'inc/footer.php'; ?>


