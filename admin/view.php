<?php include 'inc/header.php'; ?>
<?php include 'inc/sidbar.php'; ?>


<?php

if (!isset($_GET['viewid']) || $_GET['viewid'] == NULL) {
	echo "<script>window.location = 'inbox.php'</script>";
}else{

 $id = $_GET['viewid'];
}


?>




        <div class="grid_10">
        
            <div class="box round first grid">
                <h2> View  Messages </h2>
                
                   
               <?php  
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	echo "<script>window.location = 'inbox.php'</script>";
		
		}

		?>
		
                
                <div class="block">               
                 <form action="" method="POST" enctype="multipart/form-data">
          <?php
		   $query ="select * from contact where id='$id' ";
		   $view=  $db->select($query);
		    if($view){
		        $i=0;
		      while ($result =$view->fetch_assoc()) {
		      $i++;
		    
		   ?>
		   
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>name</label>
                            </td>
                            <td>
                                <input type="text" name="name" readonly value="<?php echo $result['firstname'].''. $result['lastname']; ?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Email</label>
                            </td>
                            <td>
                                <input type="text" readonly name="email" value="<?php echo $result['email']; ?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Date</label>
                            </td>
                            <td>
                                <input type="text" readonly name="date" value="<?php echo $result['date']; ?>"  class="medium" />
                            </td>
                        </tr>
                     
                  
                   
                    
                      
                    
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea name="body" readonly class="tinymce">
                                    <?php echo $result['body']; ?>
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="ok" />
                            </td>
                        </tr>
                    </table>
                    
                    
                    <?php }} ?>
                    </form>
                </div>
            </div>
        </div>
        

<?php include 'inc/footer.php'; ?>

