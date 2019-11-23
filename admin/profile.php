<?php include 'inc/header.php'; ?>
<?php include 'inc/sidbar.php'; ?>

<?php
    $userid = Session::get('userId');
    $userrole = Session::get('userrole');
					
?>

<?php  
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = mysqli_real_escape_string($db->link,  $_POST['name']);
            $username = mysqli_real_escape_string($db->link,  $_POST['username']);
            $email = mysqli_real_escape_string($db->link,  $_POST['email']);
            $details = mysqli_real_escape_string($db->link,  $_POST['details']);
            

$query = "UPDATE  blog_user
                SET 

                name = '$name',
                username = '$username',
       
                email = '$email',
                details = ' $details'
                WHERE id=' $userid'
                
    ";


    $updateted_rows = $db->update($query);
    if ($updateted_rows) {
     echo "<span class='success'>Post  Updateted Successfully.
     </span>";
    }
    else {
     echo "<span class='error'>Post  Not Updateted !</span>";
    }
    
    



}
            
            
    
    ?>
        <div class="grid_10">
        
            <div class="box round first grid">
                <h2>update  User </h2>
                <div class="block">   
                
                   <?php
		  $query ="select * from blog_user where id='$userid' and role='$userrole' ";
		   $getuser=  $db->select($query);
		    if($getuser){
		
		      while ($resultpost =$getuser->fetch_assoc()) {
		    
		   ?>
		   
		   
                 <form action="" method="post" >
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Name</label>
                            </td>
                            <td>
                                <input type="text" name="name" value="<?php echo $resultpost['name']; ?>" class="medium" />
                            </td>
                        </tr>
                     
                    
                   
                    
                         <tr>
                            <td>
                                <label>username</label>
                            </td>
                            <td>
                                
                                <input type="text" name="username" value="<?php echo $resultpost['username']; ?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label> Email </label>
                            </td>
                            <td>
                                <input type="text" name="email" value="<?php echo $resultpost['email']; ?>" class="medium" />
                            </td>
                        </tr>
                        
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea name="details"  class="tinymce">
                                    
                                    <?php echo $resultpost['details ']; ?>
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                    
                    <?php }} ?>
                </div>
            </div>
        </div>
        

<?php include 'inc/footer.php'; ?>

