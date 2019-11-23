<?php include 'inc/header.php'; ?>
<?php include 'inc/sidbar.php'; ?>

<?php

if (!isset($_GET['editslider']) || $_GET['editslider'] == NULL) {
	echo "<script>window.location = 'editslider.php'</script>";
}else{

 $sliderid = $_GET['editslider'];
}


?>

<?php  
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = mysqli_real_escape_string($db->link,  $_POST['title']);
            
            $title = mysqli_real_escape_string($db->link,  $_POST['title']);
            
            
    $permited  = array('jpg', 'jpeg', 'png', 'gif');
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_temp = $_FILES['image']['tmp_name'];

    $div = explode('.', $file_name);
    $file_ext = strtolower(end($div));
    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
    $uploaded_image = "upload/slider/".$unique_image;
    
    if ($title == " " ) {
        echo "<span class='error'> Field must not match !! </span>";
    }else{

if (!empty($file_name)) {
    # code...


    if ($file_size >1048567) {
     echo "<span class='error'>Image Size should be less then 1MB! </span>";
    } 
    elseif (in_array($file_ext, $permited) === false) {
     echo "<span class='error'>You can upload only:-".implode(', ', $permited)."</span>";
    } else{
    
   
    move_uploaded_file($file_temp, $uploaded_image);
    $query = "UPDATE  blog_slider
                SET 

            
                title = '$title',
                images = '$uploaded_image'
               
                WHERE id='$sliderid'
                
    ";


    $updateted_rows = $db->update($query);
    if ($updateted_rows) {
     echo "<span class='success'>Slider  Updateted Successfully.
     </span>";
    }
    else {
     echo "<span class='error'>Slider  Not Updateted !</span>";
    }
}

} else{


$query = "UPDATE  blog_slider
                SET 
      
                title = '$title'
         
                WHERE id='$sliderid' ";


    $updateted_rows = $db->update($query);
    if ($updateted_rows) {
     echo "<span class='success'>slider  Updateted Successfully.
     </span>";
    }
    else {
     echo "<span class='error'> Slider  Not Updateted !</span>";
    }
    
    
}

}
}
            
            
    
    ?>
        <div class="grid_10">
        
            <div class="box round first grid">
                <h2>update  Slider</h2>
                <div class="block">   
                
                   <?php
		   $query ="select * from blog_slider where id='$sliderid' order by id  desc";
		   $getpost=  $db->select($query);
		    if($getpost){
		
		      while ($resultpost =$getpost->fetch_assoc()) {
		    
		   ?>
		   
		   
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text" name="title" value="<?php echo $resultpost['title']; ?>" class="medium" />
                            </td>
                        </tr>
                     
                     
                    
                        
                        <tr>
                            <td>
                                <label>Upload Image</label>
                            </td>
                            <td>
                                <img src="<?php echo $resultpost['images']; ?> " width="200" height="80"><br/>
                                <input name="image" type="file" />
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

