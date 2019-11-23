<?php include 'inc/header.php'; ?>
<?php include 'inc/sidbar.php'; ?>




        <div class="grid_10">
        
            <div class="box round first grid">
                <h2> Add New page </h2>
                
               <?php  
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = mysqli_real_escape_string($db->link,  $_POST['name']);
            $body = mysqli_real_escape_string($db->link,  $_POST['body']);

    
    if ($name == " " || $body == " " ) {
        echo "<span class='error'> Field must not match !! </span>";
    }
    else{

    $query = "INSERT INTO add_page(name,body) 
    VALUES('$name','$body')";
    $inserted_rows = $db->insert($query);
    if ($inserted_rows) {
     echo "<span class='success'>Creat page  Inserted Successfully.
     </span>";
    }
    else {
     echo "<span class='error'>page  Not Inserted !</span>";
    }


}

        
        
        }
            
            
    
    ?> 
                
                
                
                <div class="block">               
                 <form action="" method="POST" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>name</label>
                            </td>
                            <td>
                                <input type="text" name="name" placeholder="Enter Post Title..." class="medium" />
                            </td>
                        </tr>
                     
                  
                   
                    
                      
                    
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea name="body" class="tinymce"></textarea>
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
                </div>
            </div>
        </div>
        

<?php include 'inc/footer.php'; ?>

