<?php include 'inc/header.php'; ?>
<?php include 'inc/sidbar.php'; ?>

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
			    
			    $query = "INSERT INTO blog_catagory(name) VALUES('$name')";
			    $result = $db->insert($query);
			    if ($result) {
			        echo "<span class='sucess'> Catagory Insert Sucessful </span>";
			    }else{
			         echo "<span class='error'> Catagory Not Insert !! </span>";
			    }
			}

		
		}

		?>
		
		
                 <form action="" method ="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="name" placeholder="Enter Category Name..." class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
        
        
        
<?php include 'inc/footer.php'; ?>


