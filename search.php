<?php include 'inc/header.php'; ?>

<?php

if (!isset($_GET['search']) || $_GET['search'] == NULL ) {
	header('Location:404.php');
} else{
	$search = $_GET['search'];
}
?>

	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
		    
	
		   
			<div class="about">
		<?php
		   $query ="select * from blog_post WHERE title LIKE '%$search%' OR BODY LIKE '%$search%' ";
		   $post=  $db->select($query);
		    if($post){
		      while ($result =$post->fetch_assoc()) {
		      
		   
		   ?>
		   
		   
				<h2><?php echo $result['title']; ?></h2>
				<h4><?php echo $fm->formatedate ($result['date']); ?>, By <a href="post.php?id=<?php echo $result['id']; ?>"><?php echo $result['author']; ?></a></h4>
				<img src="admin/<?php echo $result['images']; ?>" alt="post image"/>
				<p><?php echo $fm->textshort($result['body']); ?></p>
				
		
				
				
				<div class="relatedpost clear">
					<h2>Related articles</h2>
					
					<?php
					$catid = $result['cat']; 
		          $querycat ="select * from blog_post where cat='$catid' order by rand () limit 6";
		            $reletedpost=  $db->select($querycat);
		    if($reletedpost){
		      while ($rresult =$reletedpost->fetch_assoc()) {
		      
		   $rr=$rresult['id'];
		   if($rr==$id)
		   {
			   
		   }
	   else
	   {
		   ?>
					
					<a href="post.php?id=<?php echo $rresult['id']; ?>"><img src="admin/<?php echo $rresult['images']; ?>" alt="post image"/></a>
					
					
					
	   <?php } }} else{ echo "no releted post avabile "; } ?>
					
				</div>
				
					<?php }} else{ ?>
					
					<li> Search Query not Found </li>
					
				<?PHP	 } ?>	
				
	</div>

		</div>
		
		
<?php include 'inc/sidbar.php';?>		
<?php include 'inc/footer.php';?>