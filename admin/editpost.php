<?php include 'inc/header.php'; ?>
<?php include 'inc/sidbar.php'; ?>

<?php

if (!isset($_GET['editid']) || $_GET['editid'] == NULL) {
	echo "<script>window.location = 'editpost.php'</script>";
}else{

 $editidpost = $_GET['editid'];
}


?>

<?php  
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = mysqli_real_escape_string($db->link,  $_POST['title']);
            $cat = mysqli_real_escape_string($db->link,  $_POST['cat']);
            $body = mysqli_real_escape_string($db->link,  $_POST['body']);
            $author = mysqli_real_escape_string($db->link,  $_POST['author']);
            $tag = mysqli_real_escape_string($db->link,  $_POST['tag']);
            $editpost1 = mysqli_real_escape_string($db->link,  $_POST['editpost']);
            
            
    $permited  = array('jpg', 'jpeg', 'png', 'gif');
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_temp = $_FILES['image']['tmp_name'];

    $div = explode('.', $file_name);
    $file_ext = strtolower(end($div));
    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
    $uploaded_image = "upload/".$unique_image;
    
    if ($title == " " || $cat == " " || $body == " " || $author == " " || $tag == " " ) {
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
    $query = "UPDATE  blog_post
                SET 

                cat = '$cat',
                title = '$title',
               
                body = '$body',
                 images = '$uploaded_image',
                author = '$author',
                tag = '$tag'
                WHERE id='$editpost1'
                
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

} else{


$query = "UPDATE  blog_post
                SET 

                cat = '$cat',
                title = '$title',
                body = '$body',
       
                author = '$author',
                tag = '$tag'
                WHERE id='$editpost1'
                
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
}
            
            
    
    ?>
        <div class="grid_10">
        
            <div class="box round first grid">
                <h2>update  Post</h2>
                <div class="block">   
                
                   <?php
		   $query ="select * from blog_post where id='$editidpost' order by id  desc";
		   $getpost=  $db->select($query);
		    if($getpost){
		
		      while ($resultpost =$getpost->fetch_assoc()) {
		    
		   ?>
		   
		   
                 <form action="editpost.php" method="post" enctype="multipart/form-data">
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
                                <label>Category</label>
                            </td>
                            <td>
                                <select id="select" name="cat" >
                                    
                                    
           <?php
           $query ="select * from blog_catagory ";
           $catagori=  $db->select($query);
            if($catagori){
              while ($result =$catagori->fetch_assoc()) {
        
            
           ?>
           
                  <option 
                  <?php
                  if($resultpost['cat'] == $result['id']){  ?>
                 selected="selected"
                 
                  <?php } ?>
                  value="<?php echo $result['id']; ?>" ><?php echo $result['name']; ?></option>
                               
                                    
                                        <?php  }} ?>    
                                </select>
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
                            <td>
                                <label>Tag</label>
                            </td>
                            <td>
                                <input type="hidden" name="editpost" value="<?php echo $resultpost['id']; ?>"> 
                                <input type="text" name="tag" value="<?php echo $resultpost['tag']; ?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Author </label>
                            </td>
                            <td>
                                <input type="text" name="author" value="<?php echo $resultpost['author']; ?>" class="medium" />
                            </td>
                        </tr>
                        
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea name="body"  class="tinymce">
                                    
                                    <?php echo $resultpost['body']; ?>
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

