<?php include 'inc/header.php'; ?>
<?php include 'inc/sidbar.php'; ?>


<?php

if (!isset($_GET['catid']) || $_GET['catid'] == NULL) {
	echo "<script>window.location = 'catlist.php'</script>";
}else{

 $id = $_GET['catid'];
}


?>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New Category</h2>
               <div class="block copyblock"> 
               
    <?php  
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		   	$name = $_POST['name'];
			$name = mysqli_real_escape_string($db->link, $name);
			if(empty($name)){
			    echo "<span class='error'> Field  Must be Empty !</span>";
			}else{
			    
			   $query = "UPDATE blog_catagory SET name = '$name' where id= '$id' ";
			    $result = $db->insert($query);
			    if ($result) {
			        echo "<span class='sucess'> Catagory Insert Sucessful </span>";
			    }else{
			         echo "<span class='error'> Catagory Not Insert !! </span>";
			    }
			}

		
		}

		?>


		     <?php
		   $query ="select * from blog_catagory where id='$id' order by id  desc";
		   $catagoriedit=  $db->select($query);
		    if($catagoriedit){
		
		      while ($result =$catagoriedit->fetch_assoc()) {
		    
		   ?>
		
                 <form action="" method ="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="name" value="<?php echo $result['name']; ?>" class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>

                    			<?php  }} ?>	


                </div>
            </div>
        </div>
        
        
        
<?php include 'inc/footer.php'; ?>


