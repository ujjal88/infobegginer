<?php
 include 'inc/header.php'; 
 include 'confiq.php'; 
 include 'Database.php'; 
 ?>

<?php

$db= new Database();

$query = "SELECT * FROM  test_blog";
$read =$db->select($query);


?>

<?php

if (isset($_GET['msg'])) {
  echo "<span style='color:red;'>".$_GET['msg']."</span>";
}

?>


<div class="container">
  <table class="table table-dark">
  <thead>
    <tr>
     
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Skill</th>
       <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php if($read){ ?>
    <?php while($row = $read->fetch_assoc()) {?>
    <tr>
     
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['skill']; ?></td>
       <td><a href="update.php?id=<?php echo urlencode($row['id'])?>">Edit</a></td>
      
    </tr>
   

  <?php } ?>
  <?php } else { ?>

<p>Data is not avaibale !! </p>

  <?php } ?>

  </tbody>
</table>
<a href="creat.php">Created Account </a>
</div>




<?php include 'inc/footer.php'; ?>