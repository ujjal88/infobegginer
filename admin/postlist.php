<?php include 'inc/header.php'; ?>
<?php include 'inc/sidbar.php'; ?>




        <div class="grid_10">
            <div class="box round first grid">
                <h2>Post List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th style="width:5%;" >No</th>
							<th style="width:15%;"  >Post Title</th>
							<th style="width:20%;" >Description</th>
							<th style="width:5%;" >Category</th>
							<th style="width:15%;" >Image</th>
							<th style="width:5%;" >tags</th>
							<th style="width:10%;" >date</th>
							<th style="width:5%;" >Author</th>
							<th style="width:10%;" >Action</th>
							
						</tr>
					</thead>
					<tbody>


     <?php
		   $query ="select blog_post.*, blog_catagory.name FROM blog_post 
		   INNER JOIN blog_catagory
		   ON  blog_post.cat =  blog_catagory.id  
		   order by blog_post.title  desc";
		   $post=  $db->select($query);
		    if($post){
		        $i=0;
		      while ($result =$post->fetch_assoc()) {
		      $i++;
		    
		   ?>


						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $result['title']; ?></td>
							<td><?php echo $fm->textshort($result['body'], 100); ?></td>
							<td><?php echo $result['name']; ?></td>
							<td><img src="<?php echo $result['images']; ?>" height="40px" width="50px"></td>
							<td><?php echo $result['author']; ?></td>
							<td><?php echo $result['tag']; ?></td>
							<td><?php echo $result['date']; ?> </td>
							

							<td><a href="editpost.php?editid=<?php echo $result['id']; ?>">Edit</a> || <a onclick="return confirm ('Are you sure Deleted!')"  href="delpost.php?deltid=<?php echo $result['id']; ?>">Delete</a></td>
						</tr>
						





		<?php  }} ?>	

						
					</tbody>
				</table>
	
               </div>
            </div>
        </div>


<div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
	<script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            $('.datatable').dataTable();
			setSidebarHeight();
        });
    </script>
    <?php include 'inc/footer.php'; ?>