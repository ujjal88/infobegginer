<?php include 'inc/header.php'; ?>
<?php include 'inc/sidbar.php'; ?>




        <div class="grid_10">
            <div class="box round first grid">
                <h2>Slider  List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th style="width:5%;" >No</th>
							<th style="width:30%;"  >Slider Title</th>
						
							<th style="width:40%;" >Image</th>
						
							<th style="width:25%;" >Action</th>
							
						</tr>
					</thead>
					<tbody>


     <?php
		   $query ="select * from blog_slider ";
		   $post=  $db->select($query);
		    if($post){
		        $i=0;
		      while ($result =$post->fetch_assoc()) {
		      $i++;
		    
		   ?>


						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $result['title']; ?></td>
						
							<td><img src="<?php echo $result['images']; ?>" height="40px" width="50px"></td>
						
						
							

							<td><a href="editslider.php?editslider=<?php echo $result['id']; ?>">Edit</a> || <a onclick="return confirm ('Are you sure Deleted!')"  href="delslider.php?delslider=<?php echo $result['id']; ?>">Delete</a></td>
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