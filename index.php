
<?php include 'inc/header.php'; ?>
<?php include 'inc/slider.php'; ?>
	


	<div class="contentsection contemplete clear">
		<div class="maincontent clear">

			<!-- pagination -->
		<?php
			$per_page = 4;
			if (isset($_GET['page'])) {
				$page = $_GET["page"];
			}else{
				$page=1;

			}
			$start_form =($page-1) * $per_page;

		?>
			<!-- pagination -->
		    
		   <?php
		   $query ="select * from blog_post order by id desc LIMIT $start_form, $per_page";
		   $post=  $db->select($query);
		    if($post){
		      while ($result =$post->fetch_assoc()) {
		      
		   
		   ?>
			<div class="samepost clear">
				<h2><a href="post.php?id=<?php echo $result['id']; ?>"><?php echo $result['title']; ?></a></h2>
				<h4><?php echo $fm->formatedate ($result['date']); ?>, By <a href=""><?php echo $result['author']; ?></a></h4>
				 <a href="#"><img src="admin/<?php echo $result['images']; ?>" alt="post image"/></a>
				<p>
					<?php echo $fm->textshort($result['body']); ?>
				</p>
				<div class="readmore clear">
					<a href="post.php?id=<?php echo $result['id']; ?>"> Read More</a>
				</div>
			</div>

		<?php  } ?>	

		<!-- pagination -->
		<?php
		$query  ="select * from blog_post";
		$result =  $db->select($query);
		$total_rows = mysqli_num_rows($result);
		$total_pages = ($total_rows/$per_page); 



		echo "<span class='pagination'> <a href ='index.php?page=1'>".'First page'."</a>";
		for ($i=1; $i < $total_pages; $i++) { 
			echo "<a href ='index.php?page=$i'>".$i."</a>";
		};

		?>
		

		<?php echo "<a href ='index.php?page=$total_pages'>".'Last page'."</a></span>" ?>
		<!-- pagination -->

		<?php } else{header('Location:404.php'); } ?>	
		

		</div>
		
		
<?php include 'inc/sidbar.php';?>		
<?php include 'inc/footer.php';?>