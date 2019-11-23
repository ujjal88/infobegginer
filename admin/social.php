<?php include 'inc/header.php'; ?>
<?php include 'inc/sidbar.php'; ?>



        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update Social Media</h2>
                
                
 
                <div class="block">   
	<?php  
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
          
           
            $fb = mysqli_real_escape_string($db->link,  $_POST['fb']);
            $tw  = mysqli_real_escape_string($db->link,  $_POST['tw']);
            $ln = mysqli_real_escape_string($db->link, $ln = $_POST['ln']);
            $instra  = mysqli_real_escape_string($db->link,  $instra = $_POST['instra']);
            
            
		
			 if ($fb == " " || $tw == " " || $ln == " " || $instra == " " ) {
        echo "<span class='error'> Field must not match !! </span>";
    }else{
$query = "UPDATE  blog_social
                SET 

                fb = '$fb',
                tw = '$tw',
                ln  = '$ln',
                instra = '$instra'
                WHERE id='1'
                
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
}
            
            
    
    ?>			
				
                <?php

$query = "select * from blog_social where id='1'";

$social = $db->select($query);
if ($social) {
    while ($result= $social->fetch_assoc()) {
        # code...
 

?>


                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <label>Facebook</label>
                            </td>
                            <td>
                                <input type="text" name="fb" value="<?php echo $result['fb']; ?>" class="medium" />
                            </td>
                        </tr>
						 <tr>
                            <td>
                                <label>Twitter</label>
                            </td>
                            <td>
                                <input type="text" name="tw" value="<?php echo $result['tw']; ?>" class="medium" />
                            </td>
                        </tr>
						
						 <tr>
                            <td>
                                <label>LinkedIn</label>
                            </td>
                            <td>
                                <input type="text" name="ln" value="<?php echo $result['ln']; ?>" class="medium" />
                            </td>
                        </tr>
						
						 <tr>
                            <td>
                                <label>Google Plus</label>
                            </td>
                            <td>
                                <input type="text" name="instra" value="<?php echo $result['instra']; ?>" class="medium" />
                            </td>
                        </tr>
						
						 <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                            </td>
                        </tr>
                    </table>
                    </form>
<?php    } }  ?>
                                
                                
                </div>
            </div>
        </div>
        
<?php include 'inc/footer.php'; ?>
