<?php include 'inc/header.php'; ?>
<?php include 'inc/sidbar.php'; ?>




        <div class="grid_10">
            
              
             <div class="box round first grid">
                <h2> Inbox </h2>
                
                
                <?php

if (isset($_GET['sendid'])) {
	$sendk = $_GET['sendid']; 
	$query = "UPDATE contact
	        SET
	        status = '1'
	        where id= '$sendk' ";
	        
			    $update_row = $db->update($query);
			    if ($update_row) {
			        echo "<span class='sucess'> Message in the Send box </span>";
			    }else{
			         echo "<span class='error'> Catagory Not Insert !! </span>";
		 }
}

?>


                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Name</th>
							<th>Email</th>
							<th>Body</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
<?php
		   $query ="select * from contact where status='0' order by id  desc";
		   $inbox=  $db->select($query);
		    if($inbox){
		        $i=0;
		      while ($result =$inbox->fetch_assoc()) {
		      $i++;
		    
		   ?>
			
			
		<tr class="odd gradeX">
			<td><?php echo $i; ?></td>
		<td><?php echo $result['firstname'].''. $result['lastname']; ?></td>
			<td><?php echo $result['email']; ?></td>
			<td><?php echo $fm->textshort($result['body'],30); ?></td>
			<td><?php echo $fm->formatedate($result['date']); ?></td>
			
			
			
	           <td><a href="view.php?viewid=<?php echo $result['id']; ?>" >View</a> || <a href="replay.php?replayid=<?php echo $result['id']; ?> ">Replay</a>|| <a onclick="return confirm ('Are you move Send!')" href="?sendid=<?php echo $result['id']; ?>" > Send</a></td>
						</tr>
	
	<?php  }} ?>	
	
	
					</tbody>
				</table>
               </div>
            </div>
            
            
            
            <div class="box round first grid">
                <h2> Send </h2>
                <?php

if (isset($_GET['delsend'])) {
	$idk = $_GET['delsend'];
	 $query ="delete from contact where id='$idk' ";
	$deldit=  $db->update($query);
	 if ($deldit) {
			        echo "<span class='sucess'> Messages  deleted Sucessful </span>";
			    }else{
			         echo "<span class='error'> Message Not deleted !! </span>";
			    }

}


?>

                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Name</th>
							<th>Email</th>
							<th>Body</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
<?php
		   $query ="select * from contact where status='1' order by id  desc";
		   $inbox=  $db->select($query);
		    if($inbox){
		        $i=0;
		      while ($result =$inbox->fetch_assoc()) {
		      $i++;
		    
		   ?>
			
			
		<tr class="odd gradeX">
			<td><?php echo $i; ?></td>
		<td><?php echo $result['firstname'].''. $result['lastname']; ?></td>
			<td><?php echo $result['email']; ?></td>
			<td><?php echo $fm->textshort($result['body'],30); ?></td>
			<td><?php echo $fm->formatedate($result['date']); ?></td>
			
			
			
	           <td><a onclick="return confirm ('Are you sure Deleted!')" href="?delsend=<?php echo $result['id']; ?>" >Deleted</a> </td>
						</tr>
	
	<?php  }} ?>	
	
	
					</tbody>
				</table>
               </div>
            </div>
            
            
            
            
          
            
            
        </div>


<?php include 'inc/footer.php'; ?>