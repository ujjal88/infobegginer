<?php include 'inc/header.php'; ?>
<?php include 'inc/sidbar.php'; ?>


<?php

if (!isset($_GET['pageid']) || $_GET['pageid'] == NULL) {
	echo "<script>window.location = 'index.php'</script>";
}else{

 $id = $_GET['pageid'];
}


?>



        <div class="grid_10">
        
            <div class="box round first grid">
                <h2> page </h2>
                
               <?php  
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = mysqli_real_escape_string($db->link,  $_POST['name']);
            $body = mysqli_real_escape_string($db->link,  $_POST['body']);

    
    if ($name == " " || $body == " " ) {
        echo "<span class='error'> Field must not match !! </span>";
    }
    else{

       $query = "UPDATE  add_page
                SET 

                name = '$name',
                body = '$body'
        
                WHERE id='$id'
                
    ";


    $updateted_rows = $db->update($query);
    if ($updateted_rows) {
     echo "<span class='success'> page  Updateted Successfully.
     </span>";
    }
    else {
     echo "<span class='error'> page Not Updateted !</span>";
    }
    
    

}

        
        
        }
            
            
    
    ?> 
                
                
                
                <div class="block">               
                 <form action="" method="POST" enctype="multipart/form-data">
                     
                     <?php

$querypage = "select * from add_page where id='$id' ";

$pagedetais = $db->select($querypage);
if ($pagedetais) {
    while ($result=$pagedetais->fetch_assoc()) {
        # code...
 

?>


                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>name</label>
                            </td>
                            <td>
                                <input type="text" name="name" value="<?php echo $result['name']; ?>" class="medium" />
                            </td>
                        </tr>
                     
                  
                   
                    
                      
                    
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea name="body" class="tinymce">
                                    <?php echo $result['body']; ?>
                                </textarea>
                                
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                    <span class="del"><a onclick="return confirm ('Are you sure Deleted!')" href="?deletepage=<?php echo $result['id'];?>">Delete</a> </span>
                            </td>
                        </tr>
                    </table>
                    </form>
                    
                    
                    
<?php }}  ?>
                </div>
            </div>
        </div>
        


<?php

if (isset($_GET['deletepage'])) {
	$idk = $_GET['deletepage'];
	 $delquery ="delete from add_page where id='$idk' ";
	$deldit=  $db->update($delquery);
	 if ($deldit) {
			        echo "<span class='sucess'> page deleted Sucessful </span>";
			    }else{
			         echo "<span class='error'> page Not deleted !! </span>";
			    }

}


?>



<style>
.del{
	border: 1px solid #ddd;
	color: red;
	cursor: pointer;
	font-size: 20px;
	padding: 2px 10px;
	border-radius:4px;
}
.del a{
    color:red;
}

</style>
<?php include 'inc/footer.php'; ?>

