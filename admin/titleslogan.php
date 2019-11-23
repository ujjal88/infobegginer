<?php include 'inc/header.php'; ?>
<?php include 'inc/sidbar.php'; ?>

<style type="text/css">
.leftside{
    width: 70%;
    height: auto;
    float: left;

}
.rightsite{
    width: 30%;
    height:auto;
    float: right;

}
.rightsite img{
    width: 50%;
    height: auto;
    margin: 0px;
    padding: 0px;
}

</style>








        <div class="grid_10">
        
            <div class="box round first grid">
                <h2>Update Site Title and Description</h2>
<?php  
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
          
           
            $title = mysqli_real_escape_string($db->link,  $_POST['title']);
            $descripton = mysqli_real_escape_string($db->link,  $_POST['descripton']);
           
            
  
            
    $permited  = array('png');
    $file_name = $_FILES['logo']['name'];
    $file_size = $_FILES['logo']['size'];
    $file_temp = $_FILES['logo']['tmp_name'];

    $div = explode('.', $file_name);
    $file_ext = strtolower(end($div));
    $same_image = 'logo'.'.'.$file_ext;
    $uploaded_image = "upload/".$same_image;
    
    if ($title == " " || $descripton == " " ) {
        echo "<span class='error'> Field must not match !! </span>";
    }else{

if (!empty($file_name)) {
    if ($file_size >1048567) {
     echo "<span class='error'>Image Size should be less then 1MB! </span>";
    } 
    elseif (in_array($file_ext, $permited) === false) {
     echo "<span class='error'>You can upload only:-".implode(', ', $permited)."</span>";
    } else{
    
   
    move_uploaded_file($file_temp, $uploaded_image);
    $query = "UPDATE  blog_logo
                SET 
                title = '$title',
                descripton = '$descripton',
                logo = '$uploaded_image' 
                where id= '1' ";


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


$query = "UPDATE  blog_logo
                SET 
                title = '$title',
                   descripton = '$descripton'
                where id= '1' ";
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
    
    
<?php

$query = "select * from blog_logo where id='1'";

$logok = $db->select($query);
if ($logok) {
    while ($result=$logok->fetch_assoc()) {
        # code...
 

?>

                <div class="block sloginblock">  

                <div class="leftside">
                  <form action="" method="POST" enctype="multipart/form-data">
                    <table class="form">                    
                        <tr>
                            <td>
                                <label>Website Title</label>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $result['title']; ?>" name="title" class="medium" />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Website Slogan</label>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $result['descripton']; ?>" name="descripton" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Upload Image</label>
                            </td>
                            <td>
                                <input name="logo" type="file" />
                            </td>
                        </tr>
                         
                        
                         <tr>
                            <td>
                            </td>
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                            </td>
                        </tr>
                    </table>
                    </form>
                    </div>
                    <div class="rightsite">
                        <img src="<?php echo $result['logo']; ?>" alt="logo">
                    </div>
                </div>

            <?php    } }?>
            </div>
        </div>
 
 
 <?php include 'inc/footer.php'; ?>


