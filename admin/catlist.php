<?php include 'inc/header.php'; ?>
<?php include 'inc/sidbar.php'; ?>

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Category List</h2>
<?php

if (isset($_GET['delid'])) {
	$deletedid = $_GET['delid'];
	 $delquery ="delete from blog_catagory where id='$deletedid' ";
	$deldit=  $db->update($delquery);
	 if ($deldit) {
			        echo "<span class='sucess'> Catagory deleted Sucessful </span>";
			    }else{
			         echo "<span class='error'> Catagory Not deleted !! </span>";
			    }

}


?>





                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Category Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					    
					     <?php
		   $query ="select * from blog_catagory order by id  desc";
		   $catagori=  $db->select($query);
		    if($catagori){
		        $i=0;
		      while ($result =$catagori->fetch_assoc()) {
		      $i++;
		    
		   ?>
					    
					 
	
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $result['name']; ?></td>
							<td><a href="editcat.php?catid=<?php echo $result['id'];?>">Edit</a> || <a onclick="return confirm ('Are you sure Deleted!')" href="?delid=<?php echo $result['id'];?>">Delete</a></td>
						</tr>
					
					
					
					
							<?php  }} ?>	
						
						
						
					</tbody>
				</table>
               </div>
            </div>
        </div>
<?php include 'inc/footer.php'; ?>


