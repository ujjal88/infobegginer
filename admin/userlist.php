<?php include 'inc/header.php'; ?>
<?php include 'inc/sidbar.php'; ?>

        <div class="grid_10">
            <div class="box round first grid">
                <h2>User  List</h2>
<?php

if (isset($_GET['delid'])) {
	$deletedid = $_GET['delid'];
	 $delquery ="delete from blog_user where id='$deletedid' ";
	$deldit=  $db->update($delquery);
	 if ($deldit) {
			        echo "<span class='sucess'> User deleted Sucessful </span>";
			    }else{
			         echo "<span class='error'> User Not deleted !! </span>";
			    }

}


?>





                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Name</th>
							<th>Username</th>
							<th>Email</th>
							<th>Details</th>
							<th>Role</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					    
					     <?php
		   $query ="select * from blog_user order by id  desc";
		   $userlist=  $db->select($query);
		    if($userlist){
		        $i=0;
		      while ($result =$userlist->fetch_assoc()) {
		      $i++;
		    
		   ?>
					    
					 
	
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $result['name']; ?></td>
							<td><?php echo $result['username']; ?></td>
							<td><?php echo $result['email']; ?></td>
							<td><?php echo $result['details']; ?></td>
							<td><?php 
							
							if($result['role'] == '0'){
							    echo "Admin";
							}elseif($result['role'] == '1'){
							    echo "Author";
							}elseif($result['role'] == '2'){
							    echo "Editor";
							} 
							?>
							</td>
							
							
							<td><a href="viewuser.php?viewid=<?php echo $result['id'];?>">view</a> 
							<?php if(Session::get('userrole') == '0' ){ ?>
							
							|| <a onclick="return confirm ('Are you sure Deleted!')" href="?delid=<?php echo $result['id'];?>">Delete</a>
							 <?php  } ?>
							
							</td>
						</tr>
					
					
					
					
							<?php  }} ?>	
						
						
						
					</tbody>
				</table>
               </div>
            </div>
        </div>
<?php include 'inc/footer.php'; ?>


