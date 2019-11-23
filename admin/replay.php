<?php include 'inc/header.php'; ?>
<?php include 'inc/sidbar.php'; ?>


<?php

if (!isset($_GET['replayid']) || $_GET['replayid'] == NULL) {
	echo "<script>window.location = 'inbox.php'</script>";
}else{

 $id = $_GET['replayid'];
}


?>




        <div class="grid_10">
        
            <div class="box round first grid">
                <h2> View  Messages </h2>
                
                   
               <?php  
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	    $to = $fm->validation($_POST['toemail']);
	    $from = $fm->validation($_POST['fromemail']);
	    $subject = $fm->validation($_POST['subject']);
	    $message = $fm->validation($_POST['message']);
	    $send= mail($to, $subject, $message, $from);
	    if($send){
	        echo "<span class='sucess'> Messages  Send  Sucessful </span>";
	    }else{
	       echo "<span class='error'> Messages Not Send  </span>"; 
	    }
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
                                <label>To</label>
                            </td>
                            <td>
                                <input type="text" name="toemail" readonly name="email" value="<?php echo $result['email']; ?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label> From </label>
                            </td>
                            <td>
                                <input type="text"  name="fromemail" placeholder="Please Enter Your Email Adress " class="medium" />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label> Subject </label>
                            </td>
                            <td>
                                <input type="text"  name="subject" placeholder="Please Enter Your Subject " class="medium" />
                            </td>
                        </tr>
                    
          
                      
                    
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Message </label>
                            </td>
                            <td>
                                <textarea name="body" name="message" class="tinymce">
                                    
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Send" />
                            </td>
                        </tr>
                    </table>
                    
                    
                    <?php }} ?>
                    </form>
                </div>
            </div>
        </div>
        

<?php include 'inc/footer.php'; ?>

