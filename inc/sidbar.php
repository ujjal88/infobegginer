<div class="sidebar clear">
			<div class="samesidebar clear">
				<h2>Categories</h2>
					<ul>
					    
					    <?php
		   $query ="select * from blog_catagory";
		   $catagori=  $db->select($query);
		    if($catagori){
		      while ($result =$catagori->fetch_assoc()) {
		      
		   
		   ?>
		   
						<li><a href="posts.php?catagori=<?php echo $result['id']; ?>"><?php echo $result ['name']; ?></a></li>
						
						
					
		<?php }} else{  ?> 
		
		<li>No Category </li>
		
		<?php } ?>		
						
					</ul>
			</div>
			
			<div class="samesidebar clear">
				<h2>Latest articles</h2>
				
				<?php
		   $query ="select * from blog_post order by id desc LIMIT 3";
		   $post=  $db->select($query);
		    if($post){
		      while ($result =$post->fetch_assoc()) {
		      
		   
		   ?>
		   
					<div class="popular clear">
						<h3><a href="#"><?php echo $result ['title']?></a></h3>
						<a href="post.php?id=<?php echo $result['id']; ?>"><img src="admin/<?php echo $result['images']; ?>" alt="post image"/></a>
							<?php echo $fm->textshort($result['body'],200); ?>
					</div>
					
						<?php } } else{header('Location:404.php'); } ?>	
					
				
	
			</div>
			
		</div>
	</div>
