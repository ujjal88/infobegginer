<?php include 'inc/header.php'; ?>
<?php include 'inc/sidbar.php'; ?>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update Copyright Text</h2>
                <div class="block copyblock"> 
                
                
                	<?php  
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
     
            $copy_fb = mysqli_real_escape_string($db->link,  $_POST['copy_fb']);
        
            
            
		
			 if ($copy_fb == " "  ) {
        echo "<span class='error'> Field must not match !! </span>";
    }else{
$query = "UPDATE footer_bl
                SET 

               copy_fb= '$copy_fb'
                
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

$query = "select * from footer_bl where id='1'";

$copyright = $db->select($query);
if ($copyright) {
    while ($result= $copyright->fetch_assoc()) {
        # code...
 

?>


                 <form action="" method="POST">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" value="<?php echo $result['copy_fb']; ?>" name="copy_fb" class="large" />
                            </td>
                        </tr>
						
						 <tr> 
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                            </td>
                        </tr>
                    </table>
                    </form>
                    
                    <?php }} ?>
                </div>
            </div>
        </div>


<?php include 'inc/footer.php'; ?>

