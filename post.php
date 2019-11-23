<?php include 'inc/header.php'; ?>

<?php

if (!isset($_GET['id']) || $_GET['id'] == NULL ) {
	header('Location:404.php');
} else{
	$id = $_GET['id'];
}
?>

	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
		    
	
		   
			<div class="about">
		<?php
		   $query ="select * from blog_post where id=$id";
		   $post=  $db->select($query);
		    if($post){
		      while ($result =$post->fetch_assoc()) {
		      
		   
		   ?>
		   
		   
				<h2><?php echo $result['title']; ?></h2>
				<h4><?php echo $fm->formatedate ($result['date']); ?>, By <a href="post.php?id=<?php echo $result['id']; ?>"><?php echo $result['author']; ?></a></h4>
				<img src="admin/<?php echo $result['images']; ?>" alt="post image"/>
				<p><?php echo $result['body']; ?></p>
				
		
				
				
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
				
					<?php }} else{header('Location:404.php'); } ?>	
				
	</div>

		</div>
		
		
<?php include 'inc/sidbar.php';?>		
<?php include 'inc/footer.php';?>