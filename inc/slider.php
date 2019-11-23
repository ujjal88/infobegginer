<div class="slidersection templete clear">
        <div id="slider">
            
            <?php
		   $query ="select * from blog_slider ";
		   $post=  $db->select($query);
		    if($post){
		        $i=0;
		      while ($result =$post->fetch_assoc()) {
		      $i++;
		    
		   ?>
		   
            <a href="#"><img src="admin/<?php echo $result['images']; ?>" alt="nature 1" title="<?php echo $result['title']; ?>" /></a>
            
            
            		<?php  }} ?>	
        </div>

</div>