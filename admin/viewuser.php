<?php include 'inc/header.php'; ?>
<?php include 'inc/sidbar.php'; ?>


<?php

if (!isset($_GET['viewid']) || $_GET['viewid'] == NULL) {
	echo "<script>window.location = 'userlist.php'</script>";
}else{

 $id = $_GET['viewid'];
}


?>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>View User List </h2>
               <div class="block copyblock"> 
               
   


		     <?php
		   $query ="select * from blog_user where id='$id' order by id  desc";
		   $viewuser=  $db->select($query);
		    if($viewuser){
		
		      while ($result =$viewuser->fetch_assoc()) {
		    
		   ?>
		
                 <form action="userlist.php" method ="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" readonly value="<?php echo $result['name']; ?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" readonly value="<?php echo $result['username']; ?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" readonly value="<?php echo $result['email']; ?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" readonly value="<?php echo $result['details']; ?>" class="medium" />
                            </td>
                        </tr>
                        
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="ok" />
                            </td>
                        </tr>
                    </table>
                    </form>

                    			<?php  }} ?>	


                </div>
            </div>
        </div>
        
        
        
<?php include 'inc/footer.php'; ?>


